<?php
/*
Template Name: Blog Page
*/
?>
<?php
$limit = 5;
if (isset($_GET['cat'])) {
    $cat = $_GET['cat'];
}
if (isset($_GET['search'])) {
    $search = $_GET['search'];
}
if (isset($_GET['all'])) {
    $posts = '-1';
} else {
    $posts = $limit;
}
?>
<?php get_header(); ?>
<main class="blogPage">
    
    <section>
        <div class="container">
            <div class="blogPageForms">
                <form action="" method="get">
                    <input type="search" name="search" placeholder="Search">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
                <div class="selectWrapper">
                    <form action="" method="get">
                        <?php
                        wp_dropdown_categories(array(
                            'show_option_all'    => 'Filter by Category',
                            'orderby'            => 'name',
                            'hierarchical'       => 1,
                            'depth'              => 1,
                        ));
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="blogShowcase">
        <div class="container">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => $posts,
                'cat'            => $cat,
                's'              => $search
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post(); ?>
                    <?php
                    $count = $query->found_posts;
                    ?>
                    <a href="<?php the_permalink(); ?>" class="blogShowcaseItem">
                        <div class="blogShowcaseCopy">
                            <h4><?php the_title(); ?></h4>

                            <p>
                                <?php
                                the_date();
                                $categories = get_the_category();
                                foreach ($categories as $category) {
                                    echo ' | ' . $category->name;
                                }
                                ?>
                            </p>
                            <?php the_excerpt(); ?>
                            <span>CONTINUE READING <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </div>
                    </a>
            <?php }
            }
            wp_reset_postdata();
            ?>
        </div>
        <?php
        if ($query->found_posts > $limit && !isset($_GET['all'])) { ?>
            <div class="loadMorePosts">
                <a href="<?php the_permalink(); ?>?all=1">Load more blogs <i class="fa fa-long-arrow-down" aria-hidden="true"></i></a>
            </div>
        <?php }
        ?>
    </section>
</main>

<?php get_footer(); ?>