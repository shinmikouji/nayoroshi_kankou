<?php get_header(); ?>
  <main class="l-main">
    <section class="p-activity-detail__hero"></section>
    <section class="p-activity-detail__slider">
      <div class="c-contentWidth">
        <div class="p-activity-detail__sliderTextArea">
          <h2 class="p-activity-detail__sliderTextAreaTitle"><?php the_title(); ?></h2>
          <p class="p-activity-detail__sliderTextAreaText"><?php echo post_custom('アクティビティ説明'); ?></p>
        </div>
        <div class="p-activity-detail__sliderArea">

        </div>
      </div>
    </section>
    <section class="p-activity-detail">
      <div class="c-contentWidth">
        <div class="p-activity-detail__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/image/top/icon-06.svg" alt="名寄についてに関してのアイコン">
        </div>
        <h2 class="p-activity-detail__title">
          アクティビティ詳細
        </h2>
        <table class="p-activity-detail__table">
          <tr>
            <th>利用料金</th>
            <td><?php echo post_custom('利用料金'); ?></td>
          </tr>
          <tr>
            <th>参加人数</th>
            <td><?php echo post_custom('参加人数'); ?></td>
          </tr>
          <tr>
            <th>開催期間</th>
            <td><?php echo post_custom('開催期間'); ?></td>
          </tr>
          <tr>
            <th>対象年齢</th>
            <td><?php echo post_custom('対象年齢'); ?></td>
          </tr>
          <tr>
            <th>所要時間</th>
            <td><?php echo post_custom('所要時間'); ?></td>
          </tr>
          <tr>
            <th>集合場所</th>
            <td><?php echo post_custom('集合場所'); ?></td>
          </tr>
        </table>
        <div class="p-activity-detail__textArea">
          ※なよろ温泉サンピラーホテル１階ロビー<br>
          〒096-0066　北海道名寄市日進<br>
          バスや電車でお越しの方は以下のURLにてご確認下さい。<br>
          <br>
          <a href="http://www.nayoro.co.jp/bus.pdf" target="_blank">http://www.nayoro.co.jp/bus.pdf</a><br>
          <br>
          ご予約申込受付後、具体的な日程・時間帯の調整をさせていただきます。<br>
          お客様のご希望に沿えない場合もございますので、予めご了承ください。<br>
          詳細につきましては、利用方法をご覧ください。
        </div>
        <div class="p-activity-detail__btn">
          <a href="<?php echo esc_url(home_url('howtouse')); ?>#terms" class="p-activity-detail__btn--top">利用規約を見る</a>
          <a href="<?php echo esc_url(home_url('reservation')); ?>" class="p-activity-detail__btn--bottom">予約する</a>
        </div>
      </div>
    </section>
    <section class="p-activity-detail__video">
      <div class="c-contentWidth">
        <div class="p-activity-detail__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/image/top/icon-06.svg" alt="名寄についてに関してのアイコン">
        </div>
        <h2 class="p-activity-detail__title">
          動画
        </h2>
      </div>
    </section>
    <div class="c-contentWidth">
      <div class="p-activity-detail__btn--back">
        <a href="<?php echo get_post_type_archive_link('activity'); ?>">一覧へ戻る</a>
      </div>
    </div>
  </main>
  <?php get_footer(); ?>