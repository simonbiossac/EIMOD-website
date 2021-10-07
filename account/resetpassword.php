<?php include '../assets/inc/meta.inc.php' ?>
	<link rel="stylesheet" href="../assets/css/master.min.css">
	<title>Everything is made of dot.</title>
</head>

<body>
	<header class="onepage">
		<div class="header-brand">
			<h2>Reset Password</h2>
		</div>
		<a href="javascript:history.back()">
			<img class="icon" src="../assets/src/icon/close.svg" alt="close">
		</a>
	</header>


	<form class="form" action="./" method="post">
		<label for="email">Account Email</label>
		<input type="email" name="email" value="" autocomplete="email" autofocus required>
		<p class="product-details-item">Reset link will be send to your account email.</p>
		<div class="form-cta">
			<button class="button black" type="submit">Reset</button>
		</div>

	</form>

</body>

</html>
