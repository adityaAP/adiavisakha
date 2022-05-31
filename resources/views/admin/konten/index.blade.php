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
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Data Konten Anda</h1>
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
                                                            <a class="btn btn-sm btn-primary" id="kontenbaru">Tambah Konten Baru</a>
                                                        </div>
                                                    </div>
													<div class="card-body">
														<table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
														<thead>
														<tr class="text-start text-black-400 fw-bolder fs-7 text-uppercase gs-0">
                                                            <th>No</th>
															<th>Judul</th>
															<th>Kategori</th>
															<th>Status</th>
															<th>Aksi</th>
														</tr>
														</thead>
														<tbody class="text-gray-600 fw-bold">
															@php $no=1; foreach($konten as $kntn){ @endphp
															<tr>
																<td>{{$no++;}}</td>
																<td>{{ $kntn->judul}}</td>
																<td>{{ $kntn->kategori}}</td>
																<td>{{ $kntn->status}}</td>
																<td><a href="{{ route('konten.detail',['id'=> $kntn->id]) }}" class="btn btn-sm btn-success">Lihat Detail</a></td>
															</tr>
															@php } @endphp
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
<script>
    $('#kontenbaru').click(function(){
        window.location.href = "{{ route('form.content') }}";
    })
</script>
@endsection