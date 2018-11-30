<?php
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		
		$to = "keystroke99@gmail.com, bhaskarreddy.br10@gmail.com";

    $mail_subject = "Contact us from ".$fname . " " . $lname ." (Regarding TEAMONE TECHIES)";

    $message = "
                <html>
                <head>
                <title>".$mail_subject."</title>
                </head>
                <body>
                <p></p>
                <table>
                <tr><th>Name</th><td>".$fname .  " " . $lname ."</td></tr>
                <tr><th>Email</th><td>".$email."</td></tr>
                <tr><th>Subject</th><td>".$subject."</td></tr>
                <tr><th>Message</th><td>".$message."</td></tr>

                </table>
                </body>
                </html>
                ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= "From: ".$email;

    if(mail($to, $mail_subject, $message, $headers)){
      echo "success";
    }else{
      echo "failed";
    }	
?>
