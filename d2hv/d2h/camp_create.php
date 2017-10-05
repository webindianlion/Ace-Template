<?php $currentPage = 'audience'; ?>
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
          <?php include_once ('../include/sidebar.php'); ?>
      </div>
      
        <div class="main-content main-content-traction dr">
                <div class="main-content-inner">
                    <div class="page-content">
                        <div class="page-header">
                          <h1 class="audience"> 
                            <b>Create Campaign</b>                                
                          </h1>                            

                        </div>
                        <div class="headerclear"></div>

                        <div class="row camp_create">                          
                          <div class="col-xs-12">
                            <div class="new_push_row col-sm-8">
                              
                              <div class="form-group col-sm-12">
                                <label class="col-sm-4 control-label">Name</label>
                                <div class="col-sm-8">                                    
                                  <input type="text" class="form-control" placeholder="E.g. Buy 1 get 1 free offer!">                                  
                                </div>                                  
                              </div>
                              
                              <div class="form-group col-sm-12">
                                <label class="col-sm-4 control-label">Frequency</label>
                                <div class="col-sm-8">                                    
                                  <label class="daily">
                                    <input name="form-field-radio" type="radio" class="ace">
                                    <span class="lbl"> Daily</span>
                                  </label> 
                                  <label class="weekly">
                                    <input name="form-field-radio" type="radio" class="ace">
                                    <span class="lbl"> Weekly</span>
                                  </label>
                                  <label class="monthly">
                                    <input name="form-field-radio" type="radio" class="ace">
                                    <span class="lbl"> Monthly</span>
                                  </label>                                 
                                </div>                                  
                              </div>
                              
                            </div>
                            
                            <div class="widget-box transparent col-sm-12" id="recent-box">
                              
                              <div class="widget-header">												
                                <div class="widget-toolbar no-border">
                                  <ul class="nav nav-tabs" id="recent-tab">
                                    <li class="active"> <a data-toggle="tab" href="#type-a">Type A</a> </li>
                                    <li> <a data-toggle="tab" href="#type-b">Type B</a> </li>                                     
                                  </ul>
                                  <a id="add-more" href="#"><i class="fa fa-plus-square"></i></a>
                                </div>
                              </div>

                              <div class="widget-body">
                                <div class="widget-main padding-4">
                                  <div class="tab-content padding-8">

                                    <div id="type-a" class="tab-pane active">
                                      <div class="new_push_row col-sm-12">
                                        <div class="col-sm-8">
                                          <form method="" id="new_push_ios_form" class="ng-pristine ng-valid">

                                            <div class="form-group title">
                                              <label class="col-sm-4 control-label">Title</label>
                                              <div class="col-sm-7">                                    
                                                <input type="text" class="form-control" placeholder="E.g. Buy 1 get 1 free offer!">
                                                <p class="valid_info">40 Characters Left</p>                                    
                                                <span class="fa fa-smile-o" data-rel="tooltip" data-trigger="hover" data-placement="top" data-original-title="Insert Emoji"></span>
                                              </div>                                  
                                            </div>

                                            <div class="form-group message">
                                              <label class="col-sm-4 control-label">Message</label>
                                              <div class="col-sm-7">
                                                <textarea class="autosize-transition form-control" placeholder="Enter your Message here"></textarea>
                                                <p class="valid_info">160 Characters Left</p>
                                                <span class="fa fa-smile-o" data-rel="tooltip" data-trigger="hover" data-placement="top" data-original-title="Insert Emoji"></span>
                                              </div>
                                            </div>
                                            
                                            <div class="form-group upload_image">
                                              <label class="col-sm-4 control-label">Image(Optional) </label>
                                              <div class="col-sm-7">
                                                <label class="ace-file-input">
                                                  <input type="file" id="id-input-file-2">
                                                  <span class="ace-file-container" data-title="Upload"> <span class="ace-file-name" data-title="Enter Image URL"><i class=" ace-icon fa fa-upload"></i></span> </span>
                                                  <a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
                                                  <p class="valid_info">Only .jpg .png upto 600x300 40kb supported.</p>
                                              </div>
                                            </div>                                                                                         
                                            
                                            <div class="form-group target_audience">
                                              <label class="col-sm-4 control-label">Target Audience </label>
                                              <div class="col-sm-7">
                                                <select placeholder="Target Audience" data-placeholder="All Users" class="form-control">
                                                  <option value=""> Select or add audience </option>
                                                </select>
                                                <a class="go btn_wave" data-toggle="modal" data-target="#add_audience">Add <i class="fa fa-plus"></i></a>
                                                <span class="fa fa-search" data-rel="tooltip" data-trigger="hover" data-placement="top" data-original-title="Review Audience"></span>
                                              </div>                                 
                                            </div>

                                            <div class="form-group t-a-t-f">
                                              <label class="col-sm-4 control-label">Target Audience Time-frame <i class="fa fa-info-circle" data-rel="tooltip" data-trigger="hover" data-placement="top" data-original-title="Reach out to audience from a specific timeframe"></i> </label>
                                              <div class="col-sm-7">
                                                <select id="" name="" data-placeholder="All Users" class="form-control">
                                                  <option value=""> Select Time-frame </option>
                                                </select>
                                              </div>                                 
                                            </div>

                                            <div class="form-group schedule">
                                              <label class="col-sm-4 control-label">Schedule Date &AMP; Time</label>
                                              <div class="col-sm-7">
                                                <input type="text" class="form-control" placeholder="" value="30-Aug-2015 - 05-Sep-2016">
                                                <i class="fa fa-calendar"></i>
                                                <p class="valid_info">Scheduled pushed are delivered as per recipant local time</p>
                                              </div>
                                            </div>                                          
                                            
                                              <div class="form-group category">
                                                <label class="col-sm-4 control-label">Script</label>
                                                <div class="col-sm-7">
                                                  <div class="apns">
                                                    <label class="">
                                                      <input class="ace" type="checkbox" name="listCheck"> 
                                                      <span class="lbl"> Enable Offline Campaign </span>
                                                    </label>
                                                  </div>
                                                  <textarea class="autosize-transition form-control" placeholder="Hi, you have got a 50% off on Hindi Add-on pack on your Videocon d2h"></textarea>                                                  
                                                </div>                                  
                                              </div>
                                            
                                              <div class="deep_links">
                                                <div class="form-group deep_links_url">
                                                  <label class="col-sm-4 control-label">Deep Link(Optional)
                                                    <i class="fa fa-info-circle" data-rel="tooltip" data-trigger="hover" data-placement="top" data-original-title="Destination URL"></i></label>
                                                  <div class="col-sm-7">
                                                    <input type="text" class="form-control" placeholder="E.g. http://www.url.here.com">
                                                  </div>
                                                </div>

                                                <div class="form-group cd_link">
                                                  <label class="col-sm-4 control-label">Custom Deep Link KVPs(Optional) <i class="fa fa-info-circle" data-rel="tooltip" data-trigger="hover" data-placement="top" data-original-title="Description Pending"></i></label>
                                                  <div class="col-sm-7">
                                                    <input id="" class="col-xs-5" type="text" maxlength="35" placeholder="Enter Key">
                                                    <input id="" class="col-xs-5" type="text" maxlength="35" placeholder="Enter Value">
                                                    <a href="" class="btn_add">
                                                      <i class="fa fa-plus-circle" data-rel="tooltip" data-trigger="hover" data-placement="top" data-original-title="Add Key Value Pairs"></i>
                                                    </a>
                                                  </div>
                                                </div>
                                              </div>

                                          </form>
                                        </div>
                                        <div class="col-sm-4">                              
                                          
                                          <div class="phone_andr"> 
                                            <img src="../assets/images/Android Phone Template.png" alt=""> 
                                            <div class="notif_area">
                                              <div class="notif_area_head">
                                                <span class="logo"><img src="../assets/images/m-symbol-200x200.png" alt=""></span>
                                                <span class="title">
                                                  <h6>Notification Title</h6>
                                                  <p>Notification message that appears partially </p>
                                                </span>
                                              </div>
                                              <p><img src="../assets/images/previewimage.png" alt=""></p>
                                            </div>
                                          </div>
                                          
                                          <div class="audi_info_andr">
                                            <p>Audience Size:</p>
                                            <span>1,000,000</span>
                                            <p>Target Reach</p>
                                            <span>200,000</span>
                                            <p>Overall Audience CVR</p>
                                            <span>4.13%</span>
                                            <p>Estimated Activations</p>
                                            <span>41,300</span>
                                          </div>                              
                                        </div>
                                        <hr>
                                        <div class=" col-sm-12 new_push_ios_row_foot">
                                          <a class="btn btn_schedule btn_wave">Activate</a>
                                          <a class="btn btn_test_push_ios btn_wave" href="#" data-toggle="modal" data-target="#test-push-ios">Test Push</a>                              
                                          <a class="btn btn_cancel btn_wave" href="#" data-dismiss="modal">Cancel</a>
                                        </div>

                                      </div>
                                    </div>

                                    <div id="type-b" class="tab-pane">
                                      member-tab

                                    </div><!-- /.#member-tab -->

                                    <div id="add-more" class="tab-pane">
                                      comment-tab
                                    </div>

                                  </div>
                                </div><!-- /.widget-main -->
                              </div><!-- /.widget-body -->
                            </div><!-- /.widget-box -->
										
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
<script src="../assets/qb/js/demo-plugins.js" type="text/javascript"></script>
<script src="../assets/qb/js/demo.js" type="text/javascript"></script>

<script>
  $(document).ready(function(){     
  
   $(".notif_area").on("click" , function(){
     $(this).toggleClass("notif_area_expd" );
   });
  });
</script>

  </body> 
</html>


