<?php
if(!empty($_POST["lastname"]) && !empty($_POST['firstname']) && !empty($_POST['nomagence']) && !empty($_POST['number'])&&  !empty($_POST['email'])){

 $to = "salimaeii1997@gmail.com"; // this is your Email address
 $from ="salimaeii1997@gmail.com"; // this is the sender's Email address
 $nom = $_POST['lastname'];
 $Prénom= $_POST['firstname'];
 $nomagence= $_POST['nomagence'];
 $number= $_POST['number'];
 $email= $_POST['email'];
 $subject = "Les informations de l'inscription";
 $message = "       
        Nom : $nom
        Prénom : $Prénom 
        Nom de l'agence: $nomagence 
        Numero de téléphone: $number
        Email : $email" ;
 $headers = "From:" . $from;
mail($to,$subject,$message,$headers);

print "<p class='success'>Message a été envoyé.Merci</p>";
} 
else {
print "<p class='Error'>Problem in Sending Mail.</p>";
}
?>


