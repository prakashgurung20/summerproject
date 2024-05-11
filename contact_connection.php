<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'feedback_form';

$contact_connection = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname );

if ( $contact_connection === false ) {

	die( 'failed to connect to database!' . mysqli_connect_error() );
}
?>