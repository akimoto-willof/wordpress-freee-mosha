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
                <?php while (have_posts()): the_post(); ?>
                    <li class="list-item">
                        <div class="category"><?php echo the_category( $separator, $parents, $post_id ); ?></div>
                        <div class="date"><?php the_time('Y-m-d'); ?></div>
                        <div class="title"><a href="#" class="title-link"><?php the_title(); ?></a></div>
                    </li>
                <?php endwhile; ?>
            </ul>
            <div class="news-button">
                <a class="button-detail" href="#">ニュース 一覧</a>
            </div>
        </section>

        <section class="service">
            <div class="movie-container">
                <video src="<?php echo get_template_directory_uri(); ?>/video/movie-top.mp4" class="movie" autoplay loop playsinline muted></video>
            </div>
            <div class="comment-container">
                <div class="movie-title">SERVICES</div>
                <div class="movie-sub">サービス</div>
            </div>
            <ul class="item-list">
                <li class="list-detail">
                    <div class="logo-item"><img src="<?php echo get_template_directory_uri(); ?>/images/img-service-kaikei_202106.svg" alt=""></div>
                    <div class="detail">個人事業主から500名規模の法人まで経理をまとめて効率化</div>
                </li>
                <li class="list-detail">
                    <div class="logo-item"><img src="<?php echo get_template_directory_uri(); ?>/images/img-service-jinji_202106.svg" alt=""></div>
                    <div class="detail">経営に必要なヒトの情報を集約。人事労務に関する業務を一気通貫するHRプラットフォームサービス</div>
                </li>
                <li class="list-detail">
                    <div class="logo-item"><img src="<?php echo get_template_directory_uri(); ?>/images/img-service-kaishafreee_202106.svg" alt=""></div>
                    <div class="detail">5分でできる最も簡単な会社設立2,000社以上の会社設立実績</div>
                </li>
            </ul>
            <div class="service-button">
                <a class="button-detail" href="#">サービス 一覧</a>
            </div>
        </section>

        <section class="etc">
            <ul class="etc-wrapper">
                <li class="detail">
                    <div class="primary">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img-alliance.jpg" alt="" class="etc-img">
                    </div>
                    <div class="common">
                        <div class="title">PARTNER</div>
                        <div class="sub">パートナー</div>
                        <p class="item-area">freeeとの連携で、ビジネスがもっとカンタンに。freeeでは、様々な形でアライアンスを組む、パートナーを募集しています。</p>
                        <button class="etc-button"><a href="" class="button-detail">パートナー</a></button>
                    </div>
                </li>
                <li class="detail">
                    <div class="primary">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img-recruit.jpg" alt="" class="etc-img">
                    </div>
                    <div class="common">
                        <div class="title">採用情報</div>
                        <p class="item-area">freeeは新しいメンバーを募集しています。「小さいビジネスほど強くてかっこいい」そんな社会をいっしょにつくりましょう。</p>
                        <button class="etc-button"><a href="" class="button-detail">採用ページ</a></button>
                    </div>
                </li>
                <li class="detail">
                    <div class="primary">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/img-brand.png" alt="" class="etc-img">
                    </div>
                    <div class="common">
                        <div class="title">ブランド</div>
                        <p class="item-area">freeeは2021年に新たなビジョンを据えて、ブランドを刷新しました。スモールビジネスをさらに世界の主役にするために、freeeは変わり続けます。</p>
                        <button class="etc-button"><a href="" class="button-detail">ブランドサイト</a></button>
                    </div>
                </li>
            </ul>
        </section>
    </main>
    <footer>
        <div class="footer">
            <div class="top-bg"><img src="<?php echo get_template_directory_uri(); ?>/images/bg-footer.jpeg" alt=""></div>
            <div class="link-wrap">
                <div class="footer-links">
                    <dl class="link-list">
                        <dt class="link-title">会社情報</dt>
                        <dd>会社概要</dd>
                        <dd>ミッション</dd>
                        <dd>ブランド</dd>
                        <dd>ニュース</dd>
                        <dd>サービス</dd>
                        <dd>IR</dd>
                        <dd>採用情報</dd>
                        <dd>パートナー</dd>
                    </dl>
                    <dl class="link-list">
                        <dt class="link-title">サービス</dt>
                        <dd>freee会計</dd>
                        <dd>freee人事労務</dd>
                        <dd>freee会社設立</dd>
                        <dd>freee開業</dd>
                        <dd>freeeマイナンバー管理</dd>
                        <dd>freee申告</dd>
                        <dd>freeeカード</dd>
                        <dd>freee 開業応援パック</dd>
                        <dd>freee Developers Community</dd>
                    </dl>
                    <dl class="link-list">
                        <dt class="link-title">メディア・ブログ</dt>
                        <dd>公式ブログ</dd>
                        <dd>採用ブログ</dd>
                        <dd>佐々木大輔のブログ</dd>
                        <dd>freee Developers Blog</dd>
                        <dd>経営ハッカー powered by freee</dd>
                    </dl>
                    <dl class="link-list">
                        <dt class="link-title"></dt>
                        <dd>プライバシーポリシー</dd>
                        <dd>電子決済等代行業</dd>
                        <dd>ソーシャルメディア公式アカウント</dd>
                    </dl>
                </div>
                <div class="footer-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-site-logo_white_202106.svg" alt="">
                    <small>Copyright 2021 freee K.K.</small>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
