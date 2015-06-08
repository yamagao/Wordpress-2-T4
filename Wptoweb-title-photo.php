<?php
$xml = simplexml_load_file($url);
  
$itemCount = $xml->channel->item->count();
    
if($itemCount < 3){
	$no = $itemCount;
}  
else{
	$no = 3;
}

for($i = 0; $i < $no; $i++){	
	$title = $xml->channel->item[$i]->title;
	$image = $xml->channel->item[$i]->image;
	$link = $xml->channel->item[$i]->link;
  
	if($image == ""){
		$image = "img/wp-post-placeholder.jpg";
    }
	  
	echo "<div class='programs-wp-web'><a href='". $link. "'><h3>".$title."</h3></a><img src='".$image."'></div>";
  }
?>