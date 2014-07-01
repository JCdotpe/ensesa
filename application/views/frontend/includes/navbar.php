	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Project name</a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="glass dropdown">
						<a id="nav-dashboard" href="" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-user"></i>
							Dashboard
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="<?php echo base_url('index.php/auth/users_list') ?>"> Users List</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/auth/create_user') ?>"> Create User</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Settings</a>
					</li>
					<li class="glass dropdown">
						<a id="nav-user" href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-user"></i>  
							Profile
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="<?php 
										$user = $this->ion_auth->user()->row();
										echo base_url('index.php/auth/edit_user/'.$user->id); ?>">
										<i class="fa fa-gear"></i> Editar Perfil
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('index.php/auth/change_password'); ?>">
									<i class="fa fa-key"></i> Cambiar contraseña
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?php echo base_url('index.php/auth/logout'); ?>">Logout</a>
					</li>
				</ul>
				<form class="navbar-form navbar-right">
					<input type="text" class="form-control" placeholder="Search...">
				</form>
			</div>
		</div>
	</div>