<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Adia Vishaka Login</title>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="" />
		<meta property="og:url" content="h" />
		<meta property="og:site_name" content="" />
		<link rel="canonical" href="h" />
		<link rel="shortcut icon" href="" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

        {{Html::style('assets/plugins/global/plugins.bundle.css')}}
        {{Html::style('assets/css/style.bundle.css')}}

	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image:url('{{ url('img/bg.jpg') }}');background-size:cover;">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!--begin::Logo-->
					<a href="../../demo1/dist/index.html" class="mb-12">
						<img alt="Logo" src="assets/media/logos/logo-1.svg" class="h-40px" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="#">
							<!--begin::Heading-->
							<div class="text-center mb-10">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Masuk Ke Adia Vishaka</h1>
								<!--end::Title-->
							</div>
							<!--begin::Heading-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label fs-6 fw-bolder text-dark">Email</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" type="text" name="email" id="email" autocomplete="off" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack mb-2">
									<!--begin::Label-->
									<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
									<!--end::Label-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" id="password" />
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<!--begin::Submit button-->
								<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">Masuk</span>
									<span class="indicator-progress">Silahkan Tunggu....
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
        {{ Html::script('assets/plugins/global/plugins.bundle.js') }}
        {{ Html::script('assets/js/scripts.bundle.js') }}
        <!-- {{ Html::script('assets/js/custom/authentication/sign-in/general.js') }} -->
	</body>
</html>
<script>
    "use strict";
    var KTSigninGeneral = function() {
        var t, e, i, email, password;
        return {
            init: function() {
                t = document.querySelector("#kt_sign_in_form"), e = document.querySelector("#kt_sign_in_submit"), i = FormValidation.formValidation(t, {
                    fields: {
                        email: {
                            validators: {
                                notEmpty: {
                                    message: "email tidak boleh kosong !"
                                },
                                emailAddress: {
                                    message: "Format email yang anda masukan salah !"
                                }
                            }
                        },
                        password: {
                            validators: {
                                notEmpty: {
                                    message: "Password tidak boleh kosong !"
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row"
                        })
                    }
                }), e.addEventListener("click", (function(n) {
                    n.preventDefault(), i.validate().then((function(i) {
                        "Valid" == i ? (e.setAttribute("data-kt-indicator", "on"), e.disabled = !0, setTimeout((function() {
                            e.removeAttribute("data-kt-indicator"), e.disabled = !1, 
							email = $('#email').val()
            			 	password = $('#password').val()
							$.ajax({
								url: "{{route('login_action')}}",
								type: 'POST',
								dataType: "JSON",
								timeout: 10000,
								data: {
									email: email,
									password: password,
									_token:"{{ csrf_token() }}",
								},
								success: function (data) {
									if (data.status=='success') {
										Swal.fire({
											title: data.msg,
											timer: 1500,
											timerProgressBar: true,
											didOpen: () => {
												Swal.showLoading()
												const b = Swal.getHtmlContainer().querySelector('b')
												timerInterval = setInterval(() => {
												b.textContent = Swal.getTimerLeft()
												}, 100)
											},
											willClose: () => {
													location.href = "{{route('dashboard')}}"
											}
											})
									} else {
										Swal.fire({
										text:data.msg,
										icon:"error",buttonsStyling:!1,confirmButtonText:"Ok",customClass:{confirmButton:"btn btn-primary"}
									})
									}
								}, error: function () {
									Swal.fire({
										text:"Username atau password yang anda masukan tidak sesuai, Silahkan coba lagi !",
										icon:"error",buttonsStyling:!1,confirmButtonText:"Ok",customClass:{confirmButton:"btn btn-primary"}
									})
								}
							})							
                            // Swal.fire({
                            //     text: "You have successfully logged in!",
                            //     icon: "success",
                            //     buttonsStyling: !1,
                            //     confirmButtonText: "Ya, Mengerti!",
                            //     customClass: {
                            //         confirmButton: "btn btn-primary"
                            //     }
                            // }).then((function(e) {
                            //     e.isConfirmed && (t.querySelector('[name="email"]').value = "", t.querySelector('[name="password"]').value = "")
                            // }))
                        }), 2e3)) : Swal.fire({
                            text: "Data yang anda masukan salah atau tidak lengkap, Silahkan coba lagi !",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ya, Mengerti!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        })
                    }))
                }))
            }
        }
    }();
    KTUtil.onDOMContentLoaded((function() {
        KTSigninGeneral.init()
    }));
</script>