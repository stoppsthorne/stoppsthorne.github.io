<?php
	//defining the RSS feed. url, loading the xml sheet, displaing the first 10 results in a for loop - shows the title and description and makes them links
	$html = "";
	$url = "https://www.legislation.gov.uk/new/data.feed";
	$xml = simplexml_load_file($url);
	for($i = 0; $i < 10; $i++){
		$title = $xml->entry[$i]->title;
		$id = $xml->entry[$i]->id;
		$content = $xml->entry[$i]->summary;
		$html .="<div><h2><a href=".$id.">".$title."</h2><p>".$content."</a></p><br /></div>";
	}
	echo "<p>".$html."</p>";
?>
