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
                                <h1 class="heading text-center">Connect Wallet</h1>
                            </div>
                            <div class="breadcrumbs style2">
                                <ul>
                                    <li><a href="index-2.html">Home</a></li>
                                    <li>Connect Wallet</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="tf-connect-wallet tf-section">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tf-title-heading ct style-2 mg-bt-12">
                                Connect Your Wallet
                            </h2>
                            <h5 class="sub-title ct style-1 pad-400">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum obcaecati dignissimos
                                quae quo ad iste ipsum officiis deleniti asperiores sit.
                            </h5>
                        </div>
                        <div class="col-md-12">
                            <div class="sc-box-icon-inner style-2">
                                <div class="sc-box-icon">
                                    <div class="img">
                                        <img src="<?php echo base_url(); ?>assets/images/icon/icon-1.png" alt="Image">
                                    </div>
                                    <h4 class="heading"><a href="login.html">Meta Mask</a> </h4>
                                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt</p>
                                </div>
                                <div class="sc-box-icon">
                                    <div class="img">
                                        <img src="<?php echo base_url(); ?>assets/images/icon/icon-6.png" alt="Image">
                                    </div>
                                    <h4 class="heading"><a href="login.html"> Bitski</a></h4>
                                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt</p>
                                </div>
                                <div class="sc-box-icon">
                                    <div class="img">
                                        <img src="<?php echo base_url(); ?>assets/images/icon/Vector.png" alt="Image">
                                    </div>
                                    <h4 class="heading"><a href="login.html">Fortmatic</a> </h4>
                                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt</p>
                                </div>
                                <div class="sc-box-icon">
                                    <div class="img">
                                        <img src="<?php echo base_url(); ?>assets/images/icon/WalletConnect.png" alt="Image">
                                    </div>
                                    <h4 class="heading"><a href="login.html">Wallet Connect</a> </h4>
                                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt</p>
                                </div>
                                <div class="sc-box-icon mgbt-0 mgbt-30">
                                    <div class="img">
                                        <img src="<?php echo base_url(); ?>assets/images/icon/icon-2.png" alt="Image">
                                    </div>
                                    <h4 class="heading"><a href="login.html">Coinbase Wallet</a> </h4>
                                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt</p>
                                </div>
                                <div class="sc-box-icon mgbt-0 mgbt-30">
                                    <div class="img">
                                        <img src="<?php echo base_url(); ?>assets/images/icon/icon-3.png" alt="Image">
                                    </div>
                                    <h4 class="heading"><a href="login.html">Authereum</a> </h4>
                                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt</p>
                                </div>
                                <div class="sc-box-icon mgbt-0">
                                    <div class="img">
                                        <img src="<?php echo base_url(); ?>assets/images/icon/icon-4.png" alt="Image">
                                    </div>
                                    <h4 class="heading"><a href="login.html">Kaikas</a> </h4>
                                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt</p>
                                </div>
                                <div class="sc-box-icon">
                                    <div class="img">
                                        <img src="<?php echo base_url(); ?>assets/images/icon/icon-5.png" alt="Image">
                                    </div>
                                    <h4 class="heading"><a href="login.html">Torus</a> </h4>
                                    <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                        eiusmod tempor incididunt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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