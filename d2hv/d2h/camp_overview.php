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
                                <b>Campaign Overview</b>                                
                            </h1>
                            <div class="pull-right">                                
                                <div class="form-group form-group-date">
                                    <div class="col-sm-12">
                                        <div class="input-group" data-container="body" onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" title="" data-original-title="Select a date-range to view it's summary">
                                            <span class="input-group-addon" onclick="renderCalender(this);">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                            <input type="text" name="daterange" id="dateRange" class="form-control" value="09/20/2016 - 09/27/2016"  />              
                                        </div>
                                    </div>                                    
                                </div>
                                <a class="go">Go</a>
                            </div>

                        </div>
                        <div class="headerclear"></div>

                        <div class="row camp_over">                          
                          <div class="col-xs-12">
                            <div class="subscriber_graph"> 
                              <img src="../assets/images/campaign_overview.png" alt=""> 
                            </div>                           
                            <a class="go down_camp_rpt"><i class="fa fa-download"></i></a>
                            <div class="dr-table nu crm-audience">
                                <div class="dataTables_wrapper">
                                    <table class="display dataTable">
                                        <tbody>

                                            <tr class="odd" role="row"> 
                                                <td>IND Vs NZ Test Cricket</td>
                                                <td><span onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">1 Sep 2016 to 20 Sep 2016</span></td>
                                                <td><span  onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">Cricket fans</span></td>
                                                <td>Push, Call Center</td>
                                                <td class="sorting_1">8,000,000</td>
                                                <td class="">4,000,000</td>
                                                <td> 50% </td>
                                                <td> $2,000,000 </td>
                                            </tr>

                                            <tr class="even" role="row"> 
                                                <td>Chalk N Duster Promo</td>
                                                <td><span onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">1 Sep 2016 to 10 Sep 2016</span></td>
                                                <td><span  onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">Juhi Chawla fans</span></td>
                                                <td>Push, Call Center, SMS</td>
                                                <td class="sorting_1">1,000,000</td>
                                                <td class="">300,000</td>
                                                <td> 30% </td>
                                                <td> $20,000 </td>
                                            </tr>

                                            <tr class="odd" role="row"> 
                                                <td>Comedy Nights with Kapil</td>
                                                <td><span onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">1 Sep 2016 to 15 Sep 2016</span></td>
                                                <td><span  onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">Comedy fans</span></td>
                                                <td>Push, Call Center</td>
                                                <td class="sorting_1">10,000,000</td>
                                                <td class="">4,000,000</td>
                                                <td> 40% </td>
                                                <td> $2,500,00 </td>
                                            </tr>

                                            <tr class="even" role="row"> 
                                                <td>Ram ki Leela Rang Layegi</td>
                                                <td><span onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">1 Sep 2016 to 20 Sep 2016</span></td>
                                                <td><span  onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">Life OK Subscribers</span></td>
                                                <td>Push, Call Center, SMS</td>
                                                <td class="sorting_1">10,000,000</td>
                                                <td class="">3,000,000</td>
                                                <td> 30% </td>
                                                <td> $8,000,000 </td>
                                            </tr>

                                            <tr class="even" role="row"> 
                                                <td>Big Boss 10</td>
                                                <td><span onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">29 Sep 2016 to 30 Oct 2016</span></td>
                                                <td><span  onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" data-original-title="">Big Boss fans, Salman Fans, Colors Subscribers</span></td>
                                                <td>Push, Call Center</td>
                                                <td class="sorting_1">8,000,000</td>
                                                <td class="">4,000,000 </td>
                                                <td> 50% </td>
                                                <td> $2,000,000 </td>
                                            </tr>

                                        </tbody>
                                        <thead>
                                            <tr role="row">                                                
                                               <th class="sorting">CAMPAIGN NAME</th>
                                                <th class="sorting">SCHEDULE</th>
                                                <th class="sorting">TARGET AUDIENCE</th>
                                                <th class="sorting_desc">CHANNEL</th>
                                                <th>ESTIMATED REACH</th>
                                                <th>CONVERSIONS</th>
                                                <th>CVR</th>
                                                <th>REVENUE</th>
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
<script src="../assets/qb/js/demo-plugins.js" type="text/javascript"></script>
<script src="../assets/qb/js/demo.js" type="text/javascript"></script>
  </body> 
</html>
