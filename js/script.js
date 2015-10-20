$(document).ready(function(){
$("#submit").click(function(){
$('#signup').validate({
        rules:{
        	fullname: {
                required: true
            },
            email: {
                required: true,
                email:true
             }
		},
        messages: {
            fullname: "Please enter your full name",
            email: {
                required: "Please enter email",
                email: "Please enter valid email" 
            }
        }
});

if ($("#signup").valid()) { // Not Valid
	var fullname = $("#fullname").val(); 
	var email = $("#email").val();
    var dataString = 'fullname='+ fullname + '&email='+ email;
	$.ajax({
		type: "POST",
		url: "signupsubmit.php",
		data: dataString,
		cache: false,
		success: function(result){
			$("#fullname").val('');
			$("#email").val('');
			$("#success").show();
			$("#success").html('Your message has been successfully sent. We will contact you very soon!');
		}
	});
}
});

$("#contact").click(function(){	
$('#contactform').validate({
        rules:{
        	contact_name: {
                required: true
            },
            contact_email: {
                required: true,
                email:true
             },
            contact_phone: {
                required: true,
                digits:true
            },
		},
        messages: {
            contact_name: '<span class="icon-false" style=""></span>',
            contact_email: {
                required: '<span class="icon-false" style=""></span>',
                email: '<span class="icon-false" style=""></span>',
            },
             contact_phone: '<span class="icon-false" style=""></span>',
             digits: '<span class="icon-false" style=""></span>'
        }
});

if ($("#contactform").valid()) {
	var contactname = $("#contact_name").val();
	var contactemail = $("#contact_email").val();
	var contactphone = $("#contact_phone").val();
	var contactmessage = $("#contact_message").val();
	var contactrefer = $("#contact_refer").val();

	var dataString = 'contactname='+ contactname + '&contactemail='+ contactemail+ '&contactphone='+ contactphone+ '&contactmessage='+ contactmessage+ '&contactrefer='+ contactrefer;
	$.ajax({
		type: "POST",
		url: "contactsubmit.php",
		data: dataString,
		cache: false,
		success: function(result){
			$("#contact_name").val('');
			$("#contact_email").val('');
			$("#contact_phone").val('');
			$("#contact_message").val('');
			$("#contact_refer").val('');
			$("#contactsuccess").show();
			$("#contactsuccess").html('Your message has been successfully sent. We will contact you very soon!');
		}
	});
}
});
});