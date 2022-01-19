<html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="../style.css">
    <script type="text/javascript" src="../scripts/check.js"></script>
    <title>Регистрация</title><meta charset="utf-8">
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
              <a class="button is-dark" href="login.php">Войти</a>
              <a class="button is-warning is-focused" href="registration.php"><b>Зарегистрироваться</b></a>
            </div>
          </div>
        </div>
      </div>
    </nav>
   </header>
  <main>

<div class="container" id="login-form">
        <div class="columns is-centered">
          <div class="column">
            <form method="POST" class="box has-background-light" action="registration/step.php">
				<div class="field has-text-centered">
				  <div id="text-login">Регистрация</div>
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
					<input class="input" type="password" id="password" name="password" onkeyup="check();" placeholder="********" required>
				  </div>
				</div>
        <div class="field">
				  <label class="label">Повторите пароль</label>
				  <div class="control">
					<input class="input" type="password" id="confirm_password" name="confirm_password" onkeyup="check();" placeholder="********" required>
				  </div>
				</div>
        <span id="message"></span>
				<div class="field has-text-centered">
				  <a id="question" href="login.php">Уже зарегистрированы?</a>
				</div>
				<div class="buttons is-centered">
					<button class="button is-success" id="button-login">Зарегистрироваться</button>
				</div>
		  </div>
		</div>
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