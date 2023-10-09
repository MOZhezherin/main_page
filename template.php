<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);

if (!empty($arResult['ITEMS'])):
?>
<div class="slider-container">
    <div class="slider-wrapper">
        <?php foreach ($arResult['ITEMS'] as $arItem): ?>
            <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="slider-item"> 
                <?php if (!empty($arItem['PREVIEW_PICTURE'])): ?>
                    <div class="image-container">
                        <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= $arItem['NAME'] ?>" style="width: 100%; height: auto;">
                        <div class="overlay">
                            <h2 class="slide-title"><?= $arItem['NAME'] ?></h2>
                        </div>
                    </div>
                <?php endif; ?>
            </a>
        <?php endforeach; ?>
    </div>

    <div class="slider-pagination"></div>
    

    <button class="slider-prev"> &#5130; </button>
    <button class="slider-next"> &#5125; </button>
</div>


<script>
    $(document).ready(function(){
        $('.slider-wrapper').slick({
            autoplay: true,
            dots: true,
            arrows: true, 
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            appendArrows: $('.slider-pagination'),
            customPaging: function(slider, i) {
                return '<button class="custom-dot"></button>';
            },
            prevArrow: $('.slider-prev'),
            nextArrow: $('.slider-next')
        });
    });
</script>
<?php endif; ?>