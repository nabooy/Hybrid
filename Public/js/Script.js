$( document ).ajaxComplete(function() {
	var adminIsSet = $('#Admin').val();
	if(adminIsSet == undefined){
		$( ".admin" ).remove();
	}
});