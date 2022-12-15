<style>
    body {
        background: linear-gradient(180deg, #e32c23, #e5372c, #e74035, #e8483d, #ea5046, #eb584e, #ec6056, #ed675e, #ed6e66);
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    }

    .container {
        max-width: 380px;
        margin: 30px auto;
        overflow: hidden;
    }

    .printer-top {
        z-index: 1;
        border: 6px solid #666666;
        height: 6px;
        border-bottom: 0;
        border-radius: 6px 6px 0 0;
        background: #333333;
    }

    .printer-bottom {
        z-index: 0;
        border: 6px solid #666666;
        height: 6px;
        border-top: 0;
        border-radius: 0 0 6px 6px;
        background: #333333;
    }

    .paper-container {
        position: relative;
        overflow: hidden;
        height: 70%;
    }

    .paper {
        background: #ffffff;
        height: auto;
        position: absolute;
        z-index: 2;
        margin: 0 12px;
        margin-top: -12px;
        animation: print 1800ms cubic-bezier(0.68, -0.55, 0.265, 0.9) infinite;
        -moz-animation: print 1800ms cubic-bezier(0.68, -0.55, 0.265, 0.9) infinite;
    }

    .main-contents {
        margin: unset;
        padding: 20px;
        width: 316px;
    }

    .jagged-edge {
        position: relative;
        height: unset;
        width: 100%;
        margin-top: -1px;
    }

    .jagged-edge:after {
        content: "";
        display: block;
        position: absolute;
        left: 0;
        right: 0;
        height: 20px;
        background: linear-gradient(45deg, transparent 33.333%, #ffffff 33.333%, #ffffff 66.667%, transparent 66.667%), linear-gradient(-45deg, transparent 33.333%, #ffffff 33.333%, #ffffff 66.667%, transparent 66.667%);
        background-size: 16px 40px;
        background-position: 0 -20px;
    }

    .success-icon {
        text-align: center;
        font-size: 48px;
        height: 72px;
        background: #359d00;
        border-radius: 50%;
        width: 72px;
        height: 72px;
        margin: 16px auto;
        color: #fff;
    }

    .success-title {
        font-size: 22px;
        text-align: center;
        color: #666;
        font-weight: bold;
        margin-bottom: 16px;
    }

    .success-description {
        color: #000;
    }

    table tr td {
        color: #000;
    }

    label {
        font-weight: bold;
    }

    .order-details {
        text-align: center;
        color: #333;
        font-weight: bold;
    }

    .order-details .order-number-label {
        font-size: 18px;
        margin-bottom: 8px;
    }

    .order-details .order-number {
        border-top: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        line-height: 48px;
        font-size: 48px;
        padding: 8px 0;
        margin-bottom: 24px;
    }

    .order-footer {
        text-align: center;
        line-height: 18px;
        font-size: 18px;
        margin-top: 30px;
        margin-bottom: 8px;
        font-weight: bold;
        color: #999;
    }

    @keyframes print {
        0% {
            transform: translateY(0%);
        }

        100% {
            transform: translateY(0%);
        }
    }

    @-webkit-keyframes print {
        0% {
            -webkit-transform: translateY(0%);
        }

        100% {
            -webkit-transform: translateY(0%);
        }
    }

    @-moz-keyframes print {
        0% {
            -moz-transform: translateY(0%);
        }

        100% {
            -moz-transform: translateY(0%);
        }
    }

    @-ms-keyframes print {
        0% {
            -ms-transform: translateY(0%);
        }

        100% {
            -ms-transform: translateY(0%);
        }
    }

    a {
        color: black;
        text-decoration: none;
        cursor: grab;
    }

    .Button {
        position: relative;
        top: 0px;
        padding: 15px 25px;
        border: solid #1a1a1a 3px;
        border-radius: 20px;
        margin: 10px;
        box-shadow: 0px 10px 0px #1a1a1a;
    }

    .Button:hover {
        top: 2px;
        box-shadow: 0px 8px 0px #1a1a1a;
    }

    .Button:active {
        transition: 100ms ease;
        top: 8px;
        box-shadow: 0px 2px 0px #1a1a1a;
    }

    .White {
        background: #fff;
    }

    .White:hover {
        background: #eee;
    }

    .White:active {
        background: #ddd;
    }

    ::selection {
        color: Black;
        background: #00000000;
    }

    ::-moz-selection {
        color: Black;
        background: #00000000;
    }
</style>

<body>
    <div class="container">
        <div class="printer-top"></div>

        <div class="paper-container">
            <div class="printer-bottom"></div>

            <div class="paper">
                <div class="main-contents">
                    <div class="success-icon">&#10004;</div>
                    <div class="success-title">
                        Payment Complete
                    </div>
                    <div class="success-description">
                        <small>
                            <p>Hi <?= $getUser['FullName']; ?>,</p>
                        </small>
                        <small>
                            <p>Your transaction was successful!</p>
                        </small>
                        <label class="">Payment Details:</label>
                        <table style="margin-top: 10px;">
                            <tr>
                                <td><small>Amount</small></td>
                                <td><small>:</small></td>
                                <td><small><?= number_format($getPayment['Total'], 0, ',', '.'); ?></small></td>
                            </tr>
                            <tr>
                                <td><small>Account</small></td>
                                <td><small>:</small></td>
                                <td><small>123456789</small></td>
                            </tr>
                        </table>
                        <small>
                            <p>We advise to keep this email for future reference.</p>
                        </small>
                        <hr />
                        <table>
                            <tr>
                                <td><small>Order Date</small></td>
                                <td><small>:</small></td>
                                <td><small><?= format_indo($getPayment['PaymentDate']); ?></small></td>
                            </tr>
                            <tr>
                                <td><small>Order Number</small></td>
                                <td><small>:</small></td>
                                <td><small><?= $getPayment['PaymentNumber']; ?></small></td>
                            </tr>
                        </table>
                    </div>
                    <div class="order-footer">Thank you!</div>
                </div>
                <div class="jagged-edge"></div>
            </div>
        </div>
    </div>
    <div style="text-align: center;">
        <a href="<?= base_url(); ?>" class="Button White" href="#">Back to home</a>
    </div>
</body>