<?php $currentPage = 'subscribers'; 
$sidebarcurrentPage = 'overview';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Overview</title>
        <meta name="description" content="Overview" />
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
                                <b>Overview</b>
                                <span id="appname">
                                    <i class="fa fa-android"></i>
                                    <small>Test App</small>
                                </span>
                            </h1>
                            <div class="pull-right">
                                <div class="form-group form-group-date">
                                    <div class="col-sm-12">
                                        <div class="input-group" data-container="body" onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" title="" data-original-title="Select a date-range">
                                            <span class="input-group-addon" onclick="renderCalender(this);">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                            <input type="text" name="daterange" id="dateRange" class="form-control" value="09/20/2016 - 09/27/2016"  />              
                                        </div>
                                    </div>                                    
                                </div>
                            </div>

                        </div>
                        <div class="headerclear"></div>

<!--                        <div class="row subsc_list">
                            <div class="tabbable">                              
                                <div class="tab-content">
                                   
                                </div>                     
                            </div>
                        </div>   -->

                    </div>
                </div>
            </div>






            <?php include_once('../include/footer.php'); ?>
        </div> 
    </body> 
</html>
