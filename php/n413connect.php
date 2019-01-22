<?php
////////////////////// MAMP version ///////////////////////

	$dbhost = 'localhost';
	$dbuser = 'phpuser';
	$dbpwd  = 'phpuser';
	$dbname = 'petchest_db';

	//set up a variable to store connection
    //pass variables from above
	$link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

    //if there is no link send an error saying sorry
	if (!$link) {
		die('Connect Error (' . mysqli_connect_errno() . ') '
				. mysqli_connect_error());
	}

//////////////////////////////////////////////////////////

////////////////////// web-4 method /////////////////////

//    $dbhost = 'localhost';
//    $dbuser = 'petchest';
//    $dbpwd  = 'petchest';
//    $dbname = 'petchest_db';
//
//    $link = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
//
//    if (!$link) {
//        die('Connect Error (' . mysqli_connect_errno() . ') '
//            . mysqli_connect_error());
//    }
?>