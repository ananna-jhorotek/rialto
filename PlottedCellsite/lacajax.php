<?php		
	$keyword = strval($_POST['query']);
	$search_param = "{$keyword}%";
	$conn =new mysqli('localhost', 'root', '' , 'rialto');

	$sql = $conn->prepare("SELECT * FROM tbl_cellsite WHERE lac_id LIKE ?");
	//echo json_encode($sql);
	$sql->bind_param("s",$search_param);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$countryResult[] = $row["lac_id"];
		}
		echo json_encode($countryResult);
	}
	$conn->close();
?>

