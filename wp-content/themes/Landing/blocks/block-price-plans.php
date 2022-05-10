<div class="container">
<div class="row-2">
    <h2>Price Plans</h2>
    <p>
        Technology is often a consequence of science and engigeering — although technology as a human activity
    </p>
</div>


<?php
$fields = get_fields();
?>

<section class="row-3">
    <?php foreach ($fields['price_plans'] as $slide){ ?>
    <div class="col-30b">
        <?php echo wp_get_attachment_image($slide['image']['ID'], 'thumbnail') ?>
        <p class="strong">
            <?php echo $slide['title'] ?>
        </p>
        <p class="desc">
            <?php echo $slide['description'] ?>
        </p>
        <p class="price">
            <?php echo $slide['price'] ?>
        </p>
        <div class="button1">
            <a class="button2" href="/">BUY NOW</a>
        </div>
    </div>

    <?php } ?>
</section>
</div>