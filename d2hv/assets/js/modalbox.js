/**
 * Copyright (c) 2014 AD2C INDIA PVT. LTD.
 *
 * @package       AD2CAMPAIGN
 * @copyright     AD2C INDIA PVT. LTD.
 * @author        suryadev <surya@affle.co>
 * @license       Proprietary
 * @Description   JS to control the modelbox functionality.
 *
 */

/* @ Method : renderModalBox
 * @ Create custome popup and can use by putting a div : <div id="outPopUp" class='hide'></div> in page where model box need to show and remove hide class where it is uses .
 * @ Place content inside the <div class="popUpContent"></div>
 * How To Implement : $(".popUpContent").html(Write Here Error....).parents("#outPopUp").removeClass("hide")
 */

redirect_url = "";

/* @ Method : renderModalBox
 * @ Description : This modal box for common use.
 */
function renderModalBox(msg, icon, msgtype) {

  var popupHtm = '<div id="cover"></div>';
  popupHtm += '<div class=popup-inner>';
  popupHtm += '<div class="popup-wrapper row">';
  popupHtm += '<div class=aff-modal-header><a href="javascript:" class="hideModelBox">&times;</a></div>';
  popupHtm += '<div class=error-icon><img  src="' +TRACTION_ASSETS_URL+"/image/"+icon + '"  /></div>';
  popupHtm += '<div class=error-heading>' + msgtype + '</div>';
  popupHtm += '<div class="popUpContent">'+msg+'</div>'; // Place all content to be shown in the popup in this div 
  popupHtm += '<div class="btn-ok btn_wave">Ok</div>';

  popupHtm += '</div>';
  popupHtm += '</div>';

  $("#outPopUp").html(popupHtm);

  $("#outPopUp").on('click', ".hideModelBox, .btn-ok", function() {
    $(this).parents('#outPopUp').addClass('hide');
    $(this).find(".popUpContent").empty();   
  }).removeClass("hide"); //Hide madal box on clicking ok or cross icon
}

/* @ Method : renderModalBoxForLogin
 * @ Description : This modal box apply for showing error only in login moule
 */
function renderConfirmationModalBox(message, btnYes, btnCancel, custionMsg, closeBtn) {  
  var btn_yes = btnYes != undefined ? btnYes : "Yes";
  var btn_cancel = btnCancel != undefined ? btnCancel : "No";
 
  var calcelsBoxHtm = '<div id="cover"></div>';
  calcelsBoxHtm += '<div class=popup-inner>';
  calcelsBoxHtm += '<div class="popup-wrapper row">';
  calcelsBoxHtm += '<div class=aff-modal-header><a href="javascript:" class="hideModelBox"><i class="ace-icon fa fa-times---"></i>' + (closeBtn ? '' : '&times;') + '</a></div>';
  calcelsBoxHtm += '<div class=error-icon><img  src="' + TRACTION_ASSETS_URL + '/image/erroricon.svg"/></div>';

  calcelsBoxHtm += '<div class=error-heading>' + (custionMsg && custionMsg.length ? custionMsg : CANCEL_WARNING) + '</div>';
  calcelsBoxHtm += '<div class="popUpContent">' + message + '</div>';

  calcelsBoxHtm += '<div class=btn-conrol>';
  calcelsBoxHtm += btn_yes.length ? '<div class="btn-yes btn_wave">' + btn_yes + '</div>' : '';
  calcelsBoxHtm += btn_cancel.length ? '<div class="btn-cancel btn_wave">' + btn_cancel + '</div>' : '';
  calcelsBoxHtm += '</div>';

  calcelsBoxHtm += '</div>';
  calcelsBoxHtm += '</div>';
  $("#outPopUp").html(calcelsBoxHtm).removeClass("hide");

  $("#outPopUp").on('click', ".hideModelBox, .btn-cancel", function() {
    $(this).parents('#outPopUp').addClass('hide');
    $(this).find(".popUpContent").empty();
  });
}

/* @ Method : renderModalBoxForLogin
 * @ Description : This modal box apply for showing error only in login moule
 */
function renderModalBoxForLogin(msg) {
  $(".loginError-block .error-message").html(msg).parent().removeClass('hide');
  $("form .form-control").on('focus', function() {
    $(".loginError-block .error-message").html('').parent().addClass('hide');
  });
}

/* @ Method : renderModalBoxForSuccessMsg
 * @ Description : This modal box apply only in login moule
 */
function renderModalBoxForSuccessMsg(msg) {
  $(".loginSuccess-block .success-message").html(msg).parent().removeClass('hide');
  $("form .form-control").on('focus', function() {
    $(".loginSuccess-block .success-message").html('').parent().addClass('hide');
  });
}

/* @ Method : renderWelcomeModalBox
 * @ Description : This modal box for welcome to the user when he/she visit first time.
 */
function renderWelcomeModalBox(msg, icon, msgtype){

  var popupHtm = '<div id="cover"></div>';
  popupHtm += '<div class="popup-inner welcome">';
  popupHtm += '<div class=popup-wrapper>';
  popupHtm += '<div class=aff-modal-header></a><a href="javascript:" class="hideModelBox"><i class="ace-icon fa fa-times"></i></a></div>';
  popupHtm += '<div class=error-icon><img  src="' + AD2CAMPAIGN_PLATFORM_URL + "/common/image/" + icon + '"  /></div>';
  popupHtm += '<div class=error-heading>' + msgtype + '</div>';
  popupHtm += '<div class="popUpContent">' + msg + '</div>'; // Place all content to be shown in the popup in this div 
  popupHtm += '<div class="btn-conrol"><a href="' + AD2CAMPAIGN_PLATFORM_URL + __ADVERTISER_DIR__ + '/advertiser_add.php" class="welcome-popup"><i class="fa fa-angle-right"></i>Please click here to begin</a></div>';

  popupHtm += '</div>';
  popupHtm += '</div>';

  $("#outPopUp").html(popupHtm);

  $("#outPopUp").on('click', ".hideModelBox, .btn-ok", function(){
    $(this).parents('#outPopUp').addClass('hide');
    $(this).find(".popUpContent").empty();
  }).removeClass("hide"); //Hide madal box on clicking ok or cross icon
}

/* @ Method : renderModalBoxAnalytics
 * @ Description : This modal box for analytics dashboard.
 */
function renderModalBoxAnalytics(msg, icon, msgtype){

  var popupHtm = '<div id="cover"></div>';
  popupHtm += '<div class=popup-inner>';
  popupHtm += '<div class="popup-wrapper analytics-error">';
  popupHtm += '<div class=aff-modal-header><a href="javascript:" class="hideModelBox"><i class="ace-icon fa fa-times"></i></a></div>';
  popupHtm += '<div class=error-icon><img  src="' + AD2CAMPAIGN_PLATFORM_URL + "/common/image/" + icon + '"  /></div>';
  popupHtm += '<div class=error-heading>' + msgtype + '</div>';
  popupHtm += '<div class="popUpContent">' + msg + '</div>'; // Place all content to be shown in the popup in this div 
  popupHtm += '<div class="btn-conrol"><div class="btn-ok">OK</div></div>';

  popupHtm += '</div>';
  popupHtm += '</div>';

  $("#outPopUp").html(popupHtm);

  $("#outPopUp").on('click', ".hideModelBox, .btn-ok", function(){
    $(this).parents('#outPopUp').addClass('hide');
    $(this).find(".popUpContent").empty();
  }).removeClass("hide"); //Hide madal box on clicking ok or cross icon
}