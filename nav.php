<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">PhoneBook</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="#Home" data-toggle="modal" data-target="#_addphonebook">
					<i class="glyphicon glyphicon-plus"></i> Add PhoneBook</a>
				</li>
				<li>
					<a href="?url=book_list">
					<i class="glyphicon glyphicon-book"></i> PhoneBook</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false">Data Url<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="data/phone-book.json">Json Data</a></li>
						<li><a href="data/">XML Data</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="?logout" onclick="return confirm('Logout Confirm ?');">Logout</a></li>
			</ul>
		</div>
	</div>
</nav>

