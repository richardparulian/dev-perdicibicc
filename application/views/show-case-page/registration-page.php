<style>
    /* .asd {
        background-image: url(/assets/dist/img/bg-regis.jpeg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        filter: opacity(0.8);
    } */
</style>
<div class="content-wrapper pb-1">
    <div class="content-header">

    </div>
    <section class="content">
        <div class="container-fluid">
            <form enctype="multipart/form-data" id="registrationForm" action="<?= base_url('registration-post'); ?>" method="post">
                <div class="card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="fullName" id="fullName" value="<?= $this->session->flashdata('valueFullName'); ?>" placeholder="Full Name with Title">
                                            <?= $this->session->flashdata('errorFullName'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" id="email" value="<?= $this->session->flashdata('valueEmail'); ?>" placeholder="Email">
                                            <?= $this->session->flashdata('errorEmail'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="mobilePhone" id="mobilePhone" value="<?= $this->session->flashdata('valueMobilePhone'); ?>" placeholder="Mobile Phone">
                                            <?= $this->session->flashdata('errorMobilePhone'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Upload Profile Photo</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image" id="image" value="<?= $this->session->flashdata('valueImage'); ?>">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                    <div class="invalid-feedback"></div>
                                                </div>
                                            </div>
                                            <small>(photo must be clear, JPG/PNG file, less than 5 MB)</small><br />
                                            <?= $this->session->flashdata('errorPhotoProfile'); ?>
                                        </div>

                                        <label class="text-bold">General Practitioner Graduation</label>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-border" name="universityGeneral" id="universityGeneral" value="<?= $this->session->flashdata('valueUniversityGeneral'); ?>" placeholder="University Name">
                                            <?= $this->session->flashdata('errorUniversityGeneral'); ?>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control select2" name="graduationGeneral" id="graduationGeneral" style="width: 100%;">
                                                <option selected="selected" disabled>Year of Graduation</option>
                                                <?php foreach ($getYears as $years) : ?>
                                                    <option value="<?= $years; ?>"><?= $years; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?= $this->session->flashdata('errorGraduationGeneral'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="hospitalName" id="hospitalName" value="<?= $this->session->flashdata('valueHospitalName'); ?>" placeholder="Hospital Name">
                                            <?= $this->session->flashdata('errorHospitalName'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="roomDepartment" id="roomDepartment" value="<?= $this->session->flashdata('valueRoomDepartment'); ?>" placeholder="Room Department">
                                            <?= $this->session->flashdata('errorRoomDepartment'); ?>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control select2" name="occupation" id="occupation" style="width: 100%;">
                                                <option selected="selected" disabled>Occupation</option>
                                                <?php foreach ($getOccupation as $occupation) : ?>
                                                    <option value="<?= $occupation['OccupationID']; ?>"><?= $occupation['OccupationLabel']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?= $this->session->flashdata('errorOccupation'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Upload Employment Letter</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="letter" id="letter">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                            <small>(letter issued from hospital, pdf file, less than 5 MB)</small><br />
                                            <?= $this->session->flashdata('errorEmploymentLetter'); ?>
                                        </div>

                                        <label class="text-bold">Current Specialist Graduation</label>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-border" name="typeSpecialist" id="typeSpecialist" value="<?= $this->session->flashdata('valueTypeSpecialist'); ?>" placeholder="Type of Specialist">
                                            <?= $this->session->flashdata('errorTypeSpecialist'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-border" name="universitySpecialist" id="universitySpecialist" value="<?= $this->session->flashdata('valueUniversitySpecialist'); ?>" placeholder="University Name">
                                            <?= $this->session->flashdata('errorUniversitySpecialist'); ?>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control select2" name="graduationSpecialist" id="graduationSpecialist" style="width: 100%;">
                                                <option value="" selected="selected" disabled>Year of Graduation</option>
                                                <?php foreach ($getYears as $years) : ?>
                                                    <option value="<?= $years; ?>"><?= $years; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?= $this->session->flashdata('errorGraduationSpecialist'); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="fullAddress" id="fullAddress" rows="2" placeholder="Full Address"><?= $this->session->flashdata('valueFullAddress'); ?></textarea>
                                            <?= $this->session->flashdata('errorFullAddress'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-bold">Pilih Jadwal Kursus</h4>
                    </div>

                    <div class="card-body">
                        <section class="content">
                            <div class="grid">
                                <?php
                                for ($i = 1; $i <= 1; $i++) {
                                    $year = date('Y', strtotime('+1 year'));
                                ?>
                                    <h6 class="text-secondary"><b>Tahun: <?= $year; ?></b></h6>
                                <?php } ?>
                            </div>

                            <div class="grid">
                                <?= $this->session->flashdata('errorSchedule'); ?>
                            </div>

                            <div class="grid">
                                <?php
                                date_default_timezone_set('Asia/Jakarta');
                                for ($i = 2; $i <= 12; $i++) {
                                    $month = date('F', mktime(0, 0, 0, $i, 10));
                                ?>
                                    <?php foreach ($getQuota as $get) {
                                        if ($month == $get['Month']) {
                                            $total =  $get['Quota'];
                                        }
                                    }
                                    ?>
                                    <?php if ($total < 50) : ?>
                                        <label class="my-card">
                                            <input type="radio" name="schedule" value="<?= $month; ?>" class="my-radio" />

                                            <span class="plan-details">
                                                <span class="plan-type mb-3"><?= $month; ?></span>
                                                <span class="mb-1">
                                                    <?php foreach ($getQuota as $get) {
                                                        if ($month == $get['Month']) {
                                                            echo date("d", strtotime($get['StartDate']));
                                                        }
                                                    } ?> - <?php foreach ($getQuota as $get) {
                                                                if ($month == $get['Month']) {
                                                                    echo date("d", strtotime($get['EndDate']));
                                                                }
                                                            } ?>
                                                </span>
                                                <span class="badge badge-pill badge-info" style="font-size: 90%;">
                                                    <b>Kuota: <?php foreach ($getQuota as $get) {
                                                                    if ($month == $get['Month']) {
                                                                        echo $get['Quota'];
                                                                    }
                                                                }
                                                                ?>/50
                                                    </b>
                                                </span>
                                            </span>
                                        </label>
                                    <?php else : ?>
                                        <label class="my-card">
                                            <input type="radio" class="my-radio" disabled />

                                            <span class="plan-details">
                                                <span class="plan-type"><?= $month; ?></span>

                                                <span>
                                                    Kuota Penuh
                                                </span>
                                            </span>
                                        </label>
                                    <?php endif; ?>
                                <?php } ?>
                            </div>
                        </section>
                        <small class="text-danger">Note: Kursus akan dimulai bila jumlah peserta sudah mencapai minimal 38.</small>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-12 text-right">
                                <div class="list-inline pull-right">
                                    <button type="submit" class="btn btn-primary load-progress">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>