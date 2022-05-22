<!-- products -->
<div class="container-filters">
<div class="products__container grid">
<div class="grid-container-products">
<div class="prdt">
<div class="container ">
<div class="prdt-top ">
    
            <?php if(!empty($products)): ?>
            <?php $curr = \myshop\App::$app->getProperty('currency'); ?>

            <section class="products section container grid-container-2" id="products">
                    <?php foreach($products as $product): ?>
                    <article class="products__card">
                        <a href="product/<?=$product->alias;?>" class="mask"><img style="background-size: cover; background-position: center;" class="img-responsive zoom-img products__img" src="images/<?=$product->img;?>" alt="" /></a>
                        <div class="products__title">
                        <h3 class="new__title"><a href="product/<?=$product->alias;?>"><?=$product->title;?></a></h3>
                        <!-- <p>исследовать сейчас</p> -->
                            <h4>
                            <a data-id="<?=$product->id;?>" class="add-to-cart-link" href="cart/add?id=<?=$product->id;?>"><i></i></a> <span class="products__price"><?=$curr['symbol_left'];?><?=$product->price * $curr['value'];?><?=$curr['symbol_right'];?></span>
                            <?php if($product->old_price): ?>
                                <small><del><?=$curr['symbol_left'];?><?=$product->old_price * $curr['value'];?><?=$curr['symbol_right'];?></del></small>
                            <?php endif; ?>
                            </h4>
                            </div>
                            <a href="cart/add?id=<?=$product->id;?>" data-id="<?=$product->id;?>" class="products__button add-to-cart-link cart-btn btn btn-primary" ><i class='bx bx-shopping-bag'></i>
                        <!-- <button class="products__button add-to-cart-link cart-btn btn btn-primary">
                            <i class='bx bx-shopping-bag'></i>
                        </button> -->
                    </a>
                    </article>
                    <?php endforeach; ?>
                    </div>
                </div>
            </section>


                        <div class="clearfix"></div>
                        <div class="text-center">
                            <p>(<?=count($products)?> товара(ов) из <?=$total;?>)</p>
                            <?php if($pagination->countPages > 1): ?>
                                <?=$pagination;?>
                            <?php endif; ?>
                        </div>
                          
                        
                        <?php else: ?>

<h3>Товаров не найдено</h3>

        <script src="/public/errors/assets/js/scrollreveal.min.js"></script>
        <script src="/public/errors/assets/js/main.js"></script>
        <link rel="stylesheet" href="public/errors/assets/css/styles.css">
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="/public/errors/assets/css/styles.css">

    
                <?php endif; ?>
            </div>

    <!-- products -->   

    <!-- filters -->
            <div class="clearfix"></div>
</div>
</div>
</div>

<br>
<br>
<br>

    <!-- filters -->

<style>

.section{
    padding: 0;
}

.grid-container-products{
    display: grid;
    grid-template-columns: 70% 30%;
}

.container-filters{
    display: grid;
    grid-template-columns: 100% 30% ;
}

.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}

@media (min-width: 992px) {
  .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
    float: left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-md-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666667%;
  }
  .col-md-pull-10 {
    right: 83.33333333%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666667%;
  }
  .col-md-pull-7 {
    right: 58.33333333%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.66666667%;
  }
  .col-md-pull-1 {
    right: 8.33333333%;
  }
  .col-md-pull-0 {
    right: auto;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666667%;
  }
  .col-md-push-10 {
    left: 83.33333333%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666667%;
  }
  .col-md-push-7 {
    left: 58.33333333%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666667%;
  }
  .col-md-push-4 {
    left: 33.33333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.66666667%;
  }
  .col-md-push-1 {
    left: 8.33333333%;
  }
  .col-md-push-0 {
    left: auto;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-md-offset-0 {
    margin-left: 0;
  }
}

/* .prdt-right {
    margin-top: 2em;
} */

