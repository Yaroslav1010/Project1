<div class="container">
<div class="row">
    <h1 class="col-75">My Portfolio</h1>
    <p class="col-25">It may be the media`s veruse of words like "breakthrough"?</p>
</div>

<?php
$fields = get_fields();
if( $fields ):
?>

<div class="row-1">
    <?php foreach ($fields['select_posts'] as $portfolio){
            $image = get_the_post_thumbnail( $portfolio->ID, 'medium' );
            $description = get_field('description', $portfolio->ID );
            $title = get_the_title( $portfolio->ID );
            $permalink = get_permalink( $portfolio->ID );
        ?>
    <a href="<?php echo $permalink ?>">
    <div class="col-30">
        <?php echo $image ?>
        <p class="desc">
            <?php echo $description ?>
        </p>
        <p class="h3">
            <?php echo $title ?>
        </p>
    </div>
    </a>
    <?php } ?>
</div>
<?php endif; ?>
</div>
