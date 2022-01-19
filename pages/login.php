<html>
  <head>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Вход в личный кабинет</title><meta charset="utf-8">
    <script type="text/javascript" src="../scripts/navbar-burger.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  </head>
  <body>
    <wrapper>
      <header>
        <nav class="navbar is-white has-shadow" role="navigation" aria-label="main navigation">
          <div class="navbar-brand">
            <div class="navbar-item" id="logo">
              <a><img src="../images/logo-birga.png" onclick="location.href='../index.php'" style="max-height: 80px"></a>
            </div>
            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
              <span aria-hidden="true"></span>
            </a>
          </div>
          <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-end">
              <a class="navbar-item" href="#">О бирже</a>
              <a class="navbar-item" href="#">О системе</a>
              <a class="navbar-item" href="#">Помощь</a>
              <a class="navbar-item" href="#">Партнеры</a>
              <div class="navbar-item">
                <div class="buttons">
                  <a class="button is-dark is-focused" href="login.php">Войти</a>
                  <a class="button is-warning" href="registration.php"><b>Зарегистрироваться</b></a>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>
   
<main>
<?php 
  if ($_SERVER['REQUEST_METHOD'] === "GET")
  {
?>
<div class="container" id="login-form">
  <div class="columns is-centered">
    <div class="column">
      <form method="POST" class="box has-background-light" action="login.php">
				<div class="field has-text-centered">
				  <div id="text-login">Вход в личный кабинет</div>
				</div>
				<div class="field has-text-centered">
				  <div class="control">
					<label class="radio">
					  <input type="radio" name="account_type" value="applicant" required>
					  Соискатель
					</label>
					<label class="radio">
					  <input type="radio" name="account_type" value="employer">
					  Работодатель
					</label>
				  </div>
				</div>
				<div class="field">
				  <label class="label">Email</label>
				  <div class="control">
					<input class="input" type="email" name="login" placeholder="Введите почту" required>
				  </div>
				</div>
				<div class="field">
				  <label class="label">Пароль</label>
				  <div class="control">
					<input class="input" type="password" name="password" placeholder="********" required>
				  </div>
				</div>
				<div class="field has-text-centered">
				  <a id="question" href="registration.php">Еще не зарегистрированы?</a>
				</div>
				<div class="buttons is-centered">
					<button class="button is-success" id="button-login">Войти</button>
				</div>
		  </div>
		</div>
<?php
  }
  if ($_SERVER['REQUEST_METHOD'] === "POST"){
    if (isset($_POST['account_type'])) {$account_type = $_POST['account_type'];}
    if (isset($_POST['login'])) {$login = $_POST['login'];}
    if (isset($_POST['password'])) {$password = $_POST['password'];}
    echo "<div> <p>Тип: ", $account_type, "</p><p>Логин: ", $login, "</p><p>Пароль: ", password_hash($password, PASSWORD_DEFAULT), "</p></div>";
    if (password_verify($password, password_hash($password, PASSWORD_DEFAULT))) {
      echo "Валидный</p></div>";
      } else {
      echo "Невалидный</p></div>";
    }
  }
?>
</main>
  
  <footer>
    <div class="line">
      <div class="two-columns">
        <p><b>Городская студенческая биржа труда и обучения (ГСБТО)</b></p>
        <p><i class="fas fa-clock"></i> с 10:00 до 16:00</p>
        <p><i class="fas fa-map-marker-alt"></i> 191186, Санкт-Петербург, ул. Большая Морская, д. 18, СПбГУПТД, офис 131</p>
      </div>
      <div class="two-columns">
        <p><i class="fas fa-phone"></i> (812) 315-02-94, (812) 315-13-56</p>
        <p><i class="fas fa-fax"></i> (812) 315-02-94</p>
        <p><i class="fas fa-envelope"></i> birga@sutd.ru</p>
      </div>
    </div>
  </footer>
  </wrapper>
 </body>
</html>