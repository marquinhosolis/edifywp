<?php
/*
Template Name: Single Post
*/
?>

<?php get_header(); ?>
<main class="singlePost">
    <div class="backBlogs">
        <div class="container">
            <a href="<?php echo site_url('blog'); ?>">
                Back to all blogs
            </a>
        </div>
    </div>
    <div class="container">
        <article>
            <div class="singlePostHeader">
                <div class="singlePostIntro">
                    <div class="singlePostTitleData">
                        <?php
                        $categories = get_the_category();
                        foreach ($categories as $category) {
                            echo ' | ' . $category->name;
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="postNav">
                        <div class="previous_post_link">
                            <?php previous_post_link('%link', 'Previous Blog') ?>
                        </div>
                        <div class="next_post_link">
                            <?php next_post_link('%link', 'Next Blog') ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </article>
    </div>

</main>
<?php get_footer(); ?>