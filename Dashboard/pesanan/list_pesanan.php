<?php 
    require_once "../layout/header.php";
    require_once "../layout/menu.php";
    require_once "../dbkoneksi.php";   
?>
<?php 
   $sql = "SELECT * FROM pesanan";
   $rs = $dbh->query($sql);
?>
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="../index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <!-- <div class="sb-sidenav-menu-heading"></div> -->
                            <a class="nav-link" href="../produk/list_produk.php" data-bs-toggle="" data-bs-target="#Layouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Pakaian
                                <div class="sb-sidenav-collapse-arrow"><i class=""></i></div>
                            </a>
                            <!-- <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div> -->
                            <a class="nav-link" href="list_pesanan.php" data-bs-toggle="" data-bs-target="#Layouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pesanan
                                <div class="sb-sidenav-collapse-arrow"><i class=""></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                     <!-- <a class="nav-link collapsed" href="pesanan/list_pesanan.php" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a> -->
                                    <!-- <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div> -->
                                    <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a> -->
                                    <!-- <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div> -->
                                </nav>
                            </div>
                            <!-- <div class="sb-sidenav-menu-heading">Addons</div> -->
                            <a class="nav-link" href="../tipe_pakaian/list_tipe.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Tipe_Pakaian
                            </a>
                            <a class="nav-link" href="../../landing_page/index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Back
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
<div id="layoutSidenav_content">
    <main>
        <div class="section-title">
        <h3>List Pesanan Masuk </h3>
        </div> 
        <div class="container">
                    <a class="btn btn-success" href="form_pesanan.php" role="button" style="margin: 1em 0em 1em 0em;">Add Pesanan</a>
                    <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
                    <thead>
                                        <tr class="table-primary text-uppercase">
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Kategori</th>
                                        <th>Jumlah Pesanan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $nomor  =1 ;
                                    foreach($rs as $row){
                                    ?>
                                        <tr>
                                            <td><?=$nomor?></td>
                                            <td><?=$row['tanggal']?></td>
                                            <td><?=$row['pakaian_id']?></td>
                                            <td><?=$row['quantity']?></td>
                                        <td>
                                        
                                <a class="btn btn-primary" href="view_pesanan.php?id=<?=$row['id']?>">View</a>
                                <a class="btn btn-warning" href="edit_pesanan.php?idedit=<?=$row['id']?>">Edit</a>
                                <a class="btn btn-danger" href="delete_pesanan.php?iddel=<?=$row['id']?>"
                                onclick="if(!confirm('Anda Yakin Hapus Data Pesanan Anda <?=$row['tanggal']?>?')) {return false}">Delete</a>
                                </td>
                                        </tr>
                                    <?php 
                                    $nomor++;   
                                    } 
                                    ?>
                            </tbody>
                        </table>
                    </div>
            </div>
    </main>
</div>


<?php require_once "../layout/footer.php";?>