<style>
    .none {
        list-style: none;
    }

    .number {
        list-style: decimal;
    }

    .low-latin {
        list-style: lower-latin;
    }
</style>

<div class="content-wrapper pb-1">
    <section class="content-header py-1">
        <div class="w-100 text-danger text-center text-md">
            <p>Untuk melihat testimonial klik sudut kanan atas</p>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <form method="post" action="<?= base_url('confirm-terms'); ?>">
                <div class="card">
                    <!-- <div class="card-header">
                        <h4 class="text-blue text-bold">Persyaratan</h4>
                    </div> -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <h5 class="text-bold">Syarat</h5>
                                <ul class="pl-3">
                                    <li class="number text-lg">Nama Lengkap</li>
                                    <li class="number text-lg">Nomor Handphone</li>
                                    <li class="number text-lg">Alamat Email</li>
                                    <li class="number text-lg">Tempat Ruangan Bekerja di Rumah Sakit</li>
                                    <li class="number text-lg">Profesi (Dokter Umum/Spesialis)</li>
                                    <li class="number text-lg">Alamat Lengkap Pengiriman Buku Kursus</li>
                                    <li class="number text-lg">Pas Foto Latar Belakang dan Pakaian Bebas (photo must be clear, JPG/PNG file, less than 5 MB)</li>
                                    <li class="number text-lg">Surat dari Rumah Sakit Yang Menerangkan Bekerja di IGD/HCU/ICU</li>
                                </ul>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <img src="<?= base_url('assets/dist/img/BICC.png'); ?>" class="w-100" />
                            </div>
                        </div>

                        <h5 class="text-bold">Ketentuan</h5>

                        <ul class="pl-3">
                            <li class="none text-lg">- Bagi peserta yang telah membayar, akan dikirimkan Buku BICC (Basic Intensive Care Course) sebagai buku panduan kursus</li>
                            <li class="none text-lg">- Peserta yang mengundurkan diri maka dinyatakan gugur sebagai peserta dan biaya pendaftaran tidak dapat dikembalikan</li>
                            <li class="none text-lg">- Peserta yang tidak lulus akan diberikan kesempatan satu kali test remedial tanpa dikenakan biaya</li>
                            <li class="none text-lg">- Peserta yang lulus akan mendapatkan E-sertifikat dengan nilai SKP, apabila sudah mengisi angket/questionnaire di akhir ujian</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2">

                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 text-center">
                                <div class="icheck-success d-inline">
                                    <input type="checkbox" name="terms" value="1" id="checkboxSuccess2">
                                    <label for="checkboxSuccess2" class="mt-2 mr-2 mb-2" style="font-weight: 400">Saya setuju dengan <b>Syarat</b> dan <b>Ketentuan</b> ini</label>
                                    <button type="submit" class="btn btn-primary load-progress" style="width: 30%; border-radius: 50px"><i class="fas fa-arrow-right"></i> Daftar</button>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2">

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>