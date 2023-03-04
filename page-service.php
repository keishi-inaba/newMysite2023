<?php get_header(); ?>

     <!-- service page top -->

     <div id="service-top" class="service-page_top">
      <div id="service-top_image" class=""></div>
      <h2><?php the_title(); ?></h2>
     </div>

     <!-- pankuzu -->
     <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org">
        <?php
          if(function_exists('bcn_display')) {
            bcn_display();
          }
        ?>
      </div>

     <!-- service page section -->
     <section id="Service-page">
       <div>
         <ul class="service-page_list">
           <li>
              <a href="price.html">
                <h4 class="service-page_title">WordPress</h4>
                <div class="service-list_img">
                  <img src="<?php echo get_template_directory_uri();?>/images/office-worker-analyzing-business-information-on-computer-software-working-with-statistics-and-data-research-to-plan-project-and-presentation-creating-report-with-charts-on-monitor.jpg" alt="サービスページ画像">
                </div>
                <div class="service-list_inner js-blurTrigger">
                  <h4>
                    <i class="bi bi-pc-display-horizontal"></i>
                    Website Creation/ホームページ制作
                  </h4>
                  <h5>
                    使用言語： HTML/CSS/Sass/JavaScript(jQuery)
                    <br>
                    使用ツール： WordPress
                    <br>
                    サービス内容： topページ・コンテンツページ×4・コンタクトフォームを含む全5ページ分
                  </h5>
                  <div class="circle-blur"></div>
                  <p class="service-page_text font-sm">
                    ワイヤーフレームを元にサイトをWordPress(CMS)を使用し制作致します。
                    <br>
                    クライアント様には画像とテキストのご用意をお願い致します。また、サーバー・ドメインの取得もお願い致します。
                  </p>
                </div>
              </a>
            </li>
            <li>
              <a href="price.html">
                <h4 class="service-page_title">Wix</h4>
                <div class="service-list_img">
                  <img src="<?php echo get_template_directory_uri();?>/images/nocode-coding-concept-3d-rendering (2).jpg" alt="サービスページ画像">
                </div>
                <div class="service-list_inner js-blurTrigger">
                  <h4>
                    <i class="bi bi-pc-display-horizontal"></i>
                    Wix/ノーコードサイト制作
                  </h4>
                  <h5>
                    使用ツール： Wix
                    <br>
                    サービス内容： topページ・コンテンツページ×5・コンタクトフォームを含む全6ページ分
                  </h5>
                  <div class="circle-blur"></div>
                  <p class="service-page_text font-sm">
                    Wix(nocode)を使用したサイト制作を代行致します。
                    <br>
                    クライアント様には画像とテキストのご用意をお願い致します。Wixのアカウント情報の共有をお願い致します。
                  </p>
                </div>
              </a>
            </li>
            <li>
              <a href="price.html">
                <h4 class="service-page_title">Figma</h4>
                <div class="service-list_img">
                  <img src="<?php echo get_template_directory_uri();?>/images/スクリーンショット 2022-11-09 15.18.26.png" alt="サービスページ画像">
                </div>
                <div class="service-list_inner js-blurTrigger">
                  <h4>
                    <i class="bi bi-mouse2"></i>
                    Design/デザイン
                  </h4>
                  <h5>
                    使用ツール： Figma
                  </h5>
                  <div class="circle-blur"></div>
                   <p class="service-page_text font-sm">
                     サイトのデザインイメージやターゲット層、機能等のヒアリングを行いワイヤーフレームを制作致します。
                   </p>
                 </div>
              </a>
             </li>
          </ul>
       </div>
     </section>

<?php get_footer(); ?>

