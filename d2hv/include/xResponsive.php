<?php 
 //if (!defined("ROOT_URL")) define("ROOT_URL", "http://localhost/d2h/");
?>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css" type="text/css"/>
<link rel="stylesheet" href="../assets/css/ace.css" type="text/css"/>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/qb/css/bootstrap-select.css" type="text/css"/>
<link rel="stylesheet" href="../assets/css/select2.min.css" type="text/css"/>
<link rel="stylesheet" href="../assets/css/chosen.css" type="text/css"/>
<link rel="stylesheet" href="../assets/css/daterangepicker.css" />
<link rel="stylesheet" href="../assets/css/multiple-select.css" />
<link rel="stylesheet" href="../assets/css/modalbox.css" />
<link rel="stylesheet" href="../assets/css/login.css" type="text/css"/>
<link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css" type="text/css"/>
<link rel="stylesheet" href="../assets/qb/css/query-builder.css"  type="text/css"/>
<link rel="stylesheet" href="../assets/css/push_crm.css" type="text/css"/>
<link rel="stylesheet" href="../assets/css/traction.css" type="text/css"/>

<script src="../assets/js/jquery-1.12.3.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.js" type="text/javascript"></script>
<script src="../assets/qb/js/bootstrap-select.js" type="text/javascript"></script>
<script src="../assets/js/moment.min.js"></script>
<script src="../assets/js/ace.js" type="text/javascript"></script>
<script src="../assets/js/ace.basics.js" type="text/javascript"></script>
<script src="../assets/js/ace.sidebar.js" type="text/javascript"></script>
<script src="../assets/js/chosen.jquery.min.js" type="text/javascript"></script>
<script src="../assets/js/select2.full.min.js" type="text/javascript"></script>
<script src="../assets/js/jquery.ui.core.js"></script>
<script src="../assets/js/daterangepicker.js"></script>
<script src="../assets/js/modalbox.js"></script>
<script src="../assets/js/util.js"></script>
<script src="../assets/js/multiple-select.js"></script>


<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="../assets/js/anlytic_chart.js" type="text/javascript"></script>
<script>
      $(document).ready(function () {
        $(document).on('show.bs.modal', '.modal', function (event) {
            var zIndex = 9999991 + (10 * $('.modal:visible').length);
            $(this).css('z-index', zIndex);
            setTimeout(function() {
                $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
            }, 0);
        });
        });
    </script>
<script type="text/javascript">
 function button_animation() {     // alert('function call');
   var ink, d, x, y;
	$(".btn_wave").click(function(e){//alert('button clicked..');
    if($(this).find(".ink").length === 0){
        $(this).prepend("<span class='ink'></span>");
    }         
    ink = $(this).find(".ink");
    ink.removeClass("animate");     
    if(!ink.height() && !ink.width()){
        d = Math.max($(this).outerWidth(), $(this).outerHeight());
        ink.css({height: d, width: d});
    }     
    x = e.pageX - $(this).offset().left - ink.width()/2;
    y = e.pageY - $(this).offset().top - ink.height()/2;     
    ink.css({top: y+'px', left: x+'px'}).addClass("animate");
});  
 }
</script>
<script type="text/javascript">
 jQuery(function ($) {
     $('[data-rel=tooltip]').tooltip();
     $('[data-toggle=tooltip]').tooltip();
 });
</script>
<script type="text/javascript">
 jQuery(function ($) {


     if (!ace.vars['touch']) {
         $('.chosen-select').chosen({allow_single_deselect: true});
         //resize the chosen on window resize

         $(window)
                 .off('resize.chosen')
                 .on('resize.chosen', function () {
                     $('.chosen-select').each(function () {
                         var $this = $(this);
                         $this.next().css({'width': $this.parent().width()});
                     })
                 }).trigger('resize.chosen');
         //resize chosen on sidebar collapse/expand
         $(document).on('settings.ace.chosen', function (e, event_name, event_val) {
             if (event_name != 'sidebar_collapsed')
     return;
             $('.chosen-select').each(function () {
                 var $this = $(this);
                 $this.next().css({'width': $this.parent().width()});
             })
         });


         $('#chosen-multiple-style .btn').on('click', function (e) {
             var target = $(this).find('input[type=radio]');
             var which = parseInt(target.val());
             if (which == 2)
     $('#form-field-select-4').addClass('tag-input-style');
             else
     $('#form-field-select-4').removeClass('tag-input-style');
         });
     }


 });
</script>


<script>
  
  $(document).ready(function(){
    
    $('input[name="daterange"]').daterangepicker({
    "showWeekNumbers": true,
    "ranges": {
        "Today": [
            "2016-09-23T07:13:02.813Z",
            "2016-09-23T07:13:02.813Z"
        ],
        "Yesterday": [
            "2016-09-22T07:13:02.813Z",
            "2016-09-22T07:13:02.813Z"
        ],
        "Last 7 Days": [
            "2016-09-17T07:13:02.813Z",
            "2016-09-23T07:13:02.813Z"
        ],
        "Last 30 Days": [
            "2016-08-25T07:13:02.813Z",
            "2016-09-23T07:13:02.813Z"
        ],
        "This Month": [
            "2016-08-31T18:30:00.000Z",
            "2016-09-30T18:29:59.999Z"
        ],
        "Last Month": [
            "2016-07-31T18:30:00.000Z",
            "2016-08-31T18:29:59.999Z"
        ]
    },
    "startDate": "09/16/2016",
    "endDate": "09/22/2016",
    "opens": "left"
}, function(start, end, label) {
  console.log("New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')");
});
    
  });

</script>

<script>   
  $(document).ready(function(){    
      function formatState (state) {
        if (!state.id) { return state.text; }
        var $state = $(
          '<span><i class="fa fa-apple"></i>'+ ' ' + state.text + '</span>'
        );
        return $state;
      };
      $("#app_dropdown1").select2({
        templateResult: formatState,
        templateSelection: formatState
      });
  });
</script>
