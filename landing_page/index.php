<?php 
    require_once "../landing_page/header.php"; 
    require_once "../Dashboard/dbkoneksi.php";
?>
<?php 
   $sql = "SELECT * FROM pakaian";
   $rs = $dbh->query($sql);
?>
    <!--====== SLIDER PART START ======-->
    
    <section id="home" class="slider-area pt-100">
        <div class="container-fluid position-relative">
            <div class="slider-active">
                <div class="single-slider">
                    <div class="slider-bg">
                        <div class="row no-gutters align-items-center ">
                            <div class="col-lg-4 col-md-5">
                                <div class="slider-product-image d-none d-md-block">
                                    <img src="assets/images/slider/polo1.jpg" alt="Slider">
                                    <div class="slider-discount-tag">
                                        <p>-50% <br> OFF</p>
                                    </div>
                                </div> <!-- slider product image -->
                            </div>
                            <div class="col-lg-8 col-md-7">
                                <div class="slider-product-content">
                                    <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>Polo Shirt</span></h1>
                                    <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">Kaos polo atau polo shirt sudah menjadi populer sebagai salah satu jenis pakaian pada abad 20.<br> Penampilannya yang semi formal membuat kaos polo dijadikan standar pakaian informal untuk berbagai macam pekerjaan.</p>
                                    <a class="main-btn" href="#product" data-animation="fadeInUp" data-delay="1.5s">Explore More <i class="lni-chevron-right"></i></a>
                                </div> <!-- slider product content -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- container -->
                </div> <!-- single slider -->

                <div class="single-slider">
                        <div class="slider-bg">
                            <div class="row no-gutters align-items-center">
                                <div class="col-lg-4 col-md-5">
                                    <div class="slider-product-image d-none d-md-block">
                                        <img src="assets/images/slider/baju3.jpg" alt="Slider">
                                        <div class="slider-discount-tag">
                                            <p>-20% <br> OFF</p>
                                        </div>
                                    </div> <!-- slider product image -->
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <div class="slider-product-content">
                                        <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span>Kemeja Flanel</span> Sale! is <span>Here</span></h1>
                                        <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">Kemeja flanel merupakan jenis pakaian yang terbuat dari bahan flanel.  <br> Untuk Bahan Flanel Sendiri Berupa Jenis Kain Wol dan Sutra.</p>
                                        <a class="main-btn" href="#product" data-animation="fadeInUp" data-delay="1.5s">Explore More <i class="lni-chevron-right"></i></a>
                                    </div> <!-- slider product content -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                </div> <!-- single slider -->

                <div class="single-slider">
                        <div class="slider-bg">
                            <div class="row no-gutters align-items-center">
                                <div class="col-lg-4 col-md-5">
                                    <div class="slider-product-image d-none d-md-block">
                                        <img src="assets/images/slider/jaket1.jpg" alt="Slider">
                                        <div class="slider-discount-tag">
                                            <p>-65%<br> OFF</p>
                                        </div>
                                    </div> <!-- slider product image -->
                                </div>
                                <div class="col-lg-8 col-md-7">
                                    <div class="slider-product-content">
                                        <h1 class="slider-title mb-10" data-animation="fadeInUp" data-delay="0.3s"><span></span>Jaket<span>Varsity</span></h1>
                                        <p class="mb-25" data-animation="fadeInUp" data-delay="0.9s">Varsity jacket adalah salah satu outerwear yang sedang tren digunakan oleh kalangan milenial. <br> Ciri khas jaket ini adalah menggunakan kancing, bukan resleting pada bagian depan. </p>
                                        <a class="main-btn" href="#product" data-animation="fadeInUp" data-delay="1.5s">Explore More <i class="lni-chevron-right"></i></a>
                                    </div> <!-- slider product content -->
                                </div>
                            </div> <!-- row -->
                        </div> <!-- container -->
                </div> <!-- single slider -->
            </div> <!-- slider active -->
            <div class="slider-social">
                <div class="row justify-content-end">
                    <div class="col-lg-7 col-md-6">
                        <ul class="social text-right">
                            <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                            <li><a href="#"><i class="lni-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- container fluid -->
    </section>
    
    <!--====== SLIDER PART ENDS ======-->
   
    <!--====== DISCOUNT PRODUCT PART START ======-->
    
    <section id="discount-product" class="discount-product pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-discount-product mt-30">
                        <div class="product-image">
                            <img src="assets/images/discount-product/over1.jpg" alt="Product">
                        </div> <!-- product image -->
                        <div class="product-content">
                            <h4 class="content-title mb-15">Canvas-Jacket<br> For Sale</h4>
                            <a href="#product">View Collection <i class="lni-chevron-right"></i></a>
                        </div> <!-- product content -->
                    </div> <!-- single discount product -->
                </div>
                <div class="col-lg-6">
                    <div class="single-discount-product mt-30">
                        <div class="product-image">
                            <img src="assets/images/discount-product/cardigan.jpg" alt="Product">
                        </div> <!-- product image -->
                        <div class="product-content">
                            <h4 class="content-title mb-15">Cardigan <br> Discount up to 80%</h4>
                            <a href="#product">View Collection <i class="lni-chevron-right"></i></a>
                        </div> <!-- product content -->
                    </div> <!-- single discount product -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== DISCOUNT PRODUCT PART ENDS ======-->
   
    <!--====== PRODUCT PART START ======-->
    
    <section id="product" class="product-area pt-100 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="collection-menu text-center mt-30">
                        <h4 class="collection-tilte">OUR COLLECTION</h4>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="active" id="v-pills-furniture-tab" data-toggle="pill" href="#v-pills-furniture" role="tab" aria-controls="v-pills-furniture" aria-selected="true">Style Kekinian</a>
