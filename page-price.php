<?php get_header(); ?>

     <!-- contact link -->
     <a href="contact.html" class="contactbtn">
      <span>Contact</span>
     </a>

     <!-- price page top -->

     <div id="price-top" class="price-page_top">
      <div id="price-top_image"></div>
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

     <!-- price page section -->
     <section id="Price-page">
       <div class="price-page_inner">
          <div class="price-table">
            <div class="price-table_list">
              <a href="contact.html">
                <h3>
                  Website Creation Price / WordPress
                </h3>
                <h4>Web制作料金</h4>
                <h5>
                  ・Web制作 ￥80,000(＋消費税)
                </h5>
                <p class="price-page_text font-sm">
                  ページ数はトップページ、下層ページを含む5ページでの税抜料金になります。
                  <br>
                  WordPress (CMS)での構築になります。
                  <br>
                  追加ページがある場合はご相談ください。ページ数で料金が変動します。また、ページ数が5ページ以下の場合の料金も変わりませんのでご了承ください。
                </p>
              </a>
            </div>
            <div class="price-table_list">
              <a href="contact.html">
                <h3>
                  Website Creation Price / Wix
                </h3>
                <h4>Wix制作代行料金</h4>
                <h5>
                  ・Wix制作代行制作 ￥40,000(＋消費税)
                </h5>
                <p class="price-page_text font-sm">
                  ページ数はトップページ、下層ページを含む6ページでの税抜料金になります。
                  <br>
                  Wixを利用してのサイト構築になります。
                  <br>
                  追加ページがある場合はご相談ください。ページ数で料金が変動します。また、ページ数が6ページ以下の場合の料金も変わりませんのでご了承ください。
                </p>
              </a>
            </div>
            <div class="price-table_list">
              <a href="contact.html">
                <h3>
                  Design Price
                </h3>
                <h4>デザイン料金</h4>
                <h5>
                  ・時給 ￥1,500
                  <br>
                  ・時給 × 時間(h) ＝ 請求金額(＋消費税)
                </h5>
                <p class="price-page_text font-sm">
                  時給換算での金額になります。1時間/1500円になります。
                  <br>
                  仮に制作に8時間かかった場合、1500円×8時間＝¥12,000になります。
                </p>
              </a>
            </div>
          </div>
        </div>
     </section>

     <!-- slider -->
     <ul class="slider">
      <li><img src="<?php echo get_template_directory_uri();?>/images/web-design-concepts-with-blurred-background.jpg" alt="スライダー画像"></li>
      <li><img src="<?php echo get_template_directory_uri();?>/images/website-design-content-layout-graphic.jpg" alt="スライダー画像"></li>
      <li><img src="<?php echo get_template_directory_uri();?>/images/desktop-source-code-and-wallpaper-by-computer-language-with-coding-and-programming.jpg" alt="スライダー画像"></li>
      <li><img src="<?php echo get_template_directory_uri();?>/images/programmer-working-in-a-software-development-and-coding-technologies-website-design-technology-concept (1).jpg" alt="スライダー画像"></li>
     </ul>


<?php get_footer(); ?>
