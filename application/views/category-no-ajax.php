<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="<?php echo base_url();?>assets/ico/favicon.png">
<title>BOOTCLASIFIED - Responsive Classified Theme</title>
<!-- Bootstrap core CSS -->
<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

<!-- styles needed for carousel slider -->
<link href="<?php echo base_url();?>assets/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/owl.theme.css" rel="stylesheet">

<!-- Just for debugging purposes. -->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<!-- include pace script for automatic web page progress bar  -->

<script>
    paceOptions = {
      elements: true
    };
</script>
<script src="<?php echo base_url();?>assets/js/pace.min.js"></script>
</head>
<body>
<div id="wrapper">
  <div class="header">
    <nav class="navbar   navbar-site navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a href="index.html" class="navbar-brand logo logo-title"> 
          <!-- Original Logo will be placed here  --> 
          <span class="logo-icon"><i class="icon icon-search-1 ln-shadow-logo shape-0"></i> </span> BOOT<span>CLASSIFIED </span> </a> </div>
        <div class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Signup</a></li>
            <li class="postadd"><a class="btn btn-block   btn-border btn-post btn-danger" href="post-ads.html">Post Free Add</a></li>
          </ul>
        </div>
        <!--/.nav-collapse --> 
      </div>
      <!-- /.container-fluid --> 
    </nav>
  </div>
  <!-- /.header -->
  <div class="search-row-wrapper">
    <div class="container text-center">
      <div class="col-sm-3">
        <input class="form-control keyword" type="text" placeholder="e.g. Mobile Sale">
      </div>
      <div class="col-sm-3">
        <select class="form-control" name="category" id="search-category">
          <option selected="selected" value="">All Categories</option>
          <option value="Vehicles" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Vehicles - </option>
          <option value="Cars"> Cars </option>
          <option value="Commercial vehicles"> Commercial vehicles </option>
          <option value="Motorcycles"> Motorcycles </option>
          <option value="Motorcycle Equipment"> Car &amp; Motorcycle Equipment </option>
          <option value="Boats"> Boats </option>
          <option value="Vehicles"> Other Vehicles </option>
          <option value="House" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - House and Children - </option>
          <option value="Appliances"> Appliances </option>
          <option value="Inside"> Inside </option>
          <option value="Games"> Games and Clothing </option>
          <option value="Garden"> Garden </option>
          <option value="Multimedia" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Multimedia - </option>
          <option value="Telephony"> Telephony </option>
          <option value="Image"> Image and sound </option>
          <option value="Computers"> Computers and Accessories </option>
          <option value="Video"> Video games and consoles </option>
          <option value="Real" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Real Estate - </option>
          <option value="Apartment"> Apartment </option>
          <option value="Home"> Home </option>
          <option value="Vacation"> Vacation Rentals </option>
          <option value="Commercial"> Commercial offices and local </option>
          <option value="Grounds"> Grounds </option>
          <option value="Houseshares"> Houseshares </option>
          <option value="Other real estate"> Other real estate </option>
          <option value="Services" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Services - </option>
          <option value="Jobs"> Jobs </option>
          <option value="Job application"> Job application </option>
          <option value="Services"> Services </option>
          <option value="Price"> Price </option>
          <option value="Business"> Business and goodwill </option>
          <option value="Professional"> Professional equipment </option>
          <option value="dropoff" style="background-color:#E9E9E9;font-weight:bold;" disabled="disabled"> - Extra - </option>
          <option value="Other"> Other </option>
        </select>
      </div>
      <div class="col-sm-3">
        <select class="form-control" name="location" id="id-location">
          <option selected="selected" value="">All Locations</option>
          <option value="New York"> New York </option>
          <option value="South-West"> South West </option>
          <option value="South-East"> South East </option>
          <option value="East-England"> East England </option>
          <option value="East-Midlands"> East Midlands </option>
          <option value="West-Midlands"> West Midlands </option>
          <option value="North-East"> North East </option>
          <option value="North-West"> North West </option>
          <option value="Scotland"> Scotland </option>
          <option value="Wales"> Wales </option>
          <option value="Northern-Ireland"> Northern Ireland </option>
          <option value="England"> England</option>
          <option value="UK"> UK </option>
          <option value="Other-Locations">Other Locations</option>
        </select>
      </div>
      <div class="col-sm-3">
        <button class="btn btn-block btn-primary  "> <i class="fa fa-search"></i> </button>
      </div>
    </div>
  </div>
  <!-- /.search-row -->
  <div class="main-container">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 page-sidebar">
          <aside>
            <div class="inner-box">
              <div class="categories-list  list-filter">
                <h5 class="list-title"><strong><a href="#">All Categories</a></strong></h5>
                <ul class=" list-unstyled">
                  <li><a href="sub-category-sub-location.html"><span class="title">Electronics</span><span class="count">&nbsp;8626</span></a> </li>
                  <li><a href="sub-category-sub-location.html"><span class="title">Automobiles </span><span class="count">&nbsp;123</span></a> </li>
                  <li><a href="sub-category-sub-location.html"><span class="title">Property </span><span class="count">&nbsp;742</span></a> </li>
                  <li><a href="sub-category-sub-location.html"><span class="title">Services </span><span class="count">&nbsp;8525</span></a> </li>
                  <li><a href="sub-category-sub-location.html"><span class="title">For Sale </span><span class="count">&nbsp;357</span></a> </li>
                  <li><a href="sub-category-sub-location.html"><span class="title">Learning </span><span class="count">&nbsp;3576</span></a> </li>
                  <li><a href="sub-category-sub-location.html"><span class="title">Jobs </span><span class="count">&nbsp;453</span></a> </li>
                  <li><a href="sub-category-sub-location.html"><span class="title">Cars & Vehicles</span><span class="count">&nbsp;801</span></a> </li>
                  <li><a href="sub-category-sub-location.html"><span class="title">Other</span><span class="count">&nbsp;9803</span></a> </li>
                </ul>
              </div>
              <!--/.categories-list-->
              
              <div class="locations-list  list-filter">
                <h5 class="list-title"><strong><a href="#">Location</a></strong></h5>
                <ul class="browse-list list-unstyled long-list">
                  <li> <a href="sub-category-sub-location.html">New York</a></li>
                  <li> <a href="sub-category-sub-location.html">South West</a></li>
                  <li> <a href="sub-category-sub-location.html">South East</a></li>
                  <li> <a href="sub-category-sub-location.html">East England</a></li>
                  <li> <a href="sub-category-sub-location.html">East Midlands</a></li>
                  <li> <a href="sub-category-sub-location.html">West Midlands</a></li>
                  <li> <a href="sub-category-sub-location.html">North East</a></li>
                  <li> <a href="sub-category-sub-location.html">North West</a></li>
                  <li> <a href="sub-category-sub-location.html">Scotland</a></li>
                  <li> <a href="sub-category-sub-location.html">Wales</a></li>
                  <li> <a href="sub-category-sub-location.html">Northern Ireland</a></li>
                  <li> <a href="sub-category-sub-location.html">England</a></li>
                  <li> <a href="sub-category-sub-location.html">UK</a></li>
                  <li> <a href="sub-category-sub-location.html"> Other Locations </a></li>
                </ul>
              </div>
              <!--/.locations-list-->
              
              <div class="locations-list  list-filter">
                <h5 class="list-title"><strong><a href="#">Price range</a></strong></h5>
                <form role="form" class="form-inline ">
                  <div class="form-group col-sm-4 no-padding">
                    <input type="text" placeholder="$ 2000 " id="minPrice" class="form-control">
                  </div>
                  <div class="form-group col-sm-1 no-padding text-center"> - </div>
                  <div class="form-group col-sm-4 no-padding">
                    <input type="text" placeholder="$ 3000 " id="maxPrice" class="form-control">
                  </div>
                  <div class="form-group col-sm-3 no-padding">
                    <button class="btn btn-default pull-right" type="submit">GO</button>
                  </div>
                </form>
                <div style="clear:both"></div>
              </div><!--/.list-filter-->
              <div class="locations-list  list-filter">
                <h5 class="list-title"><strong><a href="#">Seller</a></strong></h5>
                <ul class="browse-list list-unstyled long-list">
                  <li> <a href="sub-category-sub-location.html"><strong>All Ads</strong> <span class="count">228,705</span></a></li>
                  <li> <a href="sub-category-sub-location.html">Business <span class="count">28,705</span></a></li>
                  <li> <a href="sub-category-sub-location.html">Personal <span class="count">18,705</span></a></li>
                </ul>
              </div><!--/.list-filter-->
              <div class="locations-list  list-filter">
                <h5 class="list-title"><strong><a href="#">Condition</a></strong></h5>
                <ul class="browse-list list-unstyled long-list">
                  <li> <a href="sub-category-sub-location.html">New <span class="count">228,705</span></a></li>
                  <li> <a href="sub-category-sub-location.html">Used <span class="count">28,705</span></a></li>
                  <li> <a href="sub-category-sub-location.html">None </a></li>
                </ul>
              </div><!--/.list-filter-->
              <div style="clear:both"></div>
            </div>
            
            <!--/.categories-list--> 
          </aside>
        </div>
        <!--/.page-side-bar-->
        <div class="col-sm-9 page-content col-thin-left">
        
          <div class="category-list">
            <div class="tab-box "> 
              
              <!-- Nav tabs -->
              <ul class="nav nav-tabs add-tabs" role="tablist">
                <li class="active"><a href="#allAds" role="tab" data-toggle="tab">All Ads <span class="badge">228,705</span></a></li>
                <li><a href="#businessAds" role="tab" data-toggle="tab">Business <span class="badge">228,705</span></a></li>
                <li><a href="#Personal" role="tab" data-toggle="tab">Personal <span class="badge">228,705</span></a></li>
              </ul>
              <div class="tab-filter">
                <select class="selectpicker" data-style="btn-select" data-width="auto">
                  <option>Short by</option>
                  <option>Price: Low to High</option>
                  <option>Price: High to Low</option>
                </select>
              </div>
            </div>
            <!--/.tab-box-->
            
            <div class="listing-filter">
              <div class="pull-left col-xs-6">
                <div class="breadcrumb-list"> <a href="#" class="current"> <span>All ads</span></a> in New York <a href="#selectRegion" id="dropdownMenu1"  data-toggle="modal"> <span class="caret"></span> </a> </div>
              </div>
              <div class="pull-right col-xs-6 text-right listing-view-action"> <span class="list-view active"><i class="  icon-th"></i></span> <span class="compact-view"><i class=" icon-th-list  "></i></span> <span class="grid-view "><i class=" icon-th-large "></i></span> </div>
              <div style="clear:both"></div>
            </div>
            <!--/.listing-filter-->
            <div class="adds-wrapper">
             <div class="item-list">
              <div class="cornerRibbons topAds">
 					 <a href="#"> Top Ads</a>
				</div>
                
                <div class="col-sm-2 no-padding photobox">
                  <div class="add-image"> <span class="photo-count"><i class="fa fa-camera"></i> 2 </span> <a href="ads-details.html"><img class="thumbnail no-margin" src="images/item/tp/Image00015.jpg" alt="img"></a> </div>
                </div>
                <!--/.photobox-->
                <div class="col-sm-7 add-desc-box">
                  <div class="add-details">
                    <h5 class="add-title"> <a href="ads-details.html"> 
