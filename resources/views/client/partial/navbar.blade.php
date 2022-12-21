<header id="header" class="fixed-top d-flex align-items-center">
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="imageLogo" src="{{asset('assets/images/Asset 2.png')}}" alt="" />
                <h4 style="text-shadow: 3px 3px 8px #000000;">Desa Buahan</h4>
            </a>
            <button class="navbar-toggler navbar-color" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
                <!-- <span class="navbar-toggler-icon"></span> -->
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        Desa Buahan
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLinkRight" role="button"
                              data-mdb-toggle="dropdown" aria-expanded="false">
                              Profil Desa
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkRight">
                              <li><a class="dropdown-item" href="/profil">Searah Desa</a></li>
                              <li><a class="dropdown-item" href="/wilayah">Wilayah Desa</a></li>
                              <li><a class="dropdown-item" href="/asetdesa">Aset Desa</a></li>
                              <li class="dropdown">
                                <a class="dropdown-item"> Kependudukan &raquo; </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkRight">
                                  <li><a class="dropdown-item" href="/penduduk">Keseluruhan</a></li>
                                  <li><a class="dropdown-item" href="/penduduk1">Buahan Utara</a></li>
                                  <li><a class="dropdown-item" href="/penduduk2">Buahan Tengah</a></li>
                                  <li><a class="dropdown-item" href="/penduduk3">Buahan Selatan</a></li>
                                </ul>
                              </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLinkRight" role="button"
                              data-mdb-toggle="dropdown" aria-expanded="false">
                              Pemerintahan Desa
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkRight">
                              <li><a class="dropdown-item" href="#">Visi & Misi Desa</a></li>
                              <li><a class="dropdown-item" href="#">Struktur Pemerintahan Desa</a></li>
                              <li class="dropdown">
                                <a class="dropdown-item" > Produk Hukum &raquo; </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkRight">
                                    <li><a class="dropdown-item" href="#">Peraturan Desa</a></li>
                                    <li><a class="dropdown-item" href="#">Peraturan Prebekel</a></li>
                                    <li><a class="dropdown-item" href="#">Keputusan Prebekel</a></li>
                                </ul>
                              </li>
                              <li class="dropdown">
                                <a class="dropdown-item" > Lembaga Desa &raquo; </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkRight">
                                  <li><a class="dropdown-item" href="#">BPD</a></li>
                                  <li><a class="dropdown-item" href="#">LPMD</a></li>
                                  <li><a class="dropdown-item" href="#">Linmas</a></li>
                                  <li><a class="dropdown-item" href="#">PKK</a></li>
                                  <li><a class="dropdown-item" href="#">Karang Taruna</a></li>
                                  <li><a class="dropdown-item" href="#">Bumdes</a></li>
                                </ul>
                              </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLinkRight" role="button"
                              data-mdb-toggle="dropdown" aria-expanded="false">
                              Kegiatan Desa
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkRight">
                              <li><a class="dropdown-item" href="/blog">Artikel Desa</a></li>
                              <li><a class="dropdown-item" href="/umkm">UMKM</a></li>
                              <li><a class="dropdown-item" href="#">Program Desa</a></li>
                              <li><a class="dropdown-item" href="#">Bantuan Desa</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://debest.co.id/">Debest</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
