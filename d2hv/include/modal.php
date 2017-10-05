
<!------  Push Setting Android   -------->
<div class="modal fade" id="push_sett_andr" tabindex="-1" role="dialog" aria-labelledby="crm" aria-hidden="true">            
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <div class="modal-header">              
        <h4 class="modal-title" >Push Settings</h4>
      </div>            
                  
      <div class="modal-body">                  
        <form class="form-horizontal" role="form" >
          
          <div class="sec-head">
            <h4>Android Push Authorization</h4>
          </div>
                    
            <div class="form-group">
              <label class="col-sm-4 control-label" > Google API Key </label>
              <div class="col-sm-8">
                <input class="col-xs-12" type="text"  maxlength="35"  placeholder="Google API Key"  >
              </div>
            </div>       
          
          <!------    DND     -------->
          <div class="sec-head">
            <h4>Do Not Disturb (DND) Mode</h4>
          </div>
                              
          <div class="form-group">
            <label class="col-sm-4 control-label" > Start Time </label>
            <div class="col-sm-8">
              <input class="col-xs-12" type="text"  maxlength="35"  placeholder="Start Time"  >
            </div>
          </div> 

          <div class="form-group">
            <label class="col-sm-4 control-label" > End Time </label>
            <div class="col-sm-8">
              <input class="col-xs-12" type="text"  maxlength="35"  placeholder="End Time"  >
            </div>
          </div>
          
          <div class="form-group dnd-note">            
            <p><b>Note:</b> DND it set at local time of each application user</p>
          </div>
                      
        </form>
      </div>
    </div>
    <div class="btn-group"> 
      <a class="btn_next btn_wave">Save Changes</a> 
      <a class="btn_cancel btn_wave" href="#" data-dismiss="modal">Cancel</a>
    </div>
  </div>
</div>

<!------  Add Audience(  Query Builder  )   -------->
<div class="modal fade" id="add_audience" tabindex="-1" role="dialog" aria-labelledby="crm" aria-hidden="true">            
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <div class="modal-header">              
        <h4 class="modal-title">Add Audience</h4>        
      </div>            
      
      <div class="modal-body"> 
        
        <form class="form-horizontal" role="form" >
                                                 
          <div class="form-group audi_name">
            <label class="col-sm-3 control-label" > Audience Name </label>
            <div class="col-sm-7">
              <input class="col-xs-12" type="text"   placeholder="Please enter a name"  >
              <p class="valid_info">50 Characters Left</p> 
            </div>
          </div>
          
          <h4 class="rules-group-title">Audience Filter  <i class="fa fa-info-circle" data-toggle="tooltip" data-original-title="Please"></i></h4>
          <div class="query-builder form-inline" id="builder-plugins"> </div>          

        </form>  
        
      </div>
    </div>
    <div class="btn-group">      
      <a class="btn_next btn_wave" data-toggle="modal" data-target="#review_audience">Review Audience</a> 
      <a class="btn_cancel btn_wave" href="#" data-dismiss="modal">Cancel</a>
    </div>
  </div>
</div>


<!------  Review Audience OLD  -------->
<div class="modal fade" id="review_audience" tabindex="-1" role="dialog" aria-labelledby="crm" aria-hidden="true">            
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <div class="modal-header">            
        <p> Are you sure you want to add the following audience? </p>
        <h4 class="modal-title"> Audience Name</h4>
        <h5>SIZE: <span> 120,045 </span></h5>
      </div>            
      <div class="modal-body">  </div>
    </div>
    <div class="btn-group">        
      <a class="btn_cancel btn_wave" href="#" data-dismiss="modal">No</a>
      <a class="btn_next btn_wave">Yes</a>
      <p> Note: Added audiences can not be edited, you must add a new one </p>  
    </div>
  </div>
</div>

