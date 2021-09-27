<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Klee+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/css/vendor/destyle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style/css/main.css">
    
    <title>Document</title>
</head>
<body>
    <header>
        <section class="nav">
            <ul class="nav-top">
                <li class="nav-item">
                    <a class="nav-link" href="#"><img class="top-logo" src="<?php echo get_template_directory_uri(); ?>/images/img-site-logo_202107.gif" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">会社概要</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ミッション</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ニュース</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">サービス</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">IR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">採用情報</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">パートナー</a>
                </li>
                <li class="nav-item">JP/EN</li>
            </ul>
        </section><!-- nav -->
        <section class="top">
            <div class="top-bg">
                <?php echo do_shortcode('[smartslider3 slider="3"]'); ?>
            </div>
            <div class="top-item">
                <div class="top-title">スモールビジネスを、世界の主役に。</div>
                <a class="top-button" href="#">会社概要</a>
            </div>
        </section>
    </header>
    <main>
        <section class="news">
            <div class="news-top">
                <div class="news-title">NEWS</div>
                <div class="news-sub">ニュース</div>
            </div>
            <ul class="news-detail">
                <li class="list-item"></li>
            </ul>

        </section>

    </main>
    <footer>

    </footer>
    
</body>
</html>