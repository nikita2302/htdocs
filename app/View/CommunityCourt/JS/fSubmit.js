$(function(){
	$("#submit").click( function () {
		console.log("hiii");
		var name = $("#fName").val();
		console.log(name);
		$.ajax({
			url: 'js/save.php',
			type: 'post',
			data: {
					name: name
			   	  },
			dataType: 'json',
		})  
		.done(function () {
			console.log("done");
		});
	});
});