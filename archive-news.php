<?php get_header(); ?>
<main class="l-main">
  <section class="p-news__hero"></section>
  <section class="p-news">
    <div class="c-contentWidth">
      <ul class="p-news__list">
        <?php while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="p-news__items">
            <time class="p-news__itemsDate"><?php echo post_custom('日時'); ?></time>
            <h2 class="p-news__itemsTitle"><?php the_title(); ?></h2>
            <p class="p-news__itemsText"><?php echo post_custom('本文'); ?></p>
          </a>
        <?php endwhile; ?>
      </ul>
    </div>
  </section>
</main>
<?php get_footer(); ?>