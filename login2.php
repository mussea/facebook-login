<?php



session_start();
$fullname = $_POST['fullname'];

$username = $_POST['username'];
$password = $_POST['password'];

if ($username&&$password)
{
$host_name = '';
$db_user ='';
$db_pass = '';
$db_name = 'github';
/* Connect to MySQL */
$con = mysql_connect("$host_name","$db_user","$db_pass") or die ("Couldn't connect!");
$db = mysql_select_db("$db_name") or die ("Couldn't connect to database!");

$query = mysql_query("SELECT * FROM users WHERE username='$username'");
$numrows = mysql_num_rows($query);
if ($numrows!=0)
{
while ($row = mysql_fetch_assoc($query))
{
$dbusername = $row['username'];
$dbpassword = $row['password'];
}
/*Check to see if they match! */
if ($username==$dbusername&&md5($password)==$dbpassword)
{
$_SESSION['fullname'] =$fullname; 
header('Location: home.php');


}
else
echo "Incorrect password";
}
else
die("That user doesn't exist!");
}
else
die("Please enter username and/or password!");

?>