<!------  Delete Push Records  -------->
<div class="modal fade" id="caution_push_records" tabindex="-1" role="dialog" aria-labelledby="crm" aria-hidden="true">            
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <div class="modal-header">            
        <p> <img src="../assets/images/erroricon.svg" > </p>        
        <h4 class="modal-title"> Caution</h4>        
      </div>            
      <div class="modal-body">         
        <p> Are you sure you want to delete the following push records </p>        
      </div>
    </div>
    <div class="btn-group">  
      <a class="btn_next btn_wave">Delete</a>
      <a class="btn_cancel btn_wave" href="#" data-dismiss="modal">Cancel</a>       
    </div>
  </div>
</div>

<!------  Delete Audience Records  -------->
<div class="modal fade" id="caution_audience" tabindex="-1" role="dialog" aria-labelledby="crm" aria-hidden="true">            
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <div class="modal-header">            
        <p> <img src="../assets/images/erroricon.svg" > </p>        
        <h4 class="modal-title"> Caution</h4>        
      </div>            
      <div class="modal-body">         
        <p> Are you sure you want to delete the following audiences </p>        
      </div>
    </div>
    <div class="btn-group">  
      <a class="btn_next btn_wave">Delete</a>
      <a class="btn_cancel btn_wave" href="#" data-dismiss="modal">Cancel</a>       
    </div>
  </div>
</div>


<!------    CRM - Push - Test Android Push     -------->
<div class="modal fade" id="test-push-android" tabindex="-1" role="dialog" aria-labelledby="crm" aria-hidden="true">            
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <div class="modal-header">              
        <h4 class="modal-title">Send Android Test Push</h4>
        <p>Send push messages to the following test devices</p>
      </div>            
      
      <div class="modal-body">                  
        <form class="form-horizontal" role="form" >
                                                 
          <div class="test-push test-push-android">
            <table class="table dataTable" >
              
              <thead>
                <tr>
                  <th> <input type="checkbox" > </th>
                  <th class="sorting">Test Device Name</th>
                  <th class="sorting">Device ID</th>
                </tr>
              </thead>

              <tbody>
                <tr class="odd">
                  <td>                   
                    <input type="checkbox" >
                  </td>
                  <td>Nexus</td>
                  <td>393lvun456</td>                  
                </tr>
                <tr class="even">
                  <td> <input type="checkbox" > </td>
                  <td>HTC 10</td>
                  <td>937iwnld47</td>                  
                </tr>
              </tbody>
            </table>
            
          </div>
          
        </form>                
      </div>
    </div>
    <div class="btn-group">
      <div class="info_cont">
        <p> Can't find your device? <a class="" > Click here </a> to add a test device.  </p>
