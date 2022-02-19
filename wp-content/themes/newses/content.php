<?php
/**
 * The template for displaying the content.
 * @package Newses
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- mg-posts-sec mg-posts-modul-6 -->
    <div class="mg-posts-sec mg-posts-modul-6  wd-back">
        <!-- mg-posts-sec-inner -->
        <div class="mg-posts-sec-inner row">
            <?php 
            
            if(is_front_page()) {
                $pagePosts =  new WP_Query(array(
                    'category_name' => 'Articles, Stories'
                  ));
            }
            else {
                $category = get_category( get_query_var( 'cat' ) );
                $cat_id = $category->cat_ID;

                    $pagePosts = new WP_Query(array(
                        'cat' => $cat_id
                  ));
            }

             while($pagePosts->have_posts()){ 
                $pagePosts->the_post();
                if(get_post_status(get_the_id()) == 'publish'){
                ?>
            <div class="d-md-flex mg-posts-sec-post mb-4 w-100">
                <div class="col-12 col-md-6">
                    <?php $url = newses_get_freatured_image_url($post->ID, 'postImage'); ?>
                    <div class="mg-blog-thumb back-img md" style="background-image: url('<?php echo esc_url($url); ?>');">
                    </div> 
                </div>
                <div class="mg-sec-top-post col">
                        <div class="mg-blog-category">
                        <?php newses_post_categories(); ?>
                        </div>
                        <h4 class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    <?php newses_post_meta(); ?>
                    <div class="mg-content overflow-hidden">
                        <p>
                            <?php echo wp_trim_words( get_the_excerpt(), 10 ); ?> 
                            <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a>

                        </p>
                    </div>
                </div>
            </div>
                <?php }} ?>
            <div class="col-md-12 text-center d-flex justify-content-center">
                <?php //Previous / next page navigation
                the_posts_pagination( array(
                'prev_text'          => '<i class="fa fa-angle-left"></i>',
                'next_text'          => '<i class="fa fa-angle-right"></i>',
                ) ); 
                if(is_front_page()) { ?>
                <div class="mg-blog-category" style="user-select: auto;">
                    <a href="<?php echo site_url('/category/articles'); ?>" 
                    class="newses-categories category-color-1" style="user-select: auto;" >View All</a>
                </div>
                <?php } ?>
            
            </div>
        </div>
        <!-- // mg-posts-sec-inner -->
    </div>
    <!-- // mg-posts-sec block_6 -->

    <!--col-md-12-->
</div>