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
                                <h1 class="heading text-center">Blog</h1>
                            </div>
                            <div class="breadcrumbs">
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                    <li>Blog</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="tf-section sc-card-blog dark-style2">
                <div class="themesflat-container">

                    <div class="row">
                        <?php foreach ($blogs as $blog) {
                        ?>
                            <div class="fl-blog fl-item2 col-lg-4 col-md-6">

                                <article class="sc-card-article">

                                    <div class="card-media">
                                        <a href="<?php echo base_url('blogdetail/' . $blog->id); ?>"><img src="<?php echo base_url(); ?><?php echo $blog->image; ?>" alt=""></a>
                                    </div>
                                    <div class="meta-info">

                                        <div class="date"><?php echo $blog->time; ?> </div>
                                    </div>
                                    <div class="text-article">
                                        <h3><a href="<?php echo base_url('blogdetail/' . $blog->id); ?>"><?php echo $blog->title; ?></a></h3>

                                        <p><?php echo (strlen($blog->content) > 200) ? substr($blog->content, 0, 200) : $blog->content;;
                                            ?>...</p>
                                    </div>
                                    <a href="<?php echo base_url('blogdetail/' . $blog->id); ?>" class="sc-button fl-button pri-3"><span>Read More</span></a>
                                </article>

                            </div>
                        <?php } ?>
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
        var table = "blog";
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
                    table:table,
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