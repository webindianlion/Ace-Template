/**
 * Copyright (c) 2012 AD2C INDIA PVT. LTD
 * 
 *
 * @package       AD2CAMPAIGN
 * @copyright     AD2C INDIA PVT. LTD
 * @author        Prashant Verma <prashant@ad2c.co>
 * @license       Proprietary
 * @Description   Defined date picker method.   
 *                
 */
$(function() {

  $("#sdate").datepicker({dateFormat: 'yy-mm-dd', maxDate: -1});
  $("#edate").datepicker({dateFormat: 'yy-mm-dd', maxDate: -1});

});