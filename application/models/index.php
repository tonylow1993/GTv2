<?php
$title = "Girls' Trading Platform"; 
  include("header.php"); ?>
  
  
  <div id="wrapper">
  <!--  <div class="search-row-wrapper"> -->
    <div class="container ">
    	<br/>
      <form action="<?php echo base_url();?>getCategory/getAll/1" method="POST">
        
        <div class="col-sm-4">
          <select class="form-control selecter" name="category"  id="search-category" >
            <option <?php if($catID="" or $catID=0) echo "selected='selected'"; ?>  value=""><?php echo $lblAllCategories;?></option>
            <?php 
            foreach ($AllCategory as $id=>$value)
            {
               	if(!isset($lang_label))
	            		$lang_label="";
            	$name=$value[0]->name;
            	$postCount="(".$value[0]->postCount.")";
            	if($lang_label<>"english")
            		$name=$value[0]->nameCH;
            	if($value[0]->level==1)
            		echo "<option value='".$id."' style='background-color:#E9E9E9;font-weight:bold;' disabled='disabled'> -".$name.$postCount." - </option>";
            	else 
            	{
            		$str="";
            		if($catID==$id)
            			$str=" selected='selected' ";
            		echo "<option ".$str." value='".$id."'> ".$name.$postCount." </option>";
            	}
            }
            ?>
          </select>
        </div>
        <div class="col-lg-4 col-sm-6 search-col relative">
                <input type="text" name="ads" class="form-control has-icon" placeholder="<?php echo $Looking_For;?>" value="<?php echo base64_decode($keywords);?>">
              </div>
        
        <div class="col-sm-2">
          <button class="btn btn-block btn-primary  " > <i class="fa fa-search"></i> </button>
        </div>
      </form>
      
    </div>

  <br/>
  	<div class="container">
      <div class="row">
                   
          <div class="inner-box relative">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
 


 <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active" width="100%"></li>
    <li data-target="#myCarousel" data-slide-to="1" width="100%"></li>
    <li data-target="#myCarousel" data-slide-to="2" width="100%"></li>
    <li data-target="#myCarousel" data-slide-to="3" width="100%"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  <?php 
  				if($FeatureProduct<>null)
                  {
                  	$r=0;
                    foreach($FeatureProduct as $id=>$item1)
                  	{
                  		if(is_array($item1) && $r<4)
                  		{
                  			foreach($item1 as $pic=>$picObj)
                  			{
                  				if($pic=='pic')
                  				{
                  				$imagePath1=base_url().$picObj[0]->picturePath.'/'.$picObj[0]->pictureName;
                  				if($r==0)
		                  			echo "<div class=\"item active\">";
		                  		else 
		                  			echo "<div class=\"item\">";
		                  			 
			              		echo "<img  src=\"$imagePath1\" alt=\"img\" width='100%'>";
		                     	echo "</div>";
								echo "<div class=\"carousel-caption\">";
								echo "<h3>Caption Text</h3>";
								echo "</div>";
		                  		$r=$r+1;	
		                  		break;
                  				}
                  			}
                  		}
                  	}
                  }
  
  ?>
  </div>
    <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>

  

  	<div class="container">
      <div class="row">
                   
          <div class="inner-box relative">
            <h2 class="title-2"><?php echo $Interested_Listings;?> 
            
                        <a id="nextItem" class="link  pull-right carousel-nav"> <i class="icon-right-open-big"></i></a>
             <a id="prevItem" class="link pull-right carousel-nav"> <i class="icon-left-open-big"></i> </a>

            </h2>
            <div class="row">
              <div class="col-lg-12">
                <div class="no-margin item-carousel owl-carousel owl-theme">
                   
                  <?php 
                  if($InterestedProduct<>null)
                  {
                  	foreach($InterestedProduct as $id=>$item)
                  	{
                  		$viewItemPath='';
                  		$name='';
                  		$price=0;
                  		$imagePath1='';
                  		foreach($item as $pic=>$picObj)
	              		{	
	              			if($pic=='post')
	              			{
	                  		$viewItemPath=base_url()."viewItem/index/$id"."/".urlencode(current_url());
	                  		$name=$picObj->itemName;
	                  		if($lang_label<>"english")
				            	$name=$picObj->itemNameCH;
				            $price=$picObj->itemPrice;
	              			}
	              		}
			            foreach($item as $pic=>$picObj)
	              		{	
	              			if($pic=='pic')
	              			{$imagePath1=base_url().$picObj[0]->thumbnailPath.'/'.$picObj[0]->thumbnailName;
	              			}
	              		}
	              		echo "<div class=\"item\">";
              			echo "<a href=\"$viewItemPath\">";
                  		echo "<span class=\"item-carousel-thumb\">"; 
                    	echo "<img class=\"img-responsive\" src=\"$imagePath1\" alt=\"img\" width='100%' >";
                     	echo "</span>"; 
                     	echo "<span class=\"item-name\"> $name </span>"; 
                     	echo "<span class=\"price\"> $ $price </span>";
                  		echo "</a>";
                  		echo "</div>";
                  	}
                  }
                  ?>
                  
                 
                  
                </div>
              </div>
            </div>
            
            
             </div>
          
        </div>
        
      </div>

    <div class="container">
      <div class="row">
                   
          <div class="inner-box relative">
            <h2 class="title-2"><?php echo $Hot_Listings;?> 
            
                          <a id="nextItem1" class="link  pull-right carousel-nav"> <i class="icon-right-open-big"></i></a>
             <a id="prevItem1" class="link pull-right carousel-nav"> <i class="icon-left-open-big"></i> </a>

            </h2>
            <div class="row">
              <div class="col-lg-12">
                <div class="no-margin item1-carousel owl1-carousel owl1-theme">
                   
                  <?php 
                  if($HotProduct<>null)
                  {
                  	foreach($HotProduct as $id=>$item)
                  	{
                  		$viewItemPath='';
                  		$name='';
                  		$price=0;
                  		$imagePath1='';
                  		foreach($item as $pic=>$picObj)
	              		{	
	              			if($pic=='post')
	              			{
	                  		$viewItemPath=base_url()."viewItem/index/$id"."/".urlencode(current_url());
	                  		$name=$picObj->itemName;
	                  		if($lang_label<>"english")
				            	$name=$picObj->itemNameCH;
				            $price=$picObj->itemPrice;
	              			}
	              		}
			            foreach($item as $pic=>$picObj)
	              		{	
	              			if($pic=='pic')
	              			{$imagePath1=base_url().$picObj[0]->thumbnailPath.'/'.$picObj[0]->thumbnailName;
	              			}
	              		}
	              		echo "<div class=\"item\">";
              			echo "<a href=\"$viewItemPath\">";
                  		echo "<span class=\"item-carousel-thumb\">"; 
                    	echo "<img class=\"img-responsive\" src=\"$imagePath1\" alt=\"img\" width='100%' >";
                     	echo "</span>"; 
                     	echo "<span class=\"item-name\"> $name </span>"; 
                     	echo "<span class=\"price\"> $ $price </span>";
                  		echo "</a>";
                  		echo "</div>";
                  	}
                  }
                  ?>
                  
                 
                  
                </div>
              </div>
            </div>
            
            
             </div>
          
        </div>
        
      </div>

  <!-- /.main-container -->
  

<?php include "footer1.php"; ?>
</div>
<?php include "footer2.php"; ?>
