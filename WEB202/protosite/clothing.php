 <?php include('includes/header.php'); ?>
		<div id="content">
			<aside id="aside-bar">
				<p>CLOTHING</p>
				<ul>
					<li>Jeans</li>
					<li>Coats</li>
					<li>Suits</li>
					<li>Polos</li>
					<li>Fine Shirts</li>
					<li>Suits</li>
					<li>Pants</li>
					<li>Tuxedos</li>
					<li>Underwear</li>
				</ul>
				
				<p>Color</p>
					<input type="checkbox" name="color" value="All"> All<br>
					<input type="checkbox" name="color" value="Brown"> brown<br>
					<input type="checkbox" name="color" value="All"> blue<br>
					<input type="checkbox" name="color" value="Brown"> grey<br>
					<input type="checkbox" name="color" value="All"> red<br>
					<input type="checkbox" name="color" value="Brown"> black<br>
					<input type="checkbox" name="color" value="All"> white<br>
					<input type="checkbox" name="color" value="Brown"> orange<br>
					
				<p>Size</p>
					<input type="checkbox" name="size" value="All"> All<br>
					<input type="checkbox" name="size" value="S"> S<br>
					<input type="checkbox" name="size" value="M"> M<br>
					<input type="checkbox" name="size" value="L"> L<br>
					<input type="checkbox" name="size" value="XL"> XL<br>
					<input type="checkbox" name="size" value="XXL"> XXL<br>
					
				<p>Designer</p>
					<input type="checkbox" name="designer" value="All"> All<br>
					<input type="checkbox" name="designer" value="S"> WARE<br>
					<input type="checkbox" name="designer" value="All"> All<br>
					<input type="checkbox" name="designer" value="S"> WARE<br>
					<input type="checkbox" name="designer" value="All"> All<br>
					<input type="checkbox" name="designer" value="S"> WARE<br>
					<input type="checkbox" name="designer" value="All"> All<br>
					<input type="checkbox" name="designer" value="S"> WARE<br>
					<input type="checkbox" name="designer" value="S"> WARE<br>
					<input type="checkbox" name="designer" value="All"> All<br>
					<input type="checkbox" name="designer" value="S"> WARE<br>
					<input type="checkbox" name="designer" value="All"> All<br>
					<input type="checkbox" name="designer" value="S"> WARE<br>
				
				
			</aside>
			<div class ="3-cols">
				<h3 class ="center">Clothing</h3>
				<h4 class ="center">Jeans</h4>
				<div class="col1of3">
					<a href="listing.php"><img src="images/jeans-1.jpg" /></a>
					<p>Hi, Lorem! Hi, Lorem! Hi, Lorem!Hi, Lorem!Hi, Lorem! Hi, Lorem! Hi, Lorem!</br>$200</p>
				</div>
				<div class="col1of3">
					<img src="images/jeans-2.jpg" />
					<p>Hi, Lorem! Hi, Lorem! Hi, Lorem!Hi, Lorem!Hi, Lorem! Hi, Lorem! Hi, Lorem!</br>$200</p>
				</div>
				<div class="col1of3">
					<img src="images/jeans-3.jpg" />
					<p>Hi, Lorem! Hi, Lorem! Hi, Lorem!Hi, Lorem!Hi, Lorem! Hi, Lorem! Hi, Lorem!</br>$200</p>
				</div>
				<div>
					<button id="view-all-btn" class="button right simple">
					<span>
						<a href="#">VIEW ALL JEANS</a>
					</span>
					</button>
				</div>
			</div>
			<div class ="3-cols">
				<h4 class ="center">Coats</h4>
				<div class="col1of3">
					<img src="images/coat-1.jpg" />
					<p>Hi, Lorem! Hi, Lorem! Hi, Lorem!Hi, Lorem!Hi, Lorem! Hi, Lorem! Hi, Lorem!</br>$200</p>
				</div>
				<div class="col1of3">
					<img src="images/coat-2.jpg" />
					<p>Hi, Lorem! Hi, Lorem! Hi, Lorem!Hi, Lorem!Hi, Lorem! Hi, Lorem! Hi, Lorem!</p></div>
				<div class="col1of3">
					<img src="images/suit-6.jpg" />
					<p>Hi, Lorem! Hi, Lorem! Hi, Lorem!Hi, Lorem!Hi, Lorem! Hi, Lorem! Hi, Lorem!</br>$200</p>
				</div>
				<div>
				<button id="view-all-btn" class="button right simple">
					<span>
						<a href="#">VIEW ALL COATS</a>
					</span>
				</button>
			</div>
			</div>
			<div class ="3-cols">
				<h4 class ="center">Suits</h4>
				<div class="col1of3">
					<img src="images/suit-4.jpg" />
					<p>Hi, Lorem! Hi, Lorem! Hi, Lorem!Hi, Lorem!Hi, Lorem! Hi, Lorem! Hi, Lorem!</br>$200</p>
				</div>
				<div class="col1of3">
					<img src="images/suit-5.jpg" />
					<p>Hi, Lorem! Hi, Lorem! Hi, Lorem!Hi, Lorem!Hi, Lorem! Hi, Lorem! Hi, Lorem!</p></div>
				<div class="col1of3">
					<img src="images/suit-2.jpg" />
					<p>Hi, Lorem! Hi, Lorem! Hi, Lorem!Hi, Lorem!Hi, Lorem! Hi, Lorem! Hi, Lorem!</br>$200</p>
				</div>
				<div>
					<button id="view-all-btn" class="button right simple">
					<span>
						<a href="#">VIEW ALL SUITS</a>
					</span>
					</button>
				</div>
			</div>
		</div>
		<div id="vied-items-clothing">
			<div class="recently-viewed"><h4 class="center down">Recently Viewed Products</h4></div>
			<div class="col1of5">
				<img src="images/jeans-2.jpg" />
				<p class="viewed">Hi, Lorem! Hi,Lorem! Hi,Lorem!</br>$200</p>
			</div>
			<div class="col1of5">
				<img src="images/shirt-1.jpg" />
				<p class="viewed">Hi,Lorem! Hi,Lorem! Hi,Lorem!</br>$200</p>
			</div>
			<div class="col1of5">
				<img src="images/shirt-2.jpg" />
				<p class="viewed">Hi, Lorem! Hi, Lorem! Hi, Lorem!</br>$200</p>
			</div>
			<div class="col1of5">
				<img src="images/coat-1.jpg" />
				<p class="viewed">Hi, Lorem! Hi, Lorem! Hi, Lorem!</br>$200</p>
			</div>
			<div class="col1of5">
				<img src="images/shirt-3.jpg" />
				<p class="viewed">Hi, Lorem! Hi, Lorem! Hi, Lorem!</br>$200</p>
			</div>
		</div>
  <?php include('includes/footer1.php'); ?>