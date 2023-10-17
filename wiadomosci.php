<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Football | Wiadomości</title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
</head>
<body>
    <div class="page">
    <navbar class="row navbar" id="js-navbar">
            <div class="col-sm-2 col-2 offset-sm-2 offset-1 navbar-header">
                <div class="navbar-brand">
                    <a href="index.php"><img src="./images/main-page/website-logo-sm.png" alt="logo"/></a>
                </div>
            </div>

            <div class="col-md-6 offset-xl-1 col-xl-5 navbar-header" id="js-menu-list">
                <ul class="list-inline">
                    <li><a class="custom-link" href="index.php">HOME</a></li>
                    <li><a class="custom-link" href="wiadomosci.php">WIADOMOŚCI</a></li>
                    <li><a class="custom-link" href="kontakt.php">KONTAKT</a></li>
                    <li><a class="custom-link" href="https://www.facebook.com/Azalia-Wola-Zarczycka-206789722672561/"><i class="fb bi bi-facebook"></i></a></li>
                </ul>
            </div>

            <div class="dropdown col-3 col-sm-3 ">
                <button class="menu-btn btn btn-lg" id="dropdown-visibility"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"><i class="bi bi-list"></i></i></button>
            </div>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" data-bs-keyboard="false" data-bs-backdrop="false">
                <div class="offcanvas-header">
                    <h6 class="offcanvas-title d-sm-block display-6" id="offcanvas">Menu</h6>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
            <div class="offcanvas-body px-0">
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-start display-6" id="menu">
                    <li class="nav-item"><a href="index.php" class="nav-link text-truncate">Home</a></li>
                    <li><a href="wiadomosci.php" class="nav-link text-truncate">Wiadomości</a></li>
                    <li><a href="kontakt.php" class="nav-link text-truncate">Kontakt</a></li>
                </ul>
            </div>
                <a class="fb-link" href="https://www.facebook.com/Azalia-Wola-Zarczycka-206789722672561/"><i class="fb bi bi-facebook"></i></a>
            </div>
        </navbar>
        <div id="js-navbar-placeholder"></div>

        <section>
            <div class="news-list container-fluid">
                <div class="news">
                    <div class="news-image">
                        <img src="./images/main-page/Lorem.png" alt="zdjęcie">
                    </div>

                    <div class="news-text">
                        <p>06-07-2022 | Admin</p>
                        <h2>LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM</h2>
                        <h3>LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM</h3>
                        <p>LOREM IPSUM LOREM IPSUM LOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUMLOREM IPSUML... <a href="">Zobacz więcej</a></p>
                    </div>
                </div>

                <div class="news">
                    <div class="news-image">
                        <img src="./images/main-page/Lorem.png" alt="zdjęcie">
                    </div>

                    <div class="news-text">
                        <p>06-07-2022</p>
                        <h2>LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM</h2>
                        <h3>LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUM</h3>
                        <p>LOREM IPSUM LOREM IPSUM LOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUM LOREM IPSUM LOREM IPSUM LOREM IPSUMLOREM IPSUML... <a href="">Zobacz więcej</a></p>
                    </div>
                </div>
            </div>
        </section>

        <footer >
            <div class="footer-wrapper">
                <div class="row footer">
                    <div class="logo">
                        <img src="./images/main-page/website-logo-md.png" alt="Logo">
                    </div>
                    <div class="footer-list">
                        <ul class="list-block footer-list-links ">
                            <li><a class="custom-link" href="index.php">GŁÓWNA</a></li>
                            <li><a class="custom-link" href="wiadomosci.php">WIADOMOŚCI</a></li>
                            <li><a class="custom-link" href="mecze.php">MECZE</a></li>
                            <li><a class="custom-link" href="kontakt.php">KONTAKT</a></li>
                        </ul>
                    </div>
                    <div class="footer-line">
                    </div>
                    <div class="addres">
                        <h1>*adres*</h1>
                        <h1>TEL: +48 111 111 111</h1>
                    </div>
                </div>
            </div>
        </footer>
            <div class="copyright">
                <div class="signature">
                    <h4>COPYRIGHT 2022 Football Team</h4>
                    <p>PROJEKT I WYKONANIE: Dominik Dziadosz</p>
                    <p>Herb: <a href='https://pngtree.com/freepng/silhouette-soccer-player_4124265.html'>png image from pngtree.com/</a> </p>
                </div>
            </div>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="./scripts/script.js"></script>
    <link rel="stylesheet" href="./styles/style.css">
</body>
</html>