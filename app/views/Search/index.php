<!-- inner-banner -->
<section class="inner-banner py-5">
        <div class="breadcrumb py-lg-5">
            <div class="breadcrumb">
            <div class="container pt-sm-5 pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-5"></h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="<?=PATH;?>">Home</a></li>
                    <li class="active">
                        <span class="fa fa-chevron-right mx-2" aria-hidden="true">
                            
                        </span>
                        <li>Поиск по запросу "<?=h($query);?>"</li>
                </li>
                </ul>
            </div>
            </div>
        </div>
    </section>

    <!-- //inner-banner -->

<!--prdt-starts-->

<div class="prdt">
<section class="products section container" id="products">
                <h2 class="section__title">
                    Products
                </h2>
</section>
    <div class="container">
        <div class="prdt-top">
            <div class="col-md-9 prdt-left">
                <?php if(!empty($products)): ?>
                <div class="product-one">
                    <?php $curr = \myshop\App::$app->getProperty('currency'); ?>
                    <?php foreach($products as $product): ?>
                        <div class="col-md-4 product-left p-left">
                        <div class="new__card product-main simpleCart_shelfItem products__card">
                            <a href="product/<?=$product->alias;?>" class="mask"><img  class="products__img img-responsive zoom-img " src="images/<?=$product->img;?>" alt="" /></a>
                            <div class="product-bottom">
                            <div class="new__data">
                                <h3 class="new__title"><?=$product->title;?></h3>
                                <h4>
                                <span class=" item_price products__price"><?=$curr['symbol_left'];?><?=$product->price * $curr['value'];?><?=$curr['symbol_right'];?></span>
                                    <?php if($product->old_price): ?>
                                        <small><del><?=$curr['symbol_left'];?><?=$product->old_price * $curr['value'];?><?=$curr['symbol_right'];?></del></small>
                                    <?php endif; ?>
                                    <a data-id="<?=$product->id;?>" class="add-to-cart-link cart-btn btn btn-style btn-style-primary-2" href="cart/add?id=<?=$product->id;?>"><i></i>Добавить в корзину</a>
                                    </div>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <div class="clearfix"></div>
                </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</div>

<!--product-end-->

<!-- contact -->
    <section class="services-2 py-5">
        <div class="container py-md-5 py-4 text-center">
            <div class="header-section text-center mx-auto" style="max-width:700px">
                <h3 class="title-style mb-3">Не нашли то что искали?</h3>
                <p> Нec для какого-то семя и мучителя, чтобы завтра добиться тех ворот с CASIOLIMITED</p>
            </div>
            <div class="buttons mt-5">
                <a href="http://horologium/category/catalog" class="btn btn-style btn-style-primary mr-2">Каталог</a>
            </div>
        </div>
    </section>
        <!-- map -->
        <div class="map-iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31941.8322355525!2d34.097090070514824!3d44.95818550484766!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40eae75d3d04351f%3A0xf847cf8912df4328!2z0KXQsNCx0LDRgNC-0LLRgdC60LDRjyDRg9C7LiwgNTcsINCh0LjQvNGE0LXRgNC-0L_QvtC70Yw!5e0!3m2!1sru!2sus!4v1652642511074!5m2!1sru!2sus" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- //contact -->