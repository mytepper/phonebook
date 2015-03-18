//**Dom
$(function() {
	
	//$(":input:first").focus(); 
	//data table
      //  $('#datatable').dataTable();

      //validator เพิ่มข้อมูล
      $('#addphonebook').validator().on('submit', function (e) {
	  if (e.isDefaultPrevented()) {
	   return false;
	  } else {
	   addphonebook();
	   return false;
	  }
	});

        // validator แก้ไขข้อมูล
      $('#editphonebook').validator().on('submit', function (e) {
	  if (e.isDefaultPrevented()) {
	  	//alert("xx");
	   return false;
	  } else {
	   editphonebook();
	   //alert("xx");
	   return false;
	  }
	});


        // validator แก้ไขข้อมูล
      $('#login-form').validator().on('submit', function (e) {
	  if (e.isDefaultPrevented()) {
	  	//alert("xx");
	   return false;
	  } else {
	   login();
	   //alert("xx");
	   return false;
	  }
	});

} );