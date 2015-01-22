<?php include('includes/header.php'); ?>
	<div id="content">
		<div class="col border">
			<h3 class="center">SHIPPING</h3>
			<h4 class="center">Need Help? CALL US: 1-425-456-1098</h4>
		</div>
		<div id="progress-bar">
			<div class="progress-steps"><h3>SIGN IN</h3></div>
			<div class="progress-steps active"><h3>SHIPPING</h3></div>
			<div class="progress-steps"><h3>PAYMENT</h3></div>
			<div class="progress-steps"><h3>CONFIRMATION</h3></div>
		</div>
		
		<div class="clear">
		</div>
		<section id="shipping-confirmation" class="col">
			<div class="col">
				<h3>Shipping Address</h3>
				<p>
					Ms Marina Levonian <br>
					305 Olive Way<br>
					Seattle, WA<br>
					USA<br>
				</p>
					<a>Edit Shipping Address</a><br>
					<a>Add Shipping Address</a><br>
			</div>
		</section>
		<section id="shipping-confirmation" class="col">
			<div class="col">
				<h3>Billing Address</h3>
				<p>
					Ms Marina Levonian <br>
					305 Olive Way<br>
					Seattle, WA<br>
					USA<br>
				</p>
					<a>Edit Billing Address</a><br>
					<a>Add Billing Address</a><br>
			</div>
		</section>
		<section id="delivery-confirmation" class="col">
			<div class="col">
				<h3>Delivery Method</h3>
				<input type="radio" name="delivery" value="next-day"> Next business day - $20<br>
				<input type="radio" name="delivery" value="standard"> Standard delivery - FREE<br>
			</div>
		</section>
		<section id="packaging" class="col">
			<div class="col">
				<h3>Packaging Options</h3>
				<input type="radio" name="pack" value="premium"> Premium Packaging - FREE<br>
				<p>delivered in our WARE signature white boxes</p>
				<input type="radio" name="pack" value="basic"> Basic Packaging - FREE<br>
				<p>delivered in a plain box</p>
			</div>
		</section>
		<div id="item">
			<div class="col">
				<h3>Order Summary</h3>
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
		<div>
			<button id="purchase-btn-bottom" class="button right">
				<span>
					<a href="payment.php">PROCEED TO PURCHASE</a>
				</span>
			</button>
		</div>
	</div>
<?php include('includes/footer1.php'); ?>