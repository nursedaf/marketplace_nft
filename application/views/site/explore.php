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
                                <h1 class="heading text-center">Explore</h1>
                            </div>
                            <div class="breadcrumbs style2">
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                    <li>Explore</li>
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
                            <div class="seclect-box style3">

                                <div id="sort-by" class="dropdown style-2">
                                    <a href="#" class="btn-selector nolink" data-type="sort" data-id="0">Sort by</a>
                                    <ul>
                                        <li class="toprate" data-type="siralama" data-id="1"><span>Top rate</span></li>
                                        <li class="highbid" data-type="siralama" data-id="2"><span>High bid</span></li>
                                        <li class="lowbid" data-type="siralama" data-id="3"><span>Low Bid</span></li>
                                        <li class="news" data-type="siralama" data-id="4"><span>News</span></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="flat-tabs explore-tab">
                                <ul class="menu-tab">

                                    <li class="item-title active" data-type="kategori" data-id="0">
                                        <span class="inner">All</span>
                                    </li>
                                    <?php foreach ($coll as $c) {
                                        $varmi = items(array('coll' => $c->id));
                                        if ($varmi) {
                                    ?>
                                            <li class="item-title" data-type="kategori" data-id="<?php echo $c->id; ?>">
                                                <span class="inner"><?php echo $c->name; ?></span>
                                            </li>
                                    <?php }
                                    }

                                    ?>
                                </ul>
                                <div class="content-tab mg-t-40">

                                    <div class="content-inner collectionType">



                                        <?php foreach ($items as $item) { ?>

                                            <div class="sc-card-product explode style2 mg-bt list-itemss" id="<?php echo $item->id; ?>">
                                                <div class="card-media" style="background-image: url('<?php echo base_url(); ?><?php echo $item->image; ?>'); height:300px; background-repeat: no-repeat; background-position: center; background-size: contain;">
                                                    <a href="<?php echo base_url('productpage/' . $item->id); ?>"></a>
                                                    <div class="button-place-bid">
                                                        <a href="<?php echo $item->url; ?>" class="sc-button style-place-bid style bag fl-button pri-3"><span>Place Bid</span></a>
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
                                                            <!-- <span>= $12.246</span>-->
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

                        <!-- <div class="col-md-12 wrap-inner load-more text-center" id="load">
                            
                            <a href="#" class="sc-button loadmore fl-button pri-3"><span>Load More</span></a>
                        </div> -->

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
        $(document).on('click', '[data-type="kategori"]', function() {
            kategori = $(this).data("id");
            filter();
        });
        $(document).on('click', '[data-type="siralama"]', function() {
            siralama = $(this).data("id");
            filter();
        });

        function filter() {
            $.ajax({
                url: "<?php echo base_url('site/Pages/cekCollectionItems'); ?>",
                type: 'POST',
                data: {
                    siralama: siralama,
                    kategori: kategori
                },
                success: function(data) {
                    $(".collectionType").html(data);
                    $('#load').show();
                    document.getElementById("nomore").style.display = "none";
                }
            });
        }

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

        /*   $(document).on('click', '[data-type="loadmore"]', function() {
 
            id = $(".list-itemss:last").attr("id");
            
            $.ajax({
                url: "<?php echo base_url('site/Pages/loadmore'); ?>",
                method: "POST",
                data: {
                    id: id,
                    kategori : kategori,
                    siralama : siralama
                },
                success: function(data) {
                    $(".collectionType").append(data);
                }
            });
        }); */
    </script>

</body>

</html>