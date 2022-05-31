@extends('layout-admin')

@section('css')
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid flex-stack">
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
                            <div class="card mb-5 mb-xl-10">
                                <!--begin::Card header-->
                                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                                    <!--begin::Card title-->
                                    <div class="card-title m-0">
                                        <h3 class="fw-bolder m-0">Form Tambah Konten Baru Adia Visakha</h3>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--begin::Card header-->
                                <!--begin::Content-->
                                <div id="result"></div>
                                <div id="kt_account_settings_profile_details" class="collapse show">
                                    <div class="card card-custom">
                                        <!--begin::Form-->
                                            <form id="post_konten" class="form" action="{{ route('post.konten') }}" method="post"  enctype="multipart/form-data">
                                                <div class="card-body">
                                                    <div class="form-group mb-8">
                                                        <div class="alert alert-custom alert-default" role="alert">
                                                            <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                                                            <div class="alert-text">
                                                            Here are examples of <code>.form-control</code> applied to each textual HTML5 input type:
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label  class="col-lg-2 col-form-label required fw-bold fs-6">Judul Artikel</label>
                                                        <div class="col-10">
                                                        <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" type="text" placeholder="Judul Artikel" id="judul" name="judul"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label  class="col-lg-2 col-form-label required fw-bold fs-6">Tags</label>
                                                        <div class="col-10">
                                                        <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" type="text" placeholder="Tags" id="tags" name="tags"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label  class="col-lg-2 col-form-label required fw-bold fs-6">Headline image</label>
                                                        <div class="col-10">
                                                        <input class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" type="file" id="headlineimg" name="headlineimg"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label  class="col-lg-2 col-form-label required fw-bold fs-6">Konten Artikel</label>
                                                        <div class="col-10">
                                                        <textarea id="konten" name="artikel" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" rows="10"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-2">
                                                        </div>
                                                        <div class="col-10">
                                                        <button type="sumbit" class="btn btn-success mr-2">Posting</button>
                                                        <button type="reset" class="btn btn-secondary">Simpan Draf</button>
                                                        <button type="reset" class="btn btn-danger mr-2">Batal</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <!--end::Content-->
                                </div>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->

@endsection


@section('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
$(document).ready(function() {
    $('#konten').summernote({
        placeholder: 'Konten artikel anda',
        tabsize: 5,
        height: 600
      });
});
</script>
<script>
$("#post_konten").submit(function(event) {
    Swal.fire('Silahkan Tunggu...');
    Swal.showLoading();
    /* stop form from submitting normally */
    event.preventDefault();

    /* get the action attribute from the <form action=""> element */
    var $form = $(this),
    url = $form.attr('action');
    /* Send the data using post with element id name and name2*/
    var posting = $.post(url,{
        konten: $("#konten").val(),
        _token:"{{ csrf_token() }}"
    });
    /* Alerts the results */
    posting.done(function(data) {
        var resp = JSON.parse(data);
        Swal.fire({
            text:resp.msg,
            icon:"success",
            buttonsStyling:!1,
            confirmButtonText:"Ok",
            customClass:{
            confirmButton:"btn btn-primary"}})
    });
    posting.fail(function() {
        Swal.fire({
            text:"Proses setting data user gagal, silahkan cek kembali kelengkapan data anda ",
            icon:"error",buttonsStyling:!1,confirmButtonText:"Ok",customClass:{confirmButton:"btn btn-primary"}
		})
    });
});
</script>
@endsection