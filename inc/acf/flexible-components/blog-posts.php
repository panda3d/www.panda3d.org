<?php
    $blog_category = get_sub_field('blog_category');

    $args = array(
        'post_type'      => 'post',
        'category_name'  => $blog_category,
        'posts_per_page' => 3
    );

    $loop = new WP_Query( $args );
?>

<section class="blog-posts">
    <div class="wrap">

        <div class="blog-section-header">
            <h2><?php the_sub_field('header'); ?></h2>

            <div class="blog-posts__more">
                <a href="/blog/" class="cta cta--action">View More</a>
            </div>
        </div>

        <div class="article__container">

            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="article block">
                    <a href="<?php the_permalink(); ?>">
                        <?php
                        if ( has_post_thumbnail() ) {
                            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                        } else {
                            $thumbnail_url = get_field('default_post_thumbnail', 'option');
                        }
                        ?>
                        <div class="article__image" style="background-image: url('<?php echo $thumbnail_url; ?>');"></div>
                        <div class="article__info">
                            <span class="date"><?php the_date('F j, Y'); ?></span>
                            <h3 class="title"><?php the_title(); ?></h3>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>

        </div>

    </div>
</section>

<?php
wp_reset_postdata();
