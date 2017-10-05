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
          <?php include_once ('../include/sidebar_recommend.php'); ?>
      </div>
      
        <div class="main-content main-content-traction dr">
                <div class="main-content-inner">
                    <div class="page-content">
                        <div class="page-header">
                          <h1 class="audience"> 
                                <b>D2H - Recommendation (Business Rules)</b>
<!--                                <span id="appname">
                                    <i class="fa fa-apple"></i>
                                    <small>Test App</small>
                                </span>-->
                            </h1>
                            <div class="add_audience">                              
                              <a class="go button_pad btn_wave"  data-toggle="modal" data-target="#create_rule"> Create Rule</a>
                            </div>

                        </div>
                        <div class="headerclear"></div>

                        <div class="row audi_dash">
                          <div class="col-xs-12">
                           <a href="" class="audi_delete  btn_wave" data-toggle="modal" data-target="#caution_audience"><i class="ace-icon fa fa-trash"></i> Delete</a>
                                  <div class="form-group form-group-p-search">
                                    <input type="search" class="form-control" placeholder="Search..." aria-controls="DataTables_Table_0">
                                  </div>

                                <div class="dr-table nu crm-audience">
                                    <div class="dataTables_wrapper">
                                        <table class="display dataTable">
                                            <tbody>
                                              
                                                <tr class="odd" role="row"> 
                                                    <td><input type="checkbox" name=""/></td>
                                                    <td><span onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">Salman Khan fans</span></td>
                                                    <td><span  onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">People who watch Salman movie and Big Boss</span></td>
                                                    <td>140,000 (35 days back)</td>
                                                    <td class="sorting_1">28 July 2016 9:00 AM</td>
                                                    <td class="no-sort action">
                                                        <a href="#"><i class="fa fa-refresh" onmouseenter="$(this).tooltip('show')" class="fa fa-info-circle" data-rel="tooltip" data-placement="top" data-original-title=""></i></a>
                                                    </td>
                                                </tr>
                                                
                                                <tr class="even" role="row"> 
                                                    <td><input type="checkbox" name=""/></td>
                                                    <td><span onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">Hindi Subscribers</span></td>
                                                    <td><span  onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">Subscribers with atleast 1 hindi channel</span></td>
                                                    <td>140,000 (35 days back)</td>
                                                    <td class="sorting_1">28 July 2016 8:00 AM</td>
                                                    <td class="no-sort action">
                                                        <a href="#"><i class="fa fa-refresh" onmouseenter="$(this).tooltip('show')" class="fa fa-info-circle" data-rel="tooltip" data-placement="top" data-original-title=""></i></a>
                                                    </td>
                                                </tr>
                                                
                                                <tr class="odd" role="row"> 
                                                    <td><input type="checkbox" name=""/></td>
                                                    <td><span onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">South pack Subscribers</span></td>
                                                    <td><span  onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">Any South pack users</span></td>
                                                    <td>140,000 (35 days back)</td>
                                                    <td class="sorting_1">28 July 2016 9:30 AM</td>
                                                    <td class="no-sort action">
                                                        <a href="#"><i class="fa fa-refresh" onmouseenter="$(this).tooltip('show')" class="fa fa-info-circle" data-rel="tooltip" data-placement="top" data-original-title=""></i></a>
                                                    </td>
                                                </tr>
                                                
                                                <tr class="even" role="row"> 
                                                    <td><input type="checkbox" name=""/></td>
                                                    <td><span onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">Comedy fans</span></td>
                                                    <td><span  onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">Comedy chanel viewers</span></td>
                                                    <td>140,000 (35 days back)</td>
                                                    <td class="sorting_1">28 July 2016 9:30 AM</td>
                                                    <td class="no-sort action">
                                                        <a href="#"><i class="fa fa-refresh" onmouseenter="$(this).tooltip('show')" class="fa fa-info-circle" data-rel="tooltip" data-placement="top" data-original-title=""></i></a>
                                                    </td>
                                                </tr>
                                                
                                                <tr class="even" role="row"> 
                                                    <td><input type="checkbox" name=""/></td>
                                                    <td><span onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">ARPU &gt; $100year</span></td>
                                                    <td><span  onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">Base plus add on pack &gt; $100/year</span></td>
                                                    <td>140,000 (35 days back)</td>
                                                    <td class="sorting_1">28 July 2016 9:30 AM</td>
                                                    <td class="no-sort action">
                                                        <a href="#"><i class="fa fa-refresh" onmouseenter="$(this).tooltip('show')" class="fa fa-info-circle" data-rel="tooltip" data-placement="top" data-original-title=""></i></a>
                                                    </td>
                                                </tr>
                                                                                                                                              
                                            </tbody>
                                            <thead>
                                                <tr role="row">
                                                    <th><input type="checkbox" name=""/></th>
                                                   <th class="sorting">AUDIENCE NAME</th>
                                                    <th class="sorting">DESCRIPTION</th>
                                                    <th class="sorting">ESTIMATED AUDIENCE SIZE</th>
                                                    <th class="sorting_desc">CREATED ON</th>
                                                    <th>ACTIONS</th>
                                                </tr>
                                            </thead>
                                        </table>

                                        <div class="clear"></div>

                                    </div></div>

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
