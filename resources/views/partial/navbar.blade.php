<!--begin::Header-->
					<div id="kt_header" style="" class="header align-items-stretch">
						<!--begin::Container-->
						<div class="container-xxl d-flex align-items-stretch justify-content-between">
							<!--begin::Aside mobile toggle-->
							<!--end::Aside mobile toggle-->
							<!--begin::Logo-->
							<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
								<a href="">
									<img alt="Logo" src="{{ url('assets/media/logos/logo-1.svg') }}" class="h-20px h-lg-30px" />
								</a>
							</div>
							<!--end::Logo-->
							<!--begin::Wrapper-->
							<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
								<!--begin::Navbar-->
								<div class="d-flex align-items-stretch" id="kt_header_nav">
									<!--begin::Menu wrapper-->
									<div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
										<!--begin::Menu-->
										<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
											<div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
												<a href="">
												<span class="menu-link py-3">
													<span class="menu-title">Home</span>
													<span class="menu-arrow d-lg-none"></span>
												</span>
												</a>
											</div>
										</div>
										<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-900 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
											<div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
												<a href="">
												<span class="menu-link py-3">
													<span class="menu-title">Tutorial</span>
													<span class="menu-arrow d-lg-none"></span>
												</span>
												</a>
											</div>
										</div>
										<!--end::Menu-->
									</div>
									<!--end::Menu wrapper-->
								</div>
								<!--end::Navbar-->
								<!--begin::Toolbar wrapper-->
								<div class="d-flex align-items-stretch flex-shrink-0">
									<!--begin::Search-->
									<div class="d-flex align-items-stretch ms-1 ms-lg-3">
										<!--begin::Search-->
										<div id="kt_header_search" class="d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
											<!--begin::Search toggle-->
											<div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
												<div class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
													<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
															<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
											</div>
											<!--end::Search toggle-->
											<!--begin::Menu-->
											<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
												<!--begin::Wrapper-->
												<div data-kt-search-element="wrapper">
													<!--begin::Form-->
													<form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
														<!--begin::Icon-->
														<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
														<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
																<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<!--end::Icon-->
														<!--begin::Input-->
														<input type="text" class="search-input form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
														<!--end::Input-->
														<!--begin::Spinner-->
														<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
															<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
														</span>
														<!--end::Spinner-->
														<!--begin::Reset-->
														<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																	<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</span>
														<!--end::Reset-->
													</form>
													<!--end::Form-->
													<!--begin::Separator-->
													<div class="separator border-gray-200 mb-6"></div>
													<!--end::Separator-->
													<!--begin::Recently viewed-->
													<div data-kt-search-element="results" class="d-none">
														<!--begin::Items-->
														<div class="scroll-y mh-200px mh-lg-350px">
															<!--begin::Category title-->
															<h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
															<!--end::Category title-->
															<!--begin::Item-->
															<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<img src="{{ url('assets/media/avatars/300-6.jpg') }}" alt="" />
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column justify-content-start fw-bold">
																	<span class="fs-6 fw-bold">Karina Clark</span>
																	<span class="fs-7 fw-bold text-muted">Marketing Manager</span>
																</div>
																<!--end::Title-->
															</a>
														</div>
														<!--end::Items-->
													</div>
													<!--end::Recently viewed-->
													<!--begin::Recently viewed-->
													<div class="mb-5" data-kt-search-element="main">
														<!--begin::Heading-->
														<div class="d-flex flex-stack fw-bold mb-4">
															<!--begin::Label-->
															<span class="text-muted fs-6 me-2">Recently Searched:</span>
															<!--end::Label-->
														</div>
														<!--end::Heading-->
														<!--begin::Items-->
														<div class="scroll-y mh-200px mh-lg-325px">
															<!--begin::Item-->
															<div class="d-flex align-items-center mb-5">
																<!--begin::Symbol-->
																<div class="symbol symbol-40px me-4">
																	<span class="symbol-label bg-light">
																		<!--begin::Svg Icon | path: icons/duotune/electronics/elc004.svg-->
																		<span class="svg-icon svg-icon-2 svg-icon-primary">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M2 16C2 16.6 2.4 17 3 17H21C21.6 17 22 16.6 22 16V15H2V16Z" fill="black" />
																				<path opacity="0.3" d="M21 3H3C2.4 3 2 3.4 2 4V15H22V4C22 3.4 21.6 3 21 3Z" fill="black" />
																				<path opacity="0.3" d="M15 17H9V20H15V17Z" fill="black" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</span>
																</div>
																<!--end::Symbol-->
																<!--begin::Title-->
																<div class="d-flex flex-column">
																	<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">BoomApp by Keenthemes</a>
																	<span class="fs-7 text-muted fw-bold">#45789</span>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Items-->
													</div>
													<!--end::Recently viewed-->
													<!--begin::Empty-->
													<div data-kt-search-element="empty" class="text-center d-none">
														<!--begin::Icon-->
														<div class="pt-10 pb-10">
															<!--begin::Svg Icon | path: icons/duotune/files/fil024.svg-->
															<span class="svg-icon svg-icon-4x opacity-50">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="black" />
																	<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="black" />
																	<rect x="13.6993" y="13.6656" width="4.42828" height="1.73089" rx="0.865447" transform="rotate(45 13.6993 13.6656)" fill="black" />
																	<path d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Icon-->
														<!--begin::Message-->
														<div class="pb-15 fw-bold">
															<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
															<div class="text-muted fs-7">Please try again with a different query</div>
														</div>
														<!--end::Message-->
													</div>
													<!--end::Empty-->
												</div>
												<!--end::Wrapper-->
											</div>
											<!--end::Menu-->
										</div>
										<!--end::Search-->
									</div>
									<!--end::Search-->
									<!--begin::User menu-->
									<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
										<!--begin::Menu wrapper-->
										<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
											<img src="{{ url('assets/media/avatars/300-1.jpg') }}" alt="user" />
										</div>
										<!--begin::User account menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content d-flex align-items-center px-3">
													<!--begin::Avatar-->
													<div class="symbol symbol-50px me-5">
														<img alt="Logo" src="{{ url('assets/media/avatars/300-1.jpg') }}" />
													</div>
													<!--end::Avatar-->
													<!--begin::Username-->
													<div class="d-flex flex-column">
														<div class="fw-bolder d-flex align-items-center fs-5">Max Smith
														<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
														<a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
													</div>
													<!--end::Username-->
												</div>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="../../demo1/dist/account/overview.html" class="menu-link px-5">My Profile</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5 my-1">
												<a href="../../demo1/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="../../demo1/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::User account menu-->
										<!--end::Menu wrapper-->
									</div>
									<!--end::User menu-->
								</div>
								<!--end::Toolbar wrapper-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->