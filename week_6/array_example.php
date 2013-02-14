<html>
<head>
	<title>PHP Array Example</title>
</head>
<body>
<?php
	$statements = array("Hello World!", 
			"How are you?", 
			"Me? I'm fine.");
	
	for($i = 0; $i < count($statements);$i++)
	{
		echo "<p>".$statements[$i]."</p>";
	}
	//php allows a foreach option
	foreach($statements as $statement)
	{
		echo "<p>$statement</p>";
	}
?>
</body>
</html>