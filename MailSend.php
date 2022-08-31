<?php
    $username=$_POST['username'];
    $useremail=$_POST['useremail'];
    $userphonenum=$_POST['userphonenum'];
    $content=$_POST['content'];
    $agree=$_POST['agree'];

    $to="php@sendemail.com";  // your email goes here
    $fromName=$username;
    $fromEmail=$useremail;
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From:  ' . $fromName . ' <' . $fromEmail .'>' . " \r\n" .
            'Reply-To: '.  $fromEmail . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    $subject = "Mail From $fromName";
    $htmlContent = $content;
    
    if(mail($to, $subject, $htmlContent,$headers))
    {
            echo "Link sent on your Email";
    }
    else
    {
            echo "Failed to send the email";
    }
?>