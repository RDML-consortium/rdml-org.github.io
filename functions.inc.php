<?php
// Get configuration directives from an xml file
function read_credentials($filename){
        if (file_exists($filename)) {
                $credentials = simplexml_load_file($filename);
        }
        else {
                die ("Could not read file ".$filename);
        }
        return $credentials;
}
// Connect to a database given certain credentials
function connect_db($credentials){
        $conn = new mysqli($credentials->database->host, $credentials->database->username, $credentials->database->password,$credentials->database->name);
        return $conn;
}


function get_supporters($conn,$type){
	$query="SELECT * FROM rdml_supporters WHERE consortium = '".$type."' ORDER BY name";
	mysqli_set_charset($conn,"utf8");
	$result = mysqli_query($conn,$query);
	$results = array();
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_array($result, MYSQLI_NUM)){
			$results[] = $row;
		}	
	}
	mysqli_free_result($result);
	return $results;
}

?>