<!--        <p>Note: As Push Ids (GCM Ids) sometimes expire, you may need to occasionally relaunch the app and wait prior to sending test push from your test device. </p>-->
        <p>Note: Push IDs (GSM ID's) occasionally expire. In such a scenario you may have to relaunch the app on your test device and wait a few minutes before sending a test push.</p>
      </div>
      <a class="btn_next btn_wave">Send Test Push</a> 
      <a class="btn_cancel btn_wave" href="#" data-dismiss="modal">Cancel</a>
    </div>
  </div>
</div>



<!------    CRM - Push - Test iOS Push     -------->
<div class="modal fade" id="test-push-ios" tabindex="-1" role="dialog" aria-labelledby="crm" aria-hidden="true">            
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <div class="modal-header">              
        <h4 class="modal-title">Send iOS Test Push</h4>
        <p>Send push messages to the following test devices</p>
      </div>            
      
      <div class="modal-body">                  
        <form class="form-horizontal" role="form" >
                                                 
          <div class="test-push test-push-ios">
            <table class="table dataTable" >
              
              <thead>
                <tr>
                  <th> <input type="checkbox" > </th>
                  <th class="sorting">Test Device Name</th>
                  <th class="sorting">Device ID</th>
                </tr>
              </thead>

              <tbody>
                <tr class="odd">
                  <td>                   
                    <input type="checkbox" >
                  </td>
                  <td>Samsung Galaxy J7</td>
                  <td>345fgh67</td>                  
                </tr>
                <tr class="even">
                  <td> <input type="checkbox" > </td>
                  <td>iPhone 7</td>
                  <td>934jkl456</td>                  
                </tr>
              </tbody>
            </table>
            
          </div>
          
        </form>                
      </div>
    </div>
    <div class="btn-group">
      <div class="info_cont">
        <p> Can't find your device? <a class="" > Click here </a> to add a test device.  </p>        
      </div>
      <a class="btn_next btn_wave">Send Test Push</a> 
      <a class="btn_cancel btn_wave" href="#" data-dismiss="modal">Cancel</a>
    </div>
  </div>
</div>


<!------  iOS Setting Android   -------->
<div class="modal fade" id="push_sett_ios" tabindex="-1" role="dialog" aria-labelledby="crm" aria-hidden="true">            
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <div class="modal-header">              
        <h4 class="modal-title" >Push Settings</h4>
      </div>            
                  
      <div class="modal-body">                  
        <form class="form-horizontal" role="form" >
          
          <div class="sec-head">
            <h4>iOS Push Authorization</h4>
          </div>
                    
            <div class="form-group">
              <label class="col-sm-4 control-label" > Google API Key </label>
              <div class="col-sm-8">
                <input class="col-xs-12" type="text"  maxlength="35"  placeholder="Google API Key"  >
              </div>
            </div>       
          
          <!------    DND     -------->
          <div class="sec-head">
            <h4>Do Not Disturb (DND) Mode</h4>
          </div>
                              
          <div class="form-group">
            <label class="col-sm-4 control-label" > Start Time </label>
            <div class="col-sm-8">
              <input class="col-xs-12" type="text"  maxlength="35"  placeholder="Start Time"  >
            </div>
          </div> 

          <div class="form-group">
            <label class="col-sm-4 control-label" > End Time </label>
            <div class="col-sm-8">
              <input class="col-xs-12" type="text"  maxlength="35"  placeholder="End Time"  >
            </div>
          </div>
          
          <div class="form-group dnd-note">            
            <p><b>Note:</b> DND it set at local time of each application user</p>
          </div>
                      
        </form>
      </div>
    </div>
    <div class="btn-group"> 
      <a class="btn_next btn_wave">Save Changes</a> 
      <a class="btn_cancel btn_wave" href="#" data-dismiss="modal">Cancel</a>
    </div>
  </div>
</div>



<!------  Create Rule(  Query Builder  )   -------->
<div class="modal fade" id="create_rule" tabindex="-1" role="dialog" aria-labelledby="crm" aria-hidden="true">            
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <div class="modal-header">              
        <h4 class="modal-title">Create Rule</h4>        
      </div>            
      
      <div class="modal-body"> 
        
        <form class="form-horizontal" role="form" >
                                                 
          <div class="form-group audi_name">
            <label class="col-sm-3 control-label" > Audience Name </label>
            <div class="col-sm-7">
              <input class="col-xs-12" type="text"   placeholder="Please enter a name"  >
              <p class="valid_info">50 Characters Left</p> 
            </div>
          </div>
          
          <h4 class="rules-group-title">Audience Filter  <i class="fa fa-info-circle" data-toggle="tooltip" data-original-title="Please"></i></h4>
          <div class="query-builder form-inline" id="builder-plugins-create-rule"> </div>          

        </form>  
        
      </div>
    </div>
    <div class="btn-group">      
      <a class="btn_next btn_wave" data-toggle="modal" data-target="#review_audience">Review Audience</a> 
      <a class="btn_cancel btn_wave" href="#" data-dismiss="modal">Cancel</a>
    </div>
  </div>
</div>

<div id="outPopUp" class="hide ng-scope"></div>

