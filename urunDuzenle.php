<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>AYKUTSAN-Ürün Düzenleme</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">AYKUTSAN</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></div>
        <!-- Navbar-->

        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <!--  <li><a class="dropdown-item" href="#!">Settings</a></li>-->
                    <!-- <li><a class="dropdown-item" href="#!">Activity Log</a></li>-->
                    <li class="dropdown-header">Sistem Yöneticisi</li>
                    <li><a class="dropdown-item" href="#!">Çıkış Yap</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Gösterge Paneli
                        </a>
                        <div class="sb-sidenav-menu-heading">Düzenleme İşlemleri</div>
                        <a class="nav-link" href="urunDuzenle.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-exchange"></i></div>Ürün Düzenle
                        </a>
                        <a class="nav-link" href="stokDuzenle.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-briefcase"></i></div>Stok Düzenle
                        </a>
                        <a class="nav-link" href="kategoriDuzenle.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-sitemap"></i></div>Kategori Düzenle
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                        </div>
                        <div class="sb-sidenav-menu-heading">Tablolar</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fa fa-align-left"></i></div>
                            Ürün Listele
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Depo Listele
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="tables.php">
                                    <div class="sb-nav-link-icon"><i class="fa fa-align-left"></i></div>
                                    Depo 1
                                </a>
                                <a class="nav-link" href="tables.php">
                                    <div class="sb-nav-link-icon"><i class="fa fa-align-left"></i></div>
                                    Depo 2
                                </a>
                                <a class="nav-link" href="tables.php">
                                    <div class="sb-nav-link-icon"><i class="fa fa-align-left"></i></div>
                                    Depo 3
                                </a>

                            </nav>
                        </div>
                        <a class="nav-link" href="tables.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-align-left"></i></div>
                            Tedarikçi Listele
                        </a>
                        <a class="nav-link" href="tables.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Kullanıcı Ekle
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Giriş Yapan:</div>
                    Sistem Yöneticisi
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">

            <main>
                <div class="container">
                    <section class="content">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ürün Düzenle</h3>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label>Ürün ID</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="urun_id" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label>Ürün Adı</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="urun_adi" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label for="kategori_id">Kategori</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="kategori_id" required>
                                                    <?php
                                                    include '02_baglan.php';
                                                    // Kategorileri sorgula
                                                    $sql = "SELECT kategori_id, kategori_adi FROM kategoriler";
                                                    $result = $conn->query($sql);

                                                    // Kategorileri <option> elemanları olarak döngü ile oluştur
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo '<option value="' . htmlspecialchars($row["kategori_id"]) . '">' . htmlspecialchars($row["kategori_adi"]) . '</option>';
                                                        }
                                                    } else {
                                                        echo '<option value="">Veritabanında kategori bulunamadı.</option>';
                                                    }

                                                    // Veritabanı bağlantısını kapat
                                                    $conn->close();
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label>Ürün Fiyatı</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="birim_fiyat" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group row">
                                        <label for="tedarikci_id">Tedarikçi</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="tedarikci_id" name="tedarikci_id" required>
                                                <?php
                                                include '02_baglan.php';

                                                // Tedarikçileri sorgula
                                                $sql = "SELECT tedarikci_id, tedarikci_adi FROM tedarikciler";
                                                $result = $conn->query($sql);

                                                // Tedarikçileri <option> elemanları olarak döngü ile oluştur
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<option value="' . htmlspecialchars($row["tedarikci_id"]) . '">' . htmlspecialchars($row["tedarikci_adi"]) . '</option>';
                                                    }
                                                } else {
                                                    echo '<option value="">Veritabanında tedarikçi bulunamadı.</option>';
                                                }

                                                // Veritabanı bağlantısını kapat
                                                $conn->close();
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button type="button" id="ekle" class="btn btn-primary mx-auto" onclick="urunEkle()">
                                EKLE
                            </button>
                            <button type="button" id="duzenle" class="btn btn-warning mx-auto" onclick="urunDuzenle()">
                                DÜZENLE
                            </button>
                            <button type="button" id="duzenle" class="btn btn-danger mx-auto" onclick="urunSil()">
                                SİL
                            </button>
                            <script>
                                function urunEkle() {
                                    var urun_id = document.getElementById('urun_id').value;
                                    var urun_adi = document.getElementById('urun_adi').value;
                                    var kategori_id = document.getElementById('kategori_id').value;
                                    var birim_fiyat = document.getElementById('birim_fiyat').value;
                                    var tedarikci_id = document.getElementById('tedarikci_id').value;

                                    var url = 'urun_ekle.php';
                                    var params = 'urun_id=' + urun_id + '&urun_adi=' + urun_adi + '&kategori_id=' + kategori_id + '&birim_fiyat=' + birim_fiyat + '&tedarikci_id=' + tedarikci_id;

                                    var xhr = new XMLHttpRequest();
                                    xhr.open('POST', url, true);
                                    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

                                    xhr.onreadystatechange = function () {
                                        if (xhr.readyState == 4 && xhr.status == 200) {
                                            console.log(xhr.responseText);

                                        }
                                    }

                                    xhr.send(params);
                                }
                            </script>
                            <script>
                                function urunDuzenle() {
                                    var urun_id = document.getElementById('urun_id').value;
                                    var urun_adi = document.getElementById('urun_adi').value;
                                    var kategori_id = document.getElementById('kategori_id').value;
                                    var birim_fiyat = document.getElementById('birim_fiyat').value;
                                    var tedarikci_id = document.getElementById('tedarikci_id').value;

                                    var url = 'urun_duzenle.php';
                                    var params = 'urun_id=' + urun_id + '&urun_adi=' + urun_adi + '&kategori_id=' + kategori_id + '&birim_fiyat=' + birim_fiyat + '&tedarikci_id=' + tedarikci_id;
                                    console.log(kategori_id)
                                    var xhr = new XMLHttpRequest();
                                    xhr.open('POST', url, true);
                                    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                                    xhr.onreadystatechange = function () {
                                        if (xhr.readyState == 4 && xhr.status == 200) {
                                            console.log(xhr.responseText);

                                        }
                                    }

                                    xhr.send(params);
                                }
                            </script>
                            <script>
                                function urunSil() {
                                    var urun_id = document.getElementById('urun_id').value;

                                    // Kullanıcıya silme işlemini onaylamasını isteyebilirsiniz
                                    var confirmDelete = confirm("Ürünü silmek istediğinizden emin misiniz?");

                                    if (confirmDelete) {
                                        var url = 'urun_sil.php';
                                        var params = 'urun_id=' + urun_id;
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST', url, true);
                                        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                                        xhr.onreadystatechange = function () {
                                            if (xhr.readyState == 4 && xhr.status == 200) {
                                                console.log(xhr.responseText);
                                            }
                                        }

                                        xhr.send(params);
                                    }
                                }
                            </script>

                        </div>
                </div>
                </section>
        </div>

        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; AYKUTSAN</div>
                </div>
        </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>