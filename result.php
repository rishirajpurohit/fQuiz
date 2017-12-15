<?php

$score = $_POST["current_score"];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Result | FQuiz</title>
</head>
<body>
	<div id="result_block">
		<span id="result_text">Result is : </span>
		<span id="actual_result"><?php echo $score; ?> out of 50</span>	
	</div>
</body>
</html>