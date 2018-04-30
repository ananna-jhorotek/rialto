<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'rialto';
    
    //connect with the database
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    //get search term
    $searchTerm = $_GET['term'];
    
    //get matched data from skills table
	//echo "SELECT * FROM tbl_cellsite WHERE site_name LIKE '%".$searchTerm."%' ORDER BY site_name ASC";
    $query = $db->query("SELECT * FROM tbl_cellsite WHERE cell_id LIKE '%".$searchTerm."%' ORDER BY cell_id ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['cell_id'];
    }
    
    //return json data
    echo json_encode($data);
?> 