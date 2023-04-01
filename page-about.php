<?php /* Template Name:about   */ ?>
<?php get_header(); ?>
<main class="l-main">
  <section class="p-about__hero"></section>
  <section class="p-about__heroTextArea">
    <div class="c-contentWidth">
      <div class="p-about__heroTextAreaCont">
        <div class="p-about__heroTextAreaTop">
          <h2 class="p-about__heroTextAreaTitle">HAKUの森 について</h2>
          <div class="p-about__heroTextAreaIcon">
            <img src="<?php echo get_template_directory_uri(); ?>/image/symbol.svg" alt="名寄についてに関してのアイコン">
          </div>
        </div>
        <p class="p-about__heroTextAreaText">
          HAKUの森は北海道名寄市で体験できるアクティビティの予約・運営サイトです。<br>
          名前には、Healthy（健康的）、Attractive（魅力的）、Kindly（快適）、Unique（独特）な自然を楽しんでほしいという思いが込められています。<br>
          当サイトに記載されていないアクティビティなども、お気軽にご相談ください。
        </p>
      </div>
    </div>
  </section>
  <div class="c-contentWidth">
    <ul class="p-about__imageList">
      <li class="p-about__imageItem">
        <img src="<?php echo get_template_directory_uri(); ?>/image/about/img-01.jpg" alt="">
      </li>
      <li class="p-about__imageItem">
        <img src="<?php echo get_template_directory_uri(); ?>/image/about/img-02.jpg" alt="">
      </li>
      <li class="p-about__imageItem">
        <img src="<?php echo get_template_directory_uri(); ?>/image/about/img-03.jpg" alt="">
      </li>
    </ul>
  </div>
  <section class="p-about__guide">
    <div class="c-contentWidth">
      <div class="c-titleArea__icon">
        <img src="<?php echo get_template_directory_uri(); ?>/image/about/icon-01.svg" alt="アクティビティについてに関してのアイコン">
      </div>
      <h1 class="c-titleArea__title--black">GYDE</h1>
      <p class="c-titleArea__subTitle--black">ガイド紹介</p>
      <div class="p-about__guideItem">
        <img src="<?php echo get_template_directory_uri(); ?>/image/about/img-04.jpg" alt="" class="p-about__guideItemImage">
        <div class="p-about__guideItemCont">
          <h2 class="p-about__guideItemTitle">森 和季</h2>
          <p class="p-about__guideItemSubtitle">
            1997年、神奈川県藤沢市出身、北海道旭川市育ち。<br>
            学生時代は野球に打ち込み、都内の私立大学進学後は法学を勉強。<br>
            2021年に銀行員を退職し名寄市へ地域おこし協力隊として移住。かつてから興味のあった
            アウトドア業の世界へ飛び込む。<br>
            資格等：JCTAサイクリングツアーガイド<br>
            自然体験活動指導者（NEALリーダー）<br>
            上級救急救命講習修了<br>
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="p-about__access">
    <div class="c-contentWidth">
      <div class="c-titleArea__icon">
        <img src="<?php echo get_template_directory_uri(); ?>/image/about/icon-01.svg" alt="アクティビティについてに関してのアイコン">
      </div>
      <h1 class="c-titleArea__title--black">ACCESS</h1>
      <p class="c-titleArea__subTitle--black">アクセス</p>
      <ul class="p-about__accessList">
        <li class="p-about__accessItem">
          <div class="p-about__accessItemCont">
            <h3 class="p-about__accessItemTitle">飛行機</h3>
            <dl>
              <div>
                <dt>東京～旭川</dt>
                <dd>約1時間40分</dd>
              </div>
              <div>
                <dt>名古屋～旭川</dt>
                <dd>約2時間</dd>
              </div>
              <div>
                <dt>東京～新千歳</dt>
                <dd>約1時間30分</dd>
              </div>
            </dl>
          </div>
          <div class="p-about__accessItemImage">
            <img src="<?php echo get_template_directory_uri(); ?>/image/about/img-05.png" alt="日本地図に関しての画像">
          </div>
        </li>
        <li class="p-about__accessItem">
          <div class="p-about__accessItemCont">
            <h3 class="p-about__accessItemTitle">自動車</h3>
            <dl>
              <div>
                <dt>旭川〜名寄<br><span>約77km</span></dt>
                <dd>約1時間30分</dd>
              </div>
              <div>
                <dt>札幌〜名寄<br><span>約77km</span></dt>
                <dd>約2時間</dd>
              </div>
              <div>
                <dt>新千歳〜名寄</dt>
                <dd>約2時間30分</dd>
              </div>
            </dl>
          </div>
          <div class="p-about__accessItemImage--second c-display--pc">
            <img src="<?php echo get_template_directory_uri(); ?>/image/about/img-06.png" alt="北海道地図に関しての画像">
          </div>
        </li>
        <li class="p-about__accessItem">
          <div class="p-about__accessItemCont">
            <h3 class="p-about__accessItemTitle">JR北海道</h3>
            <dl>
              <div>
                <dt>旭川〜名寄</dt>
                <dd>約1時間</dd>
              </div>
              <div>
                <dt>札幌〜名寄</dt>
                <dd>約2時間30分</dd>
              </div>
            </dl>
          </div>
        </li>
        <li class="p-about__accessItem">
          <div class="p-about__accessItemCont">
            <h3 class="p-about__accessItemTitle">バス</h3>
            <dl>
              <div>
                <dt>旭川〜名寄</dt>
                <dd>約2時間15分</dd>
              </div>
              <div>
                <dt>札幌〜名寄</dt>
                <dd>約3時間40分</dd>
              </div>
            </dl>
            <div class="p-about__accessItemImage--second c-display--sp">
              <img src="<?php echo get_template_directory_uri(); ?>/image/about/img-06.png" alt="北海道地図に関しての画像">
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <section class="p-about__links">
    <div class="c-contentWidth">
      <div class="p-about__linksIcon">
        <img src="<?php echo get_template_directory_uri(); ?>/image/top/icon-06.svg" alt="名寄についてに関してのアイコン">
      </div>
      <h2 class="p-about__linksTitle">
        リンク集
      </h2>
      <ul class="p-about__linksImageList">
        <li class="p-about__linksImageItems">
          <img src="<?php echo get_template_directory_uri(); ?>/image/about/img-08.jpg" alt="">
          <p class="p-about__linksImageItemsText">スキー場</p>
        </li>
        <li class="p-about__linksImageItems">
          <img src="<?php echo get_template_directory_uri(); ?>/image/about/img-08.jpg" alt="">
          <p class="p-about__linksImageItemsText">キャンプ場(カーリング)</p>
        </li>
        <li class="p-about__linksImageItems">
          <img src="<?php echo get_template_directory_uri(); ?>/image/about/img-08.jpg" alt="">
          <p class="p-about__linksImageItemsText">観光協会</p>
        </li>
      </ul>
    </div>
  </section>
</main>
<?php get_footer(); ?>