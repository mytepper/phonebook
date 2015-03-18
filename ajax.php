<?php
require_once('class/Class_PDO.php');
require_once("class/class_fn.php");
#
#เข้าสู่ระบบ
#
if(isset($_REQUEST["login"])){
	if(!empty($_REQUEST["username"]) and !empty($_REQUEST["password"])){
		$username  = stripslashes($_REQUEST["username"]);
		$password = md5(sha1(stripslashes($_REQUEST["password"])));
		$rs = $db->fetchRow("SELECT * FROM tb_user WHERE user='$username' AND password='$password' ");
		if($rs){
			//print_r($rs);
			$_SESSION["login_id"] = $rs["id"];
			$return  = array("status"=>"true","msg"=>"Login sucess");
			print_r(json_encode($return));
		}else{
			$return  = array("status"=>"false","msg"=>"Username or Password Incorrect !");
			print_r(json_encode($return));
		}
	}
}


#
#เพิ่มข้อมูล
#
if(isset($_REQUEST["_addphonebook"])){

	//print_r(json_encode($_REQUEST));
	$data = array(
		"name"=>fn::clean($_REQUEST["name"]),
		"email"=>$_REQUEST["mail"],
		"mobile"=>fn::clean($_REQUEST["mobile"]),
		"phone"=>fn::clean($_REQUEST["phone"])
		);
	if($db->insert("tb_book",$data)){
		#put json
		$rs = $db->select('tb_book', '*', 'id!=:c', array(':c'=>0), "id DESC", "0, 100000");
		file_put_contents('data/phone-book.json', json_encode($rs));
		#put json
		$return  = array("status"=>"true","msg"=>"Saved...");
		print_r(json_encode($return));
	}else{
		$return  = array("status"=>"false","msg"=>"Error Can't Save data...");
		print_r(json_encode($return));
	}
	exit();

}

if(isset($_REQUEST["_editphonebook"])){
	//print_r(json_encode($_REQUEST));
	$data = array(
		"name"=>fn::clean($_REQUEST["name"]),
		"email"=>$_REQUEST["mail"],
		"mobile"=>fn::clean($_REQUEST["mobile"]),
		"phone"=>fn::clean($_REQUEST["phone"])
		);
	if($db->update("tb_book",$data,"id=:id",array(":id"=>$_REQUEST["id"]))){
		#put json
		$rs = $db->select('tb_book', '*', 'id!=:c', array(':c'=>0), "id DESC", "0, 100000");
		file_put_contents('data/phone-book.json', json_encode($rs));
		#put json
		$return  = array("status"=>"true","msg"=>"Saved...");
		print_r(json_encode($return));
	}else{
		$return  = array("status"=>"false","msg"=>"Error Can't Save data...");
		print_r(json_encode($return));
	}
	exit();

}

#
#Delete Book
#

if(isset($_REQUEST["delete_book_one"])){
	if(is_numeric($_REQUEST["delete_book_one"])){
		$db->delete('tb_book', "id=:id" , array(':id' => $_REQUEST["delete_book_one"]));
		#put json
		$rs = $db->select('tb_book', '*', 'id!=:c', array(':c'=>0), "id DESC", "0, 100000");
		file_put_contents('data/phone-book.json', json_encode($rs));
		#put json
		$return  = array("status"=>"true","msg"=>"Deleted...");
		print_r(json_encode($return));
	}else{
		$return  = array("status"=>"false","msg"=>"Error Can't Delete data...");
		print_r(json_encode($return));
	}

}

?>