<?php include './assets/inc/meta.inc.php' ?>
	<link rel="stylesheet" href="./assets/css/master.min.css">
	<title>Summary</title>
</head>

<body>
	<header class="onepage">
		<div class="header-brand">
			<h2>Summary</h2>
		</div>
		<a href="javascript:history.back()">
			<img class="icon" src="./assets/src/icon/close.svg" alt="account close">
		</a>
	</header>

	<section class="summary">
		<ol>
			<li>
				<h3>dot.teeshirt.v2<p>size : L</p></h3>
				<h2>30.00€</h2>
			</li>
			<li>
				<h3>Shipping</h3>
				<h2>+7.00€</h2>
			</li>
			<!-- Promo code good -->
			<!-- <li>
				<h3>Discount Code<p>-20%</p></h3>
				<h2>-13.00€</h2>
			</li> -->
			<li>
				<h3>Total</h3>
				<h2>37.00€</h2>
			</li>
		</ol>

	</section>

	<form class="form" action="./confirmOrder.php" method="post">
		<h2>Any Discount ?</h2>
		<label for="promo">Discount Code</label>
		<input type="text" name="promo" value="">
		<button class="button light promo" type="submit">Apply</button>
	</form>

	<!-- mollie link -->
	<a href="#" class="button buybutton black">Buy (30.00€)</a>


</body>

</html>
