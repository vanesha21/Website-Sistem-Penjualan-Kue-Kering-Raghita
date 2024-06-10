    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="<?= base_url('assets/css/templatemo-style.css'); ?>" rel="stylesheet" />
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
                            <h2 class="tm-site-title" style="color :yellow;">Kue Kering Raghita</h2>	
                            <h6 class="tm-site-description" style="color :yellow;">A pastry shop</h6>
                        </div>
                    </div>
                    <nav class="col-md-6 col-13 tm-nav">
                        <ul class="tm-nav-ul">
                            <li class="tm-nav-li"><a href="<?= base_url("home"); ?>" class="tm-nav-link active" style="color :yellow;">Beranda</a></li>
                            <li class="tm-nav-li"><a href="<?= base_url("keranjang"); ?>" class="tm-nav-link" style="color :yellow;">Keranjang</a></li>
                            <li class="tm-nav-li"><a href="<?= base_url("about"); ?>" class="tm-nav-link" style="color :yellow;">Tentang</a></li>
                            <li class="tm-nav-li"><a href="<?= base_url("logout"); ?>" class="tm-nav-link" style="color :yellow;">Logout</a></li>
                        </ul>
                    </nav>	
                </div>
            </div>
        </div>
    </div>


    <main style="overflow: hidden; padding-left: 50px;">
        <header class="row tm-welcome-section">
            <h2 class="col-12 text-center tm-section-title">Selamat Datang di Toko Kue Kering Raghita</h2>
            <p class="col-12 text-center">Menyediakan berbagai macam dan jenis kue kering yang anda inginkan.</p>
        </header>

        <?php foreach($all_produk as $produk) : ?>
        <div class="row tm-gallery" style="float: left; widht: 200px !important; padding-right: 50px;"> 
            <div class="container">
                <div id="tm-gallery-page-produk" class="tm-gallery-page">
					<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item"> 
						<figure>
							<img style="height: 200px !important; max-width: 500px !important; width: 200px !important;" src="<?= base_url('assets/img/'); ?><?= $produk['gambar']; ?>"alt="Image"  class="img-fluid tm-gallery-img"/>
							<figcaption>
								<h4 class="tm-gallery-title"><?= $produk['nama']; ?></h4>
								<p class="tm-gallery-description"><?= $produk['deskripsi']; ?></p>
								<p class="tm-gallery-stok">Stok :<?= $produk['stok']; ?></p>
								<p class="tm-gallery-price">Rp<?= $produk['harga']; ?></p>
                                <a data-id="<?= $produk["id"]; ?>" id="tambah_keranjang" class="tm-btn tm-btn-default tm-right">
                                    <img src="<?= base_url('assets/') ?>img/cart.png" width = 20px height = 30px />
                                </a>
							</figcaption>
						 </figure>
                    </article>
                </div>		 	 
            </div>
        </div>
        <?php endforeach; ?>
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

    $('a#tambah_keranjang').click(function(e) {
        e.preventDefault();
        // console.log($(this).attr("data-id"));
        $.post("<?= base_url('home/aksi_tambah_keranjang'); ?>", {id_produk: $(this).attr("data-id")}, function(output) {
            // console.log(output);
            $("body").append(output);    
        });
    });
});
</script>