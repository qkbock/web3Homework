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
			if(is_array($item)){ ?>
				<h1><?php echo $section; ?></h1>
				<?php foreach($item as $i=>$detail){
					if(is_array($detail)){ 
						foreach($detail as $d=>$e){ ?>
							<p><?php echo $e;?></p>
						<?php }
					}
					else{ ?>
						<p><?php echo $detail;?></p>
					<?php }
				}
			}
			else{ ?>
				<h1><?php echo $item; ?></h1>
			<?php }
		} ?>	
	</body>
</html>