<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title | Dashboard</title>
    <link rel="icon" type="image/x-icon" href="../images/main-page/favicon.ico">
</head>
<body>
    <?php
            function login() {
            include "config.php";
            if(isset($_POST["username"], $_POST["username"])) {
                $login = $_POST["username"];
                $loginHandler = mb_strtolower($login);
                $pass = $_POST["password"];

                $sth = $db->prepare("SELECT * FROM users");
                $sth->execute();

                $rows = $sth->rowCount();

                if($rows > 0) {
                    while($row = $sth->fetch(PDO::FETCH_ASSOC)) {
                        if(password_verify($pass, $row["password"]) == true && $loginHandler == $row["username"]) {
                            session_start();
                            $_SESSION['username'] = $row["username"];
                            header("Location: index.php");
                        }
                        else {
                            $check = true;
                            header('Location: dashboard-login.php');
                        }
                    }
                }
                else {
                echo "<script>alert('Wystąpił błąd podczas przetwarzania żądania. Spróbuj ponownie później')</script>";
                }
            }
        }
    $dbh = null;
    ?>

    <div class="wrapper">
        <section class="login-card">
            <div class="logo">
                <img src="../images/dashboard/logo-azalia-small.png" alt="logo"/>
                <h1>ADMIN PANEL</h1>
                <img src="../images/dashboard/logo-azalia-small.png" alt="logo"/>
            </div>
            <div class="login-form">
                <h2>Zaloguj się</h2>
                <form class="form" method="post">
                    <input class="input" type="text" id="username" name="username" placeholder="Nazwa użytkownika" required></input>
                    <input class="input" type="password" id="password" name="password" placeholder="Hasło" required></input>
                    <button class="button" type="button" onclick="<?php echo 'login()';?>">Zaloguj</button>
                </form>
                <p class="error <?php if($check == true) {echo "active";} ?>">Podane hasło bądź nazwa użytkownika jest nieprawidłowa</p>
            </div>
        </section>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="./scripts/script.js"></script>
    <script src="./scripts/login.js"></script>
    <script src="./script/jquery.js"></script>
    <link rel="stylesheet" href="./styles/style-dashboard.css">
</body>
</html>