<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'registration_form';

$registration_connection = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname );

if ( $registration_connection === false ) {

	die( 'failed to connect to database!' . mysqli_connect_error() );
}
?>