<div id="float-left-menu">
	<div class="wrapper">
		<div class="title">
			<div style="position: relative">
				<a class="icons icon_medium" onclick="showElement('none')"></a>
				<?php
				if(defined('BRAND_LOGO'))
					echo '<a class="brand-logo" style="background-image: url('.BRAND_LOGO.')"></a>';
				else
					echo 'Main Menu';
				?>
			</div>
		</div>
		<ul class="ripple">
			<li><a href="//senti.com.ph/blog"><span class="img ic_info_outline_white"></span>Senti Blog</a></li>
			<li><a href="?login"><span class="img ic_lock_outline_white"></span>Login</a></li>
		</ul>
		<div class="copyright">
			<?=PAGE_COPYRIGHT?>
		</div>
	</div>
</div>