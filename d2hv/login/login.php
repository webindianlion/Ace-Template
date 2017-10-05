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

    <div class="login-layout ng-scope">
      <div class="main-content">
        <div class="page-content">
          <div class="row">
            <div class="login-container-par">
              <div class="login-container">
                <div class="position-relative">  

                  <div id="login-box" class="login-box visible widget-box no-border slideUp ng-scope">
                    <div class="widget-body">
                      <div class="widget-main">
                        <h4 class="header lighter bigger">        
                          <div class="thankyou-message">Login</div>
                        </h4>      
                        <div class="space-6"></div>

                        <form id="loginFrm" name="loginFrm" role="form" class="form-horizontal ng-valid ng-valid-email ng-dirty ng-valid-parse">  
                          <fieldset>
                            <label class="block clearfix">
                              <!-- This div use to show the error message ---->
                              <div class="loginError-block hide popUpContent"><span>Oops! something went wrong</span><div class="error-message"></div></div>
                              <span class="eei"> Email </span>
                              <span class="block input-icon input-icon-right">
                                <input type="email" name="email" class="form-control ng-untouched ng-valid ng-valid-email ng-dirty" placeholder="Please enter email">
                                <i class="ace-icon fa fa-envelope"></i>
                              </span>

                            </label>

                            <label class="block clearfix">
                              <span class="ep"> Password </span>
                              <span class="block input-icon input-icon-right">
                                <input type="password" name="password" class="form-control password ng-untouched ng-valid ng-dirty ng-valid-parse" placeholder="Please enter password" >
                                <i class="ace-icon fa fa-shield"></i>
                              </span>
                            </label>

                            <div class="clearfix clearfix-rmb">
                              <label class="inline">
                                <input type="checkbox" id="rememberMe" class="ace ng-pristine ng-untouched ng-valid" >
                                <span class="lbl lbl-rmb"> Remember Me</span>
                              </label> 
                              <br>
                            </div>
                            <div class="toolbar toolbar-fpl ">
                              <a href="" data-target="#forgot-box" class="forgot-password-link" >Forgot Password</a>
                            </div>
                          </fieldset>
                        </form>
                        <a class="width-35 btn btn-sm btn-primary pull-right btn-next btn-next1 btn_wave" href="../d2h/subscriber_list.php">              
                      <span class="">Login</span>
                    </a>
                      </div>
                    </div>
                    <span class="activeSignup"></span>
                    <p class="toolbar toolbar-fpl btn-primry">
                      <a href="" class="user-signup-link" data-target="#signup-box">                       
                        <button class="btn btn-primaryr btn-block  btn_wave">Sign Up <i class="ace-icon fa fa-pencil-square-o "></i></button>
                      </a>
                    </p>
                  </div>

                  <div id="forgot-box" class="forgot-box widget-box no-border ng-scope" >
                    <div class="toolbar backtologin">
                        <a href="" data-target="#login-box" class="back-to-login-link">
                          <i class="ace-icon fa  fa-chevron-left"></i>
                          Back to Login
                        </a>
                    </div>
                    <div class="widget-body">
                      <div class="widget-main">
                        <h4 class="header blue lighter bigger">Forgot Password</h4>

                        <div class="space-6"></div>
                        <p>Please provide your Email ID to receive further instructions</p>

                        <form id="resetPasswordFrm" name="resetPasswordFrm" class="form-horizontal ng-pristine ng-valid ng-valid-email" method="post">
                          <fieldset>

                            <span class="hide" ></span>
                            <div class="loginSuccess-block hide"><span>Success</span><div class="success-message"></div></div>

                            <label class="block clearfix">
                              <!-- This div use to show the error message ---->
                              <div class="loginError-block hide"><span>Oops!</span><div class="error-message"></div></div>
                              <span class="block input-icon input-icon-right">
                                <input id="recover-email" name="email" type="email" class="form-control ng-pristine ng-untouched ng-valid ng-valid-email" placeholder="Email">
                                <i class="ace-icon fa fa-envelope"></i>
                              </span>
                            </label>

                            <label class="block clearfix recaptcha">
                              <span class="input-icon input-icon-right captchaContent">
                                <div class="col-lg-12 captchaWrapper no-padding">
                                  <div id="RecaptchaField1" class="g-recaptcha">
                                    <div style="width: 304px; height: 78px;">
                                      <div>
                                        <iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LcL_SUTAAAAANTl0yheL5RyIw05rXGwyV8DfMTO&amp;co=aHR0cHM6Ly91YXQtY29uc29sZS5tdHJhY3Rpb24uY29tOjQ0Mw..&amp;hl=en&amp;v=r20160913151359&amp;size=normal&amp;cb=hg5ecjqd1bpp" title="recaptcha widget" width="304" height="78" role="presentation" frameborder="0" scrolling="no" name="undefined"></iframe>
                                      </div>
                                      <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea>
