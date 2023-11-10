<?php get_header(); ?>

<main>
    <div class="container">
        <h2>404 NOT FOUND</h2>
        <p>お探しのページはありませんでした。</p>
        <p>Topページは<a href="<?php echo esc_url(home_url('/')); ?>">こちら</a></p>
    </div>
</main>

<?php get_footer(); ?>