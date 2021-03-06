<!DOCTYPE html>
<html lang="en">

<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?= load_view('auth.includes.header') ?>

</head>

<body style="background-color: #666666;">

	<div class="limiter">

		<div class="container-login100">

			<div class="wrap-login100">
				<form class="login100-form validate-form" action="<?= url('register/register') ?>" method="POST">
					<span class="login100-form-title p-b-43">
						Register to continue
					</span>


					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<input class="input100" type="text" name="name">
						<span class="focus-input100"></span>
						<span class="label-input100">Name</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password Confirmation is required">
						<input class="input100" type="password" name="password_confirmation">
						<span class="focus-input100"></span>
						<span class="label-input100">Password Confirmation</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
					
						<div>
							<a href="<?= url('/login/show') ?>" class="txt1">
								Login
							</a>
						</div>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('<?= asset('img/auth/bg-01.jpg') ?>');">
					<?php if (isset($errors)) : ?>
						<?= load_view('auth.error', compact('errors')) ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<?= load_view('auth.includes.footer') ?>

</body>

</html>