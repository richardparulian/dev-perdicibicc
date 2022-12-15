<style>
    .div {
        position: absolute;
    }

    .blue {
        right: 32px;
    }

    .red {
        right: 64px;
        z-index: -1;
    }

    .green {
        right: 0;
    }
</style>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom-0" style="background-color: transparent;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="padding-top: 1rem !important"></i></a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <p class="nav-link mb-0" style="padding-top: .85rem !important; font-size: 1.5rem !important;">Basic Intensive Care Course</p>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                <div class="pt-1" style="font-size: 1.5rem !important;">
                    <span>Testimonials</span>
                </div>
            </a>
        </li>
        <li class="nav-item" style="width: 110px;">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                <div class="div blue">
                    <div class="user-panel">
                        <div class="image">
                            <img src="<?= base_url('assets/dist/img/profile/user-1.png'); ?>" class="img-circle elevation-1" />
                        </div>
                    </div>
                </div>
                <div class="div red">
                    <div class="user-panel">
                        <div class="image">
                            <img src="<?= base_url('assets/dist/img/profile/user-2.png'); ?>" class="img-circle elevation-1" />
                        </div>
                    </div>
                </div>
                <div class="div green">
                    <div class="user-panel">
                        <div class="image">
                            <img src="<?= base_url('assets/dist/img/profile/user-3.png'); ?>" class="img-circle elevation-1" />
                        </div>
                    </div>
                </div>
            </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->