<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Fruitful theme
 * @since Fruitful theme 1.0
 */
?>
	</div>
		</div><!-- #main .site-main -->
		<div id="footer-wrapper">
			<footer id="colophon" class="site-footer" role="contentinfo">

				<div class="site-info">
					<?php fruitful_get_footer_text(); ?>
				</div><!-- .site-info -->
				<?php if (!fruitful_is_social_header()) {
					fruitful_get_socials_icon();
				}
				?>
				<div class="info-footer">
					<div class="logo-apae"></div>
					</br>
					<span class="telefone">18 3521 3340</span>
					</br>
					<span class="contato">contato@apaeadamantina.com.br</span>
					</br>
					<span class="endereco">Rua Tsunekishi Sakai, 136, Vila Joaquina - Adamantina - SP</span>
					</br>
					<div class="lcon-footer">
					<span classe="des">desenvolvido com  <i class="fa fa-heart heart"></i>  por </span>
					<a href="http://lcon.com.br/" >
						<div class="logo-lcon">
						</div>
					</a>
				</div>
				</div>

			</footer><!-- #colophon .site-footer -->
		</div>

		<div id="back-top">
			<a rel="nofollow" href="#top" title="Back to top">&uarr;</a>
		</div>
		<!--WordPress Development by Fruitful Code-->
		<?php wp_footer(); ?>
	</body>
</html>