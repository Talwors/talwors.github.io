$("#sendMail").on("click", function() {

	var name = $("#name").val().trim();
	var phone = $("#phone").val().trim();
	var message = $("#message").val().trim();
	var formData = $('input[type=checkbox]:checked').serialize();
   console.log('Posting the following: ', formData);

	$("#errorMess").text("");

	$.ajax({
		url: 'ajax/mail.php',
		type: 'POST',
		cache: false,
		data: { 'name': name, 'phone': phone, 'message': message, 'formData': formData},
		dataType: 'html',
		beforeSend: function(){
			$("#sendMail").prop("disabled", true);
		},
		success: function(data){

		$("#sendMail").prop("disabled", false);
		$("#formPlace").text("<span>Спасибо, ваш отзыв очень важен для нас!:)</span>");
		}
		error: function(data){
		$("#errorMess").text("Произошла ошибка, повторите попытку!");
		}
	});

});