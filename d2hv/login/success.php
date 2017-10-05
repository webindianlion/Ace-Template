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

      <div class="thankyou-wrapper ng-scope">
            <div class="thankyou_img">
          <img src="https://uat-console.mtraction.com/v/assets/image/success_icon.svg">
            </div>        
        <div class="thankyou_heading"><p>Account Activated Successfully!</p></div>
            <div class="popUpContent"></div>
            <div id="signup-box" class="signup-box widget-box no-border visible">
              <div class="toolbar center">
                <a href="login.php" class="back-to-login-link btn_wave" >            
                  Continue to login
                  <i class="ace-icon fa fa-chevron-right"></i>
                </a>
              </div>
            </div>
          </div>

      <script class="ng-scope">
        $(function () {
          var successmsg = typeof sessionStorage['success'] != 'undefined' ? sessionStorage['success'] : '';
          $(".popUpContent").html(successmsg);
          sessionStorage['success'] = '';
        });
      </script>
    </div>

    <?php include_once('../include/footer_login.php'); ?>

</body>
      
</html>