<style>
    .none {
        list-style: none;
    }

    .number {
        list-style: decimal;
    }

    .bg-my-color {
        background-color: #ECFAFF;
    }

    .bg-my-tr {
        background-color: #DAE8F2;
    }

    .fixed-image {
        width: -webkit-fill-available;
        position: fixed;
        z-index: 1037;
    }

    .my-pt {
        padding-top: 4rem;
    }

    @media (min-width:576px) {
        .my-pt {
            padding-top: 6rem;
        }
    }

    @media (min-width:768px) {
        .my-pt {
            padding-top: 8rem;
        }
    }

    @media (min-width:992px) {
        .my-pt {
            padding-top: 9rem;
        }
    }

    @media (min-width:1200px) {
        .my-pt {
            padding-top: 9rem;
        }
    }

    .my-ml {
        margin-left: 8.9% !important;
    }

    .carousel-indicators li {
        display: inline-block;
        width: 10px;
        height: 10px;
        margin: 1px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #000 \9;
        background-color: rgba(0, 0, 0, 0);
        border: 1px solid #000;
        border-radius: 10px;
        margin: 2px;
        position: relative;
        top: 30px;
    }

    .carousel-indicators li.active {
        background: #000;
    }

    ol {
        margin-bottom: -.1rem;
    }

    .my-arrow-next {
        background-color: #AEDCFD;
        padding: 10px 10px 5px 12px;
        text-align: center;
        border-radius: 50%;
    }

    .my-arrow-prev {
        background-color: #AEDCFD;
        padding: 10px 12px 5px 10px;
        text-align: center;
        border-radius: 50%;
    }
</style>

<div class="content-wrapper bg-white pb-2">
    <section class="content-header pl-0 pr-0 pt-0 pb-2">
        <div class="w-100 text-danger text-center text-md">
            <p>Untuk melihat testimonial klik sudut kanan atas</p>
        </div>
    </section>

    <section class="content ml-2 mr-2">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 my-ml" src="<?= base_url('assets/dist/img/1.png'); ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 my-ml" src="<?= base_url('assets/dist/img/2.png'); ?>" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 my-ml" src="<?= base_url('assets/dist/img/3.png'); ?>" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <div class="my-arrow-prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </div>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <div class="my-arrow-next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="shortcut w-100 text-center">
                <a href="<?= base_url(); ?>" class="btn btn-sm btn-primary" style="border-radius: 50px;">Back to Home</a>
                <a href="<?= base_url("terms"); ?>" class="btn btn-sm btn-primary" style="border-radius: 50px;">Register Now!</a>
            </div>
        </div>
    </section>
</div>