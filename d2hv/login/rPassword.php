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
              <div id="forgot-box" class="forgot-box visible widget-box no-border ng-scope" >
                <div class="toolbar center">
                  <a href="login.php" class="back-to-login-link">
                    <i class="ace-icon fa fa-chevron-left"></i>
                    Back to login
                  </a>
                </div>
                  
                <div class="widget-body">
                    <div class="widget-main">
                        <h4 class="header">Reset Your Password</h4>

                        <form id="resetPasswordFrm" name="resetPasswordFrm" class="form-horizontal ng-pristine ng-valid">
                            <fieldset>

                                <label class="block clearfix">

                                    <!-- This div use to show the error message -->
                                    <div class="loginError-block hide"><span>Oops!</span><div class="error-message"></div></div>

                                    <!-- This div use to show the success message -->
                                    <div class="loginSuccess-block hide"><span>Success</span><div class="success-message"></div></div>

                                    <span class="block input-icon input-icon-right new-psw">                                    
                                        <input name="password" autocomplete="off" type="password" class="form-control password ng-pristine ng-untouched ng-valid" id="reset-password" placeholder="Please enter a new password" data-toggle="tooltip" data-placement="top" title="" data-original-title="Password must contain at least eight characters, including one numeric and one special character">                                    
                                    </span>

                                </label>

                                <label class="block clearfix">
                                    <span class="block input-icon input-icon-right">
                                        <input id="repeat-password" name="re_password" autocomplete="off" type="password" class="form-control ng-pristine ng-untouched ng-valid" placeholder="Please re-enter new password" data-toggle="tooltip" data-placement="top" title="" data-original-title="Password must contain at least eight characters, including one numeric and one special character">
                                    </span>
                                </label>
                            </fieldset>
                        </form>
                        <div class="clearfix">
                            <button class="btn btn-sm btn-primary pull-right btn-next reset_password" > Reset
                                <i class="ace-icon fa fa-refresh"></i>
                            </button> 
                        </div>
                    </div>
                </div>
                  
              </div>
          </div>
      </div>
      <script type="text/javascript" class="ng-scope">
          jQuery(function ($) {
            $('[data-toggle="tooltip"]').tooltip();            
          });
      </script>
      </div>

    <?php include_once('../include/footer_login.php'); ?>

</body>
  
</html>
