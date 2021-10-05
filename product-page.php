<?php include './assets/inc/meta.inc.php' ?>
	<link rel="stylesheet" href="./assets/css/master.min.css">
	<title>Everything is made of dot.</title>
</head>

<body>
	<?php include './assets/inc/header.inc.php' ?>
	<section class="product">
		<ul class="product-picture-list">
			<li class="drop-item product-picture-item"></li>
			<li class="drop-item product-picture-item"></li>
			<li class="drop-item product-picture-item"></li>
			<li class="drop-item product-picture-item"></li>
		</ul>
	</section>
	<div class="buy">
		<div class="tag-list">
			<span class="tag2">Unisex</span>
			<span class="tag2">Drop.2</span>
			<span class="tag2">Limited</span>
		</div>

		<div class="product-main">
			<h2>Tee shirt 2</h2>
			<h2>30.00€</h2>
		</div>

		<div class="CTA-list">
			<a href="#details" class="button light">Details</a>
			<a id="buyItem" class="button black">Buy</a>
		</div>
	</div>

	<div class="order">
		<div class="product-size">
			<input type="radio" id="size1" name="size" value="S" data-stock="0">
			<label for="size1">S</label>
			<input type="radio" id="size2" name="size" value="M" data-stock="20">
			<label for="size2">M</label>
			<input type="radio" id="size3" name="size" value="L" data-stock="15">
			<label for="size3">L</label>
			<input type="radio" id="size4" name="size" value="XL" data-stock="5">
			<label for="size4">XL</label>
			<button class="closeModal button light">Back</button>
			<a href="./order.php" id="orderItem" class="button black" type="submit">Order now</a>
		</div>
	</div>

	<section>
		<ol class="product-details">
			<li class="product-details-item">
				<h3>Description</h3>
				<p>Drop.2 White Tee Shirt. Release in 2021 October, mod. (the little guy) on the front, the brandName on the back. Front and Back dot print give an illusion of void inside the body. Don't forget Everything is made of dot.</p>
			</li>
			<li class="product-details-item">
				<h3>Details</h3>
				<ul>
					<li>Front & Back print</li>
					<li>Confort</li>
					<li>100% Coton Biologique</li>
					<li>180g/m2</li>
					<li>Designed in France</li>
					<li>Limited stock</li>

				</ul>
			</li>

			<li class="product-details-item">
				<h3>Sizing</h3>
				<p>Confort Tee Shirt, take your normal size.</p>
				<p>Model is 180cm and he wear a M.</p>
			</li>

			<li class="product-details-item">
				<h3>Colors</h3>
				<p>White.Black</p>
			</li>

			<li class="product-details-item">
				<h3>Shipping</h3>
				<ul>
					<li>Limoges - 0€</li>
					<li>France(EU) - 7€</li>
				</ul>

			</li>
			<li class="product-details-item">
				<h3>Id</h3>
				<p>dot.teeshirt.v2</p>
			</li>

		</ol>
	</section>
	<?php include './assets/inc/footer.inc.php' ?>
	<script src="./assets/js/main.js"></script>

</body>

</html>
