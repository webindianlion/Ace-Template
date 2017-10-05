<?php
$currentPage = 'subscribers';
$sidebarcurrentPage = 'chalknduster';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Chalk N Duster</title>
        <meta name="description" content="Chalk N Duster" />
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

            <div class="main-content main-content-traction dr chalk_duster_list">
                <div class="main-content-inner">
                    <div class="page-content">
                        <div class="page-header">
                            <h1 class="audience"> 
                                <b>Chalk N Duster</b>
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

                        <div class="row chalkduster">
                            <div class="tabbable">                              
                                <div class="tab-content">
                                    <div class="dr-control-left pull-left">
                                        <div class="form-group">
                                            <div onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" title="" data-original-title="">
                                                <select  class="chosen-select form-control ng-pristine ng-untouched ng-valid" id="form-field-select-3" name="" data-width="auto" data-placeholder="Bar Graph" data-minimum-results-for-search="10" tabindex="-1" style="display: none;">
                                                    <option value="Bar Graph">Bar Graph</option>
                                                    <option value="Donut Graph">Donut Graph</option>
                                                    <option value="Funnel Graph">Funnel Graph</option>
                                                    <option value="Pie Chart">Pie Chart</option>
                                                    <option value="Stacked Bar Graph">Stacked Bar Graph</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" title="" data-original-title="">
                                                <select  class="chosen-select form-control ng-pristine ng-untouched ng-valid" id="form-field-select-3" name="" data-width="auto" data-placeholder="X Axis" data-minimum-results-for-search="10" tabindex="-1" style="display: none;">
                                                    <option value="Date Viewed">Date Viewed</option>
                                                    <option value="Avg. Time Viewed">Avg. Time Viewed</option>
                                                    <option value="Email">Email</option>
                                                    <option value="Show Schedule">Show Schedule</option>                                            
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" title="" data-original-title="">
                                                <select  class="chosen-select form-control ng-pristine ng-untouched ng-valid" id="form-field-select-3" name="" data-width="auto" data-placeholder="Y Axis" data-minimum-results-for-search="10" tabindex="-1" style="display: none;">
                                                    <option value="# Viewed"># Viewed </option>
                                                    <option value="Name">Name</option>
                                                    <option value="Activated On">Activated On</option>
                                                    <option value="Subscriber Id">Subscriber Id</option>                                            
                                                </select>
                                            </div>
                                        </div>                                        
                                        <a class="go">Go</a>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="subscriber_graph"> 
                                        <img src="../assets/images/savedreport.png" alt=""> 
                                    </div>
                                    <div class="clear"></div>
                                    <div class="pull-left col-sm-12">
                                    <div class="form-group">
                                        <select id="ms" multiple="multiple">
                                            <option value="Activated On">Activated On</option>
                                            <option value="Avg. Time Viewed">Avg. Time Viewed</option>
                                            <option value="Email">Email</option>
                                            <option value="Show Schedule">Show Schedule</option>      
                                        </select>
                                    </div>  
                                        <div class="pull-right">
                                            <div class="dcsv pull-right">
                        <a class="btn-dcsv btn_wave" data-rel="tooltip" onmouseenter="$(this).tooltip('show')" data-placement="top" title="" data-original-title="Download CSV" ><i class="fa fa-download"></i></a>
                    </div>
                                            <div class="form-group form-group-p-search pull-right">
                                    <input type="search" class="form-control" placeholder="Search..." aria-controls="DataTables_Table_0">
                                  </div>
                                        
                                        </div>
                                    </div>
                                    
                                    <div class="clear"></div>
                                    <div class="dr-table nu chalk_list">
                                        <div class="dataTables_wrapper">
                                            <table class="display dataTable">
                                                <tbody>
                                                    <tr class="odd" role="row"> 
                                                        <td>123456</td>
                                                        <td class="sorting_1">Amit Jain</td>
                                                        <td>New Gold, Gold Maxi</td>
                                                        <td>23 Sep 2016</td>
                                                        <td>2</td>
                                                        <td>+919876543210</td>
                                                        <td class="no-sort action">
                                                            <a href="#"><i class="finane-pencil fa fa-files-o" onmouseenter="$(this).tooltip('show')" class="fa fa-info-circle" data-rel="tooltip" data-placement="top" title="" data-original-title=""></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr class="even" role="row"> 
                                                        <td>123467</td>
                                                        <td class="sorting_1">Anil Sharma</td>
                                                        <td>Super Gold</td>
                                                        <td>24 Sep 2016</td>
                                                        <td>1</td>
                                                        <td>+919012345678</td>
                                                        <td class="no-sort action">
                                                            <a href="#"><i class="finane-pencil fa fa-files-o" onmouseenter="$(this).tooltip('show')" class="fa fa-info-circle" data-rel="tooltip" data-placement="top" title="" data-original-title=""></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd" role="row"> 
                                                        <td>123487</td>
                                                        <td class="sorting_1">Karthik</td>
                                                        <td>Super Gold</td>
                                                        <td>25 Sep 2016</td>
                                                        <td>1</td>
                                                        <td>+919876541087</td>
                                                        <td class="no-sort action">
                                                            <a href="#"><i class="finane-pencil fa fa-files-o" onmouseenter="$(this).tooltip('show')" class="fa fa-info-circle" data-rel="tooltip" data-placement="top" title="" data-original-title=""></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr class="even" role="row"> 
                                                        <td>323486</td>
                                                        <td class="sorting_1">Ram</td>
                                                        <td>Platnium, Flexi ROI</td>
                                                        <td>26 Sep 2016</td>
                                                        <td>4</td>
                                                        <td>+91956665313210</td>
                                                        <td class="no-sort action">
                                                            <a href="#"><i class="finane-pencil fa fa-files-o" onmouseenter="$(this).tooltip('show')" class="fa fa-info-circle" data-rel="tooltip" data-placement="top" title="" data-original-title=""></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd" role="row"> 
                                                        <td>323476</td>
                                                        <td class="sorting_1">Ramesh Jalan</td>
                                                        <td>Platnium, Flexi ROI</td>
                                                        <td>27 Sep 2016</td>
                                                        <td>4</td>
                                                        <td>+919856543210</td>
                                                        <td class="no-sort action">
                                                            <a href="#"><i class="finane-pencil fa fa-files-o" onmouseenter="$(this).tooltip('show')" class="fa fa-info-circle" data-rel="tooltip" data-placement="top" title="" data-original-title=""></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr class="even" role="row"> 
                                                        <td>123486</td>
                                                        <td class="sorting_1">Suresh Nair</td>
                                                        <td>New Diamond, Gold Maxi</td>
                                                        <td>28 Sep 2016</td>
                                                        <td>2</td>
                                                        <td>+919656543210</td>
                                                        <td class="no-sort action">
                                                            <a href="#"><i class="finane-pencil fa fa-files-o" onmouseenter="$(this).tooltip('show')" class="fa fa-info-circle" data-rel="tooltip" data-placement="top" title="" data-original-title=""></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting">SUBSCRIBER ID</th>
                                                        <th class="sorting_desc">NAME</th>
                                                        <th class="sorting">PACK NAME</th>
                                                        <th class="sorting">DATE VIEWED</th>
                                                        <th class="sorting"># VIEWED</th>
                                                        <th class="sorting">CONTACT #</th>                                                        
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
            </div>






            <?php include_once('../include/footer.php'); ?>
            <script>
                $("select#ms").multipleSelect({
                    placeholder: "Add Columns",
                    width: '100%'
                });
            </script>

        </div> 
    </body> 
</html>
