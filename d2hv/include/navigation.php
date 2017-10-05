<div id="navbar" class="navbar navbar-default navbar-fixed-top ace-save-state">

<div id="navbar" class="navbar navbar-default navbar-fixed-top ace-save-state ng-scope">
  <div class="navbar-container ace-save-state" id="navbar-container">
       <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
        <span class="sr-only">Toggle sidebar</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
      <a class="navbar-header pull-left" href="#" target="_blank" title="Visit mTraction.com">
        <img alt="mTraction" src="https://uat-console.mtraction.com/v/assets/image/mtractionlogo.svg" class="logo">
      </a>
    </div>
    <div id="affl-navbar-menu" class="sidebar1 navbar-collapse collapse" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true" aria-expanded="true">
      <nav role="navigation" class="navbar-menu pull-left">
        <ul class="nav navbar-nav">
          <li class="<?php if($currentPage =='subscribers'){echo 'active';}?>"> 
            <a id="" href="subscriber_list.php" class="btn_wave">Subscriber </a> 
          </li>
          <li class="<?php if($currentPage =='audience'){echo 'active';}?>">
            <a id="" href="audience_list.php" class="btn_wave ng-scope">Campaigns</a>
         </li>
          <li class="">  </li>
         <li> 
           <a id="myapps_link_analytics" title="" href="business_rule.php" class="btn_wave ng-scope">Recommendations</a>
         </li>
         <li> 
           <a id="myapps_link_analytics" title="" href="commerce.php" class="btn_wave ng-scope">Commerce</a>
         </li>
        </ul>
      </nav>
    </div>
    <div class="navbar-buttons navbar-header pull-right" role="navigation">
      <ul class="nav ace-nav notification">
        <li>
          <a data-toggle="dropdown" href="javascript:void(0);" class="dropdown-toggle dropdown-toggle-user-aff">
            <i class="ace-icon fa fa-credit-card"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-user-aff billing">
            <li>
              <h4 class="title">Current Usage: <span class="blue">Sep' 16</span></h4>
              <span billig-info=""><div class="ng-scope"><p> Installs: <span class="txtrt fltrt blue"> 0 </span></p><p> Extra: <span class="txtrt fltrt blue"> 0 </span></p><p class="bill_total"><span class="bold"> Total: </span><span class="txtrt fltrt blue">0</span></p></div><div class="ng-scope"><p> Data Points: <span class="txtrt fltrt blue"> 0 </span></p><p> Extra: <span class="txtrt fltrt blue"> 0 </span></p><p class="bill_total"><span class="bold"> Total: </span><span class="txtrt fltrt blue">0</span></p></div></span>
              <p class="rsp">
                <a id="billing_history_link" href="#" class="ablue btn_wave ng-scope">Billing History</a>
              </p>
            </li>
          </ul>
        </li>
        
        <li data-rel="tooltip" data-placement="bottom" title="" data-original-title="Help &amp; Support">
          <a class="dropdown-toggle" href="" target="_blank">
            <i class="ace-icon fa fa-question-circle "></i>
          </a>
        </li>

        <li>
          <a data-toggle="dropdown" href="javascript:void(0);" class="dropdown-toggle dropdown-toggle-user-aff">
            <i class="ace-icon fa fa-user"></i>
            <i class="ace-icon fa fa-angle-down"></i>
          </a>

          <ul class="dropdown-menu dropdown-menu-user-aff">
            <li>
              <h4 class="title"> Account Details</h4>
              <span class="uid">
                <p><b>Name:</b><br><span data-ng-bind="fname" class="ng-binding">mTraction Demo</span></p>
                <p><b>Email:</b><br><span data-ng-bind="email" class="ng-binding">demo@mtraction.com</span></p>
              </span>
             <p class="rsp">
                <a id="userProfile_link" href="#" class="ablue btn_wave ng-scope">Edit User Details</a>
              </p>
              <p class="rsp">
                <a id="testDevice_link" href="#" class="agrey btn_wave ng-scope">Test Devices</a>
              </p>
              <p class="logout"><a id="logoutlink" class="btn_wave" href="#">Logout<i class="fa fa-sign-out"></i></a></p>
            </li>
          </ul>

        </li>
      </ul>
    </div>
  </div>
</div>
