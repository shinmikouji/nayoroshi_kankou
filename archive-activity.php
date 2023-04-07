<?php get_header(); ?>
  <main class="l-main">
    <section class="p-activity__hero"></section>
    <section class="p-activity">
      <div class="c-contentWidth">
        <ul class="p-activity__list">
          <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="p-activity__items">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail( 'thumbnail', ['class' => 'p-activity__itemsImage']); ?>
              <?php else : ?>
                <img src="<?php echo get_theme_file_uri('image/activity/activity-01.jpg"'); ?>" class="p-activity__itemsImage">
              <?php endif; ?>
              <h3 class="p-activity__itemsTitle"><?php the_title(); ?></h3>
              <p class="p-activity__itemsText"><?php echo post_custom('アクティビティ説明'); ?></p>
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
        </ul>
        <a href="" class="p-activity__btn">もっとみる</a>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>