<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<!-- Begin Nav Bar -->
<div id="nav_bar">
	<nav id="nav_links">
<?php // see if the page requires sub navigation
	if ($page != 'index.php') { ?>
    <h3 id="main_category"><?php 
		// if the page requires sub navigation write the proper headline into the page
		if ($page == 'about.php' || $page == 'about_mission.php' || $page == 'about_vision.php' || $page == 'about_team.php' ) { print 'About'; }
		elseif ($page == 'services.php' || $page == 'services_dev_design.php' || $page == 'services_apps_dev.php' || $page == 'services_network.php' ) { print 'Services'; }
		elseif ($page == 'portfolio.php' || $page == 'portfolio_websites.php' || $page == 'portfolio_apps.php' ) { print 'Portfolio'; } 
		elseif ($page == 'blog.php' || $page == 'blog_articles.php' || $page == 'blog_it_news.php') { print 'Blog'; }
		elseif ($page == 'contact.php') { print 'Contact'; }
	?></h3>
    <ul id="sub-navigation-items">
		<?php // write the proper "about" sub navigation
        if ($page == 'about.php' || $page == 'about_mission.php' || $page == 'about_vision.php' || $page == 'about_team.php' ) { ?>
            <li<?php if ($page == '#mission') { print ' class="sub-on"'; } ?>><a href="#mission">Mission<br></a></li>
            <li<?php if ($page == '#vision') { print ' class="sub-on"'; } ?>><a href="#vision">Vision<br></a></li>
            <li<?php if ($page == '#team') { print ' class="sub-on"'; } ?>><a href="#team">Team<br></a></li> <?php } ?>
        <?php //  // write the proper "services" sub navigation
        if ($page == 'services.php' || $page == 'services_dev_design.php' || $page == 'services_apps_dev.php' || $page == 'services_network.php' ) { ?>
            <li<?php if ($page == 'services_dev_design.php') { print ' class="sub-on"'; } ?>><a href="services_dev_design.php">Web Design <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &<br> Development<br><br></a></li>
            <li<?php if ($page == 'services_apps_dev.php') { print ' class="sub-on"'; } ?>><a href="services_apps_dev.php">Mobile Apps <br>Development<br><br></a></li>
            <li<?php if ($page == 'services_network.php') { print ' class="sub-on"'; } ?>><a href="services_network.php">Network Design <br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &<br> Virtualization</a></li><?php } ?>
        <?php //  // write the proper "portfolio" sub navigation
        if ($page == 'portfolio.php' || $page == 'portfolio_websites.php' || $page == 'portfolio_apps.php') { ?>
            <li<?php if ($page == '#portfolio_websites') { print ' class="sub-on"'; } ?>><a href="#portfolio_websites">Websites<br></a></li>
            <li<?php if ($page == '#apps_dev') { print ' class="sub-on"'; } ?>><a href="#apps_dev">Mobile Apps</a></li> <?php } ?>
        <?php // write the proper "about" sub navigation
        if ($page == 'contact.php') { ?>
            <li<?php if ($page == 'contact.php') { print ' class="contact_info"'; } ?>>Telephone:<br>+44 208 699 9961<br /></li>
            <li<?php if ($page == 'contact.php') { print ' class="contact_info"'; } ?>>Email:<br>info@uwaver.com<br></li> <?php } ?>
    </ul>
<?php } ?>
</nav>
</div>
<!-- End Nav Bar -->