<!--                             
                            <a id="v-pills-decorative-tab" data-toggle="pill" href="#v-pills-decorative" role="tab" aria-controls="v-pills-decorative" aria-selected="false">Style Musim Dingin</a>
                            
                            <a id="v-pills-lighting-tab" data-toggle="pill" href="#v-pills-lighting" role="tab" aria-controls="v-pills-lighting" aria-selected="false">Style Ngampus</a> -->
                            
                            <!-- <a id="v-pills-outdoor-tab" data-toggle="pill" href="#v-pills-outdoor" role="tab" aria-controls="v-pills-outdoor" aria-selected="false">Style Sekolah</a> -->
                            
                        </div> <!-- nav -->
                    </div> <!-- collection menu -->
                </div>
                <div class="row gy-5">
        <?php foreach($rs as $row){?>
          <div class="col-lg-4 menu-item">
            <br>
            <br>
                <a href="../Dashboard/pesanan/form_pesanan.php" class="glightbox"><img src="assets/images/product/dingin4.jpg" class="menu-img img-fluid" alt=""></a>
                <h4><?=$row['nama']?></h4>
                <h3 style="color:#primary;font-family:sans;">
                Rp <?=$row['harga']?>
                </h3>
                
              </div><!-- Menu Item -->
        <?php }?>
      </div>
            </div> <!-- row -->
        </div> 
    </section>
    
    <!--====== PRODUCT PART ENDS ======-->

    <!--====== SERVICES PART START ======-->
    
    <section id="service" class="services-area pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-25">
                        <h3 class="title mb-15">Kategori Pakaian</h3>
                        <p>Fashion Pria dan Wanita</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="services">
                            <img src="assets/images/kategori/kategori1.jpg"
                             alt="services">
                        </div>
                        <div class="sevices-content mt-30">
                            <h4 class="title mb-10"><a href="#"></a>Jaket Kulit</h4>
                            <!-- <ul class="social mt-15">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul> -->
                        </div>
                    </div> <!-- single temp -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="services">
                            <img src="assets/images/kategori/kategori4.jpg"
                             alt="services">
                        </div>
                        <div class="sevices-content mt-30">
                            <h4 class="title mb-10"><a href="#"></a>Kaos</h4>
                            <!-- <ul class="social mt-15">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-original"></i></a></li>
                                <li><a href="#"><i class="lni-instagram"></i></a></li>
                            </ul> -->
                        </div>
                    </div> <!-- single temp -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8">
                    <div class="single-temp text-center mt-30">
                        <div class="services">
                            <img src="assets/images/kategori/kategori3.jpg"
                             alt="services">
                        </div>
                        <div class="sevices-content mt-30">
                            <h4 class="title mb-10"><a href="#"></a>Celana</h4>
                        </div>
                    </div> <!-- single temp -->
                </div>
           
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== SERVICES PART ENDS ======-->

    <!--====== SHOWCASE PART START ======-->
    <section id="showcase" class="testimonial-area pt-200">
        <div class="testimonial-bg bg_cover" style="background-image: url(assets/images/testimonial/toko.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8">
                    <div class="testimonial-content">
                        <div class="testimonial-active">
                            <div class="single-testimonial">
                                <i class="lni-quotation"></i>
                                <p class="mb-30"> UJI-Store berdiri pada tanggal 12 maret 2005 yang berlokasikan di Jonggol Kab-Bogor yang memproduksi pakaian dan produk fashion lainnya.Yang didirikan oleh Rizki Ahmad Fauzi</p>
                                <h6 class="title">Izza</h6>
                                <span>- CEO from Uji-Store</span>
                            </div> <!-- single testimonial -->
                        </div> <!-- testimonial active -->
                    </div> <!-- testimonial content -->
                </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
 
    <!--====== SHOWCASE PART ENDS ======-->
    <!--======  BLOG PART START ======-->
    
    <section id="blog" class="blog-area pt-125">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center pb-25">
                        <h3 class="title mb-15">UJI-Store</h3>
                        <p>UJI-Store mulai merintis karirnya dengan menjual beberapa pakaian casual. Bisnisnya terus berkembang sehingga ia membuka cabang diberbagai daerah</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="assets/images/cabang/toko1.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <div class="content">
                                <h4 class="title"><a href="#">UJI-Store -Bandung</a></h4>
                                <span>25 Agustus 2015</span>
                            </div>
                            <div class="meta d-flex justify-content-between align-items-center">
                                <div class="meta-admin d-flex align-items-center">
                                    <!-- <div class="image">
                                        <a href="#"><img src="assets/images/blog/admin.jpg" alt="Admin"></a>
                                    </div> -->
                                    <div class="admin-title">
                                        <h6 class="title"><a href="#">Adnan-K</a></h6>
                                        <span>Store Managaner</span>
                                    </div>
                                </div>  <!-- meta admin -->
                            </div> <!-- meta -->
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="assets/images/cabang/toko4.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <div class="content">
                                <h4 class="title"><a href="#">UJI-Store - jakarta bundaran HI</a></h4>
                                <span>12 juni 2008</span>
                            </div>
                            <div class="meta d-flex justify-content-between align-items-center">
                                <div class="meta-admin d-flex align-items-center">
                                    <!-- <div class="image">
                                        <a href="#"><img src="assets/images/blog/admin.jpg" alt="Admin"></a>
                                    </div> -->
                                    <div class="admin-title">
                                        <h6 class="title"><a href="#">Dicky-K</a></h6>
                                        <span>Store Manager</span>
                                    </div>
                                </div>  <!-- meta admin -->
                                <!-- <div class="meta-icon">
                                    <ul>
                                        <li><a href="#"><i class="lni-share"></i></a></li>
                                        <li><a href="#"><i class="lni-heart"></i></a></li>
                                    </ul>
                                </div> meta icon -->
                            </div> <!-- meta -->
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <img src="assets/images/cabang/toko3.jpg" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <div class="content">
                                <h4 class="title"><a href="#">UJI-Store -Plaza Indonesia</a></h4>
                                <span>25 Juli 2022</span>
                            </div>
                            <div class="meta d-flex justify-content-between align-items-center">
                                <div class="meta-admin d-flex align-items-center">
                                    <!-- <div class="image">
                                        <a href="#"><img src="assets/images/blog/admin.jpg" alt="Admin"></a>
                                    </div> -->
                                    <div class="admin-title">
                                        <h6 class="title"><a href="#">Farell-R</a></h6>
                                        <span>Manager</span>
                                    </div>
                                </div>  <!-- meta admin -->
                                <!-- <div class="meta-icon">
                                    <ul>
                                        <li><a href="#"><i class="lni-share"></i></a></li>
                                        <li><a href="#"><i class="lni-heart"></i></a></li>
                                    </ul>
                                </div> meta icon -->
                            </div> <!-- meta -->
                        </div>
                    </div> <!-- single blog -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--======  BLOG PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
<?php 
    require_once "../landing_page/footer.php";  
?>
   