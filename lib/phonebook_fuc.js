

//function parsejson add sucess
function done_parseJSON(data){
	if(data!=""){
		var objData = jQuery.parseJSON(data);
		if(objData["status"]=="true"){
			alert(objData["msg"]);
			location.reload();
		}else{
			alert(objData["msg"]);
		}
	}
	return false;
}

//function เพิ่มข้อมูล
function addphonebook(){
	var _addphonebook = $("#addphonebook").serialize();
	//alert(_addphonebook);
	$.ajax({ type:"post",url:"ajax.php",data:_addphonebook,cache:false}).done(function(data){
		done_parseJSON(data);
	});
}

//function แก้ไขข้อมูล
function editphonebook(){
	var _editphonebook = $("#editphonebook").serialize();
	//alert(_editphonebook);
	$.ajax({ type:"post",url:"ajax.php",data:_editphonebook,cache:false}).done(function(data){
		done_parseJSON(data);
	});
}

//delete_book
function delete_(id){
   var text_con=confirm("Confirm Delete ??");
   if (text_con==true)
   {
      $.ajax({ type:"post",url:"ajax.php",data:{"delete_book_one":id},cache:false}).done(function(data){
		done_parseJSON(data);
	});
   }
   else
   {
      return false;
   }
	
}

//function เพิ่มข้อมูล
function login(){
	var login = $("#login-form").serialize();
	//alert(login);
	$.ajax({ type:"post",url:"ajax.php",data:login,cache:false}).done(function(data){
		done_parseJSON(data);
		 $('#login-form')[0].reset();
	});
}

