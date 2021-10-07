<?php include '../assets/inc/meta.inc.php' ?>
	<link rel="stylesheet" href="../assets/css/master.min.css">
	<title>Login</title>
</head>

<body>
	<header class="onepage">
		<div class="header-brand">
			<h2>Login</h2>
		</div>
		<a href="javascript:history.back()">
			<img class="icon" src="../assets/src/icon/close.svg" alt="close">
		</a>
	</header>


	<form class="form" action="./" method="post">
		<label for="email">Email</label>
		<input type="email" name="email" value="" autocomplete="email" autofocus required>
		<label for="password">Password</label>
		<input type="password" name="password" value="" autocomplete="new-password" required>
		<a href="./resetpassword.php">Reset my password ?</a>

		<div class="form-cta">
			<a href="./register.php" class="button light">Register</a>
			<button class="button black" type="submit">Login</button>
		</div>

	</form>

</body>

</html>
