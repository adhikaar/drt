<?php



if(isset($_POST['email'])) {
	
	
	
	  $email_to = "drtangridental@gmail.com";
 
  //  $email_to = "rajat.jain@digilantern.com";

 
    $email_subject = "Contact us - DR.TANGRI'S DENTAL AND ORTHODONTIC CENTRE ";
 

    function died($error) {
 
       
 
 
        echo $error;
 
    
 
        die();
 
    }
 
     
 

 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['phone']) ) {
 
        died('Please fill the fields');       
 
    }
 
     
     $remove[] = "'";
$remove[] = '"';
 // just as another example


 
  $first_name = str_replace( $remove, "", $_POST['name']); 
   
 
     $email_from = str_replace( $remove, "",$_POST['email']); 
	 
	 $phone = str_replace( $remove, "",$_POST['phone']); 
	 
 
  $comments = str_replace( $remove, "",$_POST['message']); 
 
     
 
    $error_message = "";
 
 
  
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= ' Name you entered does not appear to be valid.<br />';
 
  }
 
 
 

 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Contact us- Details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
 
 
      $email_message .= "<table style='width:100%;' border='1'>
  <tr>
    <th>Name:</th>
    <td>".clean_string($first_name)."</td>
  </tr>
  <tr>
    <th >Date and Time:</th>
    <td>".clean_string($phone)."</td>
  </tr>
  <tr>
    <th >Email:</th>
    <td>".clean_string($email_from)."</td>
  </tr>
  
  <tr>
    <th >Message:</th>
    <td>".clean_string($comments)."</td>
  </tr>
  
</table>";
    
 
     
 // Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
     

 
$headers .= 'From: '.$email_from."\r\n".
'Bcc: clientsappointments@digilantern.in' . "\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();



 
if(@mail($email_to, $email_subject, $email_message, $headers)){
	
	
	$to = $email_from;
$subject = "Thank You For Contacting Us - DR.TANGRI'S DENTAL AND ORTHODONTIC CENTRE";
$txt = "

Dear ".$first_name.",
We have received your request. Thank you for contacting us.We will get back to you shortly. 

Regards, 
Team DR.TANGRI'S DENTAL AND ORTHODONTIC CENTRE


";
$headers = 'From: '.$email_to."\r\n".
 
'Reply-To: '.$email_to."\r\n" .
 
'X-Mailer: PHP/' . phpversion();

mail($to,$subject,$txt,$headers);
	
	 echo '<div class="alert alert-success">
  <strong> Successfully Send!</strong> 
</div>
';
 
?>
 
 



 
 

 
 
 
<?php




}

 

	
	
	
	
	
}

 
 







 

 

 





?>


