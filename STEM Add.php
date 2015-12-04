<!doctype html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="jquery.countdown.js"></script>
<script type="text/javascript" src="date.js"></script>
<title>STEM Advertisement</title>
<style>
body {
	background-color:black;
	margin:0px;
	}
div {
	position: absolute;
	color: white;
	height: 58px;
}
#a1 {
	font-weight:bold;
	font-size:25px;
	top:212px;
	left:100px;
	width:220px;
	text-align:center;
	font-family:arial;
}
#s2 {
	font-weight:bold;
	font-size:14px;
	top:242px;
	left:100px;
	width:220px;
	text-align:center;
	font-family:arial;
}
#a2 {
	font-weight:bold;
	font-size:25px;
	top:212px;
	left:765px;
	width:220px;
	text-align:center;
	font-family:arial;
}
#s1 {
	font-weight:bold;
	font-size:14px;
	top:242px;
	left:765px;
	width:220px;
	text-align:center;
	font-family:arial;
}

#countdown {
	font-weight: bold;
	font-size: 24px;
	top: 414px;
	left: 378px;
	width: 325px;
	text-align: center;
	font-family: arial;
}

img {
	width:1080px;
}
</style>
<head>
<body>
	<?php
		require ('parse/autoload.php');
		date_default_timezone_set('America/Los_Angeles');
		use Parse\ParseObject;
		use Parse\ParseQuery;
		use Parse\ParseACL;
		use Parse\ParsePush;
		use Parse\ParseUser;
		use Parse\ParseInstallation;
		use Parse\ParseException;
		use Parse\ParseAnalytics;
		use Parse\ParseFile;
		use Parse\ParseCloud;
		use Parse\ParseClient;
		ParseClient::initialize('7IhYiYTzxQLcjWq28fTt4ehGZ1mMVuzR0DvvxbQx', 'HyCnRvnTyn91VfJOuxuGUfCl4fz3B4j6NKuB4jQv', '7Nk4Pu4NAUajZ6KUNR6BLhPZR8lYihI2WdudDLZF');

	?>
	<header>
		<img src="http://imageshack.com/a/img908/1299/gT7VgP.png" alt="STEM"/>
	</header>
    
	<div id="a1"><?php 
	$object = new ParseQuery("labs");
	$object->ascending("date");
	$object->limit(1);
	$results = $object->find();
	for ($i = 0; $i < count($results); $i++) {
		$dataObject = $results[$i];
		echo $dataObject->get('lab');	
	}
	?></div>
    <div id="s2"><?php
		$object = new ParseQuery("labs");
	$object->ascending("date");
	$object->limit(1);
	$results = $object->find();
	for ($i = 0; $i < count($results); $i++) {
		$dataObject = $results[$i];
		echo $dataObject->get('message');	
	}
	?> </div>
	<div id="a2"><?php 
	$object = new ParseQuery("events");
	$object->ascending("date");
	$object->limit(1);
	$results = $object->find();
	for ($i = 0; $i < count($results); $i++) {
		$dataObject = $results[$i];
		echo $dataObject->get('name');	
	}
	?></div>
    <div id="s1"><?php 
	$object = new ParseQuery("events");
	$object->ascending("date");
	$object->limit(1);
	$results = $object->find();
	for ($i = 0; $i < count($results); $i++) {
		$dataObject = $results[$i];
		echo $dataObject->get('message');	
	}
	?></div>
    
    <div id="countdown">
    <script type="text/javascript">
	var d = Date.today().next().thursday();
		$('#countdown').countdown(d, function(event) {
			$(this).html(event.strftime('Next Meeting: %d Days Away'));
		});
	</script>
    </div>
    
</body>
</head>
</html>