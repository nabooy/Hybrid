$("#LoginButtonClick").click(function(){
	UsernameVal = $("#LoginInputUsername").val();
	PasswordVal = $("#LoginInputPassword").val();
	navigator.geolocation.getCurrentPosition(showPosition);
	function showPosition(position) {
		//go('Auth', 'Login', 'Index', 'Body', {Username:UsernameVal, Password:PasswordVal});
		//go('Auth', 'Geolocation', 'Index', '', {lat:UsernameVal, lon:PasswordVal});
	}
});