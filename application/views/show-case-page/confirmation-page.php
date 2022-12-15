<?= $this->session->flashdata("message"); ?>

<div class="content-wrapper ml-0 mr-0" style="background-color: #F2F2F2;">
    <div class="jumbotron text-center p-0" style="background-color: unset;">
        <div class="w-100 bg-white height-confirmation">
            <h2><b>Thank You!</b></h2>
            <p><img src="<?= base_url("assets/dist/img/confirmation.png"); ?>" class="img-confirmation" /></p>
            <h2 class="mb-5"><b>For submitting your registration form</b></h2>
        </div>

        <div>
            <h2 class="mt-5 mb-5"><b>Please make payment to complete your regitration process!</b></h2>
            <p class="lead">
                <button type="button" id="checkout-button" data-id="<?= $finalDes; ?>" data-payment="<?= $paymentId; ?>" class="btn btn-default text-bold text-lg" style="background: linear-gradient(90deg, #5de5d4, #55e8ce, #4feac7, #4cecbf, #4eeeb5, #53f0aa, #5af19f, #64f292); border-radius: 50px; width: 10rem;">
                    Pay Now
                    <span class="ml-2 p-1 text-white text-md" style="background-color: #000; border-radius: 50px;">
                        Rp
                    </span>
                </button>
            </p>
        </div>
    </div>
</div>

<footer class="main-footer ml-0" style="border-top: unset; background-color: #F2F2F2;">
    <div class="text-center">
        <strong>
            Having trouble, Contact Us
            <img src="<?= base_url("assets/dist/img/mainlogo.svg"); ?>" style="width: 30px;" />
        </strong>
    </div>
</footer>


<script type="text/javascript">
    $(document).ready(function() {
        $(document).on("click", "#checkout-button", function() {
            var url = $(this).data("id");
            var paymentID = $(this).data("payment");

            loadJokulCheckout(url);
            checkPaymentStatus(paymentID)
        });
    });

    function checkPaymentStatus(paymentID) {
        var url = window.location.origin + "/showcase/paymentStatusCheck/" + paymentID;
        var id = paymentID;

        $(document).ready(function() {
            setInterval(function() {
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(res) {
                        console.log(res);
                        if (res == 2) {
                            window.location = "https://perdicibicc.com/payment-success/" + btoa(encodeURIComponent(paymentID));
                        }
                    }
                });
            }, 5000);
        });
    }
</script>