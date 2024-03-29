<?php /* Template Name:top  */ ?>
<?php get_header(); ?>
<main>
  <section class="p-hero">
    <div class="p-hero__slider">
      <div class="p-hero__item">
        <img src="<?php echo get_template_directory_uri(); ?>/image/top/slider-01.jpg" alt="">
      </div>
      <div class="p-hero__item">
        <img src="<?php echo get_template_directory_uri(); ?>/image/top/slider-02.jpg" alt="">
      </div>
      <div class="p-hero__item">
        <img src="<?php echo get_template_directory_uri(); ?>/image/top/slider-03.jpg" alt="">
      </div>
      <div class="p-hero__item">
        <img src="<?php echo get_template_directory_uri(); ?>/image/top/slider-04.jpg" alt="">
      </div>
    </div>
    <div class="p-hero__logo"></div>
  </section>
  <section class="p-topAbout c-contentWidth">
    <div class="p-topAbout__inner">
      <div class="p-topAbout__img">
        <img src="<?php echo get_template_directory_uri(); ?>/image/top/top-03.jpg" alt="名寄についてに関しての画像">
      </div>
      <div class="p-topAbout__contents">
        <h2 class="p-topAbout__title"><ruby>名寄<rt>なよろ</rt></ruby>について</h2>
        <div class="p-topAbout__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/image/top/icon-06.svg" alt="名寄についてに関してのアイコン">
        </div>
        <p class="p-topAbout__text">
          北緯44度、東経142度に位置する市は、アイヌ語 「ナイ・オロ・プト」を語源にした地名です。「川の合流するところ」という意味で、その名前が示すとおり国内第4位の長さを誇る一級河川「川」とその支流「名寄川」が合流する地点であったことに由来します。昭和29年村と、平成18年町との合併を経て現在に至ります。
        </p>
      </div>
    </div>
    <a href="<?php echo esc_url(home_url('about')); ?>" class="p-topAbout__btn">もっとみる</a>
  </section>
  <section class="p-topEnjoy c-contentWidth">
    <div class="p-topEnjoy__img">
      <img src="<?php echo get_template_directory_uri(); ?>/image/top/top-01.png" alt="名寄についてに関しての画像">
    </div>
    <div class="p-topEnjoy__contents">
      <h2 class="p-topEnjoy__title">全身で楽しむ</h2>
      <div class="p-topEnjoy__icon">
        <img src="<?php echo get_template_directory_uri(); ?>/image/top/icon-02.svg" alt="名寄についてに関してのアイコン">
      </div>
      <p class="p-topEnjoy__text">
        一年通しての寒暖差が60度以上ある名寄市。道北ならではの自然に囲まれ、私たちはずっと昔からその恩恵を受けてきました。パウダースノーを超えた絹のようなきめ細かい雪「シルキースノー」や北海道遺産認定の「天塩川」など…。この雄大な景色を見ると、その歴史に触れ、喧噪を忘れるような時間を過ごすことができます。ぜひ、名寄でしか体験できないアクティビティを楽しんでみませんか。
      </p>
    </div>
  </section>
  <section class="p-topActivity">
    <div class="c-contentWidth">
      <div class="c-titleArea__icon">
        <img src="<?php echo get_template_directory_uri(); ?>/image/top/icon-03.svg" alt="アクティビティについてに関してのアイコン">
      </div>
      <h1 class="c-titleArea__title--green">ACTIVITY</h1>
      <p class="c-titleArea__subTitle--green">アクティビティ</p>
      <ul class="p-topActivity__list">
        <?php
        $activity_query = new WP_Query(
          array(
            'post_type' => 'activity',
            'posts_per_page' => '6'
          )
        );
        ?>
        <?php if ($activity_query->have_posts()) : ?>
          <?php while ($activity_query->have_posts()) : ?>
            <?php $activity_query->the_post(); ?>
            <a class="p-topActivity__items" href="<?php the_permalink(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/image/top/top-01.png" alt="" class="p-topActivity__itemsImage">
              <h3 class="p-topActivity__itemsTitle"><?php the_title(); ?></h3>
              <p class="p-topActivity__itemsText"><?php echo post_custom('本文'); ?></p>
              <dl>
                <dt>期間</dt>
                <dd><?php echo post_custom('期間'); ?></dd>
              </dl>
              <dl>
                <dt>場所</dt>
                <dd><?php echo post_custom('場所'); ?></dd>
              </dl>
            </a>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>
      <a href="<?php echo esc_url(home_url('activity')); ?>" class="p-topActivity__btn">もっとみる</a>
    </div>
  </section>
  <section class="p-topInsta c-contentWidth">
    <div class="c-titleArea__icon">
      <img src="<?php echo get_template_directory_uri(); ?>/image/top/icon-04.svg" alt="インスタについてに関してのアイコン">
    </div>
    <a href="https://www.instagram.com/canoe_kankou/" target="_blank">
      <h1 class="c-titleArea__title--gray">INSTAGRAM</h1>
      <p class="c-titleArea__subTitle--gray">公式インスタグラム</p>
    </a>
    <ul class="p-topInsta__list">
      <li class="p-topInsta__items">
        <?php echo do_shortcode("[instagram-feed feed=1]"); ?>
      </li>
    </ul>
  </section>
  <section class="p-topNews">
    <div class="c-contentWidth">
      <div class="c-titleArea__icon">
        <img src="<?php echo get_template_directory_uri(); ?>/image/top/icon-05.svg" alt="インスタについてに関してのアイコン">
      </div>
      <h1 class="c-titleArea__title--blue">NEWS</h1>
      <p class="c-titleArea__subTitle--blue">お知らせ</p>
      <ul class="p-topNews__list">
        <?php
        $news_query = new WP_Query(
          array(
            'post_type' => 'news',
            'posts_per_page' => '4'
          )
        );
        ?>
        <?php if ($news_query->have_posts()) : ?>
          <?php while ($news_query->have_posts()) : ?>
            <?php $news_query->the_post(); ?>
            <a class="p-topNews__items" href="<?php the_permalink(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/image/top/top-02.png" alt="" class="p-topNews__itemsImage">
              <div class="p-topNews__itemsTextArea">
                <h2 class="p-topNews__itemsTitle"><?php the_title(); ?></h2>
                <p class="p-topNews__itemsDate"><?php the_time('Y.m.d'); ?></p>
              </div>
            </a>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>
      <a href="<?php echo esc_url(home_url('news')); ?>" class="p-topNews__btn">もっとみる</a>
    </div>
  </section>
</main>
<?php get_footer(); ?>