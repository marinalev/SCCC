<?php include('includes/header.php'); ?>
	<div id="content">
		<div class="col border">
			<h3 class="center">SIGN IN</h3>
			<h4 class="center">Need Help? Call us: 1-425-456-1098</h4>
		</div>
		<div id="progress-bar">
			<div class="progress-steps"><h3>SIGN IN</h3></div>
			<div class="progress-steps active"><h3>SHIPPING</h3></div>
			<div class="progress-steps"><h3>PAYMENT</h3></div>
			<div class="progress-steps"><h3>CONFIRMATION</h3></div>
		</div>
		
		<section id="shipping" class="col">
			<form id="contact_form" action="contact_success.php" method="post">
				<p>
					<label for="first_name" class="form_left">First Name:<span class="error"> *</span></label>
					<input type="text" id="first_name" name="first_name" autofocus>
				</p>
				
				<p>
					<label for="last_name" class="form_left">Last Name:<span class="error"> *</span></label>
					<input type="text" id="last_name" name="last_name">
				</p>
				<p>
					<label for="email" class="form_left">Email Address:<span class="error"> *</span></label>
					<input type="text" id="email" name="email">
				</p>
				<p>
					<label for="password" class="form_left">Password:<span class="error"> *</span></label>
					<input id="password" name="password" type="password">
				</p>
				<p>
					<label for="password" class="form_left">Retype Password:<span class="error"> *</span></label>
					<input id="password" name="password" type="password">
				</p>
				
				<p>
					<label for="phone" class="form_left">Phone:<span class="error"> *</span></label>
					<input type="tel" id="phone" name="phone" required pattern="\d{10}">
				</p>
				
				<p>
					<label for="state" class="form_left">State<span class="error"> *</span></label>
						<select name="state" id="billing-state" size="1">
							<option selected value="#">Select a state</option>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District of Columbia</option>
							<option value="GA">Georgia</option>
							<option value="GU">Guam</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
					   </select>
				</p>
				<p>
					<label for="last_name" class="form_left">Country:<span class="error">*</span></label>
					<input type="text" id="last_name" name="last_name" required>
				</p>
			</form>
		</section>
		<div>
			<button id="create-acc" class="button right">
				<span>
					<a href="reg-confirmation.php">CREATE AN ACCOUNT</a>
				</span>
			</button>
		</div>
		<div id="item">
			<div class="col1of5 down" class="col">
				<h5 class="center">ITEM</h5>
				<img src="images/jeans-1.jpg" />
			</div>
			<div class="col1of5 down">
				<h5>DESCRIPTION</h5>
				<p>Lorem, lorem, lorem</p>
			</div>
			<div class="col1of6 down">
				<h5>COLOR</h5>
				<p> Red</p>
			</div>
			<div class="col1of6 down">
				<h5>SIZE</h5>
				<p> M</p>
			</div>
			<div class="col1of6 down">
				<h5>QUANTITY</h5>
				<p> 1</p>
			</div>
			<div class="col1of6 down">
				<h5>UNIT PRICE</h5>
				<p> $200</p>
			</div>
		</div>
	</div>
<?php include('includes/footer.php'); ?>