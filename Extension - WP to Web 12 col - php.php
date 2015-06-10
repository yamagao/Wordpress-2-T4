 <!--START Lower content V2-->
  <h2>20 RECENT STORIES</h2>
  <div class="row">
  <div class="wp-images-left lower-content large-12 medium-12 small-12 columns">
   <?php 
  $html="";
  $url_gen = "http://blogs.ifas.ufl.edu/global/category/work-and-life/";
  $url = $url_gen . "feed/feedname";
  $xml = simplexml_load_file($url);  
  
    $itemCount = $xml->channel->item->count();
        
    if($itemCount < 3){
        $no=$itemCount;
    }  
    else{
        $no=3;
    }
    
    for($i = 0; $i < $no; $i++){	
        $title=$xml->channel->item[$i]->title;
        $description=$xml->channel->item[$i]->description;
        $image=$xml->channel->item[$i]->image;
        $link=$xml->channel->item[$i]->link;
      
        if($image == ""){
            $image = "img/wp-post-placeholder.jpg";
        }	
      
        echo "<div class='row'>
                <div class='medium-6 columns'>
                    <img src='".$image."'>
                </div>
                <div class='medium-6 columns'>
                    <a href='". $link. "'><h3>".$title."</h3></a>
                    <p>". $description ."<br><br><a href='". $link ."'>READ MORE</a> | <a href='". $url_gen ."'> &nbsp;RELATED INFORMATION</a></p>
                </div>
            </div>";
    }
  
    ?>

  </div>
  </div>
  <!--END Lower Content V2-->