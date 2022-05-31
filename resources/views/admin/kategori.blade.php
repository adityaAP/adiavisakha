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
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Data Kategori Konten</h1>
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
								<div class="row">
											<div class="col-xl-12">
												<!--begin::Datatable-->
												<div class="card">
                                                    <div class="card-header">
                                                        <div class="d-flex align-items-center gap-2 gap-lg-3">
                                                            <a href="" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Tambah Kategoi Baru</a>
                                                        </div>
                                                    </div>
													<div class="card-body">
														<table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
														<thead>
														<tr class="text-start text-black-400 fw-bolder fs-7 text-uppercase gs-0">
                                                            <th>No</th>
															<th>Kategori</th>
															<th>Jenis</th>
															<th>Level</th>
															<th>Parent</th>
                                                            <th>Aksi</th>
														</tr>
														</thead>
														<tbody class="text-gray-600 fw-bold">

														</tbody>
														</table>
													</div>
												</div>
											</div>
								</div>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
@endsection

@section('script')
<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-900px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header">
						<!--begin::Modal title-->
						<h2>Tambah Kategori Konten</h2>
						<!--end::Modal title-->
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Close-->
					</div>
					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body py-lg-10 px-lg-10">
                        <FORM id="form_setting_account" class="form" action="" method="post">
                        	<div class="row">
                        		<div class="col-xl-6">
                        			<div class="input-group mb-5">
		                            	<span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
		                                <input type="email" class="form-control" placeholder="Masukan nama kategori" aria-label="masukan nama kategori" aria-describedby="basic-addon2" name="Kategori"/>
                            		</div>
                        		</div>
                        		
                        	</div>
                            
                            
                            <!--end::Input group-->
                            <div class="input-group mb-5">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
@endsection