</div>
                                  </div>
                                </div>
                              </span>
                            </label>

                          </fieldset>
                        </form>
                        <div class="clearfix">            
                          <button class="width-35 pull-right btn btn-sm btn-primary  btn-next btn_wave">                            
                            <span class="bigger-110">Send</span>
                          </button>                        
                        </div>
                      </div>

                    </div>
                  </div>

                  <div id="signup-box" class="signup-box widget-box no-border ng-scope">

                    <div class="toolbar center backtologin">
                        <a href="" data-target="#login-box" class="back-to-login-link">
                          <i class="ace-icon fa  fa-chevron-left"></i>
                          Back to Login
                        </a>
                  </div>

                    <div class="widget-body">
                      <div class="widget-main">
                        <h4 class="header blue lighter bigger">
                          Sign Up
                        </h4>

                        <form id="signupFrm" name="signupFrm" class="form-horizontal ng-pristine ng-valid ng-valid-email" method="post" novalidate="novalidate">
                          <fieldset>

                            <div class="loginSuccess-block hide"><span>Success</span><div class="success-message"></div></div>

                            <label class="block clearfix">
                              <!-- This div use to show the error message ---->
                              <div class="loginError-block hide"><span>Oops!</span><div class="error-message"></div></div>
                              <span class="block input-icon input-icon-right">
                                <input id="fname" name="fname" ng-model="fname" type="text" class="form-control ng-pristine ng-untouched ng-valid" placeholder="Name" >
                              </span>
                            </label>

                            <label class="block clearfix">
                              <span class="block input-icon input-icon-right">
                                <input id="email" name="signupEmail" type="email" class="form-control ng-pristine ng-untouched ng-valid ng-valid-email" placeholder="Email">
                              </span>
                            </label>

                            <label class="block clearfix password-signup">
                              <span class="block input-icon input-icon-right">
                                <input id="password" name="signupPassword" autocomplete="off" type="password" class="form-control ng-pristine ng-untouched ng-valid" placeholder="Password" data-toggle="tooltip" data-placement="top" title="" data-original-title="Password must contain at least eight characters, including one numeric and one special character">									
                              </span>
                            </label>

                            <label class="block clearfix">
                              <span class="block input-icon input-icon-right">
                                <input id="re_password" name="re_password" autocomplete="off" type="password" class="form-control ng-pristine ng-untouched ng-valid" placeholder="Confirm Password">
                              </span>
                            </label>          

                            <label class="block clearfix">
                              <span class="block countryList">
                                <select name="country" id="country" class="col-sm-12 form-control ng-pristine ng-untouched ng-valid ng-scope" >
                                  <option value=""> Select Country </option>
                                </select>
                              </span>
                            </label>

                            <label class="block clearfix phone">
                              <span class="block input-icon input-icon-right">
                                <span class="isd_code ng-pristine ng-untouched ng-valid ng-binding"></span>
                                <input id="phone" name="phone" type="text" class="form-control ng-pristine ng-untouched ng-valid" placeholder="Phone Number">
                              </span>
                            </label>

                            <label class="block clearfix">
                              <span class="block input-icon input-icon-right">
                                <input id="company" name="company"  type="text" class="form-control ng-pristine ng-untouched ng-valid" placeholder="Company (Optional)" >
                              </span>
                            </label>

                            <label class="block clearfix recaptcha">
                              <span class="input-icon input-icon-right captchaContent">
                                <div class="col-lg-12 captchaWrapper no-padding">
                                  <div id="RecaptchaField2" class="g-recaptcha"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LcL_SUTAAAAANTl0yheL5RyIw05rXGwyV8DfMTO&amp;co=aHR0cHM6Ly91YXQtY29uc29sZS5tdHJhY3Rpb24uY29tOjQ0Mw..&amp;hl=en&amp;v=r20160913151359&amp;size=normal&amp;cb=f8dm1brej3k5" title="recaptcha widget" width="304" height="78" role="presentation" frameborder="0" scrolling="no" name="undefined"></iframe></div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div></div>
                                </div>
                              </span>
                            </label>

                            <div class="agree">
                              <label class="inline">
                                <input type="checkbox" name="signupTerm" id="signupTerm" class="ace input-lg">
                                <span class="lbl lbl-rmb">I agree to the </span>
                              </label> 
                              <span> <a href="http://mtraction.com/terms/" target="_blank">Terms &amp; Conditions</a></span>
                            </div>                       
                          </fieldset>
                        </form> 
                        <div class="clearfix">
                          <input id="user_products" name="user_products" type="hidden">
                          <button class="width-35 btn btn-sm btn-primary pull-right btn-next btn_wave">              
                            <span class="bigger-110 ">Sign Up</span>
                          </button>            
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- page-content -->
      </div><!-- main-content -->      
    </div>
    </div> 

    <?php include_once('../include/footer_login.php'); ?>
    <script type="text/javascript" class="ng-scope">
      jQuery(function ($) {
        $(document).on('click', '.toolbar a[data-target]', function (e) {
          e.preventDefault();
          var target = $(this).data('target');
          $('.widget-box.visible').removeClass('visible');//hide others
          $(target).addClass('visible');//show target
        });
        $('[data-toggle="tooltip"]').tooltip();
      });

      $(function () {
        if (typeof sessionStorage['success'] != 'undefined' && sessionStorage['success'] != '') {
          var successmsg = sessionStorage['success'];
          $(".popUpContent span").html(successmsg);
          $(".popUpContent").removeClass('hide');
        }
      });
     
    </script>

</body>
  
</html>
