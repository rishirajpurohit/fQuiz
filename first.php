<?php

if(!isset($_POST["username"])){
	echo "Go to home page to get Started!! , plese enter username, and try again";
	exit;
}

$username = $_POST["username"];

?>
<!DOCTYPE html>
<html>
<head>
	<title>First Question | FQuiz</title>
	<style type="text/css">
		div#navigation {
		    background-color: #97c797;
		    padding: 15px;
		    color: white;
		    margin-bottom: 20px;
		}

		span#quit {
		    float: right;
		}

		span#current_page {
		    /* border: 1px; */
		    /* border-color: #bfb9b9; */
		    /* border-style: solid; */
		    padding: 2px;
		    /* border-radius: 5px; */
		    color: white;
		    background-color: green;
		    margin: 5px;
		    padding-left: 14px;
		    padding-right: 14px;
		    font-size: 17px;
		    font-style: italic;
		    box-shadow: 0px 0px 10px 0px #b3a7a7;
		}
	</style>
</head>
<body>
	<div id="navigation">
		<span id="logo">FQuiz</span>
		<span id="quit"><a href='/'>Quit</a></span>
	</div>
	<div id="position">
		<span id="current_page">1 out of 5</span>
		<span id="current_score">0/50</span>
	</div>
	<div id="instruction">lorem ipsume dbhs lorem ipsume dbhs vlorem ipsume dbhslorem ipsume dbhslorem ipsume dbhslorem</div>
	<div id="question_block">
		<span id='question'>Question : What is 2+2 ?</span>
		<form id="mainForm" method="post" action="second.php">
		<div id="answers">
			<input type="radio" name="ans" value="2" /><span>2</span><br/>
			<input type="radio" name="ans" value="3" /><span>3</span><br/>
			<input type="radio" name="ans" value="4" /><span>4</span><br/>
			<input type="radio" name="ans" value="5" /><span>5</span><br/>
		</div>
		<input type="submit" value="Next" name="">
		</form>
	</div>
</body>
</html>