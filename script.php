<?php
if(!empty($_POST["userName"]) && !empty($_POST['userEmail'])){

 $to = "salimaeii1997@gmail.com"; // this is your Email address
 $from ="salimaeii1997@gmail.com"; // this is the sender's Email address
 $nom = $_POST['userName'];
 $email= $_POST['userEmail'];
 $subject = "RENT A CAR";
 $message = "       
             Nom : $nom
             Email : $email" ;
 $headers = "From:" . $from;


 mail($to,$subject,$message,$headers);
 
 print "<p class='su'>Message a été envoyé.Merci.</p>";
 } 
 else {
 print "<p class='Error'>Problem in Sending Mail.</p>";
 }
?>
