<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
			<a href="/anita/admin/index.php" class="navbar-brand" >Anita Admin</a>
			<ul class="nav navbar-nav">

				<li><a href="stores.php">Stores</a></li>
				<li><a href="categories.php">Categories</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="restore.php">Archived</a></li>
				<?php if(has_permission('admin')):?>
				<li><a href="users.php">Users</a></li>
				<?php endif;?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle ="dropdown"> Hello <?=$user_data['first'];?> !
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="change_password.php"> Change Password</a></li>
						<li><a href="logout.php">Log Out</a></li>
						</nav>
						</ul>
				</li>
			</ul>
		</div>
