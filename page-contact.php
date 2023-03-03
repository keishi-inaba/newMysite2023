<?php get_header(); ?>

     <!-- contact page top -->
     <div id="contact-top" class="contact-page_top">
       <div id="contact-top_image"></div>
       <h2><?php the_title(); ?></h2>
      </div>

      <!-- contact form -->
      <section id="contactform">
        <div class="contact-main">
          <p class="contact-text font-sm">
            制作のご依頼、ご相談、お見積りなどお気軽にお問い合わせください。下記フォームよりご記入ください。必須項目は必ずご記入ください。
          </p>
          <div class="contact-list">
            <div action="" method="post">
              <div class="form-inner">
                <div class="contact-form">
                  <div class="input-box">
                    <label for="" class="label-area">お名前 <span>必須</span></label>
                    <div class="input-area">
                      <input type="text" name="" placeholder="山田太郎">
                    </div>
                  </div>
                  <div class="input-box">
                    <label for="" class="label-area">メールアドレス <span>必須</span></label>
                    <div class="input-area">
                      <input type="email" name="" placeholder="yamadataro@xxx.com">
                    </div>
                  </div>
                  <div class="input-box">
                    <label for="" class="label-area">お問い合わせ項目 <span>必須選択</span></label>
                    <div class="">
                      <select name="item" id="select">
                        <option value="WordPress" selected>WordPressでの制作について</option>
                        <option value="Wix">Wixでの制作代行について</option>
                        <option value="Desgin">Desgin依頼について</option>
                        <option value="Estimate">制作見積りについて</option>
                        <option value="Other">その他</option>
                      </select>
                    </div>
                  </div>
                  <div class="input-box">
                    <label for="" class="label-area">お問い合わせ内容</label>
                    <div class="input-area">
                      <textarea name="" id="" cols="20" rows="10"></textarea>
                    </div>
                  </div>
                  <div class="action-box">
                    <input type="submit" value="送信">
                  </div>
                  <div class="note">
                    <small>
                      ※お問い合わせ内容によっては、返信にお時間をいただく場合がございますので予めご了承ください。
                    </small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<?php get_footer(); ?>
