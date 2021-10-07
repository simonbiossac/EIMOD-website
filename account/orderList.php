<?php include '../assets/inc/meta.inc.php' ?>
	<link rel="stylesheet" href="../assets/css/master.min.css">
	<title>Order List</title>
</head>

<body>
	<header class="onepage">
		<div class="header-brand">
			<h2>Order List</h2>
		</div>
		<a href="javascript:history.back()">
			<img class="icon" src="../assets/src/icon/close.svg" alt="account close">
		</a>
	</header>

	<section>
		<ol class="orderlist">
			<li class="orderlist-item orderlist-lastItem">
				<div>
					<h2>#1234</h2>
					<a href="#">Track</a>
				</div>
				<div>
					<ol>
						<li>
							<h3>dot.teeshirt.v2<p>size : L</p></h3>
							<h2>30.00€</h2>
						</li>
				</div>
				<ol>
					<li>Name</li>
					<li>Second Name</li>
					<li>Address</li>
					<li>Zip Code</li>
					<li>Contry</li>
				</ol>
			</li>

			<li class="orderlist-item orderlist-item-history">
				<div>
					<h2>#1234</h2>
					<!-- <a href="#">Track</a> -->
				</div>
				<ol>
					<li>Name</li>
					<li>Second Name</li>
					<li>Address</li>
					<li>Zip Code</li>
					<li>Contry</li>
				</ol>
			</li>
		</ol>
	</section>

</body>

</html>
