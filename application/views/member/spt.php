<div class="container">
    <div class="row justify-content-center" style="min-height: 670px;">
        <div class="col-xl-12 col-md-12 col-sm-12 pt-5" style="padding-bottom: 120px">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-arsip-tab" data-toggle="pill" href="#pills-arsip" role="tab" aria-controls="pills-arsip" aria-selected="true">Arsip SPT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-buat-spt-tab" data-toggle="pill" href="#pills-buat-spt" role="tab" aria-controls="pills-buat-spt" aria-selected="false">Buat SPT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-none" id="pills-upload-spt-tab" data-toggle="pill" href="#pills-upload-spt" role="tab" aria-controls="pills-upload-spt" aria-selected="true">Upload SPT</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-arsip" role="tabpanel" aria-labelledby="pills-arsip-tab">
                    <div class="card p-2 shadow" style="background-color: rgba(235, 236, 241, 0.932);">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header text-white" style="background-color: #212C5F;">
                                    <i class="fa-solid fa-folder pr-2"></i> Daftar SPT
                                </div>
                                <div class="card-body" style="min-height: 150px;">
                                    <div class="table-responsive">
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
                <div class="tab-pane fade" id="pills-buat-spt" role="tabpanel" aria-labelledby="pills-buat-spt-tab">
                    <div class="card p-2 shadow" style="background-color: rgba(235, 236, 241, 0.932);">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header text-white" style="background-color: #212C5F;">
                                    <i class="fa-solid fa-file-pen pr-2"></i> SPT 1770 S
                                </div>
                                <div class="card-body" style="min-height: 150px;">
                                    <form id="formSPT1770S">
                                        <h5 class="p-3 bg-primary text-white rounded">A. Pajak Penghasilan</h5>
                                        <div class="form-group row">
                                            <label for="tahunPajakSPT1770S" class="col-sm-8 col-form-label">1. Tahun Pajak</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="tahun" class="form-control" id="tahunPajakSPT1770S" placeholder="Masukkan Tahun Pajak">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="penghasilanPajakSPT1770S" class="col-sm-8 col-form-label">2. Penghasilan Bruto Dalam dan Luar Negeri Sehubungan Dengan Pekerjaan Dan Penghasilan Neto Dalam Negeri</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="penghasilan" class="form-control" id="penghasilanPajakSPT1770S" placeholder="Masukkan Nilai">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="penghasilanTidakKenaPajakPajakSPT1770S" class="col-sm-4 col-form-label">3. Penghasilan Tidak Kena Pajak</label>
                                            <div class="col-sm-4">
                                                <select id="tanggunganSPT1770S" class="custom-select">
                                                    <option selected="">Pilih...</option>
                                                    <option value="54000000">TK/0 Tidak Kawin Tanpa Tanggungan</option>
                                                    <option value="58500000">TK/1 Tidak Kawin 1 Tanggungan</option>
                                                    <option value="63000000">TK/2 Tidak Kawin 2 Tanggungan</option>
                                                    <option value="67500000">TK/3 Tidak Kawin 3 Tanggungan</option>
                                                    <option value="58500000">K/0 Kawin Tanpa Tanggungan</option>
                                                    <option value="63000000">K/1 Kawin 1 Tanggungan</option>
                                                    <option value="67500000">K/2 Kawin 2 Tanggungan</option>
                                                    <option value="72000000">K/3 Kawin 3 Tanggungan</option>
                                                    <option value="112500000">K/1/0 Kawin Penghasilan Istri Digabung dengan Suami Tanpa Tanggungan</option>
                                                    <option value="117000000">K/1/1 Kawin Penghasilan Istri Digabung dengan Suami 1 Tanggungan</option>
                                                    <option value="121500000">K/1/2 Kawin Penghasilan Istri Digabung dengan Suami 2 Tanggungan</option>
                                                    <option value="126000000">K/1/3 Kawin Penghasilan Istri Digabung dengan Suami 3 Tanggungan</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" name="penghasilanTidakKenaPajak" class="form-control" id="penghasilanTidakKenaPajakSPT1770S" placeholder="Masukkan Nilai" value="0" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="penghasilanterpotongPajakSPT1770S" class="col-sm-8 col-form-label">4. Pajak Penghasilan Yang Telah Dipotong Pihak Lain</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="penghasilanTerpotong" class="form-control" id="penghasilanterpotongPajakSPT1770S" placeholder="Masukkan Nilai">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="totalPajakSPT1770S" class="col-sm-8 col-form-label">5. Total Pajak</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="totalPajak" class="form-control" id="totalPajakSPT1770S" placeholder="Masukkan Nilai" value="0" readonly>
                                            </div>
                                        </div>
                                        <h5 class="p-3 bg-warning rounded">B. Daftar Harta dan Kewajiban</h5>
                                        <div class="form-group row">
                                            <label for="hartaPajakSPT1770S" class="col-sm-8 col-form-label">6. Jumlah Keseluruhan Harta Yang Dimiliki Pada Akhir Tahun Pajak</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="totalHarta" class="form-control" id="hartaPajakSPT1770S" placeholder="Masukkan Nilai">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="utangPajakSPT1770S" class="col-sm-8 col-form-label">7. Jumlah Keseluruhan Kewajiban/Utang Pada Akhir Tahun Pajak</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="totalUtang" class="form-control" id="utangPajakSPT1770S" placeholder="Masukkan Nilai">
                                            </div>
                                        </div>
                                        <h5 class="p-3 bg-primary rounded">C. Pernyataan</h5>
                                        <div class="pb-3">
                                            Dengan menyadari sepenuhnya akan segala akibatnya termasuk sanksi-sanksi sesuai dengan ketentuan peraturan perundang-undangan yang berlaku saya menyatakan bahwa apa yang telah saya beritahukan diatas adalah benar, lengkap, jelas.
                                            <div class="custom-control custom-checkbox text-center">
                                                <input type="checkbox" class="custom-control-input" id="setuju">
                                                <label class="custom-control-label" for="setuju">Setuju</label>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary" id="simpanSPT1770S"><i class="fa-regular fa-floppy-disk"></i> Simpan Data</button>
                                    </form>
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
            sessionStorage.setItem('activeTab-member-spt', activeTab);
        });

        // kembalikan tab yang aktif dari session storage
        var activeTab = sessionStorage.getItem('activeTab-member-spt');
        if (activeTab) {
            $('#pills-tab a[href="' + activeTab + '"]').tab('show');
        }
        let formSpt = $('#formSpt')[0];
        let formDataSpt = new FormData(formSpt);
        let id_user = <?= $id_user ?>;
        // console.log(...formData);


        function hitungPajakSPT1770S() {
            // Ambil nilai input tahun pajak dan penghasilan bruto
            const tahunPajak = parseInt($("#tahunPajakSPT1770S").val());
            const penghasilanBruto = parseInt($("#penghasilanPajakSPT1770S").val());

            // Ambil nilai tanggungan
            const tanggungan = parseInt($("#tanggunganSPT1770S").val());

            // Hitung penghasilan netto
            const penghasilanNetto = penghasilanBruto - tanggungan;

            // Hitung PTKP
            let ptkp = 0;
            if (tanggungan === 54000000) {
                ptkp = 54000000;
            } else if (tanggungan === 58500000) {
                ptkp = 58500000;
            } else if (tanggungan === 63000000) {
                ptkp = 63000000;
            } else if (tanggungan === 67500000) {
                ptkp = 67500000;
            } else if (tanggungan === 72000000) {
                ptkp = 72000000;
            } else if (tanggungan === 112500000) {
                ptkp = 112500000;
            } else if (tanggungan === 117000000) {
                ptkp = 117000000;
            } else if (tanggungan === 121500000) {
                ptkp = 121500000;
            } else {
                ptkp = 126000000;
            }

            // Hitung PKP
            const pkp = penghasilanNetto - ptkp;

            // Hitung pajak
            let pajak = 0;
            if (pkp <= 0) {
                pajak = 0;
            } else if (pkp <= 50000000) {
                pajak = pkp * 0.05;
            } else if (pkp <= 250000000) {
                pajak = 2500000 + (pkp - 50000000) * 0.15;
            } else if (pkp <= 500000000) {
                pajak = 32500000 + (pkp - 250000000) * 0.25;
            } else if (pkp <= 1000000000) {
                pajak = 95000000 + (pkp - 500000000) * 0.3;
            } else {
                pajak = 295000000 + (pkp - 1000000000) * 0.35;
            }

            // Tampilkan hasil pajak
            if (!isNaN(pajak)) {
                $('#totalPajakSPT1770S').val(pajak.toString());
            }
        }

        // Arsip SPT
        let spt = <?= $spt ?>;
        console.log(spt);
        spt.forEach(element => {
            $('#table-daftar-spt tbody').append(`
                <tr>
                    <td scope="row">${element.jenis_spt}</td>
                    <td>${element.tahun_pajak}</td>
                    <td data-detail="${JSON.stringify(element).replaceAll("\"", "'")}">
                        <button class="btn btn-primary btn-sm lihat-daftar-spt" data-toggle="modal" data-target="#modalDaftarSPT" >Lihat</button>
                        <button class="btn btn-danger btn-sm hapus-daftar-spt" data-toggle="modal" data-target="#modalHapusSPT" >Hapus</button>
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
                            url: "<?= base_url() ?>/member/hapus_spt_ss1770s",
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
                            url: "<?= base_url() ?>/member/hapus_spt_ss1770ss",
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

        // fungsi pada tab "Buat SPT"
        $('#tanggunganSPT1770S').on('change', function() {
            let minimalPenghasilan = $(this).val();
            $('#penghasilanTidakKenaPajakSPT1770S').val(minimalPenghasilan);
        });
        $('#penghasilanPajakSPT1770S, #penghasilanTidakKenaPajakPajakSPT1770S, #penghasilanterpotongPajakSPT1770S').on('change', function() {
            hitungPajakSPT1770S();
        })
        $('#simpanSPT1770S').on('click', function() {
            console.log('simpan');
            if(
                $('#tahunPajakSPT1770S').val() != 0 &&
                $('#penghasilanPajakSPT1770S').val() != 0 &&
                $('#penghasilanTidakKenaPajakSPT1770S').val() != 0 &&
                $('#penghasilanterpotongPajakSPT1770S').val() >= 0 &&
                $('#hartaPajakSPT1770S').val() >= 0 &&
                $('#utangPajakSPT1770S').val() >= 0
            ){
                console.log('object');
                let formSPT1770S = $('#formSPT1770S')[0];
                let formDataSPT1770S = new FormData(formSPT1770S);
                formDataSPT1770S.append('jenisSPT', 'SPT1770S');
                formDataSPT1770S.append('id_user', id_user);
                if ($('#setuju:checked').is(":checked")) {
                    console.log('saving', ...formDataSPT1770S);
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url('member/spt') ?>",
                        data: formDataSPT1770S,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            console.log(JSON.parse(response));
                            if (JSON.parse(response).status) {
                                Swal.fire('Berhasil', 'data telah terverifikasi!', 'success').then(() => {
                                    window.location.reload();
                                });
                            }
                        }
                    });
                }else{
                    Swal.fire('Peringatan', 'Baca lalu Centang "Setuju" pada poin C. Pernyataan terlebih dahulu!', 'warning');
                }
            }else{
                Swal.fire('Peringatan', 'Lengkapi data terlebih dahulu!', 'warning');
            }
        });
    });
</script>