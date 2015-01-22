<?php include('includes/header.php'); ?>
	<div id="content">
		<div class="col border">
			<h3 class="center">SIGN IN</h3>
			<h4 class="center">Need Help? CALL US: 1-425-456-1098</h4>
		</div>
		<div id="progress-bar">
			<div class="progress-steps active"><h3>SIGN IN</h3></div>
			<div class="progress-steps"><h3>SHIPPING</h3></div>
			<div class="progress-steps"><h3>PAYMENT</h3></div>
			<div class="progress-steps"><h3>CONFIRMATION</h3></div>
		</div>
		<div class="col1of2 border">
			<h4 class="sign-in">SIGN IN or <a href="account.php">CREATE AN ACCOUNT</a></h4>
			<p>
				<label for="name">Username:</label>
				<input name="name" id="name" type="text" />
			</p>
			<p>
				<label for="password">Password:</label>
				<input name="password" id="password" type="password"/>
			</p>
			<div>
				<button id="purchase-btn" class="button right">
					<span>
						<a href="shipping.php">PROCEED TO PURCHASE</a>
					</span>
				</button>
			</div>
		</div>
		<div class="col2of2 border">
			<h4 class="sign-in">SHOP WITHOUT AN ACCOUNT</h4>
			<p id="add-padding">We will use your eamil address to confirm your purchase</p>
			<p>
				<label for="email">Email:</label>
				<input name="email" id="email-grey" type="email" />
			</p>
			<div>
				<button id="purchase-btn-right" class="button right">
					<span>
						<a href="shipping.php">PROCEED TO PURCHASE</a>
					</span>
				</button>
			</div>
		</div>
	</div>
<?php include('includes/footer1.php'); ?>