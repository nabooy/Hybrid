<script>
$("#LoginButtonClick").click(function(){
	UsernameVal = $("#LoginInputUsername").val();
	PasswordVal = $("#LoginInputPassword").val();
	go('Auth', 'Login', 'Index', 'Body', {Username:UsernameVal, Password:PasswordVal});
});	
</script>
<input id="LoginInputUsername" type="text" placeholder="Username">
<input id="LoginInputPassword" type="pass" placeholder="Password">
<button id="LoginButtonClick">Login</button>
<div id="ErrorBlock"></div>