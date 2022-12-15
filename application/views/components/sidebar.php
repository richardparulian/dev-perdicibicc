<style>
    .bicc {
        max-width: 65%;
    }
</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-info elevation-4 h-auto">
    <!-- Brand Logo -->
    <a href="<?= base_url(); ?>" class="brand-link load-progress pl-4 pr-5">
        <div class="row">
            <div class="col-4 col-md-4">
                <img src="<?= base_url('assets/dist/img/logo.png') ?>" class="brand-image w-100" alt="Perdici BICC" style="opacity: .8;">
            </div>
            <div class="col-8 col-md-8 pl-0" style="margin-top: 1.4rem !important;">
                <p class="brand-text font-weight-bold mb-0 text-md">INDONESIAN SOCIETY OF</p>
                <p class="brand-text font-weight-bold mb-2 text-md">INTENSIVE CARE MEDICINE</p>
                <div class="text-center p-1" style="background-color: #3366CB;">
                    <p class="brand-text font-weight-semi-bold mb-0" style="color: #FEFF32; font-size: .50rem !important">PERHIMPUNAN DOKTER INTENSIVE CARE INDONESIA</p>
                </div>
            </div>
        </div>
    </a>

    <!-- Sidebar -->
    <div class="sidebar pl-5 pr-5">
        <div class="w-100 text-center mt-0">
            <img src="<?= base_url('assets/dist/img/Basic Intensive.png'); ?>" class="bicc" />
        </div>
        <div class="text-center text-danger" style="font-size: 1.1rem !important;">
            <p>Basic Intensive Care Course</p>
        </div>
        <div class="text-justify pt-1" style="font-size: 1.1rem !important;">
            <p>Kursus ini ditujukan bagi dokter umum atau dokter spesialis yang bekerja di IGD/HCU/ICU, yang dibawakan oleh team guru pengajar Intensivist.</p>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-3" style="padding-bottom: 100px;">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-sm-12">

                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <li class="nav-item mb-2">
                            <a href="#" role="button" class="btn btn-md btn-primary nav-link text-white" data-widget="control-sidebar" data-controlsidebar-slide="true" style="border-radius: 50px;">
                                <p>Testimonial</p>
                            </a>
                        </li>
                        <li class="nav-item mb-2">
                            <a href="<?= base_url('detail'); ?>" type="button" class="btn btn-md btn-primary nav-link text-white load-progress" style="border-radius: 50px;">

                                <p>See Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('terms'); ?>" type="button" class="btn btn-md btn-primary nav-link text-white load-progress <?= ($this->uri->segment(1) == "registration" ? "active" : ""); ?>" style="border-radius: 50px;">

                                <p>Registration</p>
                            </a>
                        </li>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-12">

                    </div>
                </div>
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
    <footer class="my-footer text-center bg-white">
        <strong>Powered by MeetMed
            <a href="https://adminlte.io">
                <img src="<?= base_url('assets/dist/img/mainlogo.svg') ?>" alt="User Image" style="width: 30px; height: auto;" />
            </a>
        </strong>
    </footer>
</aside>