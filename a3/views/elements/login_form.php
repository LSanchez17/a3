<form id="login_form" action="<?php echo BASE_URL;?>login/do_login" method="post">

<fieldsets>
<legend>Log In</legend>
<label for="username">Username/E-mail Address:</label>
<input type="text" id="email" name="email" value="">
<br>

<label for="password">Password:</label>
<input type="password" id="password" name="password" value="">
<br>

<button id="submit" type="submit">Log In</button>
</fieldsets>
</form>