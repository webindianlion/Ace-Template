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
            <img src="https://uat-console.mtraction.com/v/assets/image/success_icon.svg">
          </div>				  

          <p class="info-heading">Thank you for Signing Up!</p>
          <p class="info-text">An account manager will get in touch with you shortly</p>	
          <a href="login.php" class=" btn btn-sm btn-primary return-to-website btn_wave">
            <i class="fa fa-chevron-left"></i> Return to Login
          </a>
          <a class=" btn btn-sm btn-inverse go_to_website btn_wave" href="http://www.mtraction.com/" target="_blank" title="Visit mTraction.com">
             Go to Website <i class="fa fa-chevron-right"></i>
          </a>
        </div>
        
    </div>    

    <?php include_once('../include/footer_login.php'); ?>

</body>
  
</html>