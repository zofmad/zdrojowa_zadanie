<?php

function sendform() {

header('Content-Type: text/html; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 



    $mailBody = null;
    $subject = null;
    if (isset($_POST['field']) && $_POST['field'] != '') {
          $responseArray['message'] = "Spam bots!";
    }else{
    if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['message'])) {
      $firstName = trim($_POST['name']);
      $lastName = trim($_POST['surname']);
      
      $email = trim($_POST['email']);
      $message = trim($_POST['message']);
   
      if ($email && $message) {
          $firstName ?: "Nie podano";
                  $lastName ?: "Nie podano";
	$headers[] = 'Content-type: text/html; charset=utf-8';
         
        $headers[] = 'From: ' . $firstName  .' '.$lastName . ' <' .get_option('admin_email') . '>' . "\r\n";
	$subject = 'Wiadomość z portalu ' . get_bloginfo('name');
$mailMessage="Imię:$firstName<br>Nazwisko:$lastName<br>Wiadomość:<br>$message<br>";
	try {
            wp_mail(
                $email, 
                $subject, 
                $mailMessage, 
                    $headers,
                array());
	
	  $responseArray['message'] = 'Message sent.';
	} catch (Exception $e) {
	  $responseArray['message'] = 'Message could not be sent.';
	}
      }
      else {
      $responseArray['message'] = "Not enough data. Try again<br>";
    }
     
    } else {
      $responseArray['message'] = "Wrong data. Try again.<br>";
    }
     
   

     
      
    } 
    
    
   
    }

    //html safety
    function filter(&$value) {
      $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }

    array_walk_recursive($responseArray, "filter");
    echo json_encode($responseArray);
  
}



add_action('wp_ajax_nopriv_contact', 'sendform');
add_action('wp_ajax_contact', 'sendform');