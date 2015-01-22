<?php include('includes/header.php'); ?>

<?php include('includes/sidebar.php'); ?>

		<section id="content">
			<article id="content_main">
				<?php
					if (!isset($_POST["recaptcha_response_field"])) { ?>
				<h1>Contact</h1>
				<p>
					Suspendisse quis mi et quam ornare semper nec sit amet nibh. Aenean in volutpat diam. Pellentesque at nibh quam, id fringilla turpis. Phasellus tincidunt, justo et mollis tempor, est tellus varius ipsum, 
					et tempor libero dolor vel turpis. Vivamus dignissim sagittis est, quis scelerisque massa facilisis quis.
				</p> <br> <?php  } ?>
				<!--start contact page here-->
		
      	<?php
      	
      		include ('contact1.php');
      	?>
      	
      	<!--end contact page here-->
			</article>
		</section>
<?php include('includes/footer.php'); ?>