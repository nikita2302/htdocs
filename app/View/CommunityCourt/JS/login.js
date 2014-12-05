/*function getCredentials()
{

	var user = document.getElementById("uname").value;
	var pass = document.getElementById("pwd").value;
	
	console.log(user);
	console.log(pass);

}*/
	
	
	
	/*Query(document).ready(function($) {
	var $loading = $('<div class="loading"><img src="/media/images/loading.gif" alt="" /></div>');
	$(".default").each(function(){
		var defaultVal = $(this).attr('title');
		$(this).focus(function(){
			if ($(this).val() == defaultVal){
				$(this).removeClass('active').val('');
			}
		});
		$(this).blur(function() {
			if ($(this).val() == ''){
				$(this).addClass('active').val(defaultVal);
			}
		})
		.blur().addClass('active');
	});
	$('.btn-submit').click(function(e){
		var $formId = $(this).parents('form');
		var formAction = $formId.attr('action');
		defaulttextRemove();
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		$('li',$formId).removeClass('error');
		$('span.error').remove();
		$('.required',$formId).each(function(){
			var inputVal = $(this).val();
			var $parentTag = $(this).parent();
			if(inputVal == ''){
				$parentTag.addClass('error').append('<span class="error">Required field</span>');
			}
			if($(this).hasClass('email') == true){
				if(!emailReg.test(inputVal)){
					$parentTag.addClass('error').append('<span class="error">Enter a valid email address.</span>');
				}
			}
		});
		if ($('span.error').length == "0") {
			$formId.append($loading.clone());
			$('fieldset',$formId).hide();
			$.post(formAction, $formId.serialize(),function(data){
				$('.loading').remove();
				$formId.append(data).fadeIn();
			});
		}
		e.preventDefault();
	});
});

function defaulttextRemove(){
	$('.default').each(function(){
		var defaultVal = $(this).attr('title');
		if ($(this).val() == defaultVal){
			$(this).val('');
		}
	}); */
	
	

jQuery(function(){
  $("#trybutton").click(function(){
    alert("Value: " + $("#uname").val());
  });
});