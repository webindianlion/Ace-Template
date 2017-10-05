<?php
$currentPage = 'subscribers';
$sidebarcurrentPage = 'createreport';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Create Report</title>
        <meta name="description" content="Subscriber List" />
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

            <div class="main-content main-content-traction dr create_report">
                <div class="main-content-inner">
                    <div class="page-content">
                        <div class="page-header">
                            <h1 class="audience"> 
                                <b>Create Report</b>
                                <span id="appname">
                                    <i class="fa fa-android"></i>
                                    <small>Test App</small>
                                </span>
                            </h1>
                        </div>
                        <div class="headerclear"></div>

                        <div class="row subsc_list">
                            <div class="create_rep_row col-sm-12">
                                <div class="col-sm-8">
                                    <form method="" class="">                            
                                        <div class="form-group title">
                                            <label class="col-sm-4 control-label">Title</label>
                                            <div class="col-sm-7">                                    
                                                <input type="text" class="form-control" placeholder="Please enter Title">
                                            </div>                                  
                                        </div>  
                                        <div class="deep_links">

                                            <div class="form-group cd_link">
                                                <div class="col-sm-4">
                                                    <select class="form-control">
                                                        <option value=""> STB Type </option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <select  class="form-control">
                                                        <option value=""> equals </option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select class="form-control">
                                                        <option value=""> D-STB </option>
                                                    </select>                                          
                                                </div>
                                                <div class="col-sm-1">
                                                    <a href="" class="btn_add">
                                                        <i class="fa fa-minus-circle" data-rel="tooltip" data-trigger="hover" data-placement="top" data-original-title="Remove"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="form-group cd_link">
                                                <div class="col-sm-4">
                                                    <select  class="form-control">
                                                        <option value=""> Location </option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <select  class="form-control">
                                                        <option value=""> in </option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" data-role="tagsinput">        
                                                </div>
                                                <div class="col-sm-1">
                                                    <a href="" class="btn_add">
                                                        <i class="fa fa-minus-circle" data-rel="tooltip" data-trigger="hover" data-placement="top" data-original-title="Remove"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="form-group cd_link">
                                                <div class="col-sm-4">
                                                    <select class="form-control">
                                                        <option value=""> Programme Viewed </option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <select  class="form-control">
                                                        <option value=""> equals </option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" value=" Chalk N Duster">    
                                                </div>
                                                <div class="col-sm-1">
                                                    <a href="" class="btn_add">
                                                        <i class="fa fa-minus-circle" data-rel="tooltip" data-trigger="hover" data-placement="top" data-original-title="Remove"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <div class="form-group cd_link">
                                                <div class="col-sm-4">
                                                    <select class="form-control">
                                                        <option value=""> Select Segment </option>
                                                        <option value=""> Subscriber </option>
                                                        <option value=""> Location </option>
                                                        <option value=""> ARPU </option>
                                                        <option value=""> Plans </option>
                                                        <option value=""> Language </option>
                                                        <option value=""> Genre </option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <select class="form-control">
                                                        <option value=""> - </option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    
                                                </div>
                                                <div class="col-sm-1">
                                                    <a href="" class="btn_add">
                                                        <i class="fa fa-minus-circle" data-rel="tooltip" data-trigger="hover" data-placement="top" data-original-title="Remove"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                            <div class=" report_row">
                                        <a class="btn btn_asegment btn_wave" href="#" data-toggle="modal" data-target="#test-push-android">Add Segment</a>   
                                        </div>
                                            <div class="clear" style="padding-bottom: 15px;"></div> 
                                        </div>     
                                        
                                    </form>
                                </div>
                                <div class="col-sm-4">                                  
                                </div>

                                                            <div class=" col-sm-12 create_rep_row_foot">
                                                              <a class="btn btn_schedule btn_wave">Create</a>
                                                                                         
                                                              <a class="btn btn_cancel btn_wave" href="#" data-dismiss="modal">Reset</a>
                                                            </div>
                                
                            </div>
                        </div>   

                    </div>
                </div>
            </div>




            <script>

                $('#tags-input').on('beforeItemAdd', function (event) {
                    var tag = event.item;
                    // Do some processing here

                    if (!event.options || !event.options.preventPost) {
                        $.ajax('/ajax-url', ajaxData, function (response) {
                            if (response.failure) {
                                // Remove the tag since there was a failure
                                // "preventPost" here will stop this ajax call from running when the tag is removed
                                $('#tags-input').tagsinput('remove', tag, {preventPost: true});
                            }
                        });
                    }
                });

            </script>

<?php include_once('../include/footer.php'); ?>
        </div> 
    </body> 
</html>