Brand New Samsung Phones </a> </h5>
                    <span class="info-row"> <span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="Business Ads">B </span> <span class="date"><i class=" icon-clock"> </i> Today 1:21 pm </span> - <span class="category">Electronics </span>- <span class="item-location"><i class="fa fa-map-marker"></i> New York </span> </span> </div>
                </div>
                <!--/.add-desc-box-->
                <div class="col-sm-3 text-right  price-box">
                  <h2 class="item-price"> $ 320 </h2>
                  <a class="btn btn-danger  btn-sm make-favorite"> <i class="fa fa-certificate"></i> <span>Top Ads</span> </a> <a class="btn btn-default  btn-sm make-favorite"> <i class="fa fa-heart"></i> <span>Save</span> </a> </div>
                <!--/.add-desc-box--> 
              </div>
              <!--/.item-list-->
              
              <div class="item-list">
              <div class="cornerRibbons featuredAds">
 					 <a href="#"> Featured Ads</a>
				</div>
                
                <div class="col-sm-2 no-padding photobox">
                  <div class="add-image"> <span class="photo-count"><i class="fa fa-camera"></i> 2 </span> <a href="ads-details.html"><img class="thumbnail no-margin" src="images/item/tp/Image00008.jpg" alt="img"></a> </div>
                </div>
                <!--/.photobox-->
                <div class="col-sm-7 add-desc-box">
                  <div class="add-details">
                    <h5 class="add-title"> <a href="ads-details.html"> 
