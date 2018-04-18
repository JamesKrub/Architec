<?php

	 $DBhost = "emuseum_db";
	 $DBuser = "root";
	 $DBpass = "heavygeese24";
	 $DBname = "culture_thailue";
	 
	 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);

     if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
     }

?>