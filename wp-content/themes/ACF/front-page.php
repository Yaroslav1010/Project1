<?php get_header(); ?>

<div class="row">

    <?php

    // параметры по умолчанию
    $my_posts = get_posts( array(
        'numberposts' => 2,
        'post_type'   => 'post',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ) );

    foreach( $my_posts as $post ){
    setup_postdata( $post );

    ?>

    <div class="col">
        <article>
            <div>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <span class="date"><?php the_field('add-date') ?></span>
                <span><a href="<?php the_permalink(); ?>"><img src="<?php the_field('img') ?>" alt=""></a></span>
            </div>
        </article>
    </div>
        <?php
        }

        wp_reset_postdata(); // сброс
        ?>


</div>

<!--    <div class="owl-carousel">-->
<!---->
<!--        --><?php
//            $fields = get_field_objects();
//
//            foreach( $fields as $field){
//                if ( $field['type'] == 'image'){
//        ?>
<!--            <div>--><?php //$field['new'] ['value']?><!--</div>-->
<!--        --><?php
//            }
//            }
//        ?>

        <!-- <div><img src="<?php the_field('img') ?>" alt=""></div>
        <div><img src="<?php the_field('img') ?>" alt=""></div>
        <div><img src="<?php the_field('img') ?>" alt=""></div>
        <div><img src="<?php the_field('img') ?>" alt=""></div>
        <div><img src="<?php the_field('img') ?>" alt=""></div>
        <div><img src="<?php the_field('img') ?>" alt=""></div>
        <div> <img src="<?php the_field('img') ?>" alt=""></div> -->
    </div>



    <?php get_footer(); ?>