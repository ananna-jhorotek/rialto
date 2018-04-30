<?php		
	$keyword = strval($_POST['query']);
	$search_param = "{$keyword}%";
	$conn =new mysqli('localhost', 'root', '' , 'rialto');

	$sql = $conn->prepare("SELECT * FROM tbl_cellsite WHERE site_name LIKE ? GROUP BY site_name");
	$sql->bind_param("s",$search_param);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$countryResult[] = $row["site_name"];
		}
		echo json_encode($countryResult);
	}
	$conn->close();
?>

