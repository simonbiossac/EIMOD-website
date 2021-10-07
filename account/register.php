<?php include '../assets/inc/meta.inc.php' ?>
	<link rel="stylesheet" href="../assets/css/master.min.css">
	<title>New Account</title>
</head>

<body>
	<header class="onepage">
		<div class="header-brand">
			<h2>New Account</h2>
		</div>
		<a href="javascript:history.back()">
			<img class="icon" src="../assets/src/icon/close.svg" alt="account close">
		</a>
	</header>


	<form class="form" action="../" method="post">
		<label for="name">Name</label>
		<input type="text" name="name" value="" autocomplete="given-name" required autofocus >
		<label for="secondName">Second name</label>
		<input type="text" name="secondName" value="" autocomplete="family-name" required>
		<label for="email">Email</label>
		<input type="email" name="email" value="" autocomplete="email" required>
		<label for="password">Create a password</label>
		<input type="password" name="password" value="" autocomplete="new-password" required>

		<div class="form-terms">
			<input type="checkbox" name="terms" required>
			<label for="terms">I read and agreee with <a href="#">privacy policy</a>.</label>
		</div>
		<div class="form-newsletter">
			<input type="checkbox" name="newsletter">
			<label for="newsletter">I would to recive newsletter from Everything is made of dot.</label>
		</div>

		<button class="button black" type="submit">Create an account</button>

	</form>
</body>

</html>