Sony Xperia  dual sim 100% brand new  </a> </h5>
                    <span class="info-row"> <span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="Business Ads">B </span> <span class="date"><i class=" icon-clock"> </i> Today 1:21 pm </span> - <span class="category">Electronics </span>- <span class="item-location"><i class="fa fa-map-marker"></i> New York </span> </span> </div>
                </div>
                <!--/.add-desc-box-->
                <div class="col-sm-3 text-right  price-box">
                  <h2 class="item-price"> $ 250 </h2>
                  <a class="btn btn-danger  btn-sm make-favorite"> <i class="fa fa-certificate"></i> <span>Featured Ads</span> </a> <a class="btn btn-default  btn-sm make-favorite"> <i class="fa fa-heart"></i> <span>Save</span> </a> </div>
                <!--/.add-desc-box--> 
              </div>
              
                 <div class="item-list">
                 <div class="cornerRibbons urgentAds">
 					 <a href="#"> Urgent</a>
				</div>
                <div class="col-sm-2 no-padding photobox">
                  <div class="add-image"> <span class="photo-count"><i class="fa fa-camera"></i> 2 </span> <a href="ads-details.html"><img class="thumbnail no-margin" src="images/item/FreeGreatPicture.com-46404-google-drops-nexus-4-by-100-offers-15-day-price-protection-refund.jpg" alt="img"></a> </div>
                </div>
                <!--/.photobox-->
                <div class="col-sm-7 add-desc-box">
                  <div class="add-details">
                    <h5 class="add-title"> <a href="ads-details.html"> Google drops Nexus 4  </a> </h5>
                    <span class="info-row"> <span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="Business Ads">B </span> <span class="date"><i class=" icon-clock"> </i> Today 1:21 pm </span> - <span class="category">Electronics </span>- <span class="item-location"><i class="fa fa-map-marker"></i> New York </span> </span> </div>
                </div>
                <!--/.add-desc-box-->
                <div class="col-sm-3 text-right  price-box">
                  <h2 class="item-price"> $ 150 </h2>
                    <a class="btn btn-danger  btn-sm make-favorite"> <i class="fa fa-certificate"></i> <span>Urgent</span> </a>
                  <a class="btn btn-default  btn-sm make-favorite"> <i class="fa fa-heart"></i> <span>Save</span> </a> </div>
                <!--/.add-desc-box--> 
              </div>
                 <!--/.item-list--> 
              
              <!--/.item-list-->
              <div class="item-list">
              
                <div class="col-sm-2 no-padding photobox">
                  <div class="add-image"> <span class="photo-count"><i class="fa fa-camera"></i> 2 </span> <a href="ads-details.html"><img class="thumbnail no-margin" src="images/item/tp/Image00014.jpg" alt="img"></a> </div>
                </div>
                <!--/.photobox-->
                <div class="col-sm-7 add-desc-box">
                  <div class="add-details">
                    <h5 class="add-title"> <a href="ads-details.html"> Samsung Galaxy S Dous (Brand New/ Intact Box) With 1year Warranty </a> </h5>
                    <span class="info-row"> <span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="Business Ads">B </span> <span class="date"><i class=" icon-clock"> </i> Today 1:21 pm </span> - <span class="category">Electronics </span>- <span class="item-location"><i class="fa fa-map-marker"></i> New York </span> </span> </div>
                </div>
                <!--/.add-desc-box-->
                <div class="col-sm-3 text-right  price-box">
                  <h2 class="item-price"> $ 230</h2>
                 <a class="btn btn-default  btn-sm make-favorite"> <i class="fa fa-heart"></i> <span>Save</span> </a> </div>
                <!--/.add-desc-box--> 
              </div>
              <!--/.item-list-->
              <div class="item-list">
                <div class="col-sm-2 no-padding photobox">
                  <div class="add-image"> <span class="photo-count"><i class="fa fa-camera"></i> 2 </span> <a href="ads-details.html"><img class="thumbnail no-margin" src="images/item/tp/Image00003.jpg" alt="img"></a> </div>
                </div>
                <!--/.photobox-->
                <div class="col-sm-7 add-desc-box">
                  <div class="add-details">
                    <h5 class="add-title"> <a href="ads-details.html"> MSI GE70 Apache Pro-061 17.3" Core i5-4200H/8GB DDR3/NV GTX860M Gaming Laptop </a> </h5>
                    <span class="info-row"> <span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="Business Ads">B </span> <span class="date"><i class=" icon-clock"> </i> Today 1:21 pm </span> - <span class="category">Electronics </span>- <span class="item-location"><i class="fa fa-map-marker"></i> New York </span> </span> </div>
                </div>
                <!--/.add-desc-box-->
                <div class="col-sm-3 text-right  price-box">
                  <h2 class="item-price"> $ 400 </h2>
                  <a class="btn btn-default  btn-sm make-favorite"> <i class="fa fa-heart"></i> <span>Save</span> </a> </div>
                <!--/.add-desc-box--> 
              </div>
              <!--/.item-list-->
              <div class="item-list">
                <div class="col-sm-2 no-padding photobox">
                  <div class="add-image"> <span class="photo-count"><i class="fa fa-camera"></i> 2 </span> <a href="ads-details.html"><img class="thumbnail no-margin" src="images/item/tp/Image00022.jpg" alt="img"></a> </div>
                </div>
                <!--/.photobox-->
                <div class="col-sm-7 add-desc-box">
                  <div class="add-details">
                    <h5 class="add-title"> <a href="ads-details.html"> Apple iPod touch 16 GB 3rd Generation  </a> </h5>
                    <span class="info-row"> <span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="Business Ads">B </span> <span class="date"><i class=" icon-clock"> </i> Today 1:21 pm </span> - <span class="category">Electronics </span>- <span class="item-location"><i class="fa fa-map-marker"></i> New York </span> </span> </div>
                </div>
                <!--/.add-desc-box-->
                <div class="col-sm-3 text-right  price-box">
                  <h2 class="item-price"> $ 150 </h2>
                  <a class="btn btn-default  btn-sm make-favorite"> <i class="fa fa-heart"></i> <span>Save</span> </a> </div>
                <!--/.add-desc-box--> 
              </div>
              <!--/.item-list-->
              <div class="item-list">
                <div class="col-sm-2 no-padding photobox">
                  <div class="add-image"> <span class="photo-count"><i class="fa fa-camera"></i> 2 </span> <a href="ads-details.html"><img class="thumbnail no-margin" src="images/item/FreeGreatPicture.com-46405-google-drops-price-of-nexus-4-smartphone.jpg" alt="img"></a> </div>
                </div>
                <!--/.photobox-->
                <div class="col-sm-7 add-desc-box">
                  <div class="add-details">
                    <h5 class="add-title"> <a href="ads-details.html"> Google drops Nexus 4 by $100, offers 15 day price protection refund  </a> </h5>
                    <span class="info-row"> <span class="add-type business-ads tooltipHere" data-toggle="tooltip" data-placement="right" title="Business Ads">B </span> <span class="date"><i class=" icon-clock"> </i> Today 1:21 pm </span> - <span class="category">Electronics </span>- <span class="item-location"><i class="fa fa-map-marker"></i> New York </span> </span> </div>
                </div>
                <!--/.add-desc-box-->
                <div class="col-sm-3 text-right  price-box">
                  <h2 class="item-price"> $ 150 </h2>
                  <a class="btn btn-default  btn-sm make-favorite"> <i class="fa fa-heart"></i> <span>Save</span> </a> </div>
                <!--/.add-desc-box--> 
              </div>
              <!--/.item-list--> 
              
              
           
           
            </div> <!--/.adds-wrapper-->
            
            <div class="tab-box  save-search-bar text-center"> <a href=""> <i class=" icon-star-empty"></i> Save Search </a> </div>
          </div>
          <div class="pagination-bar text-center">
            <ul class="pagination">
              <li  class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#"> ...</a></li>
              <li><a class="pagination-btn" href="#">Next &raquo;</a></li>
            </ul>
          </div>
          <!--/.pagination-bar -->
          
          <div class="post-promo text-center">
            <h2> Do you get anything for sell ? </h2>
            <h5>Sell your products online FOR FREE. It's easier than you think !</h5>
            <a href="post-ads.html" class="btn btn-lg btn-border btn-post btn-danger">Post a Free Ad </a></div>
          <!--/.post-promo--> 
          
        </div>
        <!--/.page-content--> 
        
      </div>
    </div>
  </div>
  <!-- /.main-container -->
  
  <div class="footer" id="footer">
    <div class="container">
      <ul class=" pull-left navbar-link footer-nav">
        <li><a href="index.html"> Home </a> <a href="about-us.html"> About us </a> <a href="#"> Terms and Conditions </a> <a href="#"> Privacy Policy </a> <a href="contact.html"> Contact us </a> <a href="faq.html"> FAQ </a>
      </ul>
      <ul class=" pull-right navbar-link footer-nav">
        <li> &copy; 2015 BootClassified </li>
      </ul>
    </div>
    
  </div>
  <!-- /.footer -->