/*--product-page-starts--*/
/* .prdt{
	padding:3em 0px;
} */
.w_sidebar{
	box-shadow: 0 3px 6px 0 rgb(0 0 0 / 20%);
    width: 400px;
}
.w_nav2{
	padding: 20px;
}
.w_nav2  li{
	line-height: 1.5em;
	display: inline-block;
}
.w_nav2 li a{
	display: block;
	padding: 14px;
}
.w_nav2 li a.color1{
	background:	#0AA5E2;
}
.w_nav2 li a.color2{
	background:	#40E0D0;
}
.w_nav2 li a.color3{
	background:	#B03060;
}
.w_nav2 li a.color4{
	background:	#000080;
}
.w_nav2 li a.color5{
	background:	#E60D41;
}
.w_nav2 li a.color6{
	background:	#45BF55;
}
.w_nav2 li a.color7{
	background:	#FF7F00;
}
.w_nav2 li a.color8{
	background:	#8B4513;
}
.w_nav2 li a.color9{
	background:	#FFD700;
}
.w_nav2 li a.color10{
	background:	#9FA8AB;
}
.w_nav2 li a.color11{
	background:	#C0C0C0;
}
.w_nav2 li a.color12{
	background:	#0AA5E2;
}
.w_nav2 li a.color13{
	background:	#FFCBDB;
}
.w_nav2 li a.color14{
	background:	#B87333;
}
.w_nav2 li a.color15{
	background:	#BFB540;
}
.sky-form .label {
	display: block;
	margin-bottom: 6px;
	line-height: 19px;
}
.w_sidebar h3{
	padding:0 20px 10px;
	font-size: 1em;
	color: #555555;
	text-transform:uppercase;
}
/* radios and checkboxes */
.sky-form {
	margin-top: -10px;
}
.row1 {
    outline: none;
    padding: 20px;
    overflow: auto;
    height: 160px;
}
.row2 {
	height: 175px;
}
.sky-form.col.col-4 ul {
	padding: 0;
	list-style: none;
}
.sky-form h4{
	margin-top: 10px;
	background: var(--bg-color);
	padding: 15px 20px;
	color: var(--heading-color);
	text-transform: uppercase;
	margin-bottom: 0;
	font-size:16px;
	font-family: 'Lora-Regular';
}
.sky-form section {
	margin-bottom: 20px;
}
.sky-form .label {
	display: block;
	margin-bottom: 6px;
	line-height: 19px;
}
.sky-form .label.col {
	margin: 0;
	padding-top: 10px;
}
.sky-form .input,
.sky-form .select,
.sky-form .textarea,
.sky-form .radio,
.sky-form .checkbox,
.sky-form .toggle,
.sky-form .button {
	position: relative;
	display: block;
}
/* selects */
.sky-form .select i {
	position: absolute;
	top: 14px;
	right: 14px;
	width: 1px;
	height: 11px;
	background: #fff;
	box-shadow: 0 0 0 12px #fff;
}
.sky-form .select i:after,
.sky-form .select i:before {
	content: '';
	position: absolute;
	right: 0;
	border-right: 4px solid transparent;
	border-left: 4px solid transparent;
}
.sky-form .select i:after {
	bottom: 0;
	border-top: 4px solid #404040;
}
.sky-form .select i:before {
	top: 0;
	border-bottom: 4px solid #404040;
}
.sky-form .select-multiple select {
	height: auto;
}
/* radios and checkboxes */
.sky-form .radio,.sky-form .checkbox {
	outline:none;
	border:none;
	margin-bottom: 4px;
	padding-left: 27px;
	font-size: 13px;
	line-height: 27px;
	color: var(--heading-color);
	cursor: pointer;
	text-transform: capitalize;
	font-weight: normal;
	margin-top: 0;
    width: 300px;
}
.sky-form .radio{
	text-transform: none;
}
.sky-form .radio:last-child,
.sky-form .checkbox:last-child {
	margin-bottom: 0;
}
.sky-form .radio input,
.sky-form .checkbox input {
	position: absolute;
	left: -9999px;
}
.sky-form .radio i,
.sky-form .checkbox i {
	position: absolute;
	top: 5px;
	left: 0;
	display: block;
	width: 17px;
	height: 17px;
	outline: none;
	border-width: 2px;
	border-style: solid;
	background: var(--bg-color);
}
.sky-form .radio i {
	border-radius: 50%;
}
.sky-form .radio input + i:after,
.sky-form .checkbox input + i:after {
	position: absolute;
	opacity: 0;
	transition: opacity 0.1s;
	-o-transition: opacity 0.1s;
	-ms-transition: opacity 0.1s;
	-moz-transition: opacity 0.1s;
	-webkit-transition: opacity 0.1s;
}
.sky-form .radio input + i:after {
	content: '';
	top: 4px;
	left: 4px;
	width: 5px;
	height: 5px;
	border-radius: 50%;
}
.sky-form .checkbox input + i:after {
	content: '';
	top: 3px;
	left: 2px;
	width: 10px;
	height: 7px;
	background: url(../images/tick.png) no-repeat;
	text-align: center;
}
.sky-form .radio input:checked + i:after,
.sky-form .checkbox input:checked + i:after {
	opacity: 1;
}
.sky-form .inline-group {
	margin: 0 -30px -4px 0;
}
.sky-form .inline-group:after {
	content: '';
	display: table;
	clear: both;
}
.sky-form .inline-group .radio,
.sky-form .inline-group .checkbox {
	float: left;
	margin-right: 30px;
}
.sky-form .inline-group .radio:last-child,
.sky-form .inline-group .checkbox:last-child {
	margin-bottom: 4px;
}
/* icons */

