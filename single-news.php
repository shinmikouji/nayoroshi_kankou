<?php get_header(); ?>
<main class="l-main">
  <section class="p-news-detail">
    <div class="c-contentWidth">
      <time class="p-news-detail__date"><?php echo post_custom('日時'); ?></time>
      <h2 class="p-news-detail__title"><?php the_title(); ?></h2>
      <p class="p-news-detail__text"><?php echo post_custom('本文'); ?></p>
      <div class="p-news-detail__btn--back">
        <a href="<?php echo get_post_type_archive_link('news'); ?>">一覧へ戻る</a>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>