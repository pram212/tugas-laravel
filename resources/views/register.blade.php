<!DOCTYPE html>
<html>
<head>
	<title>registrasi</title>
</head>
<body>

<h1>Buat Account Baru!</h1>
<h2>Sign Up Form</h2>
<form action="/welcome" method="post">
	@csrf 
	<label for="firstname">First name :</label><br><br>
	<input type="text" name="firstname" id="firstname">
	<br>
	<br>
	<label for="lastname">Last name :</label><br><br>
	<input type="text" name="lastname" id="lastname">
	<br><br>
	<span>Gender :</span>
	<br><br>
	<input type="radio" name="gender" id="male" value="male"><label for="male">Male</label>
	<br><br>
	<input type="radio" name="gender" id="female" value="female"><label for="female">Female</label>
	<br><br>
	<input type="radio" name="gender" id="other" value="other"><label for="other">Other</label>
	<br><br>
	<label for="nationality">Nationality :</label>
	<br><br>
	<select id="nationality" name="nationality">
		<option>Indonesia</option>
		<option>Malaysia</option>
		<option>England</option>
	</select>
	<br><br>
	<span for="language">Language spoken :</span>
	<br><br>
	<input type="checkbox" name="indonesia" id="indonesia" value="indonesia">
	<label for="indonesia">Bahasa Indonesia</label><br>
	<input type="checkbox" name="english" id="english" value="english">
	<label for="english">English</label><br>
	<input type="checkbox" name="otherlanguage" id="otherlanguage" value="other">
	<label for="otherlanguage">Other</label>
	<br><br>
	<label for="bio">Bio :</label>
	<br><br>
	<textarea id="bio" name="bio" rows="10" cols="50">
	</textarea>
	<br><br>
	<button type="submit" name="submit" id="submit" value="registered">Sign up</button>
</form>

</body>
</html>