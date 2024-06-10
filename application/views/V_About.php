<link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet"/>    
	<link href="<?= base_url('assets/css/templatemo-style.css'); ?>" rel="stylesheet"/>
    <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/parallax.min.js'); ?>"></script>
</head>
<body>

<div class="container">
<!-- Top box -->
    <!-- Logo & Site Name -->
    <div class="placeholder">
        <div class="parallax-window" data-parallax="scroll" data-image-src="<?= base_url('assets/'); ?>img/contoh.png">
            <div class="tm-header">
                <div class="row tm-header-inner">
                    <div class="col-md-6 col-12">
                        <img src="<?= base_url('assets/'); ?>img/logokue2 (1) (1) (2).png" alt="Logo" class="tm-site-logo" /> 
                        <div class="tm-site-text-box">
                            <h2 class="tm-site-title">Kue Kering Raghita</h2>	
                            <h6 class="tm-site-description">A Pastry Shop</h6>
                        </div>
                    </div>
                    <nav class="col-md-6 col-13 tm-nav">
                        <ul class="tm-nav-ul">
                            <li class="tm-nav-li"><a href="<?= base_url('Home'); ?>" class="tm-nav-link" style="color :yellow;">Beranda</a></li>
                            <li class="tm-nav-li"><a href="cart.php" class="tm-nav-link" style="color :yellow;">Keranjang</a></li>
                            <li class="tm-nav-li"><a href="<?= base_url('About'); ?>"  class="tm-nav-link active" style="color :yellow;">Tentang</a></li>
                            <li class="tm-nav-li"><a href="<?= base_url("logout"); ?>" class="tm-nav-link" style="color :yellow;">Logout</a></li>
                        </ul>
                    </nav>	
                </div>
            </div>
        </div>
    </div>

    <main>
    <header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Tentang Kue Kering Raghita</h2>
				<p class="col-12 text-center">Kami menjual berbagai jenis kue kering yang telah teruji aman dan sehat oleh BPOM</p>
			</header>

			<div class="tm-container-inner tm-persons">
				<div class="row">
					<article class="col-lg-6">
						<figure class="tm-person">
							<img src="assets/img/about.jpeg" alt="Image" class="img-fluid tm-person-img" width = 250/>
							<figcaption class="tm-person-description">
								<h4 class="tm-person-name">Rasti Marvianty</h4>
								<p class="tm-person-title">Founder dan CEO</p>
								<p class="tm-person-about">Pemilik sekaligus cooker dari Toko online Kue Kering Raghita.</p>
							</figcaption>
						</figure>
					</article>
                    <div class="tm-address-box">
							<h4 class="tm-info-title tm-text-success">Alamat Kami </h4>
							<address>Jl.kh.abdul Hamid . BTN be one residence blok s26</address>
							<a href="tel:080-090-0110" class="tm-contact-link">
								<i class="fas fa-phone tm-contact-icon"></i>+62 852-5671-0289
							</a>
							<a href="mailto:info@company.co" class="tm-contact-link">
								<i class="fas fa-envelope tm-contact-icon"></i>rastimarvianty@gmail.com
							</a>
						</div>
					</div>
				</div>
            <div class="tm-container-inner-2 tm-map-section">
				<div class="row">
					<div class="col-12">
						<div class="tm-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d778.0780598284917!2d120.33036082914454!3d-4.570452662951995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcf889e76a8a244ec!2zNMKwMzQnMTMuNiJTIDEyMMKwMTknNTEuMyJF!5e1!3m2!1sid!2sid!4v1667649832344!5m2!1sid!2sid" 
									width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" 
									referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			<div class="tm-container-inner-2 tm-info-section">
				<div class="row">	
				</div>
			</div>
			</div>
		</div>
    </main>

    <footer class="tm-footer text-center">
        <p>Copyright &copy; 2022 Kue Kering Raghita 
    </footer>
</div>


<script>
    $(document).ready(function(){
        // Handle click on paging links
        $('.tm-paging-link').click(function(e){
            e.preventDefault();
            
            var page = $(this).text().toLowerCase();
            $('.tm-gallery-page').addClass('hidden');
            $('#tm-gallery-page-' + page).removeClass('hidden');
            $('.tm-paging-link').removeClass('active');
            $(this).addClass("active");
        });
    });
</script>
</div>