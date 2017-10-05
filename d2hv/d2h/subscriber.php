<?php $currentPage = 'business_rule'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>mTraction - Static</title>
    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <?php include_once('../include/xResponsive.php'); ?>    
  </head>
  <body class="no-skin crm ng-scope">    
    <?php include_once('../include/navigation.php'); ?>
    <div class="main-container ace-save-state" id="main-container">
      <script type="text/javascript">
       try {
           ace.settings.loadState('main-container')
       } catch (e) {       }
      </script>
      <div id="sidebar" class="sidebar responsive ace-save-state push_away">
          <?php include_once ('../include/sidebar_subscriber.php'); ?>
      </div>
      
        <div class="main-content main-content-traction dr">
                <div class="main-content-inner">
                    <div class="page-content">
                        <div class="page-header">
                          <h1 class="audience"> 
                                <b>Overview</b>
                            </h1>
                            <div class="add_audience">                              
                              <a class="go button_pad btn_wave"  data-toggle="modal" data-target="#create_rule"> Create Rule</a>
                            </div>

                        </div>
                        <div class="headerclear"></div>

                        <div class="row">
                           <div class="col-xs-12">
                           
                            </div>
                        </div>   

                    </div>
                </div>
            </div>
      
      
      
      
      
      
      <?php include_once('../include/footer.php'); ?>
    </div> 
    <?php include_once('../include/modal.php'); ?>
    
    
<script src="../assets/qb/js/query-builder.js" type="text/javascript"></script>
<script src="../assets/qb/js/demo-basic.js" type="text/javascript"></script>
<script src="../assets/qb/js/create-rule-qb.js" type="text/javascript"></script>
<script src="../assets/qb/js/demo.js" type="text/javascript"></script>
  </body> 
</html>
