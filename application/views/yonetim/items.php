<?php
defined('BASEPATH') or exit('No direct script access allowed');

?>
<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->
<?php $this->load->view('yonetim/inc/head'); ?>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
        <!--begin::Logo-->
        <a href="">
            <img alt="Logo" src="<?php echo base_url(cekInfo()->logo); ?>" />
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Aside Mobile Toggle-->
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                <span></span>
            </button>
            <!--end::Aside Mobile Toggle-->
            <!--begin::Header Menu Mobile Toggle-->
            <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button>
            <!--end::Header Menu Mobile Toggle-->
            <!--begin::Topbar Mobile Toggle-->
            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:<?php echo base_url('assets/yonetim/'); ?>assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
            <!--end::Topbar Mobile Toggle-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                <!--begin::Brand-->
                <div class="brand flex-column-auto" id="kt_brand">
                    <!--begin::Logo-->
                    <a href="" class="brand-logo">
                        <img alt="Logo" width="50%" src="<?php echo base_url(cekInfo()->logo); ?>" />
                    </a>
                    <!--end::Logo-->
                    <!--begin::Toggle-->
                    <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                        <span class="svg-icon svg-icon svg-icon-xl">
                            <!--begin::Svg Icon | path:<?php echo base_url('assets/yonetim/'); ?>assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                                    <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </button>
                    <!--end::Toolbar-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside Menu-->
                <?php $this->load->view('yonetim/inc/aside');  ?>
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header header-fixed">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <!--begin::Header Menu Wrapper-->
                        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                            <!--begin::Header Menu-->

                            <!--end::Header Menu-->
                        </div>
                        <!--end::Header Menu Wrapper-->
                        <!--begin::Topbar-->
                        <div class="topbar">

                            <div class="topbar-item">
                                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"></span>
                                </div>
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
                        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center flex-wrap mr-2">
                                <!--begin::Page Title-->
                                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Yönetim Paneli</h5>
                                <!--end::Page Title-->
                                <!--begin::Actions-->
                                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                                <div class="d-flex align-items-center" id="kt_subheader_search">
                                    <span class="text-dark-50 font-weight-bold" id="kt_subheader_total"> <?php echo $this->db->from("items")->count_all_results(); ?>
                                        Total</span>
                                    <form class="ml-5" method="POST" action="">
                                        <div class="input-group input-group-sm input-group-solid" style="max-width: 200px">
                                            <input type="text" class="form-control" id="kt_subheader_search_form" value="<?php if (isset($_SESSION["itemid"])) echo $_SESSION["itemid"]; ?>" placeholder="Search with item id..." name="itemid">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-primary font-weight-bold btn-pill" data-click="search">
                                                    <span class="svg-icon">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Toolbar-->

                            <!--end::Toolbar-->
                        </div>
                    </div>
                    <!--end::Subheader-->
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">

                            <?php
                            $where = array(); //"id LIKE '%GELEN_DEGER%'"
                            if (isset($_SESSION["itemid"])) {
                                $where = array("id" => $_SESSION["itemid"]);
                            }
                            foreach (items($where) as $item) {
                            ?> <div class="row " style="margin: 20px;" id="roww<?php echo $item->id; ?>">
                                    <div class="card card-custom card-collapsed col-md-12" data-card="true" id="kt_card_4">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <div class="symbol symbol-60 symbol-2by3 flex-shrink-0">
                                                    <div class="symbol-label" style="background-image: url('<?php echo base_url(); ?><?php echo $item->image; ?>')"></div>
                                                </div>

                                                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>

                                                <div>
                                                    <h3 class="card-label"> <?php echo $item->name; ?></h3>
                                                </div>
                                            </div>

                                            <div class="card-toolbar">
                                                <?php ?>
                                                <a href="#" class="btn btn-icon btn-sm btn-light-primary mr-1" data-card-tool="toggle">
                                                    <i class="ki ki-arrow-down icon-nm"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon btn-sm btn-light-danger" data-id="<?php echo $item->id; ?>" data-type="delete">
                                                    <i class="ki ki-close icon-nm"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-body">

                                            <div class="card-media" style="background-image: url('<?php echo base_url(); ?><?php echo $item->image; ?>'); height:300px; background-repeat: no-repeat; background-position: center; background-size: contain;">
                                            </div>
                                            <form action="<?php echo base_url('yonetim/Pages/updateitem/' . $item->id); ?>" method="POST" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Nft File</label>
                                                    <div></div>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="foto" name="foto">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Name<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" placeholder=" <?php echo $item->name; ?>" name="name">
                                                </div>

                                                <div class="form-group">
                                                    <label>Info<span class="text-danger">*</span></label>
                                                    <textarea class="form-control" tabindex="3" aria-required="true" placeholder=" <?php echo $item->info; ?>" name="info"> </textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>Bid<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" placeholder=" <?php echo $item->bid; ?>" name="bid">
                                                </div>

                                                <div class="form-group">
                                                    <label>Url<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" placeholder=" <?php echo $item->url; ?>" name="url">
                                                </div>

                                                <div class="form-group">
                                                    <label>Collection<span class="text-danger">*</span></label>
                                                    <select class="form-control" id="exampleSelect1" name="collection">
                                                    <option class="dropdown-item" value=""><?php echo $item->coll; ?></option>
                                                        <?php $coll = $this->db->get("collections")->result();
                                                        foreach ($coll as $c) { ?>
                                                            <option class="dropdown-item" value="<?php echo $c->id; ?>"><?php echo $c->name; ?></option>
                                                        <?php  } ?>
                                                    </select>
                                                </div>
                                               
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary mr-2">Değişiklikleri Kaydet</button>
                                                    <button type="reset" class="btn btn-secondary">Vazgeç</button>
                                                </div>

                                            </form>
                                        </div>

                                    </div>

                                </div>
                            <?php } ?>

                            <!--end::Container-->
                        </div>
                        <!--end::Entry-->
                    </div>
                    <!--end::Content-->

                    <!--begin::Footer-->
                    <?php $this->load->view('yonetim/inc/footer'); ?>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Main-->

        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop">
            <span class="svg-icon">
                <!--begin::Svg Icon | path:<?php echo base_url('assets/yonetim/'); ?>assets/media/svg/icons/Navigation/Up-2.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                        <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </div>
        <!--end::Scrolltop-->
        <!--begin::Sticky Toolbar-->

        <!--end::Demo Panel-->
        <?php $this->load->view('yonetim/inc/scripts'); ?>
        <!--end::Page Scripts-->


        <script>
            $(document).on('click', '[data-type="delete"]', function() {
            
                var id = $(this).data('id');
                $.ajax({
                    url: "<?php echo base_url('yonetim/Pages/deleteitem'); ?>",
                    type: 'POST',
                    data: {
                        id: id,
                    },
                    success: function(data) {
                        //alert(id);
                        $("#roww" + id).remove();
                    }
                });

            });
        </script>

</body>
<!--end::Body-->

</html>