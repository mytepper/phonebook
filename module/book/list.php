<div class="row">
	<div class="col-md-12">
		<div class="alert alert-info" role="alert">
			<h4> Book </h4>
		</div>
		<form method="post" action="">
			<div class="content-box-large">
				<div class="panel-heading">
					<div class="panel-options">
						<button name="update_book" style="submit" id="update" class="btn btn-info">Update</button>
						<button name="delete_book" style="submit" onclick="return confirm('Confirm ??');" id="delete" class="btn btn-danger">Delete</button>
					</div>
				</div>
				<div class="panel-body">
					<div class="content-box-large">
						<div class="panel-body">
							<table data-toggle="table" id="table" data-show-columns="true" data-search="true" data-show-refresh="true" data-show-toggle="true" data-show-export="true" data-pagination="true" data-height="400">
								<thead>
									<tr>
										<th>Delete</th>
										<th data-field="name">Name</th>
										<th data-field="mail">E-mail</th>
										<th data-field="mobile">Mobile</th>
										<th data-field="phone">Phone</th>
										<th>Edit</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php
									$rs = $db->select('tb_book', '*', 'id!=:c', array(':c'=>0), "id DESC", "0, 100000");
									if($rs){
									foreach ($rs as $key => $value) {
									?>
									<tr>
										<td>
											<input type="checkbox" name="del[]" class="form-control" value="<?php echo $value["id"];?>">
											<input type="hidden" name="id[]" class="form-control" value="<?php echo $value["id"];?>">
										</td>
										<td>
											<div class="form-group">
												<input type="text" value="<?php echo $value["name"];?>" name="name[]" data-name="name"  class="form-control" placeholder="Name. Ex John" maxlength="50" required>
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="email" value="<?php echo $value["email"];?>" name="mail[]" data-name="mail"  class="form-control" placeholder="E-mail. John@gmail.com" maxlength="50" required>
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" value="<?php echo $value["mobile"];?>" name="mobile[]" data-name="mobile"  class="form-control" placeholder="Mobile. 093xxxxxxx" pattern="[0-9]{10}" maxlength="10" required>
											</div>
										</td>
										<td>
											<div class="form-group">
												<input type="text" value="<?php echo $value["phone"];?>" name="phone[]" data-name="phone"  class="form-control" placeholder="phone. 053xxxxxx" pattern="[0-9]{9}" maxlength="10">
											</div>
										</td>
										<td>
											<a href="?url=book_edit&id=<?php echo $value["id"];?>" class="btn btn-info">Edit/View</a>
										</td>
										<td>
											<a onclick="delete_('<?php echo $value["id"];?>');" class="btn btn-danger">Delete</a>
										</td>
									</tr>
									<?php }}?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>