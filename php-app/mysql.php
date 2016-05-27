<?php 
echo '<p>MySQL Test. Make sure you have RDS_* environment variables defined</p>';

$mysqli = new mysqli(getenv('RDS_HOSTNAME'), getenv('RDS_USERNAME'), getenv('RDS_PASSWORD'), getenv('RDS_DATABASE'));
if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

?>