.sky-form [class^="icon-"] {
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  -webkit-font-smoothing: antialiased;
}
/* normal state */
.sky-form .input input,
.sky-form .select select,
.sky-form .textarea textarea,
.sky-form .radio i,
.sky-form .checkbox i,
.sky-form .toggle i,
.sky-form .icon-append,
.sky-form .icon-prepend {
	border-color: #e5e5e5;
	transition: border-color 0.3s;
	-o-transition: border-color 0.3s;
	-ms-transition: border-color 0.3s;
	-moz-transition: border-color 0.3s;
	-webkit-transition: border-color 0.3s;
}
.sky-form .toggle i:before {
	background-color: #2da5da;	
}
/* hover state */
.sky-form .input:hover input,
.sky-form .select:hover select,
.sky-form .textarea:hover textarea,
.sky-form .radio:hover i,
.sky-form .checkbox:hover i,
.sky-form .toggle:hover i {
	border-color: var(--primary-color);
}
.sky-form .button:hover {
	opacity: 1;
}
/* focus state */
.sky-form .input input:focus,
.sky-form .select select:focus,
.sky-form .textarea textarea:focus,
.sky-form .radio input:focus + i,
.sky-form .checkbox input:focus + i,
.sky-form .toggle input:focus + i {
	border-color: var(--primary-color);
}
/* checked state */
.sky-form .radio input + i:after {
	background-color: var(--primary-color);	
}
.sky-form .checkbox input + i:after {
	color: var(--primary-color);
}
.sky-form .radio input:checked + i,
.sky-form .checkbox input:checked + i,
.sky-form .toggle input:checked + i {
	border-color: var(--primary-color);	
}
/* error state */
.sky-form .state-error input,
.sky-form .state-error select,
.sky-form .state-error textarea,
.sky-form .radio.state-error i,
.sky-form .checkbox.state-error i,
.sky-form .toggle.state-error i {
	background: #fff0f0;
}
/* success state */
.sky-form .state-success input,
.sky-form .state-success select,
.sky-form .state-success textarea,
.sky-form .radio.state-success i,
.sky-form .checkbox.state-success i,
.sky-form .toggle.state-success i {
	background: #f0fff0;
}
/* disabled state */
.sky-form .input.state-disabled input,
.sky-form .select.state-disabled,
.sky-form .textarea.state-disabled,
.sky-form .radio.state-disabled,
.sky-form .checkbox.state-disabled,
.sky-form .toggle.state-disabled,
.sky-form .button.state-disabled {
	cursor: default;
	opacity: 0.5;
}
.sky-form .input.state-disabled:hover input,
.sky-form .select.state-disabled:hover select,
.sky-form .textarea.state-disabled:hover textarea,
.sky-form .radio.state-disabled:hover i,
.sky-form .checkbox.state-disabled:hover i,
.sky-form .toggle.state-disabled:hover i {
	border-color: #e5e5e5;
}
/*-- start scrollpane --*/
.jspContainer{
	overflow: hidden;
	position: relative;
}
.jspPane{
	position: absolute;
	outline: none;
	padding: 20px !important;
}
.jspVerticalBar{
	position: absolute;
	top: 0;
	right:0px;
	width:5px;
	height: 100%;
}
.jspHorizontalBar{
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 16px;
	background: red;
}
.jspCap{
	display: none;
}
.jspHorizontalBar .jspCap{
	float: left;
}
.jspTrack{
	background: #f0f0f0;
	position: relative;
}
.jspDrag{
	background: #2da5da;
	position: relative;
	top: 0;
	left: 0;
	cursor: pointer;
}
.jspHorizontalBar .jspTrack,.jspHorizontalBar .jspDrag{
	float: left;
	height: 100%;
}
.jspArrow{
	background: #50506d;
	text-indent: -20000px;
	display: block;
	cursor: pointer;
	padding: 0;
	margin: 0;
}
.jspArrow.jspDisabled{
	cursor: default;
	background: #80808d;
}
.jspVerticalBar .jspArrow{
	height: 16px;
}
.jspHorizontalBar .jspArrow{
	width: 16px;
	float: left;
	height: 100%;
}
.jspVerticalBar .jspArrow:focus{
	outline: none;
}
.jspCorner{
	background: #eeeef4;
	float: left;
	height: 100%;
}
.single {
	padding: 3em 0;
}
/*-- end scrollpane --*/
/*--product-page-end--*/

</style>