<main class="container">
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <li class="promo__item promo__item--boards">
                <a class="promo__link" href="all-lots.html">Доски и лыжи</a>
            </li>
            <li class="promo__item promo__item--attachment">
                <a class="promo__link" href="all-lots.html">Крепления</a>
            </li>
            <li class="promo__item promo__item--boots">
                <a class="promo__link" href="all-lots.html">Ботинки</a>
            </li>
            <li class="promo__item promo__item--clothing">
                <a class="promo__link" href="all-lots.html">Одежда</a>
            </li>
            <li class="promo__item promo__item--tools">
                <a class="promo__link" href="all-lots.html">Инструменты</a>
            </li>
            <li class="promo__item promo__item--other">
                <a class="promo__link" href="all-lots.html">Разное</a>
            </li>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
          <?php
            $adverts = [
                0 => [
                    'productName' => '2014 Rossignol District Snowboard',
                    'productCategory' => 'Доски и лыжи',
                    'productCost' => '10999',
                    'productURL' => 'img/lot-1.jpg',
                ],
                1=> [
                    'productName' => 'DC Ply Mens 2016/2017 Snowboard',
                    'productCategory' => 'Доски и лыжи',
                    'productCost' => '159999',
                    'productURL' => 'img/lot-2.jpg',
                ],      2=> [
                    'productName' => 'Крепления Union Contact Pro 2015 года размер L/XL',
                    'productCategory' => 'Крепления',
                    'productCost' => '8000',
                    'productURL' => 'img/lot-3.jpg',
                ],      3=> [
                    'productName' => 'Ботинки для сноуборда DC Mutiny Charocal',
                    'productCategory' => 'Ботинки',
                    'productCost' => '10999',
                    'productURL' => 'img/lot-4.jpg',
                ],      4=> [
                    'productName' => 'Куртка для сноуборда DC Mutiny Charocal',
                    'productCategory' => 'Одежда',
                    'productCost' => '7500',
                    'productURL' => 'img/lot-5.jpg',
                ],      5=> [
                    'productName' => 'Маска Oakley Canopy',
                    'productCategory' => 'Разное',
                    'productCost' => '5400',
                    'productURL' => 'img/lot-6.jpg',
                ],
            ];
            ?>
        <ul class="lots__list">
<?php foreach ($adverts as $key => $val): ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?=$val['productURL']; ?>" width="350" height="260" alt="Сноуборд">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?=$val['productCategory']; ?></span>
                    <h3 class="lot__title"><a class="text-link" href="lot.html"><?=$val['productName']; ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost">
<?php //Задание
$prCost = ($val['productCost']);
$prCost = number_format($prCost, 0,'' , ' ') . '<b class="rub">р</b>';
print $prCost;
?>
                                <!--<b class="rub">р</b></span>-->
                        </div>
                        <div class="lot__timer timer">

                        </div>
                    </div>
                </div>
            </li>
<?php endforeach; ?>
        </ul>
    </section>
</main>