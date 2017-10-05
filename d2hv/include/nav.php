<div id="navbar" class="navbar navbar-default navbar-fixed-top ace-save-state">

<div class="navbar-container ace-save-state ng-scope" id="navbar-container" data-ng-controller="navigationController">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="navbar-header pull-left">
        <a href="#" class="navbar-brand" id="header_navigation_logo" target="_blank" title="Visit mTraction.com">
            <img src="./assets/image/mtractionlogo.svg" class="logo">
					</a>
				</div>
    <div id="affl-navbar-menu" class="sidebar1 navbar-collapse collapse" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true" aria-expanded="true">
          <nav role="navigation" class="navbar-menu pull-left">
            <ul class="nav navbar-nav">
                    <li class=" active"> <a href="#" id="reports_navigation" class="btn_wave">Reports </a> </li>
              <li class=""> <a href="#" class="btn_wave">My Apps</a> </li>
            </ul>
          </nav>
        </div>
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
          <ul class="nav ace-nav notification">
            <li>
              <a data-toggle="dropdown" href="#" class="dropdown-toggle dropdown-toggle-user-aff">
                <i class="ace-icon fa fa-credit-card"></i>
              </a>



              <!--current usage controller defined in analyticsApplicationController.js-->
              <ul class="dropdown-menu dropdown-menu-user-aff  billing ng-scope" id="currentUsage" data-ng-controller="currentUsageController">            
                <li>
                            <h4 class="title">Current Usage: <span class="blue ng-binding" data-ng-bind="usage.date">Sep' 16</span></h4>  
                            <!-- ngIf: ((usage.non_organic_installs || usage.non_organic_installs === 0) || (usage.non_organic_extra || usage.non_organic_extra === 0) || (usage.non_organic_total || usage.non_organic_total === 0)) --><div data-ng-if="((usage.non_organic_installs || usage.non_organic_installs === 0) || (usage.non_organic_extra || usage.non_organic_extra === 0) || (usage.non_organic_total || usage.non_organic_total === 0))" class="ng-scope">
														                  <!-- ngIf: usage.non_organic_installs || usage.non_organic_installs === 0 --><p data-ng-if="usage.non_organic_installs || usage.non_organic_installs === 0" class="ng-scope">Installs: <span class="txtrt fltrt blue ng-binding" data-ng-bind="usage.non_organic_installs">3012</span></p><!-- end ngIf: usage.non_organic_installs || usage.non_organic_installs === 0 -->
                                <!-- ngIf: usage.non_organic_extra || usage.non_organic_extra === 0 --><p data-ng-if="usage.non_organic_extra || usage.non_organic_extra === 0" class="ng-scope">Extra: <span class="txtrt fltrt blue ng-binding" data-ng-bind="usage.non_organic_extra">0</span></p><!-- end ngIf: usage.non_organic_extra || usage.non_organic_extra === 0 -->
                                <!-- ngIf: usage.non_organic_total || usage.non_organic_total === 0 --><p class="bill_total ng-scope" data-ng-if="usage.non_organic_total || usage.non_organic_total === 0"><span class="bold">Total: </span><span class="txtrt fltrt blue ng-binding" data-ng-bind="usage.non_organic_total">3012</span></p><!-- end ngIf: usage.non_organic_total || usage.non_organic_total === 0 -->
                            </div><!-- end ngIf: ((usage.non_organic_installs || usage.non_organic_installs === 0) || (usage.non_organic_extra || usage.non_organic_extra === 0) || (usage.non_organic_total || usage.non_organic_total === 0)) -->
                            <!-- ngIf: ((usage.data_points || usage.data_points === 0) || (usage.data_points_extra || usage.data_points_extra === 0) || (usage.data_points_total || usage.data_points_total === 0)) --><div data-ng-if="((usage.data_points || usage.data_points === 0) || (usage.data_points_extra || usage.data_points_extra === 0) || (usage.data_points_total || usage.data_points_total === 0))" class="ng-scope">
                                <!-- ngIf: usage.data_points || usage.data_points === 0 --><p data-ng-if="usage.data_points || usage.data_points === 0" class="ng-scope">Data Points: <span class="txtrt fltrt blue ng-binding" data-ng-bind="usage.data_points">372582</span></p><!-- end ngIf: usage.data_points || usage.data_points === 0 -->
                                <!-- ngIf: usage.data_points_extra || usage.data_points_extra === 0 --><p data-ng-if="usage.data_points_extra || usage.data_points_extra === 0" class="ng-scope">Extra: <span class="txtrt fltrt blue ng-binding" data-ng-bind="usage.data_points_extra">0</span></p><!-- end ngIf: usage.data_points_extra || usage.data_points_extra === 0 -->
                                <!-- ngIf: usage.data_points_total || usage.data_points_total === 0 --><p class="bill_total ng-scope" data-ng-if="usage.data_points_total || usage.data_points_total === 0"><span class="bold">Total: </span><span class="txtrt fltrt blue ng-binding" data-ng-bind="usage.data_points_total">372582</span></p><!-- end ngIf: usage.data_points_total || usage.data_points_total === 0 -->
                            </div><!-- end ngIf: ((usage.data_points || usage.data_points === 0) || (usage.data_points_extra || usage.data_points_extra === 0) || (usage.data_points_total || usage.data_points_total === 0)) -->
																												<!-- ngIf: ((usage.clicks || usage.clicks === 0) || (usage.clicks_extra || usage.clicks_extra === 0) || (usage.clicks_total || usage.clicks_total === 0)) -->
                            <p class="rsp">
                                <a ui-sref="billingHistory" class="btn_wave" href="#">Billing History</a>
                            </p>
                </li>
              </ul>
            </li>

            <li data-rel="tooltip" data-placement="bottom" title="" data-original-title="Help &amp; Support">
              <a class="dropdown-toggle" id="help_support_top_link" href="#">
                <i class="ace-icon fa fa-question-circle "></i>
              </a>
            </li>        

            <li>
              <a data-toggle="dropdown" href="#" class="dropdown-toggle dropdown-toggle-user-aff">
                <i class="ace-icon fa fa-user"></i>            
                <i class="ace-icon fa fa-angle-down"></i>
              </a>

              <ul class="dropdown-menu dropdown-menu-user-aff">            
                <li>
                  <h4 class="title"> Account Details</h4>
                  <!--<span class="pic"><img src="http://localhost/maven/maas/common/image/user-01.svg"><br><br>--->
                  
                  <span class="uid">
                      <p><b>Name:</b><br><span data-ng-bind="userName" class="ng-binding">Demo mTraction</span></p>
                    <p><b>Email:</b><br><span data-ng-bind="userEmail" class="ng-binding">demo@mtraction.com</span></p>
                  </span>
                  <p class="rsp">
                    <a ui-sref="userProfile" class="btn_wave" href="#">Go To My Account</a>
                  </p>
                  <p class="logout"><a class="btn_wave" href="#">Logout<i class="fa fa-sign-out"></i></a></p>
                </li>
              </ul>
              
            </li>
          </ul>
        </div>
        
			</div>
<div class="spacer"></div>
</div>