</div>
<!-- /.wrapper --> 

<!-- Modal Change City -->

<div class="modal fade" id="selectRegion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="exampleModalLabel"><i class=" icon-map"></i> Select your region </h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12">
            <p>Popular cities in <strong>UK</strong></p>
            <hr class="hr-thin">
          </div>
          <div class="col-md-4">
            <ul  class="list-link list-unstyled">
              <li> <a  href="#">New York </a> </li>
              <li> <a  href="#">Bristol </a> </li>
              <li> <a  href="#">New York </a> </li>
              <li> <a  href="#">Kent </a> </li>
              <li> <a  href="#">Essex </a> </li>
              <li> <a href="#">Lancashire </a> </li>
              <li> <a href="#">Bedfordshire </a> </li>
              <li> <a href="#">Berkshire </a> </li>
              <li> <a href="#">Buckinghamshire </a> </li>
              <li> <a href="#">Cambridgeshire </a> </li>
              <li> <a href="#">Cheshire </a> </li>
              <li> <a href="#">Cornwall </a> </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-link list-unstyled">
              <li> <a  href="#">County Durham </a> </li>
              <li> <a  href="#">Cumbria </a> </li>
              <li> <a  href="#">Derbyshire </a> </li>
              <li> <a  href="#">Devon </a> </li>
              <li> <a  href="#">Dorset </a> </li>
              <li> <a  href="#">East Yorkshire </a> </li>
              <li> <a  href="#">East Sussex </a> </li>
              <li> <a  href="#">Gloucestershire </a> </li>
              <li> <a  href="#">Hampshire </a> </li>
              <li> <a  href="#">Herefordshire </a> </li>
              <li> <a  href="#">Hertfordshire </a> </li>
              <li> <a  href="#">Isle of Wight </a> </li>
              <li> <a  href="#">Leicestershire </a> </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-link list-unstyled">
              <li> <a  href="#">County Durham </a> </li>
              <li> <a  href="#">Cumbria </a> </li>
              <li> <a  href="#">Derbyshire </a> </li>
              <li> <a  href="#">Devon </a> </li>
              <li> <a  href="#">Dorset </a> </li>
              <li> <a  href="#">East Yorkshire </a> </li>
              <li> <a  href="#">East Sussex </a> </li>
              <li> <a  href="#">Gloucestershire </a> </li>
              <li> <a  href="#">Hampshire </a> </li>
              <li> <a  href="#">Herefordshire </a> </li>
              <li> <a  href="#">Hertfordshire </a> </li>
              <li> <a  href="#">Isle of Wight </a> </li>
              <li> <a  href="#">Leicestershire </a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- /.modal --> 

<!-- Le javascript
================================================== --> 

<!-- Placed at the end of the document so the pages load faster --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"> </script><script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script> 

<!-- include carousel slider plugin  --> 
<script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script> 

<!-- include equal height plugin  --> 
<script src="<?php echo base_url();?>assets/js/jquery.matchHeight-min.js"></script> 

<!-- include jquery list shorting plugin plugin  --> 
<script src="<?php echo base_url();?>assets/js/hideMaxListItem.js"></script> 

<!-- include jquery.fs plugin for custom scroller and selecter  --> 
<script src="<?php echo base_url();?>assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>
<!-- include custom script for site  --> 
<script src="<?php echo base_url();?>assets/js/script.js"></script>
</body>
</html>
