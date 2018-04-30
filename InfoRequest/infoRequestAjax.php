<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'rialto';
    // print_r(print_r($_SESSION));
	// die;
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //get search term
    $searchTerm = $_GET['term'];
    $parentbattalion = $_GET['parentbattalion'];
    
    //get matched data from skills table
	//echo "SELECT * FROM tbl_cellsite WHERE site_name LIKE '%".$searchTerm."%' ORDER BY site_name ASC";
	
	$query = $db->query("SELECT * FROM users WHERE name LIKE '%".urldecode($searchTerm)."%' and battalion LIKE '%".urldecode($parentbattalion)."%'  ORDER BY users.name ASC");

    //get matched data from skills table
	//echo "SELECT * FROM tbl_cellsite WHERE site_name LIKE '%".$searchTerm."%' ORDER BY site_name ASC";
    // $query = $db->query("SELECT * FROM users WHERE name LIKE '%".$searchTerm."%' ORDER BY name ASC");
    // while ($row = $query->fetch_assoc()) {
        // $data[] = $row['id'];
        // $data[] = $row['name'];
    // }
	
	$results = array();
	while ($row = $query->fetch_assoc()) {
		$results[] = array(
                'id' => $row['id'],
                'value' => $row['name']
            );
    }
	
	// $results[] = $tempArray;
    
    //return json data
    echo json_encode($results);
    
    //return json data
    // echo json_encode($data);
	// echo '[{"id":"1","label":"David Myers","value":"David Myers"},{"id":"2","label":"Shamim","value":"Shamim"}]';
?> 