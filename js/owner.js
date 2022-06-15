$(document).ready(function(){

  $('.input').focus(function(){
    $(this).parent().find(".label-txt").addClass('label-active');
  });

  $(".input").focusout(function(){
    if ($(this).val() == '') {
      $(this).parent().find(".label-txt").removeClass('label-active');
    };
  });

});


$(document).ready(function() {
$('#sub').click(function(e) {
// Initializing Variables With Form Element Values
var name = $('#name').val();
var addr = $('#address').val();
var username = $('#userid').val();
var email = $('#owemail').val();
// Initializing Variables With Regular Expressions
var name_regex = /^[a-zA-Z]+$/;
var email_regex = /^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
var add_regex = /^[0-9a-zA-Z]+$/;

// To Check Empty Form Fields.
if (name.length == 0) 
{
$('#head').text("* All fields are mandatory *"); // This Segment Displays The Validation Rule For All Fields
$("#name").focus();
return false;
}
// Validating Name Field.
else if (!name.match(name_regex) || name.length == 0) 
{
$('#p1').text("* For your name please use alphabets only *"); // This Segment Displays The Validation Rule For Name
$("#name").focus();
return false;
}
// Validating Username Field.
else if (!(username.length >= 6 && username.length <= 8) || username.length == 0)
 {
$('#p2').text("* Please enter between 6 and 8 characters *"); // This Segment Displays The Validation Rule For Username
$("#userid").focus();
return false;
}
// Validating Email Field.
else if (!email.match(email_regex) || email.length == 0) 
{
$('#p3').text("* Please enter a valid email address *"); // This Segment Displays The Validation Rule For Email
$("#owemail").focus();
return false;
}

// Validating Address Field.
else if (!addr.match(add_regex) || addr.length == 0)
 {
$('#p5').text("* For Address please use numbers and letters *"); // This Segment Displays The Validation Rule For Address
$("#address").focus();
return false;
}

else
 {
alert("Form updated Successfuly!");
return true;
}
});
});







