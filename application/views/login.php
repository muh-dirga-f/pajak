<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-4 col-md-6 col-sm-12 py-5">
            <div class="card p-2 shadow">
                <div class="card-body">
                    <h2 class="card-title text-center">Login</h2>
                    <!-- <form id="form" method="post"> -->
                    <div class="form-group">
                        <input type="text" name="npwp" id="npwp" class="form-control" placeholder="Nomor Pokok Wajib Pajak (NPWP)" aria-describedby="helpnpwp">
                    </div>
                    <div class="form-group">
                        <input type="text" name="password" id="password" class="form-control" placeholder="Kata Sandi" aria-describedby="helpPassword">
                    </div>
                    <!-- </form> -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-5">
                                <div id="captcha" class="captcha text-center"></div>
                            </div>
                            <div class="col-7">
                                <input type="text" name="reCaptcha" id="reCaptcha" class="form-control" placeholder="Kode Keamanan" aria-describedby="helpPassword">
                            </div>
                        </div>
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-warning" id="submit">Submit</button></div>
                    <div id="errCaptcha" class="errmsg"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        createCaptcha();
        $('#submit').on('click', function() {
            validation = validateCaptcha();
            let npwp = $('#npwp').val();
            let password = $('#password').val();
            if (validation) {
                $.ajax({
                    type: "post",
                    url: "<?= base_url('login/login') ?>",
                    data: {
                        npwp,
                        password
                    },
                    dataType: "JSON",
                    success: function(response) {
                        console.log(response);
                        if (response.status) {
                            let level = response.user_data[0].level;
                            // console.log(level);
                            if (level == 'admin') {
                                window.location.href="<?= base_url('admin') ?>";
                            } else {
                                window.location.href="<?= base_url('siswa') ?>";
                            }
                        } else {
                            $('#errCaptcha').text(response.pesan);
                        }
                    }
                });
            }
        });
    });
</script>