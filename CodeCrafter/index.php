<?php get_header(); ?>

<div class="container">
    <div>
        <p>
            <!-- キャッチフレーズの取得 -->
            <?php bloginfo('description'); ?>
            <br>
            <!-- 投稿数の取得 -->
            <?php
            $count_posts = wp_count_posts();
            $num = $count_posts->publish;
            echo 'コンテンツ数&emsp;' . $num;
            ?>
        </p>
    </div>
	
	<!-- 投稿の表示 -->
    <div class="row">
        <div class="col-xs-12 main-body-left">
            <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="col-sm-4">
                            <div class="card">
                                <a href="<?php echo get_the_permalink(); ?>">
                                    <div class="image"><?php the_post_thumbnail('thumbnail'); ?></div>
                                    <h2 class="fs-6"><?php the_title(); ?></h2>
                                </a>
                                <div>
                                    <!-- 記事本文から最初の15文字を取得 -->
                                    <div id="summary"><?php echo wp_trim_words(get_the_content(), 15, '…'); ?></div>
									<!-- カスタムフィールドの値を取得 -->
                                    <a class="btn" href="<?php echo post_custom('アプリのURL'); ?>" target="_blank">PLAY</a>
                                    <a class="btn" href="<?php echo post_custom('GitHubのURL'); ?>" target="_blank">GitHub</a>
                                    <div class="category"><?php the_category(''); ?></div>
                                    <div class="tag"><?php the_tags(''); ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                else : ?>
                    <p>まだ投稿がありません。</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>