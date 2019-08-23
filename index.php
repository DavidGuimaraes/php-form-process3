<?php include "header-template.php"; ?>

<main>
	<br><br>
	<form action="process.php" method="POST">
		<label>First Name: </label> <input name="firstName" type="text"><br>
		<label>Last Name: </label> <input name="lastName" type="text"><br>
		<label>Email Adress: </label> <input name="email" type="text"><br>
		<br><br>
		<textarea name="message" rows=10 cols=30>Type something in here...</textarea>
		<br><br>
		<input type="submit">
	</form>
</main>

<?php include "footer-template.php"; ?>
