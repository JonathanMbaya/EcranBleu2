<?php

/*
  Template Name: Envoi du Mail
*/

get_header();


?>

<?php 
if(isset($_POST['submit'])){
    $to = "jonathanmbaya13@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>


<div id="hdr-recrutement" class="container-fluid animate__animated animate__fadeInDown">

    <h1 style="color: white; padding-top : 60px; text-align: center;">
        <?php the_title()?>
    </h1>

    <div  class="row">

        <div class="col-md-12 col-sm-6 col-12">

            <h2 style="color: white; text-align : center ;
            display: flex; flex-direction : column ; align-items : center ; ">
                <p><?php echo "Merci " . $first_name . ", vous recevrez une réponse dans les plus brefs délais ."; ?></p>
                <?php the_content()?>
            </h2>

        </div>

    </div>

</div>




<?php

	get_footer();

?>