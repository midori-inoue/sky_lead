<footer>
<ul id="sns"><li><img src="<?php echo get_template_directory_uri(); ?>/img/base/facebook.png" alt=""/></li><li><img src="<?php echo get_template_directory_uri(); ?>/img/base/twitter.png" alt=""/></li><li><a href="https://www.instagram.com/nbdroneschool_nagoya/?r=nametag" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/base/instagram.png" alt=""/></a></li><li><img src="<?php echo get_template_directory_uri(); ?>/img/base/youtube.png" alt=""/></li><li><img src="<?php echo get_template_directory_uri(); ?>/img/base/tiktok.png" alt=""/></li><li><img src="<?php echo get_template_directory_uri(); ?>/img/base/mail.png" alt=""/></li></ul>
<div id="footer_inner">
<h2><img src="<?php echo get_template_directory_uri(); ?>/img/base/f_menu02.png" alt="株式会社スカイリード NB DRONE SCHOOL"/></h2>
<div id="f_navi">
<nav id="f_menu">
<?php wp_nav_menu( array(
      'theme_location' => 'footer-nav',
      'container' => 'ul',
      'container_class' => '',
      'container_id' => '',
	'menu_id' => '',
    'menu_class' => '',
      'fallback_cb' => '',
	'walker'  => new custom_walker_nav_menu
) ); ?> 
</nav>

<address><small>© <script type="text/javascript">$y=2023;$ny=new Date().getFullYear();document.write($ny>$y?$y+'-'+$ny:$y);</script> SKY LEAD NB DRONE SCHOOL.</small></address>
</div>
</div>
</footer>
<p id="page-top"><img src="<?php echo get_template_directory_uri(); ?>/img/base/gotop.gif" alt=""/><a href="#wrap">Go Top</a></p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/anchor_link.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fade.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/m_menu.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/pagetop.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/sp_touch.js"></script>
<?php wp_footer(); ?><!--システム・プラグイン用-->
</body>
</html>