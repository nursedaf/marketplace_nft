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
                                <h1 class="heading text-center">Contact </h1>
                            </div>
                            <div class="breadcrumbs style2">
                                <ul>
                                    <li><a href="index-2.html">Home</a></li>
                                    <li>Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="tf-contact tf-section">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="box-feature-contact">
                                <img src="<?php echo base_url(); ?>assets/images/blog/thumb-8.png" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <h2 class="tf-title-heading style-2 mg-bt-12">
                                Drop Up A Message
                            </h2>
                            <div class="form-inner">
                                <form action="#" id="contactform" novalidate="novalidate" class="form-submit">
                                    <input id="name" name="name" tabindex="1" value="" aria-required="true" required type="text" placeholder="Your Full Name">
                                    <input id="email" name="email" tabindex="2" value="" aria-required="true" required type="email" placeholder="Your Email Address">
                                    <textarea id="message" name="message" tabindex="3" aria-required="true" required placeholder="Message"></textarea>
                                    <button class="submit">Send message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php
            $this->load->view('inc/footer.php');
            ?>
        </div>
    </div>

    <?php
    $this->load->view('inc/scripts.php');
    ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('form[id="contactform"]').on('submit', function(event) {
            event.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                url: '<?php echo base_url('site/Pages/message'); ?>',
                type: 'POST',
                data: formData,
                success: function(data) {
                    Swal.fire(
                        'Thank you.!',
                        'We have received your message.',
                        'success'
                    )
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });
    </script>
</body>


</html>