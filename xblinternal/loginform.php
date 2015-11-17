<!Doctype HTML>
<form name = "login-form" id = "login-from" method = "post" action = "<?php echo $PHP_SELF; ?>">
	<fieldset>
		<dl>
			<dt>
				<label title = "Username"> Username:
					<input tabindex = "1" accesskey = "u" name "username" type = "text" maxlengh = "50" id = "username" />
				</label>
			</dt>
		</dl>
		<dl>
			<dt>
				<label title = "Password"> Password:
					<input tabindex = "2" accesskey = "p" name = "password" maxlength = "15" id = "password" />
				</label>
			</dt>
		</dl>
		<dl>
			<dt>
				<label title = "Submit">
					<input tabindex = "3" accesskey = "1" type = "submit" name = "cmdlogin" value = "Login" />
				</label>
			</dt>
		</dl>
	</fieldset>
</form>