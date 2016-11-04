<html>
	<head>
		<title>Umam Flickr Public Photos</title>
		<link rel="stylesheet" href="materialize/css/materialize.min.css" />
	</head>
	<body>
		<div class="container">
			<div class="section">
				<div class="row">
					<?php
					$url = "https://api.flickr.com/services/feeds/photos_public.gne?format=rss2&id=127818185@N06";
					$xml = simplexml_load_file($url);
					
					foreach($xml->channel->item as $item){
					?>
					<div class="col s3 center">
						<a href="<?php echo $item->link; ?>" target="_blank"><img src="<?php echo $item->enclosure["url"]; ?>" class="responsive-img" /></a>
						<h6><?php echo $item->title; ?></h6>
					</div>
					<?php
					}
					?>
				</div>
			</div>
		</div>
	</body>
</html>