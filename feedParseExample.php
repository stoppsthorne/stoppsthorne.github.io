<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Legislation Update</title>
	<!-- external call for style sheet/-->
	
	<style>
	#feedwrap {
	width: 600px;
	margin: 0;
	background: #4B79F6;
	overflow: hidden;
	padding: 5px;
	}

	p {
	font-family: "arial";
	font-size: 12px;
	color: #fff;
	}

	h2 {
	font-family: "arial";
	font-size: 14px;
	color: #fff;
	}

	a {
	color: #fff;
	text-decoration: none;
	}

	a:hover {
	color: #fff;
	text-decoration: none;
	}

	#photo {
	font-size: 10px;
	letter-spacing: 1px;
	font-family: "arial";
	text-align: right;
	width: 600px;
	opacity: 0.5;
	line-height: 20px;	
	
	}

	img {
	height: 25px;
	line-height: 20px;
	}

</style>
</head>

<body>
<div id="feedwrap">
		<?php
		//defining the RSS feed. url, loading the xml sheet, displaing the first 10 results in a for loop - shows the title and description and makes them links
		$html = "";
		$url = "https://www.legislation.gov.uk/new/data.feed";
		$xml = simplexml_load_file($url);
		for($i = 0; $i < 10; $i++){
			$title = $xml->entry[$i]->title;
			$id = $xml->entry[$i]->id;
			$content = $xml->entry[$i]->summary;
			//$html .= "<div><h2>$title</h2><p>$content</p><p>$id</p><br /></div>";
			//$html .= "<div><h2><a href='" .$id . "'>" . $title . "</a></h2><p>$content</p><br /></div>";
			$html .="<div><h2><a href=".$id.">".$title."</h2><p>".$content."</a></p><br /></div>";
		}
		echo "<p>".$html."</p>";
		?>
</div>
</body>
<footer>
	<div id="photo">
		<span>Provided by:</span>
		<br>
		<a href="https://www.basesolutionsltd.com" target="_blank">
			<img src="https://static.wixstatic.com/media/2d96fe_347bf5733f244f9592c80301d433b271~mv2.png/v1/crop/x_24,y_29,w_452,h_182/fill/w_202,h_80,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/logo-update-500w.png"
				alt="https://www.basesolutionsltd.com">
		</a>

	</div>

</footer>
</html>


<!-- next steps: need to host php online / maybe via a vps or thru github pages.
Call upon php script using either jQuery or javascript 
Output php/js in html format
