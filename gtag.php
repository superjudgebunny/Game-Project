<html>
<body>

<?php
$username=$_POST["gtag"];
$string = file_get_contents("http://www.xboxleaders.com/api/profile/$username.json");
$json_a=json_decode($string,true);
echo "Gamertag: " , $json_a['Data'][Gamertag] , "<br/>";
echo "Membership Status: " , $json_a['Data'][Tier] , "<br/>";
echo "GamerScore: " , $json_a['Data'][GamerScore] , "<br/>";
echo "Status: " , $json_a['Data'][OnlineStatus] , "<br/>";
?>

</body>
</html>