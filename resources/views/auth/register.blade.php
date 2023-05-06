<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="{{asset('admin/vendors/images/apple-touch-icon.png')}}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="{{asset('admin/vendors/images/favicon-32x32.png')}}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="{{asset('admin/vendors/images/favicon-16x16.png')}}"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/styles/core.css')}}" />
		<link
			rel="stylesheet"
			type="text/css"
			href="{{asset('admin/vendors/styles/icon-font.min.css')}}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{asset('src/plugins/jquery-steps/jquery.steps.css')}}"
		/>
		<link rel="stylesheet" type="text/css" href="{{asset('admin/vendors/styles/style.css')}}" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>

	<body class="login-page">
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="login.html">
						<img src="{{asset('admin/vendors/images/deskapp-logo.svg')}}" alt="" />
					</a>
				</div>
				<div class="login-menu">
					<ul>
						<li><a href="login.html">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div
			class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center"
		>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="{{asset('admin/vendors/images/register-page-img.png')}}" alt="" />
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-primary">SignUp</h2>
							</div>
							<form action="/register" method="POST">
                                {{csrf_field()}}
                                <div class="form-group row">
												<label class="col-sm-4 col-form-label">Email Address*</label>
												<div class="col-sm-8">
													<input name="email" type="email" class="form-control">
												</div>
											</div>
                                <div class="form-group row">
												<label class="col-sm-4 col-form-label">First name</label>
												<div class="col-sm-8">
													<input name="first_name" type="text" class="form-control">
												</div>
											</div>
                                <div class="form-group row">
												<label class="col-sm-4 col-form-label">Last name</label>
												<div class="col-sm-8">
													<input name="last_name" type="text" class="form-control">
												</div>
											</div>
                                <div class="form-group row">
												<label class="col-sm-4 col-form-label">Password*</label>
												<div class="col-sm-8">
													<input name="password" type="password" class="form-control">
												</div>
											</div>
                                <div class="form-group row">
												<label class="col-sm-4 col-form-label">Comfirm Password*</label>
												<div class="col-sm-8">
													<input name="comfirm_password" type="password" class="form-control">
												</div>
											</div>
								<div class="row">
									<div class="col-sm-12">
                                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Register">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	
				
		<!-- welcome modal end -->
		<!-- js -->
		<script src="{{asset('admin/vendors/scripts/core.js')}}"></script>
		<script src="{{asset('admin/vendors/scripts/script.min.js')}}"></script>
		<script src="{{asset('admin/vendors/scripts/process.js')}}"></script>
		<script src="{{asset('admin/vendors/scripts/layout-settings.js')}}"></script>
		<script src="{{asset('admin/src/plugins/jquery-steps/jquery.steps.js')}}"></script>
		<script src="{{asset('admin/vendors/scripts/steps-setting.js')}}"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
