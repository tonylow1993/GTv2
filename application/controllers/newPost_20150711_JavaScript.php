<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class newPost extends CI_Controller {
	
	var $data;
	public function __construct()
	{
		parent::__construct();
		$this->load->library("nativesession");
		
		$data["Home"] = $this->lang->line("Home");
            $data["About_us"] = $this->lang->line("About_us");
            $data["Terms_and_Conditions"] = $this->lang->line("Terms_and_Conditions");
            $data["Privacy_Policy"] = $this->lang->line("Privacy_Policy");
            $data["Contact_us"] = $this->lang->line("Contact_us");
            $data["FAQ"] = $this->lang->line("FAQ");
            $data["Index_Footer1"] = $this->lang->line("Index_Footer1");
            $data["Call_Now"] = $this->lang->line("Call_Now");
            $data["Tel"] = $this->lang->line("Tel");
          
			$data["Login"]=$this->lang->line("Login");;
			$data["Signup"]=$this->lang->line("Signup");
			$data["Profile"]=$this->lang->line("Profile");
			$data["Logout"]=$this->lang->line("Logout");
			$data["Post_New_Ads"]=$this->lang->line("Post_New_Ads");
	      
		$this->load->helper('url');
		$this->load->database();
		//$this->load->model('users_model');
                $this->load->model('post_model', 'post');
                $this->load->model('picture_model', 'picture');
                $this->load->model('category_model', 'cat');
                $this->load->model('tag_model', 'tag');
                $this->load->model('location_model');
	}
        
        public function index($userID=0, $username='', $errorMsg='', $prevURL='')
	{
 	        $data = $this->data;
 	        $userInfo=$this->nativesession->get("user");
 	        if($userID==0 & !empty($userInfo))
 	        	$data["userID"]=$userInfo["userID"];
 	        else 
 	        	$data["userID"]=$userID;
 	        if($username=='' & !empty($userInfo))
 	        	$data["username"]=$userInfo["username"];
            else 
            	$data["username"]=$username;
 	        $data["lang_label"]=$this->nativesession->get("language");
          $data['result']=null;
             $data['query']=$this->cat->getParentCategory();
		if (!is_null($data['query'])) {
			foreach($data['query'] as $row)
			{
				$result1=array($row->categoryID => array($row));
				$result2=$this->getChildCategory($row->categoryID);
				if(!is_null($result2))
						if(is_null($data['result']))
							$data['result']=$result1+$result2;
						else
							$data['result']=$data['result']+$result1+$result2;
					else 
					{
						if(is_null($data['result']))
							$data['result']=$result1;
						else
							$data['result']=$data['result']+$result1;
					}
			}
		} 
            
            if($this->nativesession->get('language') && $data["lang_label"] <>"english")
            {
                $data["captchaJS"] = "<script src='https://www.google.com/recaptcha/api.js?hl=zh-TW'></script>";
                $data["fileinputLang"] = "language: \"ch\",";
                //$data["fileinputLang"] = "<script src=\"".base_url()."assets/js/fileinput_locale_ch.js\" type=\"text/javascript\"></script>";      
                // log_message('debug', '!!!!!!!!!!!!!'.$data["fileinputLang"]);
                
            }else
            {
                $data["captchaJS"] = "<script src='https://www.google.com/recaptcha/api.js?hl=en'></script>";
                $data["fileinputLang"] = "";
                
            }

            //print_r($data);
		$data['resLoc']=null;
		$data['queryLoc']=$this->location_model->getParentLocation();
		if (!is_null($data['queryLoc'])) {
			foreach($data['queryLoc'] as $row)
			{
				$resLoc1=array($row->locationID => array($row));
				$resLoc2=$this->getChildLocation($row->locationID);
				if(!is_null($resLoc2))
						if(is_null($data['resLoc']))
							$data['resLoc']=$resLoc1+$resLoc2;
						else
							$data['resLoc']=$data['resLoc']+$resLoc1+$resLoc2;
					else 
					{
						if(is_null($data['resLoc']))
							$data['resLoc']=$resLoc1;
						else
							$data['resLoc']=$data['resLoc']+$resLoc1;
					}
			}
		
            $this->nativesession->set("lastPageVisited","newPost");
			if(empty($userInfo))
			{
				$errorMsg="Please login to continue process.";
			}
            $data["errorMsg"]=array("error"=> ($errorMsg));
            $data["prevURL"]=$prevURL;
            $this->load->view('newPost', $data);
		}
	}
	
public function getChildCategory($parentID)
	{
		$result=null;
		$data['query']=$this->cat->getChildCategory($parentID);
		if(!is_null($data['query']))
		{
			foreach($data['query'] as $row)
				{
					$result1=array($row->categoryID => array($row));
					$result2=$this->getChildCategory($row->categoryID);
					if(!is_null($result2))
						if(is_null($result))
							$result=$result1+$result2;
						else
							$result=$result+$result1+$result2;
					else 
					{
						if(is_null($result))
							$result=$result1;
						else
							$result=$result+$result1;
					}
				}
		}
		else 
		{
			return NULL;			
		}
		return $result;	
	}
        public function validation()
	{
            $captcha;

            if(isset($_POST['g-recaptcha-response'])){
              $captcha=$_POST['g-recaptcha-response'];
            }
            if(!$captcha){
              echo '<h2>Please check the the captcha form.</h2>';
              exit;
            }
            $fields = array(
                'secret'    =>  "6Lec9AYTAAAAALrIwia-e_3Lc2pb3Vj0ZTbI9gEN",
                'response'  =>  $captcha,
                'remoteip'  =>  $_SERVER['REMOTE_ADDR']
            );
		//$ch = curl_init("https://www.google.com/recaptcha/api/siteverify");
		//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		//curl_setopt($ch, CURLOPT_TIMEOUT, 15);
		//curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));
		//$response = json_decode(curl_exec($ch));
		//curl_close($ch);
            $postvars = '';
            foreach($fields as $key=>$value) {
                    $postvars .= $key . "=" . $value . "&";
            }
            $ch = curl_init();
            $url = "https://www.google.com/recaptcha/api/siteverify?";
            curl_setopt($ch,CURLOPT_URL,$url);
            curl_setopt($ch,CURLOPT_POST, 1);                //0 for a get request
            curl_setopt($ch,CURLOPT_POSTFIELDS,$postvars);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
            curl_setopt($ch,CURLOPT_TIMEOUT, 20);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($ch);
            print "curl response is:" . $response;
            echo "Curl Error :--" . curl_error($ch);
            curl_close ($ch);


            $result = json_decode($response,true);
		//$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=YOUR SECRET KEY&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        //$response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Le4uAYTAAAAAJiVej5-dLhS_PRCRF0pzgWvQekf&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
		//echo "?secret=6Le4uAYTAAAAAJiVej5-dLhS_PRCRF0pzgWvQekf";
		//echo "&response=".$captcha;
		//echo "&remoteip=".$_SERVER['REMOTE_ADDR'];
		//echo "RESULT!!!!!!!!!!!!!!!!!".$result;
            print_r($result);
            echo "a!!!!!!!!!!!!!!!!!".$response;
		//echo "CH!!!!!!!!!!!!!!!!!".$ch;
		
        if($result['success'] == false)
        {
          echo '<h2>You are spammer ! Get the @$%K out</h2>';
        }else
        {
          echo '<h2>Thanks for posting comment.</h2>';
        }
    }
   public function uploadImg2()
    {
        if (0 < $_FILES['file']['error']) {
            $output = array('uploaded' => 'ERROR' );
            //$output['status'] = '<em><span style="color:red"><i class="icon-cancel-1 fa"></i><strong>'."Error".'!</strong></span></em>';
        }else
        {

            $userName = 'testUser';
            /*** the upload directory ***/
            $upload_dir= 'TMP_UPLOAD';

            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }
            //User Upload Folder Name
            $upload_dir = $upload_dir.'/'.$userName;
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            /*** maximum filesize allowed in bytes ***/
            $max_file_size  = 5000000;
            $maxFilesAllowed = 10;


            log_message('debug', 'PRE UPLOADING!!!!!!!!');

            //echo "this is a test";
            //print_r($_FILES['input-upload']);

            if (isset($_FILES['file']['tmp_name'])){

                log_message('debug', 'UPLOADING!!!!!!!!');
                // Check if image file is a actual image or fake image
                $check = getimagesize($_FILES["file"]["tmp_name"]);
                
                // check if there is a file in the array
                if(!is_uploaded_file($_FILES['file']['tmp_name']))
                {
                    $messages = 'No file uploaded';
                }// check the file is less than the maximum file size
                else if($_FILES['file']['size'] > $max_file_size)
                {
                    log_message('debug', 'size!!!!!!!!');
                    $messages = "File size exceeds $max_file_size limit";
                    $output = array('uploaded' => 'SIZE' );
                    $output['status'] = '<em><span style="color:red"><i class="icon-cancel-1 fa"></i><strong>'."File size exceeds $max_file_size limit".'!</strong></span></em>';
                }else if($check == false) {
                    $messages = "File is not an image.";
                    $uploadOk = 0;
                    $output = array('uploaded' => 'TYPE' );
                    $output['status'] = '<em><span style="color:red"><i class="icon-cancel-1 fa"></i><strong>'."File is not an image".'!</strong></span></em>';
                }
                else
                {

                    $filecount = 0;
                    $files = glob($upload_dir . "/*");
                    if ($files){
                        $filecount = count($files);
                    }
                    log_message('debug', $upload_dir.' has filecount: '.$filecount);

                    $temp = explode(".", $_FILES["file"]["name"]);
                    $extension = end($temp);
                    //echo $extension;
                    $name = $_FILES["file"]["name"];

                    if($filecount > $maxFilesAllowed)
                    {
                        //$messages[] = 'Maximum Number of Upload Attempts Exceeded!';
                        $messages[] = 'Uploading '.$name.' Failed';
                        $output = array('uploaded' => 'ERROR' );
                        $output['status'] = '<em><span style="color:red"><i class="icon-cancel-1 fa"></i><strong>'."Maximum Number of Upload Attempts Exceeded".'!</strong></span></em>';
                        echo json_encode($output); 
                    }else
                    {
                        $target_file = $upload_dir.'/'.$name;
                        // copy the file to the specified dir 
                        if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file))
                        {
                            /*** give praise and thanks to the php gods ***/
                            $messages = $name.' uploaded';
                            $image_path=$upload_dir.'/'.$name;
                            $output = array('uploaded' => 'OK' );
                            $output['status'] = '<em><span style="color:green"><i class="icon-ok-1 fa"></i><strong>'."Upload Successful".'!</strong></span></em>';                        
                        }
                        else
                        {
                            /*** an error message ***/
                            $messages = 'Uploading '.$name.' Failed';
                            $output = array('uploaded' => 'ERROR' );
                            $output['status'] = '<em><span style="color:red"><i class="icon-cancel-1 fa"></i><strong>'."Upload Unsuccessful, Please try again later".'!</strong></span></em>';
                        }
                    }

                }
                echo json_encode($output); 
            }
        }
    }
    
    function check_base64_image($base64) {
        $img = imagecreatefromstring(base64_decode($base64));
        if (!$img) {
            return false;
        }

        imagepng($img, 'tmp.png');
        $info = getimagesize('tmp.png');

        unlink('tmp.png');

        if ($info[0] > 0 && $info[1] > 0 && $info['mime']) {
            return true;
        }

        return false;
    }
    
    
    
    
    function uploadImg($input, $isThumbnail, $file)
    {
//        echo "<br />";echo "<br />";
//        echo"input".$input;
//        echo"isThumbnail".$isThumbnail;
//        echo"file".$file;
//        echo "<br />";echo "<br />";
        
        if($input == null || $input == "")
        {
            return false;
        }
        //$fileName = "someName"; 
        $stringVal = $input; 
        $value  = str_replace('data:image/png;base64,', '', $stringVal);
        
        if ($this->check_base64_image($value) == false) {
            //$this->load->view('system-error.php');
            return false;
        }
        
        
        
        
        $actualFile  = base64_decode($value);
        $img = imagecreatefromstring($actualFile);
        $imgSize = getimagesize('data://application/octet-stream;base64,' . base64_encode($actualFile));
        
        
        //log_message('debug', '@@@@@@@@@@@@@@@@@@@@@'.$value);        
        
        if ($img == false) {
            return false;
        }else
        {

            /*** maximum filesize allowed in bytes ***/
            $max_file_length  = 100000;
            $maxFilesAllowed = 10;
   
            log_message('debug', 'PRE UPLOADING!!!!!!!!');
            
            if (isset($img)){

                log_message('debug', 'UPLOADING!!!!!!!!');

                // check the file is less than the maximum file size
                if($imgSize['0'] > $max_file_length || $imgSize['1'] > $max_file_length)
                {
                    log_message('debug', 'size!!!!!!!!'.print_r($imgSize));
                    $messages = "File size exceeds $max_file_size limit";
                    //$this->load->view('system-error.php');
                    return false;
                }else if (file_exists($file)) {
                    //$this->load->view('system-error.php');
                    return false;
                }else
                {
                    file_put_contents($file, $actualFile);
                    try{
                    	//echo $file;
//                     	$handle = fopen(FCPATH.$file, "rb");
//                     	$contents = fread($handle, filesize(FCPATH.$file));
                    	//$databyte = implode("", file($file));
                    	//$encodeStr=base64_encode($contents);
// 	                    $gzdata = gzencode($contents, 9);
// 	                    $fp = fopen(FCPATH.$file.".gz", "w");
// 	                    fwrite($fp, $gzdata);
// 	                    fclose($fp);
	                    //$errorMsg="FCPATH: ".FCPATH.$file.". FREAD: ".$contents.". ENCODESTR: ".$encodeStr.".  Gzencode: ".$gzdata;
	                    //redirect(base_url().MY_PATH."/newPost///".urlencode($errorMsg));
	                    //return false;
                    }catch(Exception $ex)
                    {
//                     	$errorMsg="FCPATH: ".FCPATH.$actualFile.". FREAD: ".$contents.". ENCODESTR: ".$encodeStr.".  Gzencode: ".$gzdata.". error: ".$ex.getMessage();
//                     	redirect(base_url().MY_PATH."/newPost///".urlencode($errorMsg));
//                     	return false;
                    }
                    return true;
                }
            }       
        } 
    }
	
    
    
    public function createNewPost($loginID, $loginUser, $prevURL='')
    {
    	$userInfo=$this->nativesession->get("user");
    	if(empty($userInfo))
 	        {
 	        	$errorMsg="Please login to continue process.";	
 	    		redirect(base_url().MY_PATH."newPost/index/".$loginID."/".$loginUser."/".$errorMsg."/".$prevURL);  
 	        	return;
 	        }
    	
        $userName = $loginUser;
        $userID = $loginID;
        $userInfo=$this->nativesession->get("user");
        $userID=$userInfo["userID"];
        $userName=$userInfo["username"];
        /*** the upload directory ***/
        $upload_dir= 'USER_IMG';

        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        //User Upload Folder Name
        $upload_dir = $upload_dir.'/'.$userName;
        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        
        
        $title = $this->input->post('Adtitle',true); 
        $cat = $this->input->post('category-group',true); 
        $tags = $this->input->post('tagsInput',true); 
        $des = $this->input->post('descriptionTextarea',true); 
        $price = $this->input->post('price',true); 
        $recaptcha = $this->input->post('g-recaptcha-response',true); 
//        $negotiable = $this->input->post('negotiable'); 
        if (isset($_POST['negotiable'])) {
            $negotiable = true;
        }else
        {
            $negotiable = false;
        }
        if (isset($_POST['itemQualityGroup'])) {
            $quality = $_POST['itemQualityGroup'];
        }else
        {
            $quality = 'false';
        }
        
        $image1 = $this->input->post('img1'); 
        $image2 = $this->input->post('img2');
        $image3 = $this->input->post('img3');
        $image4 = $this->input->post('img4');
        $image5 = $this->input->post('img5');        
        
        $timage1 = $this->input->post('timg1'); 
        $timage2 = $this->input->post('timg2');
        $timage3 = $this->input->post('timg3');
        $timage4 = $this->input->post('timg4');
        $timage5 = $this->input->post('timg5');
        $locID2=$this->input->post('locID2');
        
       
    if($negotiable)
        {
            if($quality == 'N')
            {
                $negoQValue = 'NY';
            }else if($quality == 'U')
            {
                $negoQValue = 'UY';
            }else
                $negoQValue = 'Y';
        }else
        {
            if($quality == 'N')
            {
                $negoQValue = 'NN';
            }else if($quality == 'U')
            {
                $negoQValue = 'UN';
            }else
                $negoQValue = 'N';
        }
        $tempExpriyDate = date_create('2599-01-01');
        $postInfo = array(
        'userID'   => intval($userID),
        'viewCount'   =>  "1",
        'catID'   =>  intval($cat),
        'locID'   =>intval($locID2),
        'itemName' => $title,
        'itemNameCH'  =>  $title,
        'itemPrice' => $price,
        'itemQual' => "1",
        'currency' => "HKD",
        'description' => $des,
        'paymentMethod' => 'U',
        'status'  => 'U',
        'infoDisplayStatus'  => $negoQValue,
        'createDate'  => date("Y-m-d H:i:s"),
        'expriyDate' => date_format($tempExpriyDate, 'Y-m-d H:i:s')
    	);
        
        $postID = $this->post->insert($postInfo);
        
        if($postID==null or $postID==0)
        {
        	$errorMsg="Error in posting message.";
        	redirect(base_url()."home/index/".urlencode($errorMsg));
        	return;
        }
        
        $imgPath = '';
        $timgPath = '';
        $date=date_create();
        if (isset($image1)) {
            $currentTimeStamp = date_timestamp_get($date);
            $imgPath = $upload_dir . '/['.$currentTimeStamp.']['.$userName.'].png';
            $result = $this->uploadImg($image1, false, $imgPath);
            
        }
        if (isset($timage1)) {
            $currentTimeStamp = date_timestamp_get($date);
            $timgPath = $upload_dir . '/[T]['.$currentTimeStamp.']['.$userName.'].png';
            $result = $this->uploadImg($timage1, true, $timgPath);
           
            if($result == true)
            {
            	$imgInfo['postID'] = $postID;
                $imgInfo['userID'] = $userID;
	        $imgInfo['picturePath'] = $upload_dir;
                $imgInfo['pictureName'] = basename($imgPath);
                $imgInfo['status'] = 'U';
                $imgInfo['thumbnailPath'] = $upload_dir;
                $imgInfo['thumbnailName']  = basename($timgPath);
                $data['returnValue'] = $this->picture->insert($imgInfo);
            }
        }
        
        
        if (isset($image2)) {
			$date->add(new DateInterval('PT1S'));
        	$currentTimeStamp = date_timestamp_get($date);
            $imgPath = $upload_dir . '/['.$currentTimeStamp.']['.$userName.'].png';
            $result = $this->uploadImg($image2, false, $imgPath);
        }
        if (isset($timage2)) {
            $date->add(new DateInterval('PT1S'));
            $currentTimeStamp = date_timestamp_get($date);
            $timgPath = $upload_dir . '/[T]['.$currentTimeStamp.']['.$userName.'].png';
            $result = $this->uploadImg($timage2, true, $timgPath);
            if($result == true)
            {
            	$imgInfo['postID'] = $postID;
                $imgInfo['userID'] = $userID;
	        $imgInfo['picturePath'] = $upload_dir;
                $imgInfo['pictureName'] = basename($imgPath);
                $imgInfo['status'] = 'U';
                $imgInfo['thumbnailPath'] = $upload_dir;
                $imgInfo['thumbnailName']  = basename($timgPath);
                $data['returnValue'] = $this->picture->insert($imgInfo);
            }
        }
        
        if (isset($image3)) {
            $date->add(new DateInterval('PT1S'));
            $currentTimeStamp = date_timestamp_get($date);
            $imgPath = $upload_dir . '/['.$currentTimeStamp.']['.$userName.'].png';
            $result = $this->uploadImg($image3, false, $imgPath);
        }
        if (isset($timage3)) {
            $date->add(new DateInterval('PT1S'));
            $currentTimeStamp = date_timestamp_get($date);
            $timgPath = $upload_dir . '/[T]['.$currentTimeStamp.']['.$userName.'].png';
            $result = $this->uploadImg($timage3, true, $timgPath);
            if($result == true)
            {
            	$imgInfo['postID'] = $postID;
                $imgInfo['userID'] = $userID;
	        $imgInfo['picturePath'] = $upload_dir;
                $imgInfo['pictureName'] = basename($imgPath);
                $imgInfo['status'] = 'U';
                $imgInfo['thumbnailPath'] = $upload_dir;
                $imgInfo['thumbnailName']  = basename($timgPath);
                $data['returnValue'] = $this->picture->insert($imgInfo);
            }
        }
        
        if (isset($image4)) {
            $date->add(new DateInterval('PT1S'));
            $currentTimeStamp = date_timestamp_get($date);
            $imgPath = $upload_dir . '/['.$currentTimeStamp.']['.$userName.'].png';
            $result = $this->uploadImg($image4, false, $imgPath);
        }
        
        if (isset($timage4)) {
            $date->add(new DateInterval('PT1S'));
            $currentTimeStamp = date_timestamp_get($date);
            $timgPath = $upload_dir . '/[T]['.$currentTimeStamp.']['.$userName.'].png';
            $result = $this->uploadImg($timage4, true, $timgPath);
            if($result == true)
            {
            	$imgInfo['postID'] = $postID;
                $imgInfo['userID'] = $userID;
	        $imgInfo['picturePath'] = $upload_dir;
                $imgInfo['pictureName'] = basename($imgPath);
                $imgInfo['status'] = 'U';
                $imgInfo['thumbnailPath'] = $upload_dir;
                $imgInfo['thumbnailName']  = basename($timgPath);
                $data['returnValue'] = $this->picture->insert($imgInfo);
            }
        }
        if (isset($image5)) {
            $date->add(new DateInterval('PT1S'));
            $currentTimeStamp = date_timestamp_get($date);
            $imgPath = $upload_dir . '/['.$currentTimeStamp.']['.$userName.'].png';
            echo "IMG5@@@@";
            $result = $this->uploadImg($image5, false, $imgPath);
        }
        if (isset($timage5)) {
            $date->add(new DateInterval('PT1S'));
            $currentTimeStamp = date_timestamp_get($date);
            $timgPath = $upload_dir . '/[T]['.$currentTimeStamp.']['.$userName.'].png';
            $result = $this->uploadImg($timage5, true, $timgPath);
            if($result == true)
            {
            	$imgInfo['postID'] = $postID;
                $imgInfo['userID'] = $userID;
                $imgInfo['picturePath'] = $upload_dir;
                $imgInfo['pictureName'] = basename($imgPath);
                $imgInfo['status'] = 'U';
                $imgInfo['thumbnailPath'] = $upload_dir;
                $imgInfo['thumbnailName']  = basename($timgPath);
                $data['returnValue'] = $this->picture->insert($imgInfo);
            }
        }
        
        if($tags != null && $tags !== '')
        {
            $myTags = explode(',', $tags);
            foreach ($myTags as $value) {
                //tagInfo['sequence'] =   
                //tagInfo['postID'] =
                //tagInfo['tag'] = 
                //tagInfo['createDate'] =
                $postInfo = array(
                    'postID'   => $postID,
                    'tag'   =>  $value,
                    'createDate'   =>  date("Y-m-d H:i:s")
                    );
                //echo "$value <br>";
                $this->tag->insert($postInfo);
            }
        }
        
        $errorMsg="New post has been saved.";
        //if($prevURL<>'')
        //{
        //	redirect(urldecode($prevURL));
        //}
        //else
       // {
        	redirect(base_url().MY_PATH."home/index/EMPTY/".($errorMsg));
        //}
    }
    
	public function getChildLocation($parentID)
	{
		$result=null;
		$data['queryLoc']=$this->location_model->getChildLocation($parentID);
		if(!is_null($data['queryLoc']))
		{
			foreach($data['queryLoc'] as $row)
				{
					$result1=array($row->locationID => array($row));
					$result2=$this->getChildLocation($row->locationID);
					if(!is_null($result2))
						if(is_null($result))
							$result=$result1+$result2;
						else
							$result=$result+$result1+$result2;
					else 
					{
						if(is_null($result))
							$result=$result1;
						else
							$result=$result+$result1;
					}
				}
		}
		else 
		{
			return NULL;			
		}
		return $result;	
	}
    
}