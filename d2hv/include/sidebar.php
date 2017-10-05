<script type="text/javascript">
   var campId = 1472825073;
     
   if (campId !== '') {
    sessionStorage.setItem('cId', campId);
   }
   try {
    ace.settings.loadState('sidebar')
   } catch (e) {
   }
</script>

<div id="sidebar" class="sidebar  responsive    ace-save-state  push_away" data-sidebar="true">
<div class="sidebar-view-report">					
    <form class="ng-pristine ng-valid">
        <div class="form-group form-group-view-report">
            <label class="col-sm-12 control-label no-padding-right"> View reports for </label>
            <div data-ng-controller="analyticsApplicationController" class="ng-scope">
            <div class="col-sm-10 test-app" id="app_dropdown_wrapper" data-container="body" onmouseenter="$(this).tooltip('show')" data-rel="tooltip" data-placement="top" title="" data-original-title="List of available Apps">
              
              <select class="form-control select2-hidden-accessible" data-placeholder="Select App" id="app_dropdown1" data-width="auto" tabindex="-1" aria-hidden="true">  
                 <option name="fa-apple" value="fa-apple" id="">iOS</option>              
                 <option name="fa-android" value="fa-android" id="">Videocon d2h</option>
              </select>
            </div>
            <analytics-application></analytics-application><!--prepare the drop down for app defined in analyticsAppDirective.js-->
            </div>                
            <a class="col-sm-3 add-app btn_wave" href="#" target="_blank" data-rel="tooltip" data-placement="top" title="" data-original-title="Add App"><i class="fa fa-plus"></i></a>
        </div>               
    </form>
    <p id="editaddapplink"><a class="edit" href="#" target="_blank" id="edit_appsdk"><i class="fa fa-pencil-square-o"></i> Edit</a> | <a class="add-media" id="add_media_source" href="#" target="_blank"><i class="fa fa-plus"></i> Add Media Source</a></p>
</div><!-- /.sidebar-shortcuts -->

<!--sidebar navigation controller defined in analyticsAppController.js-->
<ul class="traction-nav nav nav-list  ng-scope" data-ng-controller="analyticsSideNavigationController">
    <li class="active">
        <a href="camp_overview.php"> <i class="menu-icon fa fa-tachometer"></i> <span class="menu-text">Overview </span> </a>
    </li>
    <li class="">
        <a href="camp_create.php"> <i class="menu-icon fa fa-calendar-check-o"></i> <span class="menu-text">Create Campaign</span> </a>
    </li>
    <li class="">
        <a href="#"> <i class="menu-icon fa fa-clock-o"></i> <span class="menu-text"> Campaign Report </span> </a>
    </li>
				<li class="">
        <a href="audience_list.php"> <i class="menu-icon fa fa-money"></i> <span class="menu-text"> Audience List </span> </a>
    </li>
</ul>

<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>

<div class="test-mode-controler">					
    <label class="control-label"> Test-Mode <i class="fa fa-info-circle" data-rel="tooltip" data-placement="top" title="" data-original-title="View test-device data only"></i>
    </label>                
    <div class="frequency-toggle">
        <input name="switch-field-freq" id="testmodeon" class="ace-icon ace ace-switch ace-switch-6" type="checkbox" data-ng-click="testModeOn();">  
        <span class="lbl"></span>                                        
    </div>
</div>            
</div>
