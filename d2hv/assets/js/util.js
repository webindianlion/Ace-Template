var campObj = {
    setCampId: function (campId) { //set camp id into session storage on page refresh
        if (typeof (Storage) !== "undefined") {
            sessionStorage.setItem("cId", campId);
        } else {
            // Sorry! No Web Storage support.
            alert("NO support for storage by browser, Please update your browser.");
        }
    },
    makePreSelectedApp:function () {//make pre selected app drop down
    var appOS = $('#app_dropdown option:selected').attr('name');
//        var cId = sessionStorage.getItem("cId");
        //set selected app name infront of report type title.
        if (sessionStorage.getItem("cId") != 0) { //0 state edit/add media source handling
        $('#appname').html('<small>'+$('#app_dropdown option:selected').text()+'</small>');
      if (appOS != 'fa-null') {
        $('#appname').prepend("<i class='fa " + appOS + "'></i>");
      }
        }
    }, 
    setAssetsUrl:function(cid, app_id) {
        var editAppSdk     = angular.element('#edit_appsdk');
        var addMediaSource = angular.element('#add_media_source');
        var addAppLink     = $('#editaddapplink');
        if (typeof crmActive !== 'undefined' && 1 === crmActive) {//for crm active tab defined in crm/crm-sidebar.php 
            editAppSdk.attr('href', editAppSdk.attr('href')+'?cid='+cid+'&appid='+app_id); //edit app
            addMediaSource.attr('href', addMediaSource.attr('href')+'?cId='+cid); //add new push
        } else {
            editAppSdk.attr('href', editAppSdk.attr('href')+'?cid='+cid+'&appid='+app_id); //edit app
            addMediaSource.attr('href', addMediaSource.attr('href')+'?cid='+cid+'&r=1'); //add media source
        }
        addAppLink.show();
        if (cid === 0) { //0 state edit/add media source handling
            addAppLink.hide();
        }
    },
    renderModalBox:function(msg, icon, msgtype, crossButton, redirectUrl) {//This modal box for common use.
        var popupHtm = '<div id="cover"></div>';
        popupHtm += '<div class=popup-inner>';
        popupHtm += '<div class="popup-wrapper row">';
        if (crossButton === 'yes') {
          popupHtm += '<div class=aff-modal-header>\n\
                  <a href="javascript:" class="hideModelBox">&times;</a>\n\
                  </div>';
          }
        popupHtm += '<div class=error-icon><img  src="' +''+"./assets/image/erroricon.svg"+  '"  /></div>';
        popupHtm += '<div class=error-heading>' + msgtype + '</div>';
        popupHtm += '<div class="popUpContent">'+msg+'</div>'; // Place all content to be shown in the popup in this div 
        popupHtm += '<div class="btn-ok">Ok</div>';

        popupHtm += '</div>';
        popupHtm += '</div>';

        $("#outPopUp").html(popupHtm);

        $("#outPopUp").on('click', ".hideModelBox, .btn-ok", function() {
          $(this).parents('#outPopUp').addClass('hide');
          $(this).find(".popUpContent").empty();   
          if (redirectUrl !== '')  {
              window.location.href = redirectUrl;
          }
        }).removeClass("hide"); //Hide madal box on clicking ok or cross icon
      },
      setNoDataFoundUrl:function() {//set url for no data found same as help and support.
        $('#no_data_found').attr('href', $('#footer_support').attr('href'));
      },
      TitleCase:function(str) {
       return str.toLowerCase().replace(/(^[a-z]| [a-z]|-[a-z])/g, 
        function($1){
            return $1.toUpperCase();
        });
      } 
};

//calendar picker button function 
function renderCalender(obj) {
    var d = {top: $(obj).offset().top + $(obj).outerHeight(), lft: $(obj).offset().left};
    $('.daterangepicker').toggle().css('top', d.top);
    if ($(obj).closest('.adv').hasClass('has-error')) {
        $(obj).closest('.adv').find('div.help-block').remove();
        $(obj).closest('.adv').removeClass('has-error');
    }
}

/**
 *  @Method       formatMoney
 *  @Description  This methos for display mesage on the push title hover
 */
formatMoney = function (c, d, t) {
    var n = this,
            c = isNaN(c = Math.abs(c)) ? 2 : c,
            d = d == undefined ? "." : d,
            t = t == undefined ? "," : t,
            s = n < 0 ? "-" : "",
            i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
            j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};
