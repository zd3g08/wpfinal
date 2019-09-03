<?php get_header(); ?>
        <section class="midashi">
            <h3 id="aboutus">About Us</h3>
            <div class="dot_red_border"></div>
            <table class="kaisha">
                <tr>
                    <th class="first_th">称号</th>
                    <td>株式会社ABC</td>
                </tr>
                <tr>
                    <th>事業所</th>
                    <td>〒100-0000&nbsp;&nbsp;&nbsp;東京都千代田区丸の内1-1-1<br>ABCビルディング1階&nbsp;&nbsp;&nbsp;<i class="fa fa-location-arrow" aria-hidden="true"></i><a href="#">弊社へのアクセス</a></td>
                </tr>
                <tr>
                    <th>事業内容</th>
                    <td>人事・組織コンサルティング</td>
                </tr>
                <tr>
                    <th>役員</th>
                    <td>代表取締役 山田 太郎</td>
                </tr>
                <tr>
                    <th>設立</th>
                    <td>20XX年1月1日</td>
                </tr>
                <tr>
                    <th>資本金</th>
                    <td>XXXX万円</td>
                </tr>
            </table>
            <article>
                <h4>代表者　山田太郎のご紹介</h4>
                <p>
                    ABC大学ABC学部卒業。ABC商事株式会社入社。新規事業に従事。その後、独立し起業。海外貿易、経営コンサル、M&Aコンサル、エグゼクティブサーチのコンサルタントを行う。Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae officia rerum provident, est ab hic laudantium voluptate facilis,<br>
                    <span class="red">得意分野：ハイスペック・ファイナンス・グローバル人材</span>
                </p>
            </article>
        </section>
        <section class="midashi">
            <h3 id="greeting">Greeting</h3>
            <div class="dot_red_border"></div>
            <article>
                <h4>ご挨拶</h4>
                <p>
                    弊社では、社会、そして日本の産業の発展に寄与することをエグゼクティブサーチの社会的存在意義と考えております。Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum minima harum ipsa eligendi reiciendis illum veniam recusandae alias unde sunt officiis odit pariatur quibusdam deserunt, ipsam similique possimus, numquam debitis impedit delectus, dolorum sit! Odit nulla, debitis suscipit aut tempore praesentium soluta ea impedit saepe repellat, sunt delectus perspiciatis. Magni.
                </p>
                <p class="text-left">
                    <span class="sign">Taro Yamada</span>
                </p>
                <div class="youtube">
                    <iframe width="853" height="480" src="//www.youtube.com/embed/BUvW1R8seOI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p class="lylics">「明日はきっといいぜ　未来はきっといいぜ　魂でいこうぜ」
                    </p>
                </div>
            </article>
        </section>
        <section class="yohaku"></section>
        <section class="naname-border">
            <svg class="svg_top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="0,100 100,0 100,100" />
            </svg>
            <svg class="svg_bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="100,0 0,100 0,0" />
            </svg>
        </section>
        <section class="midashi">
            <h3 id="contact">Contact</h3>
            <div class="dot_red_border"></div>
            <article>
                <h4>お問い合わせフォーム</h4>
                <div class="content_center">
<?php echo do_shortcode( '[contact-form-7 id="5" title="コンタクトフォーム 1"]' ); ?>
                </div>
            </article>
        </section>
        <section class="yohaku"></section>
<?php get_footer(); ?>