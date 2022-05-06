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
								<h1 class="heading text-center">About Us</h1>
							</div>
							<div class="breadcrumbs style2">
								<ul>
									<li><a href="<?php echo base_url(); ?>">Home</a></li>
									<li>About Us</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="tf-help-center tf-section">
				<div class="themesflat-container">
					<div class="row">
						<div class="col-12">
							<h2 class="tf-title-heading ct style-2 fs-30 mg-bt-10">
								Software Company
							</h2>
							<h5 class="sub-title help-center mg-bt-32 ">
								We are an experienced and innovative software company that closely follows technological innovations and always keeps up with them, that can use the conversion power of technology professionally with its dynamic staff, that improves business efficiency by arranging the workflows of institutions and organizations.
							</h5>

						</div>
					</div>
					<h2 class="tf-title-heading ct style-2 fs-30 mg-bt-10">
						How do we work?
					</h2>
					<div class="sc-box-icon-inner style-3">

						<div class="sc-box-icon">
							<div class="icon">
								<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="60" height="60" rx="18" fill="#5142FC"></rect>
									<rect opacity="0.4" x="22" y="22" width="15" height="16" fill="white"></rect>
									<path d="M29.9996 33.6001C30.9544 33.6001 31.8701 33.2208 32.5452 32.5457C33.2203 31.8705 33.5996 30.9549 33.5996 30.0001C33.5996 29.0453 33.2203 28.1296 32.5452 27.4545C31.8701 26.7794 30.9544 26.4001 29.9996 26.4001C29.0448 26.4001 28.1292 26.7794 27.454 27.4545C26.7789 28.1296 26.3996 29.0453 26.3996 30.0001C26.3996 30.9549 26.7789 31.8705 27.454 32.5457C28.1292 33.2208 29.0448 33.6001 29.9996 33.6001ZM26.3996 16.5001C26.3996 16.2614 26.3048 16.0325 26.136 15.8637C25.9672 15.6949 25.7383 15.6001 25.4996 15.6001C25.2609 15.6001 25.032 15.6949 24.8632 15.8637C24.6944 16.0325 24.5996 16.2614 24.5996 16.5001V19.2001H23.6996C22.5061 19.2001 21.3615 19.6742 20.5176 20.5181C19.6737 21.362 19.1996 22.5066 19.1996 23.7001V24.6001H16.4996C16.2609 24.6001 16.032 24.6949 15.8632 24.8637C15.6944 25.0325 15.5996 25.2614 15.5996 25.5001C15.5996 25.7388 15.6944 25.9677 15.8632 26.1365C16.032 26.3053 16.2609 26.4001 16.4996 26.4001H19.1996V29.1001H16.4996C16.2609 29.1001 16.032 29.1949 15.8632 29.3637C15.6944 29.5325 15.5996 29.7614 15.5996 30.0001C15.5996 30.2388 15.6944 30.4677 15.8632 30.6365C16.032 30.8053 16.2609 30.9001 16.4996 30.9001H19.1996V33.6001H16.4996C16.2609 33.6001 16.032 33.6949 15.8632 33.8637C15.6944 34.0325 15.5996 34.2614 15.5996 34.5001C15.5996 34.7388 15.6944 34.9677 15.8632 35.1365C16.032 35.3053 16.2609 35.4001 16.4996 35.4001H19.1996V36.3001C19.1996 37.4936 19.6737 38.6382 20.5176 39.4821C21.3615 40.326 22.5061 40.8001 23.6996 40.8001H24.5996V43.5001C24.5996 43.7388 24.6944 43.9677 24.8632 44.1365C25.032 44.3053 25.2609 44.4001 25.4996 44.4001C25.7383 44.4001 25.9672 44.3053 26.136 44.1365C26.3048 43.9677 26.3996 43.7388 26.3996 43.5001V40.8001H29.0996V43.5001C29.0996 43.7388 29.1944 43.9677 29.3632 44.1365C29.532 44.3053 29.7609 44.4001 29.9996 44.4001C30.2383 44.4001 30.4672 44.3053 30.636 44.1365C30.8048 43.9677 30.8996 43.7388 30.8996 43.5001V40.8001H33.5996V43.5001C33.5996 43.7388 33.6944 43.9677 33.8632 44.1365C34.032 44.3053 34.2609 44.4001 34.4996 44.4001C34.7383 44.4001 34.9672 44.3053 35.136 44.1365C35.3048 43.9677 35.3996 43.7388 35.3996 43.5001V40.8001H36.2996C37.4931 40.8001 38.6377 40.326 39.4816 39.4821C40.3255 38.6382 40.7996 37.4936 40.7996 36.3001V35.4001H43.4996C43.7383 35.4001 43.9672 35.3053 44.136 35.1365C44.3048 34.9677 44.3996 34.7388 44.3996 34.5001C44.3996 34.2614 44.3048 34.0325 44.136 33.8637C43.9672 33.6949 43.7383 33.6001 43.4996 33.6001H40.7996V30.9001H43.4996C43.7383 30.9001 43.9672 30.8053 44.136 30.6365C44.3048 30.4677 44.3996 30.2388 44.3996 30.0001C44.3996 29.7614 44.3048 29.5325 44.136 29.3637C43.9672 29.1949 43.7383 29.1001 43.4996 29.1001H40.7996V26.4001H43.4996C43.7383 26.4001 43.9672 26.3053 44.136 26.1365C44.3048 25.9677 44.3996 25.7388 44.3996 25.5001C44.3996 25.2614 44.3048 25.0325 44.136 24.8637C43.9672 24.6949 43.7383 24.6001 43.4996 24.6001H40.7996V23.7001C40.7996 22.5066 40.3255 21.362 39.4816 20.5181C38.6377 19.6742 37.4931 19.2001 36.2996 19.2001H35.3996V16.5001C35.3996 16.2614 35.3048 16.0325 35.136 15.8637C34.9672 15.6949 34.7383 15.6001 34.4996 15.6001C34.2609 15.6001 34.032 15.6949 33.8632 15.8637C33.6944 16.0325 33.5996 16.2614 33.5996 16.5001V19.2001H30.8996V16.5001C30.8996 16.2614 30.8048 16.0325 30.636 15.8637C30.4672 15.6949 30.2383 15.6001 29.9996 15.6001C29.7609 15.6001 29.532 15.6949 29.3632 15.8637C29.1944 16.0325 29.0996 16.2614 29.0996 16.5001V19.2001H26.3996V16.5001ZM35.3996 30.0001C35.3996 31.4323 34.8307 32.8058 33.818 33.8185C32.8053 34.8312 31.4318 35.4001 29.9996 35.4001C28.5674 35.4001 27.1939 34.8312 26.1812 33.8185C25.1685 32.8058 24.5996 31.4323 24.5996 30.0001C24.5996 28.5679 25.1685 27.1944 26.1812 26.1817C27.1939 25.169 28.5674 24.6001 29.9996 24.6001C31.4318 24.6001 32.8053 25.169 33.818 26.1817C34.8307 27.1944 35.3996 28.5679 35.3996 30.0001Z" fill="white"></path>
									<rect x="26" y="26" width="8" height="8" rx="4" fill="#978EFD"></rect>
								</svg>
							</div>
							<h4 class="heading">Research</h4>
						</div>
						<div class="sc-box-icon">
							<div class="icon">
								<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="60" height="60" rx="18" fill="#5142FC"></rect>
									<path d="M24.6969 28.9396C26.3964 27.2401 29.3604 27.2401 31.0599 28.9396L32.1204 30.0001L34.2414 27.8791L33.1809 26.8186C31.7664 25.4026 29.8824 24.6211 27.8784 24.6211C25.8744 24.6211 23.9904 25.4026 22.5759 26.8186L19.3929 30.0001C17.9893 31.4082 17.2012 33.3152 17.2012 35.3033C17.2012 37.2915 17.9893 39.1985 19.3929 40.6066C20.0887 41.3034 20.9153 41.8558 21.8253 42.2322C22.7353 42.6085 23.7106 42.8014 24.6954 42.7996C25.6804 42.8016 26.656 42.609 27.5663 42.2326C28.4765 41.8562 29.3034 41.3036 29.9994 40.6066L31.0599 39.5461L28.9389 37.4251L27.8784 38.4856C27.0331 39.3271 25.8889 39.7995 24.6961 39.7995C23.5034 39.7995 22.3592 39.3271 21.5139 38.4856C20.6716 37.6407 20.1987 36.4963 20.1987 35.3033C20.1987 34.1103 20.6716 32.966 21.5139 32.1211L24.6969 28.9396Z" fill="white"></path>
									<path opacity="0.4" d="M29.9998 19.3936L28.9393 20.4541L31.0603 22.5751L32.1208 21.5146C32.9661 20.6731 34.1103 20.2007 35.3031 20.2007C36.4958 20.2007 37.64 20.6731 38.4853 21.5146C39.3276 22.3595 39.8005 23.5039 39.8005 24.6969C39.8005 25.8899 39.3276 27.0342 38.4853 27.8791L35.3023 31.0606C33.6028 32.7601 30.6388 32.7601 28.9393 31.0606L27.8788 30.0001L25.7578 32.1211L26.8183 33.1816C28.2328 34.5976 30.1168 35.3791 32.1208 35.3791C34.1248 35.3791 36.0088 34.5976 37.4233 33.1816L40.6063 30.0001C42.0099 28.592 42.798 26.685 42.798 24.6969C42.798 22.7087 42.0099 20.8017 40.6063 19.3936C39.1986 17.9893 37.2914 17.2007 35.3031 17.2007C33.3147 17.2007 31.4075 17.9893 29.9998 19.3936Z" fill="white"></path>
								</svg>
							</div>
							<h4 class="heading">Targeting</h4>
						</div>
						<div class="sc-box-icon">
							<div class="icon">
								<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="60" height="60" rx="18" fill="#5142FC"></rect>
									<rect opacity="0.4" x="14" y="30" width="8" height="15" rx="2" fill="white"></rect>
									<rect x="26" y="15" width="8" height="30" rx="2" fill="white"></rect>
									<rect opacity="0.4" x="38" y="25" width="8" height="20" rx="2" fill="white"></rect>
								</svg>
							</div>
							<h4 class="heading">Result</h4>
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
</body>


</html>