<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<!-- Begin Main Header Navigation -->
<nav id="main_nav">
	<a href="#" id="menu-icon"></a> <!-- menu icon for mobile view -->
	<ul>
		<li<?php if ($page == 'about.php' || $page == 'about_mission.php' || $page == 'about_vision.php' || $page == 'about_team.php' ) { print ' class="main-on"'; } ?>><a href="about.php">About</a></li>
	    <li<?php if ($page == 'services.php' || $page == 'services_dev_design.php' || $page == 'services_apps_dev.php' || $page == 'services_network.php' ) { print ' class="main-on"'; } ?>><a href="services.php">Services</a></li>
	    <li<?php if ($page == 'portfolio.php' || $page == 'portfolio_websites.php' || $page == 'portfolio_apps.php' ) { print ' class="main-on"'; } ?>><a href="portfolio.php">Portfolio</a></li>
	    <li<?php if ($page == 'blog.php' || $page == 'blog_articles.php' || $page == 'blog_it_news.php' ) { print ' class="main-on"'; } ?>><a href="blog.php">Blog</a></li>
	    <li<?php if ($page == 'contact.php') { print ' class="main-on"'; } ?>><a href="contact.php">Contact</a></li>
	</ul>
</nav>
<!-- End Main Navigation -->