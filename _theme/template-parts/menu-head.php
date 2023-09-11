<header id="header" class="header">
		<div class="header__container _container">

			<div class="header__row d-flex">

				<a href="<? bloginfo("url"); ?>" class="header__logo logo-icon">
					<svg>
						<use xlink:href="#logo"></use>
					</svg>
					
				</a>
				
				<?php wp_nav_menu([
					'theme_location'  => 'main_menu',
					'container' => '',
					'menu_class' => 'header__menu-list menu-list d-flex',
				])?>
				
				<?$queryMibok = false;
				if(!empty($_SERVER['QUERY_STRING']))
					$queryMibok = $_SERVER['QUERY_STRING'];?>

				<div class="wrapper-mibok-glaza mibok-link11">
					<a class="wrapper-mibok-glaza-link"  href="<?if(!empty($queryMibok)) echo '?'.$queryMibok.'&special_version=Y'; else echo '?special_version=Y';?>"><span class="mibok-glaza-icon">Aa</span><span class='mibok-glaza-text'>Версия для слабовидящих</span></a>
				</div>

				<div class="phone_blk">
					<div class="phone_icon_wrap">
						<a class="h_tel" href="tel:<?php echo carbon_get_theme_option( 'phone1' ); ?>"><?php echo carbon_get_theme_option( 'phone1' ); ?></a>
						<a class="h_tel" href="tel:<?php echo carbon_get_theme_option( 'phone2' ); ?>"><?php echo carbon_get_theme_option( 'phone2' ); ?></a>
					</div>
					<a class="h_mail" href="mailto:<?php echo carbon_get_theme_option( 'email' ); ?>"><?php echo carbon_get_theme_option( 'email' ); ?></a>
				</div>

				<button type="button" class="header__icon-menu icon-menu" aria-label="Иконка бургера">
					<span></span>
					<span></span>
					<span></span>
				</button>

			</div>

		</div>
	</header>