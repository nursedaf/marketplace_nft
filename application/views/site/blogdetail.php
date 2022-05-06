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
                                <h1 class="heading text-center"><?php echo $detay->title ?>
                                </h1>
                            </div>
                            <div class="breadcrumbs style2">
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                    <li>Read More
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="tf-section post-details">
                <div class="themesflat-container">
                    <div class="wrap-flex-box style">
                        <div class="post">
                            <div class="inner-content">
                                <h2 class="title-post"><?php echo $detay->title ?></h2>
                                <div class="divider"></div>
                                <div> <?php echo $detay->content; ?></div>
                                <div class="sc-widget style-1">
                                   <!--  <div class="widget widget-tag style-2">
                                        <h4 class="title-widget">Tags</h4>
                                        <ul>
                                            <li><a href="#">Bitcoin</a></li>
                                            <li><a href="#">Token</a></li>
                                            <li><a href="#">Wallet</a></li>
                                        </ul>
                                    </div> -->
                                    <div class="widget widget-social style-2">
                                        <h4 class="title-widget">Share:</h4>
                                        <ul>
                                            <li><a href="#" class="icon-fl-facebook"></a></li>
                                            <li class="style-2"><a href="#" class="icon-fl-coolicon"></a></li>
                                            <li class="mgr-none"><a href="#" class="icon-fl-mess"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="divider d2"></div>
                      
                            </div>
                        </div>
                        <div class="side-bar details">
                            <div class="widget widget-recent-post mg-bt-43">
                                <h3 class="title-widget mg-bt-23">Recent Post</h3>
                                <ul>
                                    <?php foreach($blogs as $blog){?> 
                                    <li class="box-recent-post">
                                        <div class="box-feature"><a href=""><img src="<?php echo base_url(); ?><?php echo $blog->image; ?>" alt="image"></a>
                                        </div>
                                        <div class="box-content">
                                            <a href="<?php echo base_url('blogdetail/' . $blog->id); ?>" class="title-recent-post"><?php echo $blog->title; ?></a>
                                            <span><a href="" class="day-recent-post"><?php echo $blog->time; ?></a></span>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                      <!--       <div class="widget widget-tag style-1">
                                <h3 class="title-widget mg-bt-23">Popular Tag</h3>
                                <ul>
                                    <li><a href="blog.html" class="box-widget-tag">Bitcoin</a></li>
                                    <li><a href="blog.html" class="box-widget-tag">NFT</a></li>
                                    <li><a href="blog.html" class="box-widget-tag">Bids</a></li>
                                    <li><a href="blog.html" class="box-widget-tag">Digital</a></li>
                                    <li><a href="blog.html" class="box-widget-tag">Arts</a></li>
                                    <li><a href="blog.html" class="box-widget-tag">Marketplace</a></li>
                                    <li><a href="blog.html" class="box-widget-tag">Token</a></li>
                                    <li><a href="blog.html" class="box-widget-tag">Wallet</a></li>
                                    <li><a href="blog.html" class="box-widget-tag">Crypto</a></li>
                                </ul>
                            </div> -->
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

<!-- Mirrored from themesflat.com/html/axiesv/home2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jan 2022 11:33:00 GMT -->

</html>