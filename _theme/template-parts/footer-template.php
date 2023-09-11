<footer id="footer" class="footer">
	<div class="footer__container _container">

		<div class="f_coll">
			<a href="<? bloginfo("url"); ?>" class="footer__logo logo-icon">
				<img class="logo_footer" src="<?php echo get_template_directory_uri();?>/img/logo_white.svg" alt="<?php echo carbon_get_theme_option( 'main_zag' ); ?>">
			</a>
			<p><?php echo carbon_get_theme_option( 'main_sub_zag' ); ?></p>
			<p>© <?php echo carbon_get_theme_option( 'org_name' ); ?></p>
		</div>

		<div class="f_coll">
			<h2>Меню</h2>
			<?php wp_nav_menu([
					'theme_location'  => 'footer_menu',
					'container' => '',
					'menu_class' => 'footer__menu-list menu-list d-flex',
			])?>
		</div>

		<div class="f_coll">
			<h2>Обкчающимся</h2>

			<ul>
				<?php
                    $mypages = get_pages( [
						'sort_column' => 'menu_order',
                        'child_of' => 11,
                        'sort_order' => 'ASC'
                    ] );
                    
                    foreach( $mypages as $page ) {
                    ?>
                        <li>
                            <a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a>
                        </li>
                    <?}?>
			</ul>
		</div>

		<div class="f_coll footer_contacts">
			<h2>Контакты</h2>
			        
            <div class="fc_phone">
			<p><a href="tel:<?php echo carbon_get_theme_option( 'phone1' ); ?>"><?php echo carbon_get_theme_option( 'phone1' ); ?></a></p>
				<p><a href="tel:<?php echo carbon_get_theme_option( 'phone2' ); ?>"><?php echo carbon_get_theme_option( 'phone2' ); ?></a></p>        
            	<p><a href="tel:<?php echo carbon_get_theme_option( 'phone3' ); ?>"><?php echo carbon_get_theme_option( 'phone3' ); ?></a></p>
            	<p><a href="tel:<?php echo carbon_get_theme_option( 'phone4' ); ?>"><?php echo carbon_get_theme_option( 'phone4' ); ?></a></p>
			</div>
			<p><?php echo carbon_get_theme_option( 'adress' ); ?></p>
			<p><?php echo carbon_get_theme_option( 'email' ); ?></p>
		</div>
		

	</div>
</footer>