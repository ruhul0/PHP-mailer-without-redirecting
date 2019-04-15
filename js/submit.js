function SubmitFormData() {
	var name = $("#name").val();
	var email = $("#email").val();
		$.post("submit.php", { name: name, email: email },
		function(data) {
		  $('#results').html(data);
		  $('#myForm')[0].reset();
		});
	
}

