<?php 
	//pull content from another page
	$content = file_get_contents('http://54.235.78.67/mauricio_give.php?request=info');
	//echo $content;	

	$formatted_content = json_decode($content,true);
	
	//print_r($formatted_content);
?>

<!doctype>

<html>
	<head>
	<title>First API </title>
	</head>
	<body>
		<?php foreach($formatted_content as $a){
			if(is_array($a)){ ?>
				
			<?php }
		} ?>	
	</body>
</html>