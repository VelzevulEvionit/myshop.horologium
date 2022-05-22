
<!--start-breadcrumbs-->

<section class="inner-banner py-5">
    <div class="breadcrumb py-lg-5">
        <div class="breadcrumb">
            <div class="container pt-sm-5 pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-5"></h4>
                <ul class="breadcrumbs-custom-path">
                <li><a href="<?= PATH ?>">Главная</a></li>
                <li>Вход</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--end-breadcrumbs-->

<!--prdt-starts-->

<br>
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

<!-- <div class="prdt">
    <div class="container">
        <div class="prdt-top">
            <div class="col-md-12">
                <div class="product-one login">
                    <div class="register-top heading">
                        <h2>Вход</h2>
                    </div>

                    <div class="register-main">
                        <div class="col-md-6 account-left">
                            <form method="post" action="user/login" id="login" role="form" data-toggle="validator">
                                <div class="form-group has-feedback">
                                    <label for="login">Login</label>
                                    <input type="text" name="login" class="form-control" id="login" placeholder="Login" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="pasword">Password</label>
                                    <input type="password" name="password" class="form-control" id="pasword" placeholder="Password" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <button type="submit" class="btn btn-default">Вход</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->



<form method="post" action="user/login" id="login" role="form" data-toggle="validator">
  <div class="imgcontainer">
    <img src="public/images/no-avatar.png" alt="Avatar" class="avatar" width="10px">
  </div>

  <div class="container">
  <div class="form-group has-feedback">
    <label for="uname"><b>Имя пользователя</b></label>
    <input type="text" name="login" class="form-control" id="login" placeholder="Введите имя пользователя" required>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    </div>
    <div class="form-group has-feedback">
    <label for="psw"><b>Пароль</b></label>
    <input type="password" name="password" class="form-control" id="pasword" placeholder="Введите пароль" required>
    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
    </div>
    <button type="submit">Авторизоваться</button>
    <label>
      <input class="glyphicon glyphicon-unchecked" type="checkbox" checked="checked" name="remember"> Запомни меня
      <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="color-red-xmlns bi bi-check-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg></label>
  </div>

  <div class="container" >
    <button type="button" class="cancelbtn"  ><a href="<?=PATH;?>">Выйти</a></button>
    <span class="psw"><a href="http://horologium/user/signup">Забыли пароль?</a></span>
  </div>
<br>
<br>
<br>
<br>
</form>


<style>
.color-red-xmlns {
    color: var(--primary-color);
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  /* width: 100%; */
}

/* Add a hover effect for buttons */
/* button:hover {
  opacity: 0.8;
} */

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: var(--primary-color);
  color: #fff;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 10%;
  border-radius: 50%;
}

/* Add padding to containers */
/* .container {
  padding: 16px;
} */

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>


<!--product-end-->