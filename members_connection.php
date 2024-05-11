<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'members';

$members_connection = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname );

if ( $members_connection === false ) {

	die( 'failed to connect to database!' . mysqli_connect_error() );
}
?>