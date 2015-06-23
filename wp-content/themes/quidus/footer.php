<?php
/**
 * The template for displaying the footer
 *
 */
?>	

		<?php if ( is_active_sidebar( 'footer-widget-1' ) or is_active_sidebar( 'footer-widget-2' ) or is_active_sidebar( 'footer-widget-3' ) ) : 
			echo '<div class="footer-widgets-wrapper">'; ?>
				<div class="footer-widget-one">
					<?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
						
							<div class="widget-area" role="complementary">
								<?php dynamic_sidebar( 'footer-widget-1' ); ?>
							</div><!-- .widget-area -->
					
					<?php endif; ?>
				</div>	
				
				<div class="footer-widget-two">
				<?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
					
						<div class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'footer-widget-2' ); ?>
						</div><!-- .widget-area -->
					
				<?php endif; ?>
				</div>
				
				<div class="footer-widget-three">
				<?php if ( is_active_sidebar( 'footer-widget-3' ) ) : ?>
					
						<div class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'footer-widget-3' ); ?>
						</div><!-- .widget-area -->
					
				<?php endif; ?>
				</div>
			<?php echo '</div>'; ?>
		<?php endif; ?>
		</div>
	</div><!-- .site-content -->
	
	<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
		<div class="right-sidebar-wrapper">
			<div class="right-sidebar-wrap">
				<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
						<div class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'right-sidebar' ); ?>
						</div><!-- .widget-area -->
				<?php endif; ?>
			</div>
		</div>
	<?php endif; ?>

</div>
<!-- .site -->

<div class="main-slider">
	<?php logo_slider(); ?>
</div>

<footer id="colophon" class="site-footer" role="contentinfo">
    <p class="site-info">
        Sitio web creado por Telemedellín para dar cumplimiento a la ley de Transparencia y rendición de cuentas.<br>
        <a href="<?php echo get_home_url(); ?>/mapa-del-sitio" title="Mapa del sitio" class="mapa">Mapa del sitio</a> - <a href="http://www.telemedellin.tv" title="Página oficial de Telemedellín" class="tm">Telemedellin.tv</a> - 2015<br>
        Última actualización: 
    </p>
    <!-- .site-info -->
</footer>
<!-- .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
