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
      <div class="main-content col-xs-8 main-content-terms ng-scope">
        <div class="breadcrumbs" id="breadcrumbs">
          <ul class="breadcrumb">
            <li><a href="login.php"><i class="fa fa-chevron-left"></i> Back to Log In</a></li>            
          </ul>
        </div>
        <div class="page-content">	
          <div class="page-header">  <h1><b>Terms &amp; Conditions</b></h1> </div>                                                               
          <div class="row page-body">
            <div class="terms_conditions">
            </div>
          </div>
        </div>
      </div>        
    </div>

    <?php include_once('../include/footer_login.php'); ?>
  
</body>      
</html>
