        <section class="naname-border">
            <svg class="svg_top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="0,100 100,0 100,100" />
            </svg>
            <svg class="svg_bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="100,0 0,100 0,0" />
            </svg>
        </section>

        <section class="yohaku"></section>
<footer>
    Copyright 20XX ABC All Rights Reserved.
</footer>


    </main>
<?php wp_footer(); ?>
</body>
<script type="text/javascript" src="js/holder.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(function() {
    var showFlag = false;
    var topBtn = $('#page-top');
    topBtn.css('bottom', '-100px');
    var showFlag = false;
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            if (showFlag == false) {
                showFlag = true;
                topBtn.stop().animate({'bottom' : '20px'}, 200);
            }
        } else {
            if (showFlag) {
                showFlag = false;
                topBtn.stop().animate({'bottom' : '-100px'}, 200);
            }
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});
</script>
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://zd3g08.sim.zdrv.com/wpfinal/contact-thanks/';}, false );
</script>
<script>
    $(function() {
  $('.toggle-btn').click(function() {
    $('.filter-btn').toggleClass('open');

  });

  $('.filter-btn a').click(function() {
    $('.filter-btn').removeClass('open');

  });

});

$('#all').click(function() {

  $('ul.tasks li').slideDown(300);

});

$('#one').click(function() {
  $('.tasks li:not(.one)').slideUp(300, function() {
    $('.one').slideDown(300);

  });
});

$('#two').click(function() {
  $('.tasks li:not(.two)').slideUp(300, function() {
    $('.two').slideDown(300);

  });
});
$('#three').click(function() {
  $('.tasks li:not(.three)').slideUp(300, function() {
    $('.three').slideDown(300);

  });
});
</script>
</html>