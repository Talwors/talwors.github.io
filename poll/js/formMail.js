$("#sendMail").on("click", function() {

	var name = $("#name").val();
	var phone = $("#phone").val();
	var message = $("#message").val();
	var formData = $('input[type=checkbox]:checked').serialize();
   console.log('Posting the following: ', formData);

	if(name ==""){
		$("#errorMess").text("Введите имя");
		return false;
	}
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
		alert(data);
		}
	});

});