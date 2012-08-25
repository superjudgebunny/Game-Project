<?php

//$var = file_get_contents("http://www.xboxleaders.com/api/friends/superjudgebunny.json");
$var = file_get_contents("https://xboxapi.com/friends/superjudgebunny");
$var = json_decode($var);

//print_r($var);

//foreach($var->Data->Friends as $k => $c){
//	echo $c->Gamertag."<br>";
//}
//foreach($var->Data->Friends as $c){
//		//$bool_test =$c->IsOnline;
//		if ($c->IsOnline == true)
//		{
//	echo "<br>" . "Gamertag: " .$c->Gamertag."<br>" .
//	     "GamerScore: " .$c->GamerScore. "<br>" .
//	     "IsOnline: " .$c->IsOnline. "<br>" .
//	     "Online Status: " .$c->PresenceInfo->OnlineStatus. "<br>";
//		}
//}
foreach($var->Friends as $c)
	{
		//$bool_test = "$c->IsOnline";
		if ($c->IsOnline == true)
		{
		echo "<br>" . "Gamertag: " .$c->GamerTag."<br>" .
		     "GamerScore: " .$c->GamerScore. "<br>" .
		     "Status: Online " . "<br>" .
		     "Online Status: " .$c->Presence. "<br>" ;
		}

	}
foreach($var->Friends as $c)
	{
		//$bool_test = "$c->IsOnline";
		if ($c->IsOnline == false)
		{
		echo "<br>" . "Gamertag: " .$c->GamerTag."<br>" .
		     "GamerScore: " .$c->GamerScore. "<br>" .
		     "Status: Offline" . "<br>" .
		     "Online Status: " .$c->Presence. "<br>" ;
		}

	}
			
?>