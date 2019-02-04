<!DOCTYPE html>
<html lang="en">

@include('partial.head')

<body>
		
	<div id="page">
		
	@include('partial.header')

	<main class="pattern">
		<section class="hero_single version_2">
			<div class="wrapper">

				@include('partial.search')

			</div>
		</section>
		<!-- /hero_single -->
		
		<div class="main_categories">
			<div class="container">
				<ul class="clearfix">
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-shop"></i>
							<h3>Shops</h3>
						</a>
					</li>
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-lodging"></i>
							<h3>Hotels</h3>
						</a>
					</li>
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-restaurant"></i>
							<h3>Restaurants</h3>
						</a>
					</li>
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-bar"></i>
							<h3>Bars</h3>
						</a>
					</li>
					<li>
						<a href="grid-listings-filterscol.html">
							<i class="icon-dot-3"></i>
							<h3>More</h3>
						</a>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /main_categories -->
		
		@include('partial.list')
		
		<div class="call_section">
			<div class="wrapper">
				<canvas id="hero-canvas" width="1920" height="1080"></canvas>
			</div>
			<!-- /wrapper -->
		</div>
		<!--/call_section-->
		
	</main>
	<!-- /main -->

    @include('partial.footer')

	</div>
	<!-- page -->
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
				<div class="text-center">
					Don’t have an account? <a href="register.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
    
    @include('partial.script')

</body>
</html>