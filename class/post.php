<?php
#
#update book
#
if(isset($_POST["update_book"])){
/*
echo "<pre>";
print_r($_POST);
*/
	if(count($_POST["id"])>0){
		foreach ($_POST["id"] as $key => $value) {
		 $db->update("tb_book",array("name"=>fn::clean($_POST["name"][$key]),"email"=>$_POST["mail"][$key],"mobile"=>fn::clean($_POST["mobile"][$key]),"phone"=>fn::clean($_POST["phone"][$key])),"id=:id",array(":id"=>$value));
		}
	}


	$rs = $db->select('tb_book', '*', 'id!=:c', array(':c'=>0), "id DESC", "0, 100000");

	//print_r(json_encode($rs));
	file_put_contents('data/phone-book.json', json_encode($rs));
	fn::alertgo("Updated...","?url=book_list");
}


#
#Delete Book
#
if(isset($_POST["delete_book"])){
	if(count($_POST["del"])>0){
		foreach ($_POST["del"] as $key => $value) {
			$db->delete('tb_book', "id=:id" , array(':id' => $value));
		}
	}
	fn::alertgo("Deleted...","?url=book_list");
}

?>