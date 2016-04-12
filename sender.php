<?
// Configuration
$adminemail="marioal.vazquez@gmail.com";  // your e-mail

$date=date("d.m.y"); // date format: day.month.year
$time=date("H:i"); // time format: hour.minute

$backurl="http://juliaolguin.com/index.php";  // Redirecting page after sending mail

// Input data from form

$name=$_POST['Nombre'];
$email=$_POST['Correo'];
$topic=$_POST['Propuesta'];
$phone=$_POST['Telefono'];
$msg=$_POST['Mensaje'];

// Checking if e-mail entered is valid

if (!preg_match("|^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is",
strtolower($email))) {
	echo
	"<center>Por favor, regresa <a href='javascript:history.back(1)'><B>y revisa</B></a> tu correo electrónico!";
}
else {
	$msg="
	Nombre: $name
	Correo: $email
	Propuesta: $topic
	Telefono: $phone
  Mensje: $msg
";

// Sending mail

mail("$adminemail", "$date $time Mensaje de
$name", "$msg");

// Redirecting back

print "<script language='Javascript'><!--
function reload() {location = \"$backurl\"}; setTimeout('reload()', 0);
//--></script>";
exit;

}

?>
