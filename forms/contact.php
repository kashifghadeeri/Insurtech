
  <?php 

if(isset($_POST['btn-send']))
{
   $UserName =strip_tags(htmlspecialchars($_POST['UName']));
   $Email = strip_tags(htmlspecialchars($_POST['Email']));
   $Pno = strip_tags(htmlspecialchars($_POST['Pno']));
   $Msg = strip_tags(htmlspecialchars($_POST['msg']));

   if(empty($UserName) || empty($Email) || empty($Pno) || empty($Msg))
   {
       header('location:contact.html?error');
   }
   else
   {
       $to = "sajjadhussain110722@gmail.com";
$Msg="You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $$UserName\n\n\nEmail: $Email\n\nSubject: $Pno\n\nMessage: $Msg";
       if(mail($to,$Pno,$Msg,$Email))
       {
           header("location:contact.html?success");
       }
   }
}
else
{
    header("location:index.php");
}
?>