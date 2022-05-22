    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />

    <!-- inner-banner -->
    <section class="inner-banner py-5">
        <div class="breadcrumb py-lg-5">
            <div class="breadcrumb">
            <div class="container pt-sm-5 pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-5"></h4>
                <ul class="breadcrumbs-custom-path">
                    <!-- <li><a href="<?=PATH;?>">Home</a></li> -->
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span><?=$breadcrumbs;?></li>
                </ul>
            </div>
            </div>
        </div>
    </section>

    <!-- //inner-banner -->

        <br>
        <br>

    <main class="container-product">

      <!-- Left Column / Headphones Image -->
      <!-- <div class="product-main"> -->
      <div class="img-magnifier-container">
      <div class="left-column">
            <img id="myimage" src="public/images/<?=$product->img;?>" width="500" height="500" alt="watch">
            <!-- <img id="myimage" src="public/images/product2.png" width="500" height="500" alt="Girl">
            <img id="myimage" src="public/images/product3.png" width="500" height="500" alt="Girl"> -->
            <!-- </div> -->
        </div>
      </div>



        
      <!-- <div class="img-magnifier-container">
  <img id="myimage" src="public/images/product1.png" width="500" height="500" alt="Girl">
</div> -->


        <?php
            $curr = \myshop\App::$app->getProperty('currency');
            $cats = \myshop\App::$app->getProperty('cats');
        ?>
      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">

          <span><a href="category/<?=$cats[$product->category_id]['alias'];?>"><?=$cats[$product->category_id]['title'];?></a></span>
          <br>
          <p>        </p>
          <br>

          <h1><?=$product->title;?></h1>
          <br>
          <?=$product->content;?>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color -->
          <!-- <div class="product-color">
            <span>Color</span>

            <div class="color-choose">
              <div>
                <input data-image="red" type="radio" id="red" name="color" value="red" checked>
                <label for="red"><span></span></label>
              </div>
              <div>
                <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                <label for="blue"><span></span></label>
              </div>
              <div>
                <input data-image="black" type="radio" id="black" name="color" value="black">
                <label for="black"><span></span></label>
              </div>
            </div>

          </div> -->

          <!-- Cable Configuration -->
          <div class="cable-config">
            <!-- <span>Конфигурация:</span> -->
            <?php if($mods): ?>
            <div class="available">
                                <ul>
                                    <li>Цвет:
                                        <select>
                                            <option>Выбрать цвет</option>
                                            <?php foreach($mods as $mod): ?>
                                            <option data-title="<?=$mod->title;?>" data-price="<?=$mod->price * $curr['value'];?>" value="<?=$mod->id;?>"><?=$mod->title;?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </li>
                                    <div class="clearfix"> </div>
                                </ul>
                                </div>
                                <?php endif; ?>


            <!-- <div class="cable-choose">
              <button>Черные</button>
              <button>Красные</button>
              <button>Зелёные</button>
            </div> -->

            <div class="quantity">
            <p>Колл-во:</p><input type="number" size="4" value="1" name="quantity" min="1" step="1">
            </div>

            <a href="#">Остались вопросы?</a>
          </div>
        </div>
















        

        <!-- Product Pricing -->
        <div class="grid-container-2">
        <div class="product-price item_price" class="item_price" id="base-price" data-base="<?=$product->price * $curr['value'];?>">
             <span id="base-price" data-base="<?=$product->price * $curr['value'];?>"><?=$curr['symbol_left'];?><?=$product->price * $curr['value'];?><?=$curr['symbol_right'];?></span>
                <a class="old-price" id="base-price" data-base="<?=$product->price * $curr['value'];?>">
                <?php if($product->old_price): ?>
                <small id="base-price" data-base="<?=$product->price * $curr['value'];?>"><del><?=$curr['symbol_left'];?><?=$product->old_price * $curr['value'];?><?=$curr['symbol_right'];?></del><small>
                <?php endif; ?>
                </a>
        </div>
        <a id="productAdd" data-id="<?=$product->id;?>" href="cart/add?id=<?=$product->id;?>" class="add-to-cart-link btn btn-style btn-primary mt-lg-5 mt-4">Добавить в корзину</a>
        </div>

        
      </div>

      <br>
      <br>
      <br>
    
    </main>

      <br>
      <br>
      <br>
      <!-- //Product Pricing -->

      <!-- With this item -->

      <?php if($related): ?>
    <section class="new section container" id="new">
                <h2 class="section__title">
                С этим товаром также покупают
                </h2> 
                <div class="new__container">
                    <div class="new-one">
                    <div class="grid-container">
                    <?php foreach($related as $item): ?>
                        <div class="col-md-4 product-left p-left">
                            <div class="product-main simpleCart_shelfItem" >
                                <a href="product/<?=$item['alias'];?>" class="mask"><img   class="img-responsive zoom-img" src="images/<?=$item['img'];?>"  alt="" /></a>
                                <div class="product-bottom">
                                    <h3><a href="product/<?=$item['alias'];?>"><?=$item['title'];?></a></h3>
                                    <p>Исследуйте сейчас</p>
                                    <h4>
                                        <a class="item_add add-to-cart-link" href="cart/add?id=<?=$item['id'];?>" data-id="<?=$item['id'];?>"><i></i></a>
                                        <span class="item_price"><?=$curr['symbol_left'];?><?=$item['price'] * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                        <?php if($item['old_price']): ?>
                                            <del><?=$curr['symbol_left'];?><?=$item['old_price'] * $curr['value'];?><?=$curr['symbol_right'];?></del>
                                        <?php endif; ?>
                                    </h4>
                                </div>
                                
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <!-- <div class="clearfix"></div> -->
                    </div>
                </div>
                </div>
                </section>
                <?php endif; ?>

                <?php if($recentlyViewed): ?>
        <section class="new section container" id="new">
                <h2 class="section__title">
                Недавно просмотренные
                </h2> 
                <div class="new__container">
                    <div class="new-one">
                    <div class="grid-container">
                    <?php foreach($recentlyViewed as $item): ?>
                        <div class="col-md-4 product-left p-left">
                            <div class="product-main simpleCart_shelfItem" >
                                <a href="product/<?=$item['alias'];?>" class="mask"><img   class="img-responsive zoom-img" src="images/<?=$item['img'];?>"  alt="" /></a>
                                <div class="product-bottom">
                                    <h3><a href="product/<?=$item['alias'];?>"><?=$item['title'];?></a></h3>
                                    <p>Исследуйте сейчас</p>
                                    <h4>
                                        <a class="item_add add-to-cart-link" href="cart/add?id=<?=$item['id'];?>" data-id="<?=$item['id'];?>"><i></i></a>
                                        <span class="item_price"><?=$curr['symbol_left'];?><?=$item['price'] * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                        <?php if($item['old_price']): ?>
                                            <del><?=$curr['symbol_left'];?><?=$item['old_price'] * $curr['value'];?><?=$curr['symbol_right'];?></del>
                                        <?php endif; ?>
                                    </h4>
                                </div>
                                
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <!-- <div class="clearfix"></div> -->
                    </div>
                    </div>
                </div>
        </section>
    <?php endif; ?>
                

      <!-- //With this item -->

      <!-- description -->

    <section class="bottom-grids-6 py-5">
        <div class="container py-lg-5 py-md-4" id="description">
            <div class="title-heading-w3 text-center mx-auto mb-sm-5 mb-4" style="max-width:700px">
                <h3 class="title-style">Мы предоставляем лучшие услуги</h3>
                <p class="lead mt-2">Широкий ассортимент позволяет каждому найти те часы, которые подойдут именно ему.</p>
            </div>
            <div class="grids-area-hny main-cont-wthree-fea row">
                <div class="col-lg-4 col-md-6 grids-feature">
                    <div class="area-box">
                        <i class="fas fa-tools"></i>
                        <h4><a href="#description" class="title-head">Характеристики</a></h4>
                        <p>Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed et
                            dolor amet.</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Подробнее
                            </button>


                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                    <div class="area-box">
                        <i class="fas fa-icons"></i>
                        <h4><a href="#description" class="title-head">Технологии</a></h4>
                        <p>Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed dolor
                            et amet.</p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Подробнее
                            </button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                    <div class="area-box">
                        <i class="fab fa-viadeo"></i>
                        <h4><a href="#description" class="title-head">Доставка и оплата</a></h4>
                        <p>Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed dolor
                            et amet.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Подробнее
                            </button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                    <div class="area-box">
                        <i class="fas fa-medal"></i>
                        <h4><a href="#description" class="title-head">Гарантии
                        </a></h4>
                        <p>Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed et
                            dolor amet.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Подробнее
                            </button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                    <div class="area-box">
                        <i class="fas fa-drum"></i>
                        <h4><a href="#description" class="title-head">Отзывы </a></h4>
                        <p>Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed dolor
                            et amet.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Подробнее
                            </button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 grids-feature mt-lg-5 mt-4">
                    <div class="area-box">
                        <i class="fab fa-canadian-maple-leaf"></i>
                        <h4><a href="#description" class="title-head">Описание</a></h4>
                        <p>Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed dolor
                            et amet.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Подробнее
                            </button>
                            
                    </div>
                </div>
                <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Титул</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
        </div>
    </div>
    </div>
</div> -->
            </div>
        </div>
    </section>

    <!-- //description -->

    <!-- history -->

    <section class="services-2 py-5">
        <div class="container py-md-5 py-4 text-center">
            <div class="header-section text-center mx-auto" style="max-width:700px">
                <h3 class="title-style mb-3">Хотите больше узнать о нашей продукции - тогда познокомтесь с нашей историей. </h3>
                <p> Более 30 лет назад инженер, работавший в компании CASIO, сумел преодолеть законы природы...
            </div>
            <div class="buttons mt-5">
                <a href="contact.html" class="btn btn-style btn-style-primary mr-2">Читать сейчас</a>
            </div>
        </div>
    </section>

    <!-- history -->

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script>
        /* Execute the magnify function: */
    magnify("myimage", 3);
        /* Specify the id of the image, and the strength of the magnifier glass: */
    </script>

    