<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="/css/style.css"> -->
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <script src="/dist/main.js"></script>
  <title>名寄市</title>
  <?php wp_head(); ?>
</head>
<body>
<?php if(is_front_page()): ?>
  <header class="l-headerTop">
    <div class="l-header__icon" id="open">
      <span class="top bar"></span>
      <span class="middle bar"></span>
      <span class="bottom bar"></span>
    </div>
    <nav class="l-header__menus">
      <ul class="l-header__menuList">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
        <li><a href="<?php echo esc_url(home_url('activity')); ?>">ACTIVITY</a></li>
        <li><a href="<?php echo esc_url(home_url('about')); ?>">ABOUT</a></li>
        <li><a href="<?php echo esc_url(home_url('news')); ?>">NEWS</a></li>
        <li><a href="<?php echo esc_url(home_url('howtouse')); ?>">HOW to USE</a></li>
      </ul>
    </nav>
  </header>
<?php else: ?>
  <header class="l-headerUnder">
    <div class="c-display--sp">
      <div class="l-header__contents">
        <div class="l-header__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/image/logo1.svg" alt="名寄市観光に関してのアイコン">
        </div>
        <div class="l-header__icon" id="open">
          <span class="top bar"></span>
          <span class="middle bar"></span>
          <span class="bottom bar"></span>
        </div>
      </div>
      <nav class="l-header__menus">
        <ul class="l-header__menuList">
          <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
          <li><a href="<?php echo esc_url(home_url('activity')); ?>">ACTIVITY</a></li>
          <li><a href="<?php echo esc_url(home_url('about')); ?>">ABOUT</a></li>
          <li><a href="<?php echo esc_url(home_url('news')); ?>">NEWS</a></li>
          <li><a href="<?php echo esc_url(home_url('howtouse')); ?>">HOW to USE</a></li>
        </ul>
      </nav>
    </div>
    <div class="c-display--pc">
      <div class="l-header__contents">
        <div class="l-header__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/image/logo1.svg" alt="名寄市観光に関してのアイコン">
        </div>
        <nav class="l-header__nav">
          <ul class="l-header__navList">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
            <li><a href="<?php echo esc_url(home_url('activity')); ?>">ACTIVITY</a></li>
            <li><a href="<?php echo esc_url(home_url('about')); ?>">ABOUT</a></li>
            <li><a href="<?php echo esc_url(home_url('news')); ?>">NEWS</a></li>
            <li><a href="<?php echo esc_url(home_url('howtouse')); ?>">HOW to USE</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
<?php endif; ?>