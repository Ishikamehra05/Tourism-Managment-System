<html>
<head>
      <title> Login in  </title>
</head> 
<body>
<?php
$CONNECTION=mysqli_connect ("localhost", "root", "","tms");
if (!$CONNECTION)
{
    die("couldn't connect to server");
}
echo "Connected Successfully <br><br>";
    if(isset($_REQUEST['enquiry']))
    {
    }
$h=$_REQUEST['firstname'];
$i=$_REQUEST['email'];
$j=$_REQUEST['mobileno'];
$k=$_REQUEST['subject'];
$l=$_REQUEST['description'];

$Q1="insert into enquiry (firstname, email, mobileno, subject, description) values ('$h', '$i','$j','$k','$l')";
if(!mysqli_query($CONNECTION,$Q1))
{
    echo "record not submitted";

}
else{
    echo "your record is successfully submitted";
}
mysqli_close($CONNECTION);
?>
</body>
</html