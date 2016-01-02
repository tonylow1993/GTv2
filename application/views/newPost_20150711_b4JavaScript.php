<?php $title = "New Topic";  include("header.php"); ?>
<!--input-->
<link href="<?php echo base_url();?>assets/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<!-- Google Captcha-->
<?php echo $captchaJS;?>  

<style id="jsbin-css">
.progress-bar[aria-valuenow="1"],
.progress-bar[aria-valuenow="2"] {
  min-width: 3%;
}

.progress-bar[aria-valuenow="0"] {
  color: gray;
  min-width: 100%;
  background: transparent;
  box-shadow: none;
}

.progress-bar[aria-valuenow^="9"]:not([aria-valuenow="9"]) {
  background: red;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link href="<?php echo base_url(); ?>assets/css/bootstrap-tagsinput.css" media="all" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url(); ?>assets/js/bootstrap-tagsinput.js"></script>

<!-- /.header -->
  <div id="wrapper">
   <div class="main-container">
    <div class="container">
      <div class="row">
        <div class="col-md-9 page-content">
          <div class="inner-box category-content">
            <h2 class="title-2 uppercase"><strong> <i class="icon-docs"></i> New Post</strong> </h2>
            <div class="row">
              <div class="col-sm-12">
                <form id="newPost" class="form-horizontal" method="post"
                      action="<?php echo base_url(); echo MY_PATH;?>newPost/createNewPost/<?php echo $userID.'/'.$username.'/'.urlencode($prevURL); ?>">
                  <fieldset>
                      
                      <!-- Text input-->
                      <div class="form-group">
                          <label class="col-md-3 control-label" for="Adtitle">Topic Title <font color="red">*</font></label>
                          <div class="col-md-8">
                              <input id="Adtitle" name="Adtitle" class="form-control input-md" type="text" required="true"/>
<!--                        <span class="help-block">A great title needs at least 5 words </span> -->
                              <em>(A Great Title Needs At Least 5 Words) </em>
                          </div>
                      </div>  
                      
                      <!-- Select Basic -->
                      <div id="generalCat" class="form-group">
                          <label class="col-md-3 control-label" >Category <font color="red">*</font></label>
                          <div class="col-md-8">
                              <select name="category-group" id="category-group" class="form-control" required="true">
                                  <option value="" style="background-color:#E9E9E9;font-weight:bold;"> - Please Select One Category - </option>
                                  <?php 
						            foreach ($result as $id=>$value)
						            {
						            	if(!isset($lang_label))
							            		$lang_label="";
						            	$name=$value[0]->name;
						            	if($lang_label<>"english")
						            		$name=$value[0]->nameCH;
						            	if($value[0]->level==1)
						            		echo "<option value=\"$id\" style=\"background-color:#E9E9E9;font-weight:bold;\" disabled=\"disabled\"> - $name - </option>";
						            	else 
						            		echo "<option value=\"$id\"> $name </option>";
						            	}
						            ?>
                              </select>
                          </div>
                      </div>
                               
                      <div id="generalLocation" class="form-group">
                          <label class="col-md-3 control-label" >Location <font color="red">*</font></label>
                         
                      <div class="col-md-8">
				          <select class="form-control" name="locID2" id="locID2" required="true">
				            <option selected="selected" value="">All Locations </option>
				            <?php 
				            foreach ($resLoc as $id=>$value)
				            {
				            	if(!isset($lang_label))
					            		$lang_label="";
				            	$name=$value[0]->name;
				            	if($lang_label<>"english")
				            		$name=$value[0]->nameCN;
				            	if($value[0]->level==1)
				            		echo "<option value=\"$id\" style=\"background-color:#E9E9E9;font-weight:bold;\" disabled=\"disabled\"> - $name - </option>";
				            	else 
				            		echo "<option value=\"$id\"> $name </option>";
				            	}
				            ?>
				          </select>
				        </div>
				        </div>
                      <!-- Select Basic -->
                      <div id="itemQuality" class="form-group">
                          <label class="col-md-3 control-label" >Item Quality <font color="red">*</font></label>
                          <div class="col-md-8">
                              <select name="itemQualityGroup" id="itemQualityGroup" class="form-control" required="true">
<                                  <option value="" style="background-color:#E9E9E9;font-weight:bold;"> - Please Select - </option>
                                   <option value="N"> New </option>
                                   <option value="U"> Used </option>
                              </select>
                          </div>
                      </div>
                      <!-- Textarea -->
                      <div class="form-group">
                          <label class="col-md-3 control-label" for="textarea">Search Tags <font color="red">*</font></label>
                          <div class="col-md-8">
                              <input class="form-control" data-role="tagsinput" id="tagsInput" name="tagsInput" />
                              <em>(Maximum: Five Tags Allowed)</em>
                          </div>
                      </div>
                     <script>
                            $('input').on('beforeItemAdd', function(event) {
                                var elt = $('#tagsInput');
                                //console.log("Input: " +event.item);
                                // event.item: contains the item
                                // event.cancel: set to true to prevent the item getting added
                                                    var $keywords = $("#tagsInput").siblings(".tagsinput").children(".tag");  
                                                    var tags = [];  
                                                    //console.log($keywords.length);
                                                    for (var i = $keywords.length; i--;) {  
                                                        tags.push($($keywords[i]).text().trim());  
                                                    }  
                                                    //console.log(tags);
                              });
                              $('input').on('itemAdded', function(event) {
                              //    var str =  $( this ).serialize() 
                              //    console.log(str);

                             //document.write($( this ).serialize());
                              });
                              $('input').on('beforeItemRemove', function(event) {
                                //document.write($( this ).serialize());
                                });
                      </script>

                      
                      
                      
                      
                      <!-- Textarea -->
                      <div class="form-group">
                          <label class="col-md-3 control-label" for="textarea">Description <font color="red">*</font></label>
                          <div class="col-md-8">
                              <textarea class="form-control" id="descriptionTextarea" name="descriptionTextarea" rows="4"  required="true"  maxlength='450'></textarea>
                          </div>
                      </div>
                    
                      <!-- Prepended text-->
                      <div class="form-group">
                          <label class="col-md-3 control-label" for="Price">Price (HKD) <font color="red">*</font></label>
                          <div class="col-md-4">
                              <div class="input-group"> <span class="input-group-addon">$</span>
                                  <input id="price" name="price" class="form-control" required="true" type="number" step="0.1" min=0>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" id="negotiable" name="negotiable">
                                      Negotiable 
                                  </label>
                              </div>
                          </div>
                      </div>


                      <!-- photo -->
                      <div class="form-group">
                          <label class="col-md-3 control-label" for="textarea"> 
                              Picture 
                              <br /><h6> ( Minimum 1 picture required. ) </h6>
                          </label>
                          <div class="col-md-8">
                              <div class="mb10">
                                  <input id="image1" name="image1" class="file" type="file" accept="image/*">
                                    <div id="uploadImgError">
                                    </div>
                              </div>
                              <div class="mb10">
                                  <input id="image2" name="image2" class="file" type="file" accept="image/*">
                              </div>
                              <div class="mb10">
                                  <input id="image3" name="image3" class="file" type="file" accept="image/*">
                              </div>
                              <div class="mb10">
                                  <input id="image4" name="image4" class="file" type="file" accept="image/*">
                              </div>
                              <div class="mb10">
                                  <input id="image5" name="image5" class="file" type="file" accept="image/*">
                              </div>
                              <p class="help-block">Add up to 5 photos. Use a real image of your product, not catalogs.</p>   
                          </div>
                      </div>
                    
                    



                      <!-- Button  -->
                      <div class="form-group">
                          <label class="col-md-3 control-label"></label>
                          <!--<div class="col-md-8"> <a href="posting-success.html" id="button1id" class="btn btn-success btn-lg">Submit</a> </div>-->
                          <div class="col-md-8"> 
<!--                              <button type="submit" class="btn btn-primary btn-tw" onclick="setup(); return false;">Submit</button>-->
                              <button type="submit" class="btn btn-primary btn-tw" onclick="setup(); return false;">Submit</button>
                              <button id="validate" hidden="true" type="submit"></button>
                          </div>
                  </fieldset>
                    
                    <input type='hidden' id='img1' name='img1' />
                    <input type='hidden' id='img2' name='img2' />
                    <input type='hidden' id='img3' name='img3' />
                    <input type='hidden' id='img4' name='img4' />
                    <input type='hidden' id='img5' name='img5' />
 
                    <input type='hidden' id='timg1' name='timg1' />
                    <input type='hidden' id='timg2' name='timg2' />
                    <input type='hidden' id='timg3' name='timg3' />
                    <input type='hidden' id='timg4' name='timg4' />
                    <input type='hidden' id='timg5' name='timg5' /> 
                    

                    <div class="modal fade" id="pleaseWaitDialog" data-backdrop="static" tabindex="-1" role="dialog"  data-keyboard="false" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1>Processing...<img alt="loading..." src="<?php echo base_url();?>assets/img/loading.gif"></h1>
                                </div>
                                <div class="modal-body">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar"
                                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">   
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
        
        
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.page-content -->

        <div class="col-md-3 reg-sidebar">
          <div class="reg-sidebar-inner text-center">
            <div class="promo-text-box"> <i class=" icon-picture fa fa-4x icon-color-1"></i>
              <h3><strong>Post a Free Classified</strong></h3>
              <p> Post your free online classified ads with us. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            </div>
            
            <div class="panel sidebar-panel">
              <div class="panel-heading uppercase"><small><strong>How to sell quickly?</strong></small></div>
              <div class="panel-content">
                <div class="panel-body text-left">
                  <ul class="list-check">
                    <li> Use a brief title and  description of the item  </li>
                    <li> Make sure you post in the correct category</li>
                    <li> Add nice photos to your ad</li>
                    <li> Put a reasonable price</li>
                    <li> Check the item before publish</li>

                  </ul>
                </div>
              </div>
            </div>
            
            
          </div>
        </div><!--/.reg-sidebar-->
      </div>
      <!-- /.row --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.main-container -->
  
  
<!-- /.wrapper --> 

<!-- Le javascript
================================================== --> 


<?php include "footer1.php"; ?>


<script src="<?php echo base_url();?>assets/js/script.js"></script>
<link href="<?php echo base_url();?>assets/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url();?>assets/js/fileinput.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/fileinput_locale_ch.js" type="text/javascript"></script>
<!--<script  type="text/javascript" data-my_var_1="<?php echo base_url(); echo MY_PATH;?>newPost/uploadImg" data-my_var_2="<?php echo base_url();?>assets/img/loading.gif" src="<?php echo base_url();?>assets/js/newTopic.js"></script>-->




<script>
    var img1 = null;
    var img2 = null;
    var img3 = null;
    var img4 = null;
    var img5 = null;
    
    
    $("#image1").fileinput({
        <?php echo $fileinputLang;?>
         //language: "ch",
        'showPreview' : true,
        'allowedFileExtensions' : ['jpg', 'png','gif'],
        //'elErrorContainer': '#errorBlock',
        'showUpload' : false,
        'maxFileCount':1,
        'maxFileSize': 70000,
        //'dropZoneEnabled' : false,
        //'uploadUrl': 'test.php'
    });
    $('#image1').on('fileclear', function(event) {
        //console.log("fileclear");
        img1 = null;
    });
    $('#image1').on('fileloaded', function(event, file, previewId, index, reader) {
    //    console.log("fileloaded");
    //    console.log("file"+file);
    //    console.log("previewId" + previewId);
    //    console.log("index"+ index);
    //    console.log("reader" + reader);
          img1 = file;
          $("#uploadImgError").html('');
    });

    $("#image2").fileinput({
        <?php echo $fileinputLang;?>
        'showPreview' : true,
        'allowedFileExtensions' : ['jpg', 'png','gif'],
        'showUpload' : false,
        'maxFileCount':1,
        'maxFileSize': 8000,
    });
    $('#image2').on('fileclear', function(event) {
        img2 = null;
    });
    $('#image2').on('fileloaded', function(event, file, previewId, index, reader) {
          img2 = file;
          $("#uploadImgError").html('');
    });
    
    
    $("#image3").fileinput({
        <?php echo $fileinputLang;?>
        'showPreview' : true,
        'allowedFileExtensions' : ['jpg', 'png','gif'],
        'showUpload' : false,
        'maxFileCount':1,
        'maxFileSize': 8000,
    });
    $('#image3').on('fileclear', function(event) {
        img3 = null;
    });
    $('#image3').on('fileloaded', function(event, file, previewId, index, reader) {
          img3 = file;
          $("#uploadImgError").html('');
    });
    
    $("#image4").fileinput({
        <?php echo $fileinputLang;?>
        'showPreview' : true,
        'allowedFileExtensions' : ['jpg', 'png','gif'],
        'showUpload' : false,
        'maxFileCount':1,
        'maxFileSize': 8000,
    });
    $('#image4').on('fileclear', function(event) {
        img4 = null;
    });
    $('#image4').on('fileloaded', function(event, file, previewId, index, reader) {
          img4 = file;
          $("#uploadImgError").html('');
    });
    
    $("#image5").fileinput({
        <?php echo $fileinputLang;?>
        'showPreview' : true,
        'allowedFileExtensions' : ['jpg', 'png','gif'],
        'showUpload' : false,
        'maxFileCount':1,
        'maxFileSize': 8000,
    });
    $('#image5').on('fileclear', function(event) {
        img5 = null;
    });
    $('#image5').on('fileloaded', function(event, file, previewId, index, reader) {
          img5 = file;
          $("#uploadImgError").html('');
    });
    
    $(document).ready(function() {      
            //$("#newPost").bind("submit", setup);
    });    
    function test()
    {
//            console.log("IMG1: "+img1.name);
//            console.log("IMG2: "+img2.name);
//            console.log("IMG3: "+img3.name);
//            console.log("IMG4: "+img4.name);
//            console.log("IMG5: "+img5.name);

            console.log("IMG1: "+img1);
            console.log("IMG2: "+img2);
            console.log("IMG3: "+img3);
            console.log("IMG4: "+img4);
            console.log("IMG5: "+img5);
            //console.log("isEmptyUploadFile() "+isEmptyUploadFile());
    }
    $('#negotiable').change(function() {
        test();
    });
    function setup1()
    {
        var myform = document.getElementById("newPost");
	console.log(myform.checkValidity());

	if(!myform.checkValidity())
	{
            document.getElementById("validate").click();
            return false;
	}
    }
    function setup()
    {
        var myform = document.getElementById("newPost");
	//console.log(myform.checkValidity());

	if(!myform.checkValidity())
	{
            document.getElementById("validate").click();
            return false;
	}
        isEmptyUploadFile(function(r)
        {
            var up1 = document.getElementById('image1').value;
            var up2 = document.getElementById('image2').value;
            var up3 = document.getElementById('image3').value;
            var up4 = document.getElementById('image4').value;
            var up5 = document.getElementById('image5').value;
            
            if(r == true || (up1 == "" && up2 == "" && up3 == "" && up4 == "" && up5 == "") )
            {
               $("#uploadImgError").html('<em><span style="color:red"> <i class="icon-cancel-1 fa"></i> Please Upload at least one image!</span></em>');
               //var loc = document.getElementById('uploadImgError'); //Getting Y of target element
               //window.scrollTo(0, loc);
               location.href = "#uploadImgError";                 //Go to the target element.
               return false; 
            }
            else if(r == false)
            {
                $('#pleaseWaitDialog').modal('show');
                setForm(function(data)
                {
                    console.log(data);
                    if(data == true)
                    {
                        document.getElementById("newPost").submit();
                    }
                    return data;
                });
            }
        });
    }
    function setImg5(callback)
    {
        if(img5 != null)
        {
           getResizeImage(img5,function(tempPic)
            {
                //imgObj.image = tempPic;
                document.getElementById('img5').value = tempPic;
                getResizeThumbnailImage(img5,function(tempTPic)
                {
                    document.getElementById('timg5').value = tempTPic;
                    callback(true);
                });
            }); 
        }else
            callback(true);
    }
    function setImg4(callback)
    {
        if(img4 != null)
        {
           getResizeImage(img4,function(tempPic)
            {
                document.getElementById('img4').value = tempPic;
                getResizeThumbnailImage(img4,function(tempTPic)
                {
                    document.getElementById('timg4').value = tempTPic;
                    $('.progress-bar').css('width', 80+'%').attr('aria-valuenow', 80); 
                    callback(true);
                });
            }); 
        }else
        {
            $('.progress-bar').css('width', 80+'%').attr('aria-valuenow', 80); 
            callback(true);
        }
    }
    function setImg3(callback)
    {
        if(img3 != null)
        {
           getResizeImage(img3,function(tempPic)
            {
                document.getElementById('img3').value = tempPic;
                getResizeThumbnailImage(img3,function(tempTPic)
                {
                    document.getElementById('timg3').value = tempTPic;
                    $('.progress-bar').css('width', 60+'%').attr('aria-valuenow', 60); 
                    callback(true);
                });
            }); 
        }else
        {
            $('.progress-bar').css('width', 60+'%').attr('aria-valuenow', 60); 
            callback(true);
        }
    }
    function setImg2(callback)
    {
        if(img2 != null)
        {
           getResizeImage(img2,function(tempPic)
            {
                document.getElementById('img2').value = tempPic;
                getResizeThumbnailImage(img2,function(tempTPic)
                {
                    document.getElementById('timg2').value = tempTPic;
                    $('.progress-bar').css('width', 40+'%').attr('aria-valuenow', 40); 
                    callback(true);
                });
            }); 
        }else
        {
            $('.progress-bar').css('width', 40+'%').attr('aria-valuenow', 40); 
            callback(true);
        }
    }
    function setImg1(callback)
    {
        if(img1 != null)
        {
           getResizeImage(img1,function(tempPic)
            {
                document.getElementById('img1').value = tempPic;
                getResizeThumbnailImage(img1,function(tempTPic)
                {
                    document.getElementById('timg1').value = tempTPic;
                    $('.progress-bar').css('width', 20+'%').attr('aria-valuenow', 20); 
                    callback(true);
                });
            }); 
        }else{
            $('.progress-bar').css('width', 20+'%').attr('aria-valuenow', 20); 
            callback(true);
        }
    }
    function setForm(callback)
    {
        
//        document.getElementById('img1').value = "img1";
//        document.getElementById('img2').value = img2;
//        document.getElementById('img3').value = img3;
//        document.getElementById('img4').value = img4;
//        document.getElementById('img5').value = img5;     
//        document.getElementById('timg1').value = img1;
//        document.getElementById('timg2').value = img2;
//        document.getElementById('timg3').value = img3;
//        document.getElementById('timg4').value = img4;
//        document.getElementById('timg5').value = img5;
        
        setImg1(function(data1)
        {
            setImg2(function(data2)
            {
                setImg3(function(data3)
                {
                    setImg4(function(data4)
                    {
                        setImg5(function(data5)
                        {
                            if(data5 == true)
                            {
                                $('.progress-bar').css('width', 100+'%').attr('aria-valuenow', 100);
                                callback(true);
                            }
                            
                        });

                    });
                });
            });
        });
    }
    
    function isEmptyUploadFile(callback)
    {
        if(img1 == null && img2 == null && img3 == null && img4 == null && img5 == null)
            callback(true);
        else
            callback(false);
    
    }
    function clearErrorMessage()
    {
        $("#recaptchaError").html('');
    }

    function getResizeImage(pic, callback)
    {
        var reader = new FileReader();
        // Set the image once loaded into file reader
        reader.onload = function(e)
        {
            // Create an image
            //-----------------------------Image-------------------------
            var img = document.createElement("img");
            img.src = e.target.result;

            var canvas = document.createElement("canvas");
            //var canvas = $("<canvas>", {"id":"testing"})[0];
            var ctx = canvas.getContext("2d");
            ctx.drawImage(img, 0, 0);

            var MAX_WIDTH = 800;
            var MAX_HEIGHT = 800;
            var width = img.width;
            var height = img.height;

            if (width > height) {
                if (width > MAX_WIDTH) {
                    height *= MAX_WIDTH / width;
                    width = MAX_WIDTH;
                }
            } else {
                if (height > MAX_HEIGHT) {
                    width *= MAX_HEIGHT / height;
                    height = MAX_HEIGHT;
                }
            }
            canvas.width = width;
            canvas.height = height;
            var ctx = canvas.getContext("2d");
            ctx.drawImage(img, 0, 0, width, height);

            var dataurl = canvas.toDataURL("image/png");
            //document.getElementById('image').src = dataurl; 
            callback(dataurl);
        }
        reader.readAsDataURL(pic);
    }
    function getResizeThumbnailImage(pic, callback)
    {
        var reader = new FileReader();
        // Set the image once loaded into file reader
        reader.onload = function(e)
        {
            // Create an image
            //-----------------------------Image-------------------------
            var img = document.createElement("img");
            img.src = e.target.result;

            var canvas = document.createElement("canvas");
            //var canvas = $("<canvas>", {"id":"testing"})[0];
            var ctx = canvas.getContext("2d");
            ctx.drawImage(img, 0, 0);

            var MAX_WIDTH = 200;
            var MAX_HEIGHT = 200;
            var width = img.width;
            var height = img.height;

            if (width > height) {
                if (width > MAX_WIDTH) {
                    height *= MAX_WIDTH / width;
                    width = MAX_WIDTH;
                }
            } else {
                if (height > MAX_HEIGHT) {
                    width *= MAX_HEIGHT / height;
                    height = MAX_HEIGHT;
                }
            }
            canvas.width = width;
            canvas.height = height;
            var ctx = canvas.getContext("2d");
            ctx.drawImage(img, 0, 0, width, height);

            var dataurl = canvas.toDataURL("image/png");
            //document.getElementById('image').src = dataurl; 
            callback(dataurl);
        }
        reader.readAsDataURL(pic);
    }
    $(window).bind("pageshow", function() {
        $("#img1").val('');
        $("#img2").val('');
        $("#img3").val('');
        $("#img4").val('');
        $("#img5").val('');
        $("#timg1").val('');
        $("#timg2").val('');
        $("#timg3").val('');
        $("#timg4").val('');
        $("#timg5").val('');
    });
</script>

<?php include "footer2.php"; ?>
  <!--/.footer--> 
  </div>
