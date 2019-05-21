<?php

    // $to = "lernerlior@gmail.com‏";
    $subject = "טופס פנייה מהאתר";
    $from_mail = $_POST['email'];
    $name = $_POST['name'];
    $comments = $_POST['comments'];
    $phone = $_POST['phone'];
    $message =  "שולח: " . $name . "\r\n\r\n" .
                "אימייל שולח: " . $from_mail . "\r\n\r\n" .
                "טלפון: " . $phone . "\r\n\r\n" .
                "הערות: " . $comments;


    $headers = 'From: נועה כיבוי ורישוי - אתר אינטרנט <no-replay@website.com>' . "\r\n" .
       'Reply-To: נועה כיבוי ורישוי - אתר אינטרנט <no-replay@website.com>' . "\r\n" .
       'X-Mailer: PHP/' . phpversion();

       //send email
      // if (mail("f.noarc@gmail.com" , $subject , $message , $headers))
      if (mail("lernerlior@gmail.com" , $subject , $message , $headers))
      {
      echo "success";
      }
      else {
        echo "fail";
      }
?>
