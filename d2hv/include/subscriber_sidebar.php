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
            </div>                
            <a class="col-sm-3 add-app btn_wave" href="#" target="_blank" data-rel="tooltip" data-placement="top" title="" data-original-title="Add App"><i class="fa fa-plus"></i></a>
        </div>               
    </form>
    <p id="editaddapplink"><a class="edit" href="#" target="_blank" id="edit_appsdk"><i class="fa fa-pencil-square-o"></i> Edit</a> | <a class="add-media" id="add_media_source" href="#" target="_blank"><i class="fa fa-plus"></i> Add Media Source</a></p>
</div><!-- /.sidebar-shortcuts -->

<!--sidebar navigation controller defined in analyticsAppController.js-->
<ul class="traction-nav nav nav-list  ng-scope" data-ng-controller="analyticsSideNavigationController">
    <li class="<?php if($sidebarcurrentPage =='overview'){echo 'active';}?>">
        <a href="overview.php"> <i class="menu-icon fa fa-tachometer"></i> <span class="menu-text">Overview </span> </a>
    </li>
    <li class="<?php if($sidebarcurrentPage =='subscriberlist'){echo 'active';}?>">
        <a href="subscriber_list.php"> <i class="menu-icon fa fa-calendar-check-o"></i> <span class="menu-text">Subscriber List</span> </a>
    </li>
     <li class="<?php if($sidebarcurrentPage =='cohorts'){echo 'active';}?>">
        <a href="cohorts.php"> <i class="menu-icon fa fa-cubes"></i> <span class="menu-text">Cohorts </span> </a>
    </li>
    <li class="<?php if($sidebarcurrentPage =='createreport'){echo 'active';}?>">
        <a href="create_report.php"> <i class="menu-icon fa fa-calendar-check-o"></i> <span class="menu-text">Create Report </span> </a>
    </li>    
     <li class="open<?php //if($sidebarcurrentPage =='chalknduster'){echo 'open';}?>">
        <a href="" class="dropdown-toggle"><i class="menu-icon fa fa-calendar-check-o"></i><span class="menu-text">Saved Reports </span><b class="arrow fa fa-caret-down"></b></a>
        <ul class="submenu">
            <li class="<?php if($sidebarcurrentPage =='chalknduster'){echo 'active';}?>">
                <a href="chalk_n_duster.php"> <i class="menu-icon fa fa-calendar-check-o"></i> <span class="menu-text">Chalk N Duster </span> </a>
            </li>
        </ul>
    </li>
     
</ul>

<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>
          
</div>
