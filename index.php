<?php include  $_SERVER['DOCUMENT_ROOT'] . "/db.php"; ?>

<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>

<body>
	<h1>폼요소 연습하기</h1>

	<h2>input 태그 연습하기</h2>
	title:<input type="text" name="title" /><br />
	content:<input type="text" name="content" /><br />
	<input type="submit">
	<input type="reset">
	<br>
	<?php
	$sql = "SELECT * FROM php_test";
	$result = $conn->query($sql);

	// Display the fetched data
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo "제목: " . $row["title"] . "<br>";
			echo "내용: " . $row["content"] . "<br><br>";
		}
	} else {
		echo "No records found.";
	}

	// Close the connection
	$conn->close();
	?>
	<!-- https://dawitblog.tistory.com/10 -->

</body>

</html>