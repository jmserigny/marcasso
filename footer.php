<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package AI
 */
?>

	</div><!-- #content -->

	<footer class="site-footer" id="contact">
    <div class="wrap footer-grid">
      <div class="footer-brand">
        <div class="footer-logo">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="MaRC — Ma Rééducation Collective" class="footer-logo-img"/>
        </div>
        <p class="muted footer-tag">Ma Rééducation Collective — Association loi 1901</p>
        <p class="muted footer-siret">SIRET 923 805 808 00014</p>
      </div>
      <div class="footer-col">
        <div class="footer-col-title">Nous écrire</div>
        <a href="tel:+33675208297" class="footer-link">06 75 20 82 97</a>
        <a href="mailto:contact@marcasso.org" class="footer-link">contact@marcasso.org</a>
        <p class="footer-addr muted">138 Grande Rue, 38700 La Tronche, France</p>
      </div>
      <div class="footer-col">
        <div class="footer-col-title">Suivre</div>
        <a href="https://www.youtube.com/channel/UCsI5HkFM5ctBvEILtkMMEdw" target="_blank" rel="noopener" class="footer-link">YouTube</a>
        <a href="https://instagram.com/ma_reeducation_collective" target="_blank" rel="noopener" class="footer-link">Instagram</a>
        <a href="http://brain-injury-hope.com" target="_blank" rel="noopener" class="footer-link">Ressources & Liens</a>
      </div>
      <div class="footer-col">
        <div class="footer-col-title">Agir</div>
        <a href="#join" class="footer-link">Adhérer</a>
        <a href="#donate" class="footer-link">Faire un don</a>
        <a href="#" class="footer-link">Présentation partenaires (PDF)</a>
      </div>
    </div>
    <div class="wrap footer-bottom">
      <div class="muted">© 2023–2026 Ma Rééducation Collective</div>
      <div class="muted">Site refondu avec amour · pour Marc et tous les enfants</div>
    </div>
  </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>