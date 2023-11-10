<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <!-- タイトルを取得 -->
    <title><?php echo wp_get_document_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- BootstrapCSSを使いたいので読み込み -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- テーマファイル内のstyle.cssの読み込み -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <!-- head内で必要な情報の出力 -->
    <?php wp_head(); ?>
</head>

<body>
    <header class="mb-5">
        <div class="container">
            <h1><a href="/"><?php bloginfo('name'); ?></a></h1>
        </div>
    </header>