<footer id="footer" class="footer">
	<div class="footer__container _container">

		<div class="f_coll">
			<a href="<? bloginfo("url"); ?>" class="footer__logo logo-icon">
			
			</a>
		</div>

		<div class="f_coll">
			<?php wp_nav_menu([
					'theme_location'  => 'footer_menu',
					'container' => '',
					'menu_class' => 'footer__menu-list menu-list d-flex',
			])?>
		</div>

		<div class="f_coll">

		</div>

		<div class="f_coll">
			
		</div>
		

	</div>
</footer>