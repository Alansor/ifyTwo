<?php

require_once "assets/passwordLib.php";

class User {
	public $username = 'John'; /* Users first name */
	public $email = 'test@test.com';
	public $hash = ''; /* Hash of password */
}
function makeNewUser($name,$email,$h) {
	$u = new User ();
	$u->username = $name;
	$u->email = $email;
	$u->hash = $h;
	return $u;
}
function setupDefaultUsers() {
	$users = array ();
	$i = 0;
	$users [$i ++] = makeNewUser ( 'test', 'test@test.com', '$2a$10$Ol40fDm6W6WY2tnBEJUqBuU9Il1X5ekZ6.18TaqYsb6riFC/5f9TO' );
	$users [$i ++] = makeNewUser ( 'ct310', 'nspatil@colostate.edu', '$2a$10$K1lWIWDy7y3wCe9ZCTpTzuUaG2N.HAUH.dXoSWLUdQ56U8Wl0A3aO' );
	writeUsers ( $users );
}
function writeUsers($users) {
	$fh = fopen ( 'users.csv', 'w+' ) or die ( "Can't open file" );
	fputcsv ( $fh, array_keys ( get_object_vars ( $users [0] ) ) );
	for($i = 0; $i < count ( $users ); $i ++) {
		fputcsv ( $fh, get_object_vars ( $users [$i] ) );
	}
	fclose ( $fh );
}
function writeUser ($user) {
	$fh = fopen ( 'users.csv', 'a' ) or die ( "Can't open file" );
	fputcsv ( $fh, get_object_vars ( $user ) );
	fclose ( $fh );
}
function readUsers() {
	if (! file_exists ( 'users.csv' )) {
		setupDefaultUsers ();
	}
	$users = array ();
	$fh = fopen ( 'users.csv', 'r' ) or die ( "Can't open file" );
	$keys = fgetcsv ( $fh );
	while ( ($vals = fgetcsv ( $fh )) != FALSE ) {
		if (count ( $vals ) > 1) {
			$u = new User ();
			for($k = 0; $k < count ( $vals ); $k ++) {
				$u->$keys [$k] = $vals [$k];
			}
			$users [] = $u;
		}
	}
	fclose ( $fh );
	return $users;
}
function userHashByName($users, $username) {
	$res = '';
	foreach ( $users as $u ) {
		if ($u->username == $username) {
			$res = $u->hash;
		}
	}
	return $res;
}
function updatePass($user,$pass,$users){
		
	foreach ( $users as $u ) {
		if ($u->username == $user){
			$temp=$u;
		}		
	}
	
	$f="users.csv";
	$file=file_get_contents($f);
	$oldpass=$temp->hash;
	$file= str_replace($oldpass,$pass,$file);
	file_put_contents($f, $file);	
}
?>
