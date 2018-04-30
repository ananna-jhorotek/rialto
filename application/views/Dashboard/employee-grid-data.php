<?php
/* Database connection start */
/*
$servername = "localhost";
$username = "root";
$password = "nopass";
$dbname = "db_bfunbd";
*/
//$conn = mysql_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
$conn = mysql_connect("localhost", "root", "nopass");
mysql_select_db('db_bfunbd');
//mysql_select_db('db_bfunbd');




/* Database connection end */
// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 =>'wp_name', 
	1 =>'wp_price',
	2 =>'category'
);
//print_r($columns);

// getting total number records without any search
$sql = "SELECT wp_name, wp_price, category ";
$sql.=" FROM tbl_wallpaper";
$query=mysql_query($sql) or die("employee-grid-data.php: get employees");
$totalData = mysql_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT wp_name, wp_price, category ";
$sql.=" FROM tbl_wallpaper WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( wp_name LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" OR wp_price LIKE '".$requestData['search']['value']."%' ";

	$sql.=" OR category LIKE '".$requestData['search']['value']."%' )";
}
//echo $sql;
$query=mysql_query($sql) or die("employee-grid-data.php: get employees");

$totalFiltered = mysql_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
//$a = $columns[$requestData['order'][0]['column']];
//print_r($a);
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
//echo $sql;

/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysql_query($sql) or die("employee-grid-data.php: get employees");
//exit;
$data = array();
while( $row=mysql_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["wp_name"];
	$nestedData[] = $row["wp_price"];
	$nestedData[] = $row["category"];
	
	$data[] = $nestedData;
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
