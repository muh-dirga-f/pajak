<div class="container">
    <div class="row justify-content-center" style="min-height: 670px;">
        <div class="col-xl-12 col-md-12 col-sm-12 pt-5" style="padding-bottom: 120px">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Pengguna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-spt-tab" data-toggle="pill" href="#pills-spt" role="tab" aria-controls="pills-spt" aria-selected="false">SPT</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="card p-2 shadow" style="background-color: rgba(235, 236, 241, 0.932);">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header text-white" style="background-color: #212C5F;">
                                    <i class="fa-solid fa-file-lines pr-2"></i> Informasi
                                </div>
                                <div class="card-body">
                                    <h5 class="card-text text-center p-5">E-Filing Learning (E-filer) merupakan aplikasi
                                        pengganti dari e-filing. Aplikasi e-filer ini nanti akan digunakan oleh member
                                        untuk belajar cara pelaporan SPT online.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="card p-2 shadow" style="background-color: rgba(235, 236, 241, 0.932);">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header text-white" style="background-color: #212C5F;">
                                    <i class="fa-solid fa-file-pen pr-2"></i> Verifikasi Pengguna
                                </div>
                                <div class="card-body text-center">
                                    <table class="table table-striped table-inverse table-bordered table-light w-100" id="table-daftarverifikasi">
                                        <thead class="thead-inverse text-white" style="background-color: #212C5F;">
                                            <tr>
                                                <th>#</th>
                                                <th>NPWP</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header text-white" style="background-color: #212C5F;">
                                    <i class="fa-solid fa-users pr-2"></i> Daftar Pengguna
                                </div>
                                <div class="card-body text-center">
                                    <table class="table table-striped table-inverse table-bordered table-light w-100" id="table-daftarpengguna">
                                        <thead class="thead-inverse text-white" style="background-color: #212C5F;">
                                            <tr>
                                                <th>#</th>
                                                <th>NPWP</th>
                                                <th>NIK</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-spt" role="tabpanel" aria-labelledby="pills-spt-tab">
                    <div class="card p-2 shadow" style="background-color: rgba(235, 236, 241, 0.932);">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header text-white" style="background-color: #212C5F;">
                                    <i class="fa-solid fa-file-pen pr-2"></i> Daftar SPT
                                </div>
                                <div class="card-body text-center">
                                    <table id="table-daftar-spt" class="table table-striped table-inverse table-bordered table-light w-100">
                                        <thead class="thead-inverse text-white" style="background-color: #212C5F;">
                                            <tr>
                                                <th>Jenis SPT</th>
                                                <th>Tahun/Masa Pajak</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalDaftarSPT" tabindex="-1" role="dialog" aria-labelledby="modalDaftarSPTLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDaftarSPTLabel">Detail Data SPT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="m_jenis_spt" class="col-sm-4 col-form-label">Jenis SPT</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="m_jenis_spt" value="Jenis SPT" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="m_tahun_pajak" class="col-sm-4 col-form-label">Tahun Pajak</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="m_tahun_pajak" value="Tahun Pajak" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="m_penghasilan" class="col-sm-4 col-form-label">Penghasilan</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="m_penghasilan" value="Penghasilan" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="m_penghasilan_tidak_kena_pajak" class="col-sm-4 col-form-label">Penghasilan Tidak Kena Pajak</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="m_penghasilan_tidak_kena_pajak" value="Penghasilan" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="m_penghasilan_terpotong" class="col-sm-4 col-form-label">Penghasilan Terpotong</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="m_penghasilan_terpotong" value="Penghasilan Terpotong" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="m_total_pajak" class="col-sm-4 col-form-label">Total Pajak</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="m_total_pajak" value="Total Pajak" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="m_total_harta" class="col-sm-4 col-form-label">Total Harta</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="m_total_harta" value="Total Harta" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="m_total_utang" class="col-sm-4 col-form-label">Total Utang</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="m_total_utang" value="Total Utang" readonly>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('a[data-toggle="pill"]').on('shown.bs.tab', function(e) {
            var activeTab = $(e.target).attr('href');
            sessionStorage.setItem('activeTab-admin', activeTab);
        });

        // kembalikan tab yang aktif dari session storage
        var activeTab = sessionStorage.getItem('activeTab-admin');
        if (activeTab) {
            $('#pills-tab a[href="' + activeTab + '"]').tab('show');
        }
        $.ajax({
            type: "GET",
            url: "<?= base_url() ?>/admin/users_list",
            dataType: "JSON",
            success: function(response) {
                console.log(response);
                if (response.length > 0) {
                    $.each(response, function(i, v) {
                        $('#table-daftarverifikasi tbody').append(`
                        <tr>
                            <td>${(i+1)}</td>
                            <td>${v.npwp}</td>
                            <td>${v.nik}</td>
                            <td>${v.nama}</td>
                            <td>${v.email}</td>
                            <td>
                                <button class="btn btn-sm btn-danger btn-ver-hapus" data-id="${v.id}">Hapus</button>
                                <button class="btn btn-sm btn-success btn-ver-verifikasi" data-id="${v.id}">Verifikasi</button>
                            </td>
                        </tr>
                    `);
                    });
                } else {
                    $('#table-daftarverifikasi tbody').append(`<tr><td colspan="6">Tidak Ada data untuk di tampilkan!</td></tr>`);
                }
            }
        });
        $.ajax({
            type: "GET",
            url: "<?= base_url() ?>/admin/users_verified",
            dataType: "JSON",
            success: function(response) {
                console.log(response);
                if (response.length > 0) {
                    $.each(response, function(i, v) {
                        $('#table-daftarpengguna tbody').append(`
                            <tr>
                                <td>${(i+1)}</td>
                                <td>${v.npwp}</td>
                                <td>${v.nik}</td>
                                <td>${v.nama}</td>
                                <td>${v.email}</td>
                                <td>
                                    <button class="btn btn-sm btn-danger btn-ver-hapus" data-id="${v.id}">Hapus</button>
                                </td>
                            </tr>
                        `);
                    });
                } else {
                    $('#table-daftarpengguna tbody').append(`<tr><td colspan="6">Tidak Ada data untuk di tampilkan!</td></tr>`);
                }
            }
        });
        $('#table-daftarverifikasi').on('click', '.btn-ver-verifikasi', function() {
            let id = $(this).data('id');
            Swal.fire({
                icon: 'question',
                title: 'Apakah anda yakin akan mengkonfirmasi data ini?',
                showCancelButton: true,
                confirmButtonText: 'Konfirmasi',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url() ?>/admin/verifikasi_user",
                        data: {
                            'id': id
                        },
                        dataType: "JSON",
                        success: function(response) {
                            console.log(response);
                            if (response) {
                                Swal.fire('Berhasil', 'data telah terverifikasi!', 'success').then(() => {
                                    window.location.reload();
                                });
                            }
                        }
                    });
                }
            });
        });
        $('#table-daftarverifikasi, #table-daftarpengguna').on('click', '.btn-ver-hapus', function() {
            let id = $(this).data('id');
            Swal.fire({
                icon: 'question',
                title: 'Apakah anda yakin akan menghapus data ini?',
                showCancelButton: true,
                confirmButtonText: 'Lanjutkan',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url() ?>/admin/hapus_user",
                        data: {
                            'id': id
                        },
                        dataType: "JSON",
                        success: function(response) {
                            console.log(response);
                            if (response) {
                                Swal.fire('Info', 'data telah terhapus!', 'info').then(() => {
                                    window.location.reload();
                                });
                            }
                        }
                    });
                }
            });
        });


        //tab SPT
        let spt = <?= $spt ?>;
        console.log(spt);
        spt.forEach(element => {
            $('#table-daftar-spt tbody').append(`
                    <tr>
                        <td scope="row">${element.jenis_spt}</td>
                        <td>${element.tahun_pajak}</td>
                        <td data-detail="${JSON.stringify(element).replaceAll("\"", "'")}">
                            <button class="btn btn-primary btn-sm lihat-daftar-spt" data-toggle="modal" data-target="#modalDaftarSPT" >Lihat</button>
                            <button class="btn btn-danger btn-sm hapus-daftar-spt">Hapus</button>
                        </td>
                    </tr>
                `);
        });
        $('#table-daftar-spt').on('click', '.lihat-daftar-spt', function() {
            let data = $(this).parent().data('detail');
            data = JSON.parse(data.replaceAll("\'", '"'));
            // console.log(data);
            for (const key in data) {
                $('#m_' + key).val(data[key]);
            }
        });
        $('#table-daftar-spt').on('click', '.hapus-daftar-spt', function() {
            let data = $(this).parent().data('detail');
            data = JSON.parse(data.replaceAll("\'", '"'));
            Swal.fire({
                icon: 'question',
                title: 'Apakah anda yakin akan menghapus data ini?',
                showCancelButton: true,
                confirmButtonText: 'Lanjutkan',
            }).then((result) => {
                if (result.isConfirmed) {
                    if (data.jenis_spt == "SPT1770S") {
                        $.ajax({
                            type: "POST",
                            url: "<?= base_url() ?>/admin/hapus_spt_ss1770s",
                            data: {
                                'id_spt': data.id_spt,
                                'id_spt_lanjutan': data.id_spt_lanjutan,
                            },
                            dataType: "JSON",
                            success: function(response) {
                                console.log(response);
                                if (response) {
                                    Swal.fire('Info', 'data telah terhapus!', 'info').then(() => {
                                        window.location.reload();
                                    });
                                }
                            }
                        });
                    } else if (data.jenis_spt == "SPT1770SS") {
                        $.ajax({
                            type: "POST",
                            url: "<?= base_url() ?>/admin/hapus_spt_ss1770ss",
                            data: {
                                'id_spt': data.id_spt,
                                'id_spt_lanjutan': data.id_spt_lanjutan,
                            },
                            dataType: "JSON",
                            success: function(response) {
                                console.log(response);
                                if (response) {
                                    Swal.fire('Info', 'data telah terhapus!', 'info').then(() => {
                                        window.location.reload();
                                    });
                                }
                            }
                        });
                    }
                }
            });
        });
    });
</script>