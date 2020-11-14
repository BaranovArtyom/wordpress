<?php 
  $frontpage_id = get_option( 'page_on_front' );
?>
<footer class="footer">
  <div class="container footer__wrapper">
    <div class="footer__item">
      <p>
        <a class="confshow" href="#">Политика конфиденциальности</a><br>
		<a class="useragreement" href="#">Пользовательское соглашение</a>
        
      </p>
    </div>
    <div class="footer__item text-center">
      <p>
	  <?php the_field('footer_politics', $frontpage_id); ?>

      </p>
    </div>
    <div class="footer__item">
      <p>
        Разработка сайта:
      </p>
      <a class="footer__link" href="https://webagregator.ru"<?php the_field('footer_dev', $frontpage_id); ?>">Вебагрегатор</a>
    </div>
  </div>
</footer>
<?php wp_footer();?>
</body>
</html>