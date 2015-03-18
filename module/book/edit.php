<?php
if(isset($_GET["id"]) and is_numeric($_GET['id'])){
$rs = $db->fetchRow("select * from tb_book where id='".$_GET["id"]."' ");
?>
<div class="row">
	<div class="col-md-12">
		<div class="alert alert-info" role="alert">
			<h4> Book / Edit </h4>
		</div>
			<div class="content-box-large">
				<div class="panel-body">
					<div class="content-box-large">
						<div class="panel-body">
							<form action="" method="post" id="editphonebook" data-toggle="validator" role="form">
								<div class="form-group">
									<input type="text" value="<?php echo $rs["name"];?>" name="name"  class="form-control" placeholder="Name. Ex John" maxlength="50" required>
								</div>
								<div class="form-group">
									<input type="email" value="<?php echo $rs["email"];?>" name="mail"  class="form-control" placeholder="E-mail. John@gmail.com" maxlength="50" required>
								</div>
								<div class="form-group">
									<input type="text" value="<?php echo $rs["mobile"];?>" name="mobile"  class="form-control" placeholder="Mobile. 093xxxxxxx" pattern="[0-9]{10}" maxlength="10" required>
								</div>
								<div class="form-group">
									<input type="text" value="<?php echo $rs["phone"];?>" name="phone"  class="form-control" placeholder="phone. 053xxxxxx" pattern="[0-9]{9}" maxlength="10">
								</div>
								<input type="hidden" name="_editphonebook">
								<input type="hidden" name="id" value="<?php echo $rs["id"];?>">
								<button class="btn btn-primary" type="submit"  onclick=""> <i class="glyphicon glyphicon-floppy-disk"></i> Save</button>
							</form>
						</div>
		
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }?>