<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>mTraction</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no" />          
    <?php include_once('../include/xResponsive.php'); ?>
  </head>
  
  <body class="no-skin s-serve"> 
    
    <?php include_once('../include/nav_login.php'); ?>        
    
    <div class="main-container ng-scope" id="main-container" data-ui-view="">
      <div class="info-wrapper-signin ng-scope">
          <div class="info-icon">
            <img src="https://uat-console.mtraction.com/v/assets/image/authorisation.svg">
          </div>				  
          <p class="info-heading">Email Verification Pending!</p>
          <p class="info-text">Please check your inbox for an email containing a  verification link. 
          If you have not recieved an email please <a href="">click here</a> to resend it. 
          If you still do not receive it make sure to check your junk mail folder.</p>	
          <a class=" btn btn-sm btn-primary return-to-website btn_wave" href="login.php"> <i class="fa fa-chevron-left"></i> Back to Login</a>
      </div>
     
    </div>

    <?php include_once('../include/footer_login.php'); ?>

</body> 
  
</html>