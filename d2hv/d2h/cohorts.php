<?php $currentPage = 'subscribers'; 
$sidebarcurrentPage = 'cohorts';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Cohorts</title>
        <meta name="description" content="Cohorts" />
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <?php include_once('../include/xResponsive.php'); ?>    
    </head>
    <body class="no-skin subscriber ng-scope">    
        <?php include_once('../include/navigation.php'); ?>
        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('main-container')
                } catch (e) {
                }
            </script>
            <div id="sidebar" class="sidebar responsive ace-save-state push_away">
                <?php include_once ('../include/subscriber_sidebar.php'); ?>
            </div>

            <div class="main-content main-content-traction dr subscriber_list">
                <div class="main-content-inner">
                    <div class="page-content">
                        <div class="page-header">
                            <h1 class="audience"> 
                                <b>Cohorts</b>
                                <span id="appname">
                                    <i class="fa fa-android"></i>
                                    <small>Test App</small>
                                </span>
                            </h1>
                            <div class="pull-right">
                              
                            </div>

                        </div>
                        <div class="headerclear"></div>

                     

                    </div>
                </div>
            </div>






            <?php include_once('../include/footer.php'); ?>
        </div> 
    </body> 
</html>
