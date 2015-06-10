  <!--START Lower content V2-->
 
  <div class="row">
  <div class="program-page-left-content large-6 medium-6 small-12 columns">
   <h2>Programs of Interest</h2>
   <h3>Listen</h3>
 <p>Search our Extension Program information for timely topics on <a href="http://blogs.ifas.ufl.edu/familyalbum/category/work-and-life/">Work &amp; Life,</a> <a href="http://blogs.ifas.ufl.edu/familyalbum/category/work-and-life/disaster-preparation/">Disaster Preparation</a>, <a href="http://blogs.ifas.ufl.edu/familyalbum/category/work-and-life/food-safety/">Food Safety</a>, <a href="http://blogs.ifas.ufl.edu/familyalbum/category/work-and-life/health-and-nutrition/">Health &amp; Nutrition</a>, <a href="http://blogs.ifas.ufl.edu/familyalbum/category/work-and-life/home-management/">Home Management</a>, <a href="http://blogs.ifas.ufl.edu/familyalbum/category/work-and-life/money-matters/">Money matters</a>, <a href="http://blogs.ifas.ufl.edu/familyalbum/category/work-and-life/relationships-and-family/">Relationships &amp; Family</a> and <a href="http://blogs.ifas.ufl.edu/familyalbum/category/work-and-life/community">Community</a>.</p>
          <ul>
            <li><a href="#">New list Second item</a></li>
            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
            <li><a href="#">Nullam congue cursus sollicitudin. Ut   tincidunt dapibus </a></li>
            <li><a href="#">More resources...</a></li>
          </ul>
          <h3>Food Safety</h3>
<p>UF/IFAS Extension provides Floridians with life-long   learning programs in cooperation with county government, the United   States Department of Agriculture, and Florida A &amp; M University.          </p>
  </div>
  <div id="programs-right-wp" class="lower-content large-6 medium-6 small-12 columns">
  
   <h2> <a href="#"><img  class="rss" src="<t4 type="media" id="210257" formatter="path/*"/>" width="20" height="20" alt="rss feed"></a>Recent Stories</h2>
  
   <?php 
  $html="";
  $url_gen = "<t4 type="content" name="Blog Category/Tag URL" output="normal" modifiers=""  />";
  $url = $url_gen . "feed/feedname";
  include ('Wptoweb-title-photo.php');
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
		$image = "<t4 type="content" name="Placeholder Photo" output="normal" modifiers=""  />";
    }
	  
	echo "<div class='programs-wp-web'><a href='". $link. "'><h3>".$title."</h3></a><img src='".$image."'></div>";
}
  
    ?>

  </div>
  </div>
  <!--END Lower Content V2-->