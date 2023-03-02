<div class="container">
    <div class="row justify-content-center" style="min-height: 670px;">
        <div class="col-xl-12 col-md-12 col-sm-12 pt-5" style="padding-bottom: 120px">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                        aria-controls="pills-home" aria-selected="true">Informasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                        aria-controls="pills-profile" aria-selected="false">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                        aria-controls="pills-contact" aria-selected="false">Lapor</a>
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
                                        pengganti dari e-filing. Aplikasi e-filer ini nanti akan digunakan oleh siswa
                                        untuk belajar cara pelaporan SPT online.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="card p-2 shadow" style="background-color: rgba(235, 236, 241, 0.932);">
                        <div class="row">
                            <div class="col-4 pr-0">
                                <div class="card-body pr-0">
                                    <div class="card">
                                        <div class="card-header text-white" style="background-color: #212C5F;">
                                            <i class="fa-solid fa-bars pr-2"></i> Menu Profil
                                        </div>
                                        <div class="card-body p-2">
                                            <button type="button"
                                                class="btn btn-outline-default waves-effect w-100 text-left"><i
                                                    class="fas fa-user pr-1 text-primary" aria-hidden="true"></i> Data Profil <i
                                                    class="if-md fa-solid fa-chevron-right float-right mt-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 pl-0">
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-header text-white" style="background-color: #212C5F;">
                                            <i class="fa-solid fa-user pr-2"></i> Data Profil
                                        </div>
                                        <div class="card-body">
                                            <span class="border-bottom border-warning pb-2 text-warning">
                                                <i class="fa-solid fa-user-pen pr-1"></i> Identitas WP
                                            </span>
                                            <form class=" text-secondary">
                                                <div class="form-row pt-3 text-secondary">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationDefault01">Nama</label>
                                                        <input type="text" class="form-control" id="validationDefault01"
                                                            placeholder="Nama" value="Mark" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationDefault02">NPWP</label>
                                                        <input type="text" class="form-control" id="validationDefault02"
                                                            placeholder="NPWP" value="Otto" required readonly>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationDefault03">Email</label>
                                                        <input type="email" class="form-control" id="validationDefault03"
                                                            placeholder="Email" required>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationDefault04">Kelas</label>
                                                        <input type="text" class="form-control" id="validationDefault04"
                                                            placeholder="Kelas" required>
                                                    </div>
                                                </div>
                                                <div class="float-right pt-3">
                                                    <button class="btn btn-default" style="border-radius: 40px;" type="submit"><i class="fa-solid fa-rotate-left"></i> Batal</button>
                                                    <button class="btn text-white" style="background-color: #212C5F; border-radius: 40px;" type="submit"><i class="fa-regular fa-pen-to-square"></i> Ubah Profil</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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
                                    <i class="fa-solid fa-file-pen pr-2"></i> Pengisian SPT Secara Elektronik (e-Filing)
                                </div>
                                <div class="card-body text-center">
                                    <div class="card-text text-left pb-4 text-secondary text-weight-bold">Untuk pengisian SPT secara elektronik Anda dapat memilih cara berikut:</div>
                                    <a href="<?= base_url('siswa/spt') ?>">
                                        <img src="<?= base_url('/assets/img/logo.png') ?>" class="border border-dark rounded" width="250px"><br/>
                                        <div class="card-text text-center pb-4 text-secondary text-weight-bold">E-Filing Learning</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-2">
                            <div class="card">
                                <div class="card-header text-white" style="background-color: #212C5F;">
                                    <i class="fa-solid fa-clock-rotate-left pr-2"></i> Riwayat
                                </div>
                                <div class="card-body" style="min-height: 150px;">
                                    <span class="border-bottom border-dark pb-2">
                                        <i class="fa-solid fa-file-lines pr-1" style="color: #212C5F;"></i> SPT
                                    </span>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-inverse table-bordered table-light mt-4 w-100">
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
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {});
</script>