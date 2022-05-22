<!--start-breadcrumbs-->

<section class="inner-banner py-5">
    <div class="breadcrumb py-lg-5">
        <div class="breadcrumb">
            <div class="container pt-sm-5 pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-5"></h4>
                <ul class="breadcrumbs-custom-path">
                <li><a href="<?= PATH ?>">Главная</a></li>
                <li><a href="http://horologium/user/cabinet">Личный кабинет</a></li>
                <li>История заказов</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--end-breadcrumbs-->
<br>
<!--prdt-starts-->

<div class="prdt">
    <div class="container">
        <div class="prdt-top">
            <div class="col-md-12 prdt-left">
                <h1>История заказов:</h1>
                <?php if($orders): ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped table-condensed">
                            <thead>
                            <tr>
                                <th style="width: 10%">ID</th>
                                <th style="width: 30%">Статус</th>
                                <th style="width: 20%">Сумма</th>
                                <th style="width: 20%">Дата создания</th>
                                <th style="width: 20%">Дата изменения</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($orders as $order): ?>
                                <?php
                                if($order['status'] == '1'){
                                    $class = 'success';
                                    $text = 'Завершен';
                                }elseif($order['status'] == '2'){
                                    $class = 'info';
                                    $text = 'Оплачен';
                                }else{
                                    $class = '';
                                    $text = 'Новый';
                                }
                                ?>
                                <tr class="<?=$class;?>">
                                    <td><?=$order->id;?></td>
                                    <td><?=$text;?></td>
                                    <td><?=$order->sum;?> <?=$order->currency;?></td>
                                    <td><?=$order->date;?></td>
                                    <td><?=$order->update_at;?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <p class="text-danger">Вы пока не совершали заказов...</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!--product-end-->