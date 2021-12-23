<?php
///variable setting
$name=$_REQUEST['name'];
$email=$_REQUEST['E-mail'];
$message=$_REQUEST['Message'];

//////check

if(empty($name)|| empty($email)|| empty($message))
{
    echo "PLEASE FILL ALL THE FIELDS";
}
else{
    mail("ayush.kumar1913111014@gmail.com","web message","From:$name<$email>");
    echo "<script type='text/javascript'>alart('your message sent succcesfull);
    window.history.log(-1);
    </script>";
}
?>