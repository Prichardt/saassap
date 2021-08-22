<?php


if ($_SERVER["REQUEST_METHOD"] == "post") {

        # FIX: Replace this email with recipient email
        $mail_to = "info@leopardmovers.co.za";
        
        # Sender Data
        $subject = "Email from Website";
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
    
        
        # Mail Content
        $content = "Name: $name\n";
        $content .= "Email: $email\n\n";
        $content .= "Message:\n$message\n";

        # email headers.
        $headers = "From: $name <$email>";

        # Send the email.
        $success = mail($mail_to, $subject, $content, $headers);
        if ($success) {
              echo "success";
        } else {
                      echo "success";
        }

    } else {
      
        echo "success";
    }

?>

