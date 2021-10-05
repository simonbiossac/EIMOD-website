<?php include './assets/inc/meta.inc.php' ?>
	<link rel="stylesheet" href="./assets/css/master.min.css">
	<title>New Account</title>
</head>

<body>
	<header class="onepage">
		<div class="header-brand">
			<h2>Order</h2>
		</div>
		<a href="javascript:history.back()">
			<img class="icon" src="./assets/src/icon/close.svg" alt="account close">
		</a>
	</header>

	<section class="cart">
		<h3 class="tag2">dot.teeshirt.v2<p>size : L</p></h3>
		<span class="tag2">30.00€</span>
	</section>


	<form class="form" action="./confirmOrder.php" method="post">
		<label for="name">Name</label>
		<input type="text" name="name" value="" autocomplete="given-name" autofocus required>
		<label for="secondName">Second name</label>
		<input type="text" name="secondName" value="" autocomplete="family-name" required>
		<label for="Address">Address</label>
		<input type="text" name="Address" value="" autocomplete="street-address" required>
		<label for="zip">ZIP</label>
		<input type="number" name="zip" value="" pattern="[0-9]*" autocomplete="postal-code" required>
		<label for="country">Country</label>
		<input type="text" name="country" value="France" autocomplete="country-name" readonly required>

		<button class="button black" type="submit">Continue</button>

	</form>
</body>

</html>
