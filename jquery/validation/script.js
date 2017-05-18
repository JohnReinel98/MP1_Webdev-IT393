$(document).ready(function(){
  $('#fields form').validate({
    rules: {
      txtLname: {
        required: true,
      },
	     txtFname: {
        required: true,
      },
	     txtMI: {
        required: true,
      },
	     txtContact: {
		minlength: 11,
        number: true,
		required: true,
      },
	     txtAddress: {
        required: true,
      },
      txtEmail: {
        required: true,
        email: true
      },
      txtUsername: {
		minlength: 6,
        required: true,
      },
	  
      txtPassword: {
        minlength: 6,
        required: true
      },
      txtConfPassword: {
        equalTo: "#txtPassword"
      }
    },
    success: function(label) {
      label.text('OK!').addClass('valid');
    }
  });
});

