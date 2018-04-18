<?php

	 $DBhost = "localhost";
	 $DBuser = "root";
	//  $DBpass = "heavygeese24";
	$DBpass = "";
	 $DBname = "muse_test";
	 
	 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
     if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
     }
