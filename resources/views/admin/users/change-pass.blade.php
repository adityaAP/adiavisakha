<div class="card mb-5 mb-xl-10">
    <!--begin::Card header-->
    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
        <!--begin::Card title-->
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">Profile Details</h3>
        </div>
        <!--end::Card title-->
    </div>
    <!--begin::Card header-->
    <!--begin::Content-->
    <div id="result"></div>
    <div id="kt_account_settings_profile_details" class="collapse show">
        <!--begin::Form-->
        <form id="form_setting_account" class="form" action="" method="post">
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
                <!--begin::Input group-->
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Password Lama</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <input type="password" name="old_pw" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Masukan Password Lama" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Password Baru</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <input type="password" name="new_pw" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Masukan Password Baru" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>
                <div class="row mb-6">
                    <!--begin::Label-->
                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Ulangi Password Baru</label>
                    <!--end::Label-->
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-lg-12 fv-row">
                                <input type="password" name="new_pw_repeat" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Ulangi Masukan Password Baru" />
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Col-->
                </div>

                <!--end::Input group-->
            </div>
            <!--end::Card body-->
            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
                <button type="submit" class="btn btn-primary">Ganti Password</button>
            </div>
            <!--end::Actions-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>
<script>
   
    /* attach a submit handler to the form */
$("#form_setting_account").submit(function(event) {
    Swal.fire('Silahkan Tunggu...');
    Swal.showLoading();
    /* stop form from submitting normally */
    event.preventDefault();

    /* get the action attribute from the <form action=""> element */
    var $form = $(this),
    url = $form.attr('action');
    /* Send the data using post with element id name and name2*/
    var posting = $.post(url,{
        old_pw: $("input[name='old_pw']").val(),
        new_pw: $("input[name='new_pw']").val(),
        new_pw_repeat: $("input[name='new_pw_repeat']").val()    
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