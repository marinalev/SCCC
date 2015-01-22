<?php 

$page = basename($_SERVER['SCRIPT_NAME']);

if ($page == 'index.php') { print 'Home'; }

if ($page == 'about.php') { print 'About'; }

	if ($page == 'mission.php') { print 'About Our Mission'; }
    
    if ($page == 'about-process.php') { print 'About Our Process'; }
    
    if ($page == 'about-team.php') { print 'About Our Team'; }

if ($page == 'services.php') { print 'Services'; }

	if ($page == 'services_dev_design.php') { print 'Web Design and Development Services'; }
	
	if ($page == 'services_apps_dev.php') { print 'Mobile Apps and Development Services'; }
	
	if ($page == 'services_network.php') { print 'Network Design and Virtualization Services'; }

if ($page == 'portfolio.php') { print 'Portfolio'; }

	if ($page == 'work-logos.php') { print 'Logo Work'; }
	
	if ($page == 'work-print.php') { print 'Print Work'; }
	
	if ($page == 'work-web.php') { print 'Web Work'; }

if ($page == 'blog.php') { print 'Blog'; }

	if ($page == 'article1.php') { print 'Blog Post'; }
	
	if ($page == 'article2.php') { print 'Blog Post'; }
	
	if ($page == 'article3.php') { print 'Blog Post'; }

if ($page == 'contact.php') { print 'Contact'; }
if ($page == 'disclaimer.php') { print 'Disclaimer'; }

?>