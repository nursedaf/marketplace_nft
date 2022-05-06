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
                                <h1 class="heading text-center">Item Details</h1>
                            </div>
                            <div class="breadcrumbs style2">
                                <ul>
                                    <li><a href="index-2.html">Home</a></li>
                                    <li>Item Details</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="tf-section tf-item-details">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-xl-6 col-md-12">
                            <div class="content-left">
                                <div class="media">
                                    <img src="<?php echo base_url(); ?><?php echo $detay->image; ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-12">
                            <div class="content-right">
                                <div class="sc-item-details">
                                    <h2 class="style2"><?php echo $detay->name; ?></h2>
                                    <p><?php echo $detay->info; ?></p>
                                    <div class="meta-item-details style2">
                                        <div class="item meta-price col-md-12">
                                            <span class="heading">Current Bid</span>
                                            <div class="price">
                                                <div class="price-box">
                                                    <h5> <?php echo $detay->bid; ?> ETH</h5>
                                                    <!-- <span>= $12.246</span> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?php echo $detay->url; ?>"  class="sc-button loadmore style bag fl-button pri-3"><span>Place a
                                            bid</span></a>
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

    </div>

    <?php
    $this->load->view('inc/scripts.php');
    ?>
</body>


</html>