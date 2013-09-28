<?php
function cmail()
{
$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['tel'];
$to='order.reeti@gmail.com';
$msg=$_POST['msg'];
$headers'From: '.$email;
$subject=$_POST['subject'];
$message=$name."\r\n" .$contact."\r\n".$msg;
$message = wordwrap($message, 70, "\r\n");
mail ( $to ,$subject ,$message,$_headers);
}
if(isset($_POST['submit']))
{
   cmail();
} 
?>
