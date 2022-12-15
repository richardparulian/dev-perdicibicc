<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-light" style="overflow-y: auto;">
    <!-- Control sidebar content goes here -->
    <?php foreach ($testimonial as $tm) : ?>
        <div class="asd-card" onclick="this.classList.toggle('expanded')">
            <img src="<?= base_url('assets/dist/img/profile/' . $tm['ProfilePhoto']); ?>" class="my-image" />
            <div class="text1" style="overflow-y: auto;">
                <div class="text-content">

                    <p class="title mb-0 mt-3"><?= $tm['FullName'] ?></p>
                    <small class="text-bold"><?= $tm['HospitalName']; ?></small>
                    <div class="body-text p-2"><?= $tm['TestimonialDesc']; ?></div>

                </div>
            </div>
            <svg class="chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 35" width="30">
                <path d="M5 30L50 5l45 25" fill="none" stroke="#000" stroke-width="5" />
            </svg>
        </div>
    <?php endforeach; ?>
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- Select2 -->
<script src="<?= base_url('assets/plugins/select2/js/select2.full.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/plugins/moment/moment.min.js'); ?>"></script>
<script src="<?= base_url('assets/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.js'); ?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js"></script>

<script type="text/javascript">
    var url = window.location.href;

    $('li.nav-item a').filter(function() {
        return this.href == url
    }).addClass('active');

    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    $(function() {
        $('.select2').select2();

        $(".carousel").swipe({
            swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

                if (direction == 'left') $(this).carousel('next');
                if (direction == 'right') $(this).carousel('prev');

            },
            allowPageScroll: "vertical"
        });

        //Set some options later
        $(".corousel").swipe({
            fingers: 2
        });

        // progress bar body
        $(document).on("click", ".load-progress", function() {
            $('.cover-progress').show()
        });

        $(window).on("beforeunload", function() {
            $('.cover-progress').fadeIn(100).delay(6000).fadeOut(1000);
        });
    });
</script>
</body>

</html>