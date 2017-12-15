<?php
$score = $_POST["current_score"];


//calculate score
if(isset($_POST["ans"])){
	if($_POST['ans'] == "12"){
		$score = $score + 10;
	}
}


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
		<span id="current_page">2 out of 5</span>
		<span id="current_score"><?php echo $score;?>/50</span>
	</div>
	<div id="instruction">lorem ipsume dbhs lorem ipsume dbhs vlorem ipsume dbhslorem ipsume dbhslorem ipsume dbhslorem</div>
	<div id="question_block">
		<span id='question'>Question : What is 3+9 ?</span>
		<form id="mainForm" method="post" action="result.php">
		<div id="answers">
			<input type="radio" name="ans" value="12" /><span>12</span><br/>
			<input type="radio" name="ans" value="11" /><span>11</span><br/>
			<input type="radio" name="ans" value="14" /><span>14</span><br/>
			<input type="radio" name="ans" value="4" /><span>4</span><br/>
			<input type="hidden" value=<?php echo "'".$score."'";?> name="current_score">
		</div>
		<input type="submit" value="next" name="">
		</form>
	</div>
</body>
</html>