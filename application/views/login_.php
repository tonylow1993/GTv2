<?php $title = "Girls' Trading Platform";  include("header.php"); ?>
<div id="wrapper">  
  <div class="main-container">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 login-box">
          <div class="panel panel-default">
            <div class="panel-intro text-center">
              <h2 class="logo-title"> 
                <!-- Original Logo will be placed here  --> 
                <span class="logo-icon"><i class="icon icon-hammer ln-shadow-logo shape-0"></i> </span> Girls<span>Trade </span> </h2>
            </div>
            <div class="panel-body">
              <form id="loginform" method="post" action="<?php echo base_url(); echo MY_PATH;?>home/login/<?php  echo $prevURL;?>" >
                <div class="form-group">
                  <label for="sender-email" class="control-label">Username:</label>
                  <div class="input-icon"> <i class="icon-user fa"></i>
                    <input id="sender-email" type="text" name="username" class="form-control email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="user-pass"  class="control-label">Password:</label>
                  <div class="input-icon"> <i class="icon-lock fa"></i>
                    <input type="password"  class="form-control" name="password" id="user-pass">
                  </div>
                </div>
                <div class="form-group">
<!--                   <a  href="account-home.html" class="btn btn-primary  btn-block">Submit</a> -->
                  <input type="submit" id="login" class="btn btn-primary btn-block" value="Submit"/>
                </div>
              </form>
            </div>
            <div class="panel-footer">
              <label class="text-center pull-right">
                <input type="checkbox" value="1" name="remember" id="remember">
                Keep me logged in </label>
              <p class="text-center pull-left"> <a href="<?php echo base_url(); echo MY_PATH;?>home/forgetPasswordPage"> Lost your password? </a> </p>
              <div style=" clear:both"></div>
            </div>
          </div>
          <div class="login-box-btm text-center">
            <p> Don't have an account? <br>
              <a href="<?php echo base_url(); echo MY_PATH;?>home/signupPage"><strong>Sign Up !</strong> </a> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.main-container -->
  
<?php include "footer1.php"; ?>
<?php include "footer2.php"; ?>
</div>
