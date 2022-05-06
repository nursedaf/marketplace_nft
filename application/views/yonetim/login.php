<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<?php
$this->load->view('inc/header.php');
?>

<body class="body header-fixed is_dark">

    <div id="wrapper">
        <div id="page" class="clearfix">
            <?php
            $this->load->view('inc/bodyheader.php');
            ?>

            <section class="flat-title-page inner">
                <div class="overlay"></div>
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title-heading mg-bt-12">
                                <h1 class="heading text-center">Login</h1>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <section class="tf-login tf-section">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="flat-form box-login-email">
                                <div class="box-title-login">
                                    <h5>
                                        <?php if ($this->session->flashdata('msg')) { ?>
                                            <div class="alert alert-success" role="alert">
                                                <?php echo $this->session->flashdata('msg'); ?>
                                            </div>
                                        <?php } ?>
                                    </h5>
                                </div>
                                <div class="form-inner">
                                    <form action="<?php echo base_url('login'); ?>" id="contactform" method= "POST"> 
                                        <input id="name" name="name" tabindex="1" value="" aria-required="true" required type="text" placeholder="Name">
                                        <input id="password" name="password" tabindex="2" value="" aria-required="true" type="password" placeholder="Password" required>
                                        <div class="row-form style-1">
                                            <a href="#" class="forgot-pass">Forgot Password ?</a>
                                        </div>
                                        <button class="submit">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php
            $this->load->view('inc/footer.php');
            ?>

        </div>


        <div class="modal fade popup" id="popup_bid_success" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body space-y-20 pd-40">
                        <h3 class="text-center">Your Bidding
                            Successfuly Added</h3>
                        <p class="text-center">your bid <span class="price color-popup">(4ETH) </span> has been listing
                            to our database</p>
                        <a href class="btn btn-primary"> Watch the listings</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade popup" id="popup_bid" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body space-y-20 pd-40">
                        <h3>Place a Bid</h3>
                        <p class="text-center">You must bid at least <span class="price color-popup">4.89 ETH</span>
                        </p>
                        <input type="text" class="form-control" placeholder="00.00 ETH">
                        <p>Enter quantity. <span class="color-popup">5 available</span>
                        </p>
                        <input type="text" class="form-control quantity" value="1">
                        <div class="hr"></div>
                        <div class="d-flex justify-content-between">
                            <p> You must bid at least:</p>
                            <p class="text-right price color-popup"> 4.89 ETH </p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p> Service free:</p>
                            <p class="text-right price color-popup"> 0,89 ETH </p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p> Total bid amount:</p>
                            <p class="text-right price color-popup"> 4 ETH </p>
                        </div>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#popup_bid_success" data-dismiss="modal" aria-label="Close"> Place a bid</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $this->load->view('inc/scripts.php');
    ?>
</body>

<!-- Mirrored from themesflat.com/html/axiesv/home2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jan 2022 11:33:00 GMT -->

</html>