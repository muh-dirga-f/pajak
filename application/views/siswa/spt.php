<div class="container">
    <div class="row justify-content-center" style="min-height: 670px;">
        <div class="col-xl-12 col-md-12 col-sm-12 pt-5" style="padding-bottom: 120px">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-arsip-tab" data-toggle="pill" href="#pills-arsip" role="tab"
                        aria-controls="pills-arsip" aria-selected="true">Arsip SPT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-buat-spt-tab" data-toggle="pill" href="#pills-buat-spt" role="tab"
                        aria-controls="pills-buat-spt" aria-selected="false">Buat SPT</a>
                </li>
                <li class="nav-item">
                <a class="nav-link d-none" id="pills-upload-spt-tab" data-toggle="pill" href="#pills-upload-spt" role="tab" aria-controls="pills-upload-spt" aria-selected="true">Upload SPT</a>
                </li>
                <a class="nav-link d-none" id="pills-upload-spt1770s-tab" data-toggle="pill" href="#pills-upload-spt1770s" role="tab" aria-controls="pills-upload-spt1770s" aria-selected="true">SPT 1770 S</a>
                </li>
                <a class="nav-link d-none" id="pills-upload-spt1770ss-tab" data-toggle="pill" href="#pills-upload-spt1770ss" role="tab" aria-controls="pills-upload-spt1770ss" aria-selected="true">SPT 1770 SS</a>
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
                                        <table class="table table-striped table-inverse table-bordered table-light w-100">
                                            <thead class="thead-inverse text-white" style="background-color: #212C5F;">
                                                <tr>
                                                    <th>Jenis SPT</th>
                                                    <th>Tahun/Masa Pajak</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td scope="row">SPT</td>
                                                    <td>2022</td>
                                                    <td>Edit | Hapus</td>
                                                </tr>
                                                <tr>
                                                    <td scope="row">SPT 1770 S</td>
                                                    <td>2023</td>
                                                    <td>Edit | Hapus</td>
                                                </tr>
                                            </tbody>
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
                                    <i class="fa-solid fa-file-lines pr-2"></i> Formulir SPT
                                </div>
                                <div class="card-body" id="formulirSPT" style="min-height: 150px;">
                                    <form id="formSpt">
                                        <div class="spt">
                                            <!-- Pertanyaan ke 1 -->
                                            <div class="viewSpt1">
                                                <div class="row view1Spt1">
                                                    <div class="col">
                                                        Apakah Anda Menjalankan Usaha atau Pekerjaan bebas?
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="radio1Spt1" name="jawabanSpt1" class="custom-control-input" value="ya">
                                                            <label class="custom-control-label" for="radio1Spt1">Ya</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="radio2Spt1" name="jawabanSpt1" class="custom-control-input" value="tidak">
                                                            <label class="custom-control-label" for="radio2Spt1">Tidak</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row view2Spt1 pt-2" style="display:none;">
                                                    <div class="col">
                                                        Anda dapat menggunakan fasilitas upload CSV dari e-SPT
                                                        <br/>
                                                        <button type="button" class="btn btn-warning uploadSPT">Upload SPT</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Pertanyaan ke 2 -->
                                            <div class="viewSpt2" style="display:none;">
                                                <div class="row view1Spt2 pt-2">
                                                    <div class="col">
                                                        Apakah Anda seorang Suami atau Istri yang menjalankan kewajiban perpajakan terpisah (MT) atau Pisah Harta (PH)?
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="radio1Spt2" name="jawabanSpt2" class="custom-control-input" value="ya">
                                                            <label class="custom-control-label" for="radio1Spt2">Ya</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="radio2Spt2" name="jawabanSpt2" class="custom-control-input" value="tidak">
                                                            <label class="custom-control-label" for="radio2Spt2">Tidak</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row view2Spt2 pt-2" style="display:none;">
                                                    <div class="col">
                                                        <button type="button" class="btn btn-warning uploadSPT1770S">SPT 1770 S</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Pertanyaan ke 3 -->
                                            <div class="viewSpt3" style="display:none;">
                                                <div class="row view1Spt3 pt-2">
                                                    <div class="col">
                                                        Apakah Penghasilan Bruto Yang Anda Peroleh selama setahun Kurang dari 60 Juta Rupiah?
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="radio1Spt3" name="jawabanSpt3" class="custom-control-input" value="ya">
                                                            <label class="custom-control-label" for="radio1Spt3">Ya</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="radio2Spt3" name="jawabanSpt3" class="custom-control-input" value="tidak">
                                                            <label class="custom-control-label" for="radio2Spt3">Tidak</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row view2Spt3 pt-2" style="display:none;">
                                                    <div class="col">
                                                        <button type="button" class="btn btn-warning uploadSPT1770SS">SPT 1770 SS</button>
                                                    </div>
                                                </div>
                                                <div class="row view3Spt3 pt-2" style="display:none;">
                                                    <div class="col">
                                                        <button type="button" class="btn btn-warning uploadSPT1770S">SPT 1770 S</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tab Tersembunyi -->
                <div class="tab-pane fade" id="pills-upload-spt" role="tabpanel" aria-labelledby="pills-upload-spt-tab">
                    <div class="card p-2 shadow" style="background-color: rgba(235, 236, 241, 0.932);">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header text-white" style="background-color: #212C5F;">
                                    <i class="fa-solid fa-file-pen pr-2"></i> Upload SPT
                                </div>
                                <div class="card-body" style="min-height: 150px;">
                                    <h4 class="pb-3">Data Formulir</h4>
                                    <form id="formUploadSPT">
                                        <div class="form-group row">
                                            <label for="tahunPajakUploadSPT" class="col-sm-2 col-form-label">Tahun Pajak</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="tahun" class="form-control" id="tahunPajakUploadSPT" placeholder="Masukkan Tahun Pajak" value="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="fileUploadSPT" class="col-sm-2 col-form-label">File SPT</label>
                                            <div class="col-sm-10">
                                                <div class="custom-file">
                                                    <input type="file" name="file" id="fileUploadSPT" class="custom-file-input" id="validatedCustomFile" required>
                                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-upload-spt1770s" role="tabpanel" aria-labelledby="pills-upload-spt1770s-tab">
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
                                                <input type="text" name="penghasilan" class="form-control" id="penghasilanPajakSPT1770S"  placeholder="Masukkan Nilai">
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
                                                <input type="text" name="penghasilanTidakKenaPajak" class="form-control" id="penghasilanTidakKenaPajakSPT1770S"  placeholder="Masukkan Nilai" value="0" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="penghasilanterpotongPajakSPT1770S" class="col-sm-8 col-form-label">4. Pajak Penghasilan Yang Telah Dipotong Pihak Lain</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="penghasilanTerpotong" class="form-control" id="penghasilanterpotongPajakSPT1770S"  placeholder="Masukkan Nilai">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="totalPajakSPT1770S" class="col-sm-8 col-form-label">5. Total Pajak</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="totalPajak" class="form-control" id="totalPajakSPT1770S"  placeholder="Masukkan Nilai" value="0" readonly>
                                            </div>
                                        </div>
                                        <h5 class="p-3 bg-warning rounded">B. Daftar Harta dan Kewajiban</h5>
                                        <div class="form-group row">
                                            <label for="hartaPajakSPT1770S" class="col-sm-8 col-form-label">6. Jumlah Keseluruhan Harta Yang Dimiliki Pada Akhir Tahun Pajak</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="totalHarta" class="form-control" id="hartaPajakSPT1770S"  placeholder="Masukkan Nilai">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="utangPajakSPT1770S" class="col-sm-8 col-form-label">7. Jumlah Keseluruhan Kewajiban/Utang Pada Akhir Tahun Pajak</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="totalUtang" class="form-control" id="utangPajakSPT1770S"  placeholder="Masukkan Nilai">
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
                <div class="tab-pane fade" id="pills-upload-spt1770ss" role="tabpanel" aria-labelledby="pills-upload-spt1770ss-tab">
                    <div class="card p-2 shadow" style="background-color: rgba(235, 236, 241, 0.932);">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header text-white" style="background-color: #212C5F;">
                                    <i class="fa-solid fa-file-pen pr-2"></i> SPT 1770 SS
                                </div>
                                <div class="card-body" style="min-height: 150px;">
                                    <form id="formSPT1770SS">
                                        <h5 class="p-3 bg-primary text-white rounded">A. Pajak Penghasilan</h5>
                                        <div class="form-group row">
                                            <label for="tahunPajakSPT1770SS" class="col-sm-8 col-form-label">1. Tahun Pajak</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="tahun" class="form-control" id="tahunPajakSPT1770SS" placeholder="Masukkan Tahun Pajak">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="penghasilanPajakSPT1770SS" class="col-sm-8 col-form-label">2. Penghasilan Bruto Dalam dan Luar Negeri Sehubungan Dengan Pekerjaan Dan Penghasilan Neto Dalam Negeri</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="penghasilan" class="form-control" id="penghasilanPajakSPT1770SS"  placeholder="Masukkan Nilai">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="penghasilanTidakKenaPajakPajakSPT1770SS" class="col-sm-4 col-form-label">3. Penghasilan Tidak Kena Pajak</label>
                                            <div class="col-sm-4">
                                                <select id="tanggunganSPT1770SS" class="custom-select">
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
                                                <input type="text" name="penghasilanTidakKenaPajak" class="form-control" id="penghasilanTidakKenaPajakSPT1770SS"  placeholder="Masukkan Nilai" value="0" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="penghasilanterpotongPajakSPT1770SS" class="col-sm-8 col-form-label">4. Pajak Penghasilan Yang Telah Dipotong Pihak Lain</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="penghasilanTerpotong" class="form-control" id="penghasilanterpotongPajakSPT1770SS"  placeholder="Masukkan Nilai">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="totalPajakSPT1770SS" class="col-sm-8 col-form-label">5. Total Pajak</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="totalPajak" class="form-control" id="totalPajakSPT1770SS"  placeholder="Masukkan Nilai" value="0" readonly>
                                            </div>
                                        </div>
                                        <h5 class="p-3 bg-warning rounded">B. Daftar Harta dan Kewajiban</h5>
                                        <div class="form-group row">
                                            <label for="hartaPajakSPT1770SS" class="col-sm-8 col-form-label">6. Jumlah Keseluruhan Harta Yang Dimiliki Pada Akhir Tahun Pajak</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="totalHarta" class="form-control" id="hartaPajakSPT1770SS"  placeholder="Masukkan Nilai">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="utangPajakSPT1770SS" class="col-sm-8 col-form-label">7. Jumlah Keseluruhan Kewajiban/Utang Pada Akhir Tahun Pajak</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="totalUtang" class="form-control" id="utangPajakSPT1770SS"  placeholder="Masukkan Nilai">
                                            </div>
                                        </div>
                                        <h5 class="p-3 bg-primary rounded">C. Pernyataan</h5>
                                        <div class="pb-3">
                                            Dengan menyadari sepenuhnya akan segala akibatnya termasuk sanksi-sanksi sesuai dengan ketentuan peraturan perundang-undangan yang berlaku saya menyatakan bahwa apa yang telah saya beritahukan diatas adalah benar, lengkap, jelas.
                                            <div class="custom-control custom-checkbox text-center">
                                                <input type="checkbox" class="custom-control-input" id="setujuSPT1770SS">
                                                <label class="custom-control-label" for="setujuSPT1770SS">Setuju</label>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary" id="simpanSPT1770SS"><i class="fa-regular fa-floppy-disk"></i> Simpan Data</button>
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
<script>
    $(document).ready(function() {
        let formSpt = $('#formSpt')[0];
        let formDataSpt = new FormData(formSpt);
        // console.log(...formData);

        // fungsi pada tab "Buat SPT"
        $('input[name="jawabanSpt1"]').on('click', function () {
            if($(this).val() == 'ya'){
                $('.view2Spt1').show();
                $('.viewSpt2').hide();
                $('.viewSpt3').hide();
            }else{
                $('.view2Spt1').hide();
                $('.viewSpt2').show();
                $('.viewSpt3').hide();
            }
        });
        $('input[name="jawabanSpt2"]').on('click', function () {
            if($(this).val() == 'ya'){
                $('.view2Spt2').show();
                $('.viewSpt3').hide();
            }else{
                $('.view2Spt2').hide();
                $('.viewSpt3').show();
            }
        });
        $('input[name="jawabanSpt3"]').on('click', function () {
            if($(this).val() == 'ya'){
                $('.view2Spt3').show();
                $('.view3Spt3').hide();
            }else{
                $('.view2Spt3').hide();
                $('.view3Spt3').show();
            }
        });
        $('.uploadSPT').on('click', function () {
            $('#pills-upload-spt-tab').tab('show');
            $('#pills-arsip-tab').prop('disabled',true);
            $('#pills-buat-spt-tab').prop('disabled',true);
        });
        $('.uploadSPT1770S').on('click', function () {
            $('#pills-upload-spt1770s-tab').tab('show');
            $('#pills-arsip-tab').prop('disabled',true);
            $('#pills-buat-spt-tab').prop('disabled',true);
        });
        $('.uploadSPT1770SS').on('click', function () {
            $('#pills-upload-spt1770ss-tab').tab('show');
            $('#pills-arsip-tab').prop('disabled',true);
            $('#pills-buat-spt-tab').prop('disabled',true);
        });

        // fungsi pada tab "Upload SPT"
        
        // fungsi pada tab "SPT 1770 S"
        $('#tanggunganSPT1770S').on('change', function () {
            let minimalPenghasilan = $(this).val();
            $('#penghasilanTidakKenaPajakSPT1770S').val(minimalPenghasilan);
        });
        $('#simpanSPT1770S').on('click', function () {
            let formSPT1770S = $('#formSPT1770S')[0];
            let formDataSPT1770S = new FormData(formSPT1770S);
            formDataSPT1770S.append('jenisSPT', 'SPT1770S');
            if($('#setuju:checked').is(":checked")){
                console.log('saving', ...formDataSPT1770S);
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('siswa/spt') ?>",
                    data: formDataSPT1770S,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        console.log(response);
                    }
                });
            }
        });

        // fungsi pada tab "SPT 1770 S"
        $('#tanggunganSPT1770SS').on('change', function () {
            let minimalPenghasilan = $(this).val();
            $('#penghasilanTidakKenaPajakSPT1770SS').val(minimalPenghasilan);
        });
        $('#simpanSPT1770SS').on('click', function () {
            let formSPT1770SS = $('#formSPT1770SS')[0];
            let formDataSPT1770SS = new FormData(formSPT1770SS);
            formDataSPT1770SS.append('jenisSPT', 'SPT1770SS');
            if($('#setujuSPT1770SS:checked').is(":checked")){
                console.log('saving', ...formDataSPT1770SS);
            }
        });
    });
</script>