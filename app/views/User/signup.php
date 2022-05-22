<!--start-breadcrumbs-->

<section class="inner-banner py-5">
    <div class="breadcrumb py-lg-5">
        <div class="breadcrumb">
                <h4 class="inner-text-title font-weight-bold pt-5"></h4>
                <ul class="breadcrumbs-custom-path">
                <li><a href="<?= PATH ?>">Главная</a></li>
                <li>Регистрация</li>
                </ul>
        </div>
    </div>
</section>

<!--end-breadcrumbs-->

<!--prdt-starts-->

<!-- <div class="prdt">
    <div class="container">
        <div class="prdt-top">
            <div class="col-md-12">
                <div class="product-one signup">
                    <div class="register-top heading">
                        <h2>REGISTER</h2>
                    </div>

                    <div class="register-main">
                        <div class="col-md-6 account-left">
                            <form method="post" action="user/signup" id="signup" role="form" data-toggle="validator">
                                <div class="form-group has-feedback">
                                    <label for="login">Login</label>
                                    <input type="text" name="login" class="form-control" id="login" placeholder="Login" value="<?=isset($_SESSION['form_data']['login']) ? h($_SESSION['form_data']['login']) : '';?>" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="pasword">Password</label>
                                    <input type="password" name="password" class="form-control" id="pasword" placeholder="Password" data-error="Пароль должен включать не менее 6 символов" data-minlength="6" value="<?=isset($_SESSION['form_data']['password']) ? h($_SESSION['form_data']['password']) : '';?>" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="name">Имя</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Имя" value="<?=isset($_SESSION['form_data']['name']) ? h($_SESSION['form_data']['name']) : '';?>" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?=isset($_SESSION['form_data']['email']) ? h($_SESSION['form_data']['email']) : '';?>" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="address">Address</label>
                                    <input type="text" name="address" class="form-control" id="address" placeholder="Address" value="<?=isset($_SESSION['form_data']['address']) ? h($_SESSION['form_data']['address']) : '';?>" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <button type="submit" class="btn btn-default">Зарегистрировать</button>
                            </form>
                            <?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- <div class="prdt">
<div class="container">
<div class="prdt-top">
<div class="col-md-12"> -->
<!-- <div class="product-one signup"> -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if(isset($_SESSION['error'])): ?>
                <div class="alert alert-danger">
                    <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                </div>
            <?php endif; ?>
            <?php if(isset($_SESSION['success'])): ?>
                <div class="alert alert-success">
                    <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- <div class="register-main">
<div class="col-md-6 account-left"> -->
<form method="post" action="user/signup" id="signup" role="form" data-toggle="validator">
  <div class="container">
    <h1>Регистрация</h1>
    <p>Пожалуйста, заполните эту форму, чтобы создать учетную запись.</p>
    <hr>

    <div class="form-group has-feedback">
    <label for="login">Логин</label>
    <input type="text" name="login" class="form-control" id="login" placeholder="Введите логин" value="<?=isset($_SESSION['form_data']['login']) ? h($_SESSION['form_data']['login']) : '';?>" required>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    </div>

    <div class="form-group has-feedback">
    <label for="pasword">Пароль</label>
    <input type="password" name="password" class="form-control" id="pasword" placeholder="Введите пароль" data-error="Пароль должен включать не менее 6 символов" data-minlength="6" value="<?=isset($_SESSION['form_data']['password']) ? h($_SESSION['form_data']['password']) : '';?>" required>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    <div class="help-block with-errors"></div>
    </div>

    <div class="form-group has-feedback">
    <label for="name">Имя</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Введите имя" value="<?=isset($_SESSION['form_data']['name']) ? h($_SESSION['form_data']['name']) : '';?>" required>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    </div>

    <div class="form-group has-feedback">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Your.mail_@mail.ru" value="<?=isset($_SESSION['form_data']['email']) ? h($_SESSION['form_data']['email']) : '';?>" required>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    </div>

    <div class="form-group has-feedback">
    <label for="address">Адрес</label>
    <input type="text" name="address" class="form-control" id="address" placeholder="Введите адрес" value="<?=isset($_SESSION['form_data']['address']) ? h($_SESSION['form_data']['address']) : '';?>" required>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    </div>

    <p>Создавая учетную запись, вы соглашаетесь с нашими <a href="https://www.lenmix.com/upload/lenmix_confd.pdf">Условия и конфиденциальность</a>.</p>
    <button type="submit" class="registerbtn-reg btn btn-default">Зарегистрировать</button>
  </div>

  <div class="container signin">
    <p>У вас уже есть аккаунт? <a href="http://horologium/user/login">Войти</a>.</p>
  </div>
<br>
<br>
<br>
<br>
</form>
<?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
<!-- </div>
</div> -->
<!-- </div> -->
<!-- </div>
</div>
</div>
</div> -->
<!--product-end-->

<style>

* {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn-reg {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn-reg:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

</style>

<!-- <link rel="stylesheet" href="public/css/bootstrap.css"> -->