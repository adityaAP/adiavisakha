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
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Blog Post</h1>
									<!--end::Title-->
									<!--begin::Separator-->
									<span class="h-20px border-gray-300 border-start mx-4"></span>
									<!--end::Separator-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">
											<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Pages</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Blog</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-dark">Blog Post</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
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
								<!--begin::Post card-->
								<div class="card">
									<!--begin::Body-->
									<div class="card-body p-lg-20 pb-lg-0">
										<!--begin::Layout-->
										<div class="d-flex flex-column flex-xl-row">
											<!--begin::Content-->
											<div class="flex-lg-row-fluid me-xl-15">
												<!--begin::Post content-->
												<div class="mb-17">
													<!--begin::Wrapper-->
													<div class="mb-8">
														<!--begin::Info-->
														<div class="d-flex flex-wrap mb-6">
															<!--begin::Item-->
															<div class="me-9 my-1">
																<!--begin::Icon-->
																<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																<span class="svg-icon svg-icon-primary svg-icon-2 me-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
																		<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--end::Icon-->
																<!--begin::Label-->
																<span class="fw-bolder text-gray-400">06 April 2021</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="me-9 my-1">
																<!--begin::Icon-->
																<!--SVG file not found: icons/duotune/finance/fin006.svgFolder.svg-->
																<!--end::Icon-->
																<!--begin::Label-->
																<span class="fw-bolder text-gray-400">Announcements</span>
																<!--begin::Label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="my-1">
																<!--begin::Icon-->
																<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
																<span class="svg-icon svg-icon-primary svg-icon-2 me-1">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="black" />
																		<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--end::Icon-->
																<!--begin::Label-->
																<span class="fw-bolder text-gray-400">24 Comments</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Info-->
														<!--begin::Title-->
														<a href="#" class="text-dark text-hover-primary fs-2 fw-bolder">{{ $konten->judul }}
														<span class="fw-bolder text-muted fs-5 ps-1">5 mins read</span></a>
														<!--end::Title-->
														<!--begin::Container-->
														<div class="overlay mt-8">
															<!--begin::Image-->
															<div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-350px" style="background-image:url('/assets/media/stock/1600x800/img-1.jpg')"></div>
															<!--end::Image-->
														</div>
														<!--end::Container-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Description-->
													<div class="fs-5 fw-bold text-gray-600">
                                                <?= $konten->konten ?>
													</div>
													<!--end::Description-->
													<!--begin::Icons-->
													<div class="d-flex flex-center">
														<!--begin::Icon-->
														<a href="#" class="mx-4">
															<img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px my-2" alt="" />
														</a>
														<!--end::Icon-->
														<!--begin::Icon-->
														<a href="#" class="mx-4">
															<img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px my-2" alt="" />
														</a>
														<!--end::Icon-->
														<!--begin::Icon-->
														<a href="#" class="mx-4">
															<img src="assets/media/svg/brand-logos/github.svg" class="h-20px my-2" alt="" />
														</a>
														<!--end::Icon-->
														<!--begin::Icon-->
														<a href="#" class="mx-4">
															<img src="assets/media/svg/brand-logos/behance.svg" class="h-20px my-2" alt="" />
														</a>
														<!--end::Icon-->
														<!--begin::Icon-->
														<a href="#" class="mx-4">
															<img src="assets/media/svg/brand-logos/pinterest-p.svg" class="h-20px my-2" alt="" />
														</a>
														<!--end::Icon-->
														<!--begin::Icon-->
														<a href="#" class="mx-4">
															<img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px my-2" alt="" />
														</a>
														<!--end::Icon-->
														<!--begin::Icon-->
														<a href="#" class="mx-4">
															<img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px my-2" alt="" />
														</a>
														<!--end::Icon-->
													</div>
													<!--end::Icons-->
												</div>
												<!--end::Post content-->
											</div>
											<!--end::Content-->
										</div>
										<!--end::Layout-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Post card-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
@endsection