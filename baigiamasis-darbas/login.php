<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prisijungti</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav>
    <h1>
        <a href="index.php">beSTRONG</a>
    </h1>
    <ul>
        <li class="active"><a href="index.php">Pradžia</a></li>
        <li><a href="trainings.php">Treniruotės</a></li>
        <li><a href="prices.php">Kainos</a></li>
        <li><a href="timetable.php">Tvarkaraštis</a></li>
        <li><a href="news.php">Naujienos</a></li>
        <li><a href="duk.php">D.U.K.</a></li>
        <li><a href="login.php">Prisijungti</a></li>
    </ul>
</nav>

<div class="login-block">
    <div class="container">
    <form class="form" id="login">
        <h1 class="form__title">Prisijungti</h1>
        <div class="form__message form__message--error"></div>
        <div class="form__input-group">
            <input type="text" class="form__input" autofocus placeholder="Vartotojo vardas arba el. paštas">
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
            <input type="password" class="form__input" autofocus placeholder="Slaptažodis">
            <div class="form__input-error-message"></div>
        </div>
        <button class="form__button" type="submit">Tęsti</button>
        <p class="form__text">
            <a href="#" class="form__link">Pamiršai slaptažodi?</a>
        </p>
        <p class="form__text">
            <a class="form__link" href="./" id="linkCreateAccount">Neturi paskyros? Sukurti paskyra</a>
        </p>
    </form>
    
    <form class="form form--hidden" id="createAccount">
        <h1 class="form__title">Sukurti paskira</h1>
        <div class="form__message form__message--error"></div>
        <div class="form__input-group">
            <input type="text" id="singupUsername" class="form__input" autofocus placeholder="Vartotojo vardas">
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
            <input type="text" class="form__input" autofocus placeholder="El. paštas">
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
            <input type="password" class="form__input" autofocus placeholder="Slaptažodis">
            <div class="form__input-error-message"></div>
        </div>
        <div class="form__input-group">
            <input type="password" class="form__input" autofocus placeholder="Patvirtinti slaptažodi">
            <div class="form__input-error-message"></div>
        </div>
        <button class="form__button" type="submit">Tęsti</button>
        <p class="form__text">
            <a class="form__link" href="./" id="linkLogin">Turi akaunta? Prisijungti</a>
        </p>
    </form>
    </div>
</div>

<footer class="general-section">
    <ul>
        <li class="active"><a href="index.php">Pradžia</a></li>
        <li><a href="trainings.php">Treniruotės</a></li>
        <li><a href="prices.php">Kainos</a></li>
        <li><a href="timetable.php">Tvarkaraštis</a></li>
        <li><a href="news.php">Naujienos</a></li>
        <li><a href="duk.php">D.U.K.</a></li>
        <li><a href="#">Prisijungti</a></li>
    </ul>

    <div class="partneriai title-part">
        <h1>Partneriai</h1>
        <div class="orange-row"></div>
        <p>Nicke</p>
        <p>Ardidas</p>
        <p>Olimpik Geyms</p>
    </div>
</footer>


    <script src="js/scripts.js"></script>
</body>
</html>