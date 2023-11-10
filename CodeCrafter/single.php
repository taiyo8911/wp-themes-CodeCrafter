<?php get_header(); ?>

<div class="container">
    <div class="card mb-5">
        <div class="row g-0">
            <div class="col-md-4">
                <div class="img-fluid rounded-start"><?php the_post_thumbnail('thumbnail'); ?></div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title"><?php the_title(); ?></h2>
                    <div class="d-flex">
                        <div class="card-text me-3 category"><small class="text-body-secondary"><?php the_category(''); ?></small></div>
                        <div class="card-text tag"><small class="text-body-secondary"><?php the_tags(''); ?></small></div>
                    </div>
                    <p class="card-text"><?php the_content(); ?></p>
                    <div>
                        <a class="btn" href="<?php echo post_custom('アプリのURL'); ?>" target="_blank">PLAY</a>
                        <a class="btn" href="<?php echo post_custom('GitHubのURL'); ?>" target="_blank">GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center">
        <div id="previous_post"><?php previous_post_link(); ?></div>
        <div id="next_post"><?php next_post_link(); ?> </div>
    </div>
</div>

<?php get_footer(); ?>