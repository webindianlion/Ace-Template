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
      <div class="login-container ng-scope">
        <div class="position-relative">
          <div class="thankyou-wrapper error-wrapper">
            <div class="error-icon">
              <img src="https://uat-console.mtraction.com/v/assets/image/erroricon.svg">
            </div>
            <div class="error-heading">Error !</div>
            <div class="popUpContent"></div>
            <div id="signup-box" class="signup-box widget-box no-border visible">
              <div class="toolbar center">
                <a href="login.php" class="back-to-login-link">
                  <i class="ace-icon fa fa-arrow-left"></i>
                  Back to login
                </a>
              </div>
            </div>
          </div>  

        </div>
      </div>

      <script class="ng-scope">
        $(function () {
          var errormsg = typeof sessionStorage['error'] != 'undefined' ? sessionStorage['error'] : '';
          $(".popUpContent").html(errormsg);
        });
      </script>
    </div>   

    <?php include_once('../include/footer_login.php'); ?>

</body>
  
</html>
