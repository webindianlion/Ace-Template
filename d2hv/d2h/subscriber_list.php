<?php $currentPage = 'subscribers'; 
$sidebarcurrentPage = 'subscriberlist';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Subscriber List</title>
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

            <div class="main-content main-content-traction dr subscriber_list">
                <div class="main-content-inner">
                    <div class="page-content">
                        <div class="page-header">
                            <h1 class="audience"> 
                                <b>Subscriber List</b>
                                <span id="appname">
                                    <i class="fa fa-android"></i>
                                    <small>Test App</small>
                                </span>
                            </h1>
                            <div class="pull-right">
                                <div class="form-group">
                                    <div onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" title="" data-original-title="">
                                        <select  class="chosen-select form-control ng-pristine ng-untouched ng-valid" id="form-field-select-3" name="" data-width="auto" data-placeholder="All Packs" data-minimum-results-for-search="10" tabindex="-1" style="display: none;">
                                            <option value="all">All Packs</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" title="" data-original-title="">
                                        <select  class="chosen-select form-control ng-pristine ng-untouched ng-valid" id="form-field-select-3" name="" data-width="auto" data-placeholder="Northern Region / Rajasthan" data-minimum-results-for-search="10" tabindex="-1" style="display: none;">
                                            <option value="all">Northern Region / Rajasthan </option>
                                        </select>

                                    </div>
                                </div>
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
                                <a class="go">Go</a>
                            </div>

                        </div>
                        <div class="headerclear"></div>

                        <div class="row subsc_list">
                            <div class="tabbable">                              
                                <div class="tab-content">
                                    <div class="subscriber_graph"> 
                                        <img src="../assets/images/subscriber-list.jpg" alt=""> 
                                    </div>

                                    <div class="dr-table nu sub_list">
                                        <div class="dataTables_wrapper">
                                            <table class="display dataTable">
                                                <tbody>
                                                    <tr class="odd" role="row"> 
                                                        <td>123456</td>
                                                        <td class="sorting_1">Amit Jain</td>
                                                        <td>New Gold, Gold Maxi</td>
                                                        <td>1 Oct 2011</td>
                                                        <td>Jaipur</td>
                                                        <td>Y</td>
                                                        <td>amit.jain@xyz.com</td>
                                                        <td>+919876543210</td>
                                                        <td class="no-sort action">
                                                            <a href="#"><i class="finane-pencil fa fa-files-o" onmouseenter="$(this).tooltip('show')" class="fa fa-info-circle" data-rel="tooltip" data-placement="top" title="" data-original-title=""></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr class="even" role="row"> 
                                                        <td>123467</td>
                                                        <td class="sorting_1">Anil Sharma</td>
                                                        <td>Super Gold</td>
                                                        <td>1 Dec 2010</td>
                                                        <td>Udaipur</td>
                                                        <td>N</td>
                                                        <td>anils@xyz.com</td>
                                                        <td>+919012345678</td>
                                                        <td class="no-sort action">
                                                            <a href="#"><i class="finane-pencil fa fa-files-o" onmouseenter="$(this).tooltip('show')" class="fa fa-info-circle" data-rel="tooltip" data-placement="top" title="" data-original-title=""></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd" role="row"> 
                                                        <td>123487</td>
                                                        <td class="sorting_1">Karthik</td>
                                                        <td>Super Gold</td>
                                                        <td>21 Sept 2011</td>
                                                        <td>Jaipur</td>
                                                        <td>Y</td>
                                                        <td>kk@xyz.com</td>
                                                        <td>+919876541087</td>
                                                        <td class="no-sort action">
                                                            <a href="#"><i class="finane-pencil fa fa-files-o" onmouseenter="$(this).tooltip('show')" class="fa fa-info-circle" data-rel="tooltip" data-placement="top" title="" data-original-title=""></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr class="even" role="row"> 
                                                        <td>323486</td>
                                                        <td class="sorting_1">Ram</td>
                                                        <td>Platnium, Flexi ROI</td>
                                                        <td>20 Nov 2011</td>
                                                        <td>Jodhpur</td>
                                                        <td>N</td>
                                                        <td>ram@xyz.com</td>
                                                        <td>+91956665313210</td>
                                                        <td class="no-sort action">
                                                            <a href="#"><i class="finane-pencil fa fa-files-o" onmouseenter="$(this).tooltip('show')" class="fa fa-info-circle" data-rel="tooltip" data-placement="top" title="" data-original-title=""></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr class="odd" role="row"> 
                                                        <td>323476</td>
                                                        <td class="sorting_1">Ramesh Jalan</td>
                                                        <td>Platnium, Flexi ROI</td>
                                                        <td>11 Jan 2011</td>
                                                        <td>Ajmer</td>
                                                        <td>Y</td>
                                                        <td>rjalan@xyz.com</td>
                                                        <td>+919856543210</td>
                                                        <td class="no-sort action">
                                                            <a href="#"><i class="finane-pencil fa fa-files-o" onmouseenter="$(this).tooltip('show')" class="fa fa-info-circle" data-rel="tooltip" data-placement="top" title="" data-original-title=""></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr class="even" role="row"> 
                                                        <td>123486</td>
                                                        <td class="sorting_1">Suresh Nair</td>
                                                        <td>New Diamond, Gold Maxi</td>
                                                        <td>1 Oct 2011</td>
                                                        <td>Kota</td>
                                                        <td>N</td>
                                                        <td>snair@xyz.com</td>
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
                                                        <th class="sorting">ACTIVATED ON</th>
                                                        <th class="sorting">LOCATION</th>
                                                        <th class="sorting">CONNECTED</th>
                                                        <th class="sorting">EMAIL</th>
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
        </div> 
    </body> 
</html>
