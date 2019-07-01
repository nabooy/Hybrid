function go(PluginName, MethodName, File, back, DateMassive){
	$.ajax({
		method:'POST',
		url: "ajax.php",
		data:{
			PluginName:PluginName,
			FileName:File,
			Method:MethodName,
			DataResult:JSON.stringify(DateMassive)
		},
		success: function(result){
			$(back).html(result);
		}
	});
}