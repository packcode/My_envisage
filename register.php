<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>


</head>
<body>
<?php
mysql_connect("localhost","root","12345");
@mysql_select_db("envisage") or die("unable to select database");
$team_name=$_POST["team_name"];
$team_size=$_POST["team_size"];
$email=$_POST["email"];
$person_name=$_POST["person_name"];
$mobile=$_POST["mobile"];
$university=$_POST["university"];
$state=$_POST["state"];
echo $team_name;
echo $team_size;
echo $email;
echo $person_name;
echo $mobile;
echo $university;
echo $state;

$query=mysql_query("select mobile from register");
while($row=mysql_fetch_array($query))
{
	if($mobile==$row['mobile'])
	{
		echo"<h2>User already registered with same mobile number</h2>";
		echo"<a href='event.html' style='background:#000000; text-align:center;background-size:30px 60px;'>Go Back</a>";
		exit(1);
	}
}

if($team_name==""||$team_size==""||$email==""||$person_name==""||$mobile==""||$university==""||$state=="")
{
	echo"<h4>Pls fill all the fields.All fields are mandatory<h4>";
}
elseif($team_size<=0||$team_size>4)
{
	echo"<h4>Team size should be between 1 and 4.<h4>";
}
else
{
mysql_query("Insert into register values('$team_name','$team_size','$email','$person_name','$mobile','$university','$state')");

echo"<h2>Thanks for registration</h2>";

}

echo"<a href='event.html' style='background:#47639e; text-align:center;background-size:30px 1000px;'>Go Back</a>";
?>
</body>
</html>


