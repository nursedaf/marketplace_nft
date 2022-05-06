<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<?php $this->load->view('inc/header.php'); ?>

<body class="body header-fixed is_dark">

    <div id="wrapper">
        <div id="page" class="clearfix">
            <?php $this->load->view('inc/bodyheader.php'); ?>
            <section class="flat-title-page inner">
                <div class="overlay"></div>
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title-heading mg-bt-12">
                                <h1 class="heading text-center">Top Seller NFTs</h1>
                            </div>
                            <div class="breadcrumbs style2">
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                    <li>Top Seller</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="tf-section sc-explore-2">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="flat-tabs explore-tab">

                                <div class="content-tab mg-t-40">

                                    <div class="content-inner collectionType">
                                        <?php foreach ($items as $item) { ?>

                                            <div class="sc-card-product explode style2 mg-bt">
                                                <div class="card-media" style="background-image: url('<?php echo base_url(); ?><?php echo $item->image; ?>'); height:300px; background-repeat: no-repeat; background-position: center; background-size: contain;">
                                                    <a href="<?php echo base_url('productpage/' . $item->id); ?>"></a>
                                                    <div class="button-place-bid">
                                                        <a href="#" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
                                                    </div>
                                                </div>

                                                <div class="card-title">
                                                    <h5><a href="<?php echo base_url('productpage/' . $item->id); ?>"><?php echo $item->name; ?></a></h5>
                                                </div>
                                                <div class="card-bottom style-explode">
                                                    <div class="price">
                                                        <span>Current Bid</span>
                                                        <div class="price-details">
                                                            <h5> <?php echo $item->bid; ?></h5>
                                                            <!--                                                         <span>= $12.246</span>-->
                                                        </div>
                                                    </div>
                                                    <!-- <a href="#" class="view-history reload">View History</a> -->
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 wrap-inner load-more text-center">
                            <input type="hidden" id="result_no" value="8">
                            <input type="button" class="sc-button fl-button pri-3" id="load" value="Load More">
                            <p class='p' id='nomore' style="display:none">No More</p>
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

    <script>
        var table = "items";
        var kategori = 0;
        var siralama = 0;
        $(document).ready(function() {
            $('#load').click(function() {
                loadmore();
            });
        });

        function loadmore() {
            var val = document.getElementById("result_no").value;

            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('site/Pages/loadmore'); ?>',
                data: {
                    getresult: val,
                    table: table,
                    kategori: kategori,
                    siralama: siralama
                },
                success: function(response) {
                    document.getElementById("result_no").value = Number(val) + 8;

                    var response = JSON.parse(response);
                    $(".collectionType").append(response.icerik);
                    if (response.nexts == 0) {
                        $('#load').hide();
                        document.getElementById("nomore").style.display = "block";
                        document.getElementById("result_no").value = 8;
                    }
                }
            });

        }
    </script>


</body>


</html>