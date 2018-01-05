<? php
require "phpmailer/PHPMailerAutoload.php";


   $mail = new PHPmailer();
   $mail ->addAddress(adress: 'aman76079@gmail',name:'aman');
   $mail ->setFrom(adress: 'aman76079@gmail',name:'aman');
   $mail -> Subject = "test mail";

   $mail -> Body =" This is our body";

   if($mail ->send())
   	echo "something worng happend";
   else
   	echo "mail sent";
















?>