<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
</div>
</div>
</div>

<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Contenu inférieur 1')) : ?>
        <?php endif; ?>
      </div>
      <div class="col-sm-4">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Contenu inférieur 2')) : ?>
        <?php endif; ?>
      </div>
      <div class="col-sm-4">
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Contenu du bas 3')) : ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>
<div id="footer-bottom">
  <div class="container">
    <div class="row">      
      <div class="col-sm-12"> <a href="<?php echo home_url('/declaration-de-protection-des-donnees/'); ?>">Déclaration de protection des données</a>  |  <a href="<?php echo home_url('/declaration-de-protection-des-donnees/#cookies'); ?>">Politique de cookies</a>  |  <a class="cmplz-show-banner">Gérer le consentement</a></div>
    </div>
  </div>
</div>
<!-- .site-footer -->
</div>
<!-- .site-inner -->
</div>
<!-- .site -->

<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57be4c5df001a2a8"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88822420-1', 'auto');
  ga('send', 'pageview');

</script>
</body></html>
