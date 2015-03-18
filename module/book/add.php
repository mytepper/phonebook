<div class="modal fade" id="_addphonebook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-envelope"></i> New Contact</h4>
			</div>
			<div class="modal-body">
				<form action="" method="post" id="addphonebook" data-toggle="validator" role="form">
					<div class="form-group">
						<input type="text" name="name"  class="form-control" placeholder="Name. Ex John" maxlength="50" required>
					</div>
					<div class="form-group">
						<input type="email" name="mail"  class="form-control" placeholder="E-mail. John@gmail.com" maxlength="50" required>
					</div>
					<div class="form-group">
						<input type="text" name="mobile"  class="form-control" placeholder="Mobile. 093xxxxxxx" pattern="[0-9]{10}" maxlength="10" required>
					</div>
					<div class="form-group">
						<input type="text" name="phone"  class="form-control" placeholder="phone. 053xxxxxx" pattern="[0-9]{9}" maxlength="10">
					</div>
					
				</div>
				<div class="modal-footer">
					<input type="hidden" name="_addphonebook">
					<button class="btn btn-primary" type="submit"  onclick=""> <i class="glyphicon glyphicon-floppy-disk"></i> Save</button>
				</div>
			</form>
		</div>
	</div>
</div>
</div>