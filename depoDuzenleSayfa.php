<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>AYKUTSAN-Depo Düzenleme</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">AYKUTSAN</a>
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
              <a class="nav-link" href="index.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-tachometer-alt"></i>
                </div>
                Gösterge Paneli
              </a>
              <a class="nav-link" href="stokHareketleriListele.php">
                <div class="sb-nav-link-icon">
                  <i class="fas fa-cubes"></i>
                </div>
                Stok Hareketleri
              </a>
              <div class="sb-sidenav-menu-heading">Düzenleme İşlemleri</div>
              <a class="nav-link" href="urunDuzenleSayfa.php">
                <div class="sb-nav-link-icon">
                  <i class="fa fa-exchange"></i>
                </div>
                Ürün Düzenle</a
              >
              <a class="nav-link" href="tedarikciDuzenleSayfa.php">
                <div class="sb-nav-link-icon">
                  <i class="fa fa-briefcase"></i>
                </div>
                Tedarikçi Düzenle</a
              >
              <a class="nav-link" href="kategoriDuzenleSayfa.php">
                <div class="sb-nav-link-icon">
                  <i class="fa fa-sitemap"></i>
                </div>
                Kategori Düzenle</a
              >
              <a class="nav-link" href="yoneticiDuzenleSayfa.php">
                <div class="sb-nav-link-icon">
                  <i class="fa fa-briefcase"></i>
                </div>
                Yönetici Düzenle</a
              >
              <a class="nav-link" href="depoDuzenleSayfa.php">
                <div class="sb-nav-link-icon">
                  <i class="fa fa-sitemap"></i>
                </div>
                Depo Düzenle</a
              >
              <a class="nav-link" href="stokDuzenleSayfa.php">
                <div class="sb-nav-link-icon">
                  <i class="fa fa-sitemap"></i>
                </div>
                Stok Düzenle
              </a>
              <div
                class="collapse"
                id="collapsePages"
                aria-labelledby="headingTwo"
                data-bs-parent="#sidenavAccordion"
              ></div>
              <div class="sb-sidenav-menu-heading">Tablolar</div>
              <a class="nav-link" href="urunListele.php">
                <div class="sb-nav-link-icon">
                  <i class="fa fa-align-left"></i>
                </div>
                Ürün Listele
              </a>
              <a class="nav-link" href="tedarikciListele.php">
                <div class="sb-nav-link-icon">
                  <i class="fa fa-align-left"></i>
                </div>
                Tedarikçi Listele
              </a>
              <a class="nav-link" href="depoListele.php">
                <div class="sb-nav-link-icon">
                  <i class="fa fa-align-left"></i>
                </div>
                Depo Listele
              </a>
              <a class="nav-link" href="yoneticiListele.php">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Yönetici Listele
              </a>
              <a class="nav-link" href="kategoriListele.php">
                <div class="sb-nav-link-icon">
                  <i class="fa fa-align-left"></i>
                </div>
                Kategori Listele
              </a>
              <a class="nav-link" href="stokListele.php">
                <div class="sb-nav-link-icon">
                  <i class="fa fa-align-left"></i>
                </div>
                Stok Listele
              </a>
            </div>
          </div>
        </nav>
      </div>

        <div id="layoutSidenav_content">

            <main>
                <div class="container">
                    <section class="content">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Depo Düzenle</h3>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label>Depo ID</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="depo_id" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group row">
                                            <label>Depo Adı</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="depo_adi" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" id="ekle" class="btn btn-primary mx-auto col-3 my-1"
                                onclick="depoEkle()">
                                EKLE
                            </button>
                            <button type="button" id="duzenle" class="btn btn-warning mx-auto col-3 my-1"
                                onclick="depoDuzenle()">
                                DÜZENLE
                            </button>
                            <button type="button" id="sil" class="btn btn-danger mx-auto col-3 my-1"
                                onclick="depoSil()">
                                SİL
                            </button>
                            <script>
                                function depoEkle() {
                                    var depo_id = document.getElementById('depo_id').value;
                                    var depo_adi = document.getElementById('depo_adi').value;

                                    var url = 'depoEkle.php';
                                    var params = 'depo_id=' + depo_id + '&depo_adi=' + depo_adi;

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
                                function depoDuzenle() {
                                    var depo_id = document.getElementById('depo_id').value;
                                    var depo_adi = document.getElementById('depo_adi').value;

                                    var url = 'depoDuzenle.php';
                                    var params = 'depo_id=' + depo_id + '&depo_adi=' + depo_adi;
                                    console.log(depo_id);

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
                                function depoSil() {
                                    var depo_id = document.getElementById('depo_id').value;

                                    var confirmDelete = confirm("Depoyu silmek istediğinize emin misiniz?")

                                    if (confirmDelete) {
                                        var url = 'depoSil.php';
                                        var params = 'depo_id=' + depo_id
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