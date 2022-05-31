@extends('layout-admin')
@section('content')
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Selamat Datang, {{session()->get('name')}} !</h1>
									<!--end::Title-->
								</div>
								<!--end::Page title-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Toolbar-->
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Navbar-->
								<div class="card mb-5 mb-xl-10">
									<div class="card-body pt-9 pb-0">
										<!--begin::Details-->
										<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
											<!--begin: Pic-->
											<div class="me-7 mb-4">
												<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
													<img src="{{ url('assets/media/avatars/300-1.jpg') }}" alt="image" />
													<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
												</div>
											</div>
											<!--end::Pic-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<!--begin::Title-->
												<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
													<!--begin::User-->
													<div class="d-flex flex-column">
														<!--begin::Name-->
														<div class="d-flex align-items-center mb-2">
															<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">{{ session()->get('name') }}</a>
														</div>
														<!--end::Name-->
														<!--begin::Info-->
														<div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
															<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
															<span class="svg-icon svg-icon-4 me-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black" />
																	<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->{{session()->get('email')}}</a>
														</div>
														<!--end::Info-->
													</div>
													<!--end::User-->
												</div>
												<!--end::Title-->
												<!--begin::Stats-->
												<div class="d-flex flex-wrap flex-stack">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column flex-grow-1 pe-8">
														<!--begin::Stats-->
														<div class="d-flex flex-wrap">
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="4500">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-bold fs-6 text-gray-400">Content Anda</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="75">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-bold fs-6 text-gray-400">Views</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="60">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-bold fs-6 text-gray-400">Draft</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
														</div>
														<!--end::Stats-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Details-->
										<!--begin::Navs-->
										<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
											<!--begin::Nav item-->
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="#tab-overview" id="overview-tab" >Profil User</a>
											</li>
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5" href="#tab-setting" id="setting-tab" >Pengaturan</a>
											</li>
											<li class="nav-item mt-2">
												<a class="nav-link text-active-primary ms-0 me-10 py-5" href="#tab-password" id="password-tab" >Ganti Password</a>
											</li>
											<!--end::Nav item-->
										</ul>
										<!--begin::Navs-->
									</div>
								</div>
								<!--end::Navbar-->
								<div>
									<div id="body-overview"></div>
									<div id="body-setting"></div>
									<div id="body-password"></div>
								</div>

							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
@endsection
@section('script')
<script>
    $('document').ready(function(){
        let isloadProfile = false
        let isloadSetting = false
        let isloadPassword = false

        function getProfile() {
         $('#body-overview').html('<div class="card"><h2 style="text-align: center;">Loading...</h2></div>');
            $.get("{{ route('profile-overview') }}", function(data) {
                $('#body-overview').html(data);
                $('#body-overview').show();
                $('#body-setting').hide();
                $('#body-password').hide();
                $('#setting-tab').removeClass("active");
                $('#password-tab').removeClass("active");
                $('#overview-tab').addClass("active");
            });
        }
        getProfile();
        function getSetting() {
         $('#body-setting').html('<div class="card"><h2 style="text-align: center;">Loading...</h2></div>');
            $.get("{{ route('profile-setting') }}", function(data) {
                $('#body-setting').html(data);
                $('#body-setting').show();

                $('#body-overview').hide();
                $('#body-password').hide();
                
                $('#overview-tab').removeClass("active");
                $('#password-tab').removeClass("active");
                $('#setting-tab').addClass("active");
            });
        }
        function getPassword() {
         $('#body-password').html('<div class="card"><h2 style="text-align: center;">Loading...</h2></div>');
            $.get("{{ route('change-password') }}", function(data) {
                $('#body-password').html(data);
                $('#body-password').show();
                $('#body-overview').hide();
                $('#body-setting').hide();

                $('#overview-tab').removeClass("active");
                $('#setting-tab').removeClass("active");
                $('#password-tab').addClass("active");
            });
        }
        $("#setting-tab").click(function (){
            if(!isloadSetting) getSetting()
        })
        $("#overview-tab").click(function (){
            console.log("click")
            if(!isloadProfile) getProfile()
        })
        $("#password-tab").click(function (){
            console.log("click")
            if(!isloadPassword) getPassword()
        })
    });
</script>
@endsection