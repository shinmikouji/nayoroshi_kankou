<?php /* Template Name:top  */ ?>
<?php get_header(); ?>
  <main class="l-main">
    <section class="p-hero">
      <h1 class="p-hero__title">メイン</h1>
    </section>
    <section class="p-topAbout c-contentWidth">
      <div class="p-topAbout__inner">
        <div class="p-topAbout__img">
          <img src="<?php echo get_template_directory_uri(); ?>/image/top/top-01.png" alt="名寄についてに関しての画像">
        </div>
        <div class="p-topAbout__contents">
          <h2 class="p-topAbout__title">名寄について</h2>
          <div class="p-topAbout__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/image/top/icon-01.svg" alt="名寄についてに関してのアイコン">
          </div>
          <p class="p-topAbout__text">
            全国のレジャー・遊び・体験を集めた日本最大級のレジャー予約サイト「アソビュー！」では、あなたのお好みの条件でとっておきの体験を見つけることができます。テレビやCMで話題のフライボードや大空を飛べるパラグライダー、土と触れ合う陶芸体験など、様々な遊び・体験を味わうことができます。旅行先でおもしろい体験がしたい人や週末のいつもと違った遊びをしたい人におすすめです。
          </p>
        </div>
      </div>
      <a href="" class="p-topAbout__btn">もっとみる</a>
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
          全国のレジャー・遊び・体験を集めた日本最大級のレジャー予約サイト「アソビュー！」では、あなたのお好みの条件でとっておきの体験を見つけることができます。テレビやCMで話題のフライボードや大空を飛べるパラグライダー、土と触れ合う陶芸体験など、様々な遊び・体験を味わうことができます。旅行先でおもしろい体験がしたい人や週末のいつもと違った遊びをしたい人におすすめです。
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
            <li class="p-topActivity__items">
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
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
        </ul>
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
          <li class="p-topNews__items">
            <img src="<?php echo get_template_directory_uri(); ?>/image/top/top-02.png" alt="" class="p-topNews__itemsImage">
            <div class="p-topNews__itemsTextArea">
              <h2 class="p-topNews__itemsTitle">サバイバルゲーム定例開催のお知らせ</h2>
              <p class="p-topNews__itemsDate">2022.10.30</p>
            </div>
          </li>
          <li class="p-topNews__items">
            <img src="<?php echo get_template_directory_uri(); ?>/image/top/top-02.png" alt="" class="p-topNews__itemsImage">
            <div class="p-topNews__itemsTextArea">
              <h2 class="p-topNews__itemsTitle">サバイバルゲーム定例開催のお知らせ</h2>
              <p class="p-topNews__itemsDate">2022.10.30</p>
            </div>
          </li>
          <li class="p-topNews__items">
            <img src="<?php echo get_template_directory_uri(); ?>/image/top/top-02.png" alt="" class="p-topNews__itemsImage">
            <div class="p-topNews__itemsTextArea">
              <h2 class="p-topNews__itemsTitle">サバイバルゲーム定例開催のお知らせ</h2>
              <p class="p-topNews__itemsDate">2022.10.30</p>
            </div>
          </li>
          <li class="p-topNews__items">
            <img src="<?php echo get_template_directory_uri(); ?>/image/top/top-02.png" alt="" class="p-topNews__itemsImage">
            <div class="p-topNews__itemsTextArea">
              <h2 class="p-topNews__itemsTitle">サバイバルゲーム定例開催のお知らせ</h2>
              <p class="p-topNews__itemsDate">2022.10.30</p>
            </div>
          </li>
        </ul>
        <a href="" class="p-topNews__btn">もっとみる</a>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>