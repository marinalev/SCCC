<?php include('includes/header.php'); ?>
	<div id="content">
		<div class="col border">
			<h3 class="center">PAYMENT</h3>
			<h4 class="center">Need Help? CALL US: 1-425-456-1098</h4>
		</div>
		<div id="progress-bar">
			<div class="progress-steps"><h3>SIGN IN</h3></div>
			<div class="progress-steps"><h3>SHIPPING</h3></div>
			<div class="progress-steps active"><h3>PAYMENT</h3></div>
			<div class="progress-steps"><h3>CONFIRMATION</h3></div>
		</div>
		<section id="payment-info" class="col">
			<div class="col">
				<h3>1. Payment Details</h3>
					<form>
						<p>
							<label for="card" class="form_left_down">Credit Card Type:<span class="error"> *</span></label>
							<select name="card" size="1">
								<option selected value="#">Select Card Type</option>
								<option>VISA</option>
								<option>MASTERCARD</option>
								<option>AMERICAN EXPRESS</option>
							</select>
						</p>

						<p>
							<label for="last_name" class="form_left_down">Cardholder's Name:<span class="error"> *</span></label>
							<input type="text" id="last_name" name="last_name" required>
						</p>
						
						<p>
							<label for="ssn" class="form_left_down">Security Number:<span class="error"> *</span></label>
							<input type="ssn" id="ssn" name="ssn" required>
						</p>
						
						<p>
							<label for="exp-date" class="form_left_down">Expiry Date:<span class="error"> *</span></label>
							<input type="date" id="date" name="date" required pattern="\d{10}">
						</p>
				</form>
			</div>
		</section>
		<div id="item">
			<div class="col">
				<h3>2. Order Summary</h3>
			</div>
			<div class="col1of5">
				<h5 class="center">ITEM</h5>
				<img src="images/jeans-1.jpg" />
			</div>
			<div class="border-item">
				<div class="col-description">
					<h5>DESCRIPTION</h5>
					<p>Lorem, lorem, lorem</p>
				</div>
				<div class="col1of6">
					<h5>COLOR</h5>
					<p> Red</p>
				</div>
				<div class="col1of6">
					<h5>SIZE</h5>
					<p> M</p>
				</div>
				<div class="col1of6">
					<h5>QUANTITY</h5>
					<p> 1</p>
				</div>
				<div class="col-unit-price">
					<h5>UNIT PRICE</h5>
					<p> $200</p>
				</div>
			</div>
			<div class="col10 right price">
				<p>9.5%</br>
				$ 20</br>
				</p>
				<p>$ 248</p>
			</div>
			<div class="col10 right price-1">
				<p>TAX</br>
				SHIPPING</br>
				</p>
				<p>TOTAL</p>
			</div>
		</div>
		<section id="payment" class="col">
			<div class="col">
				<h3>3. Review Shipping Address</h3>
				<p>
					Ms Marina Levonian <br>
					305 Olive Way<br>
					Seattle, WA<br>
					USA<br>
				</p>
					<a>Edit Shipping Address</a><br>
					<a>Add Shipping Address</a><br>
			</div>
			<div class="col">
				<h3>4. Review Billing Address</h3>
				<p>
					Ms Marina Levonian <br>
					305 Olive Way<br>
					Seattle, WA<br>
					USA<br>
				</p>
					<a>Edit Billing Address</a><br>
					<a>Add Billing Address</a><br>
			</div>
			<div class="col">
				<h3>5. Review Delivery Method & Packaging</h3>
				<p> Next business day - $ 20 <br><a>Edit Delivery Method</a></p>
				<p> Premium Packaging </br><a>Edit Packaging</a></p>
			</div>
		</section>
		
		<div>
			<button id="purchase-btn-bottom" class="button right">
				<span>
					<a href="confirmation.php">PROCEED TO PURCHASE</a>
				</span>
			</button>
		</div>
	</div>
<?php include('includes/footer1.php'); ?>