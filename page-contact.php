<?php /* Template Name:contact  */ ?>
<?php get_header(); ?>

<main class="l-main">
  <div class="p-contact">
    <div class="c-contentWidth">
      <h1 class="c-titleArea__title--black">FORM</h1>
      <p class="c-titleArea__subTitle--black">予約フォーム</p>
      <p class="p-contact__text">必要項目をご記入いただき、予約ボタンを押してください。</p>
      <div class="p-contactForm">
      <?php echo do_shortcode('[contact-form-7 id="7" title="予約フォーム"]'); ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>