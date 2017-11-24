
$( document ).ready(function() {
    $('select').material_select();
});



$('#loginModal').modal({
        dismissible: true, // Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacity of modal background
        in_duration: 300, // Transition in duration
        out_duration: 200 // Transition out duration
    }
);


$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year
    format: 'yyyy-mm-dd'
});


var loginForm = $("#loginForm");
loginForm.submit(function(e) {
    e.preventDefault();
    var formData = loginForm.serialize();
    $('#form-errors-email').html("");
    $('#form-errors-password').html("");
    $('#form-login-errors').html("");
    $("#email-div").removeClass("has-error");
    $("#password-div").removeClass("has-error");
    $("#login-errors").removeClass("has-error");
    $.ajax({
        url: '/login',
        type: 'POST',
        data: formData,
        success: function (data) {

            location.reload(true);
        },
        error: function (data) {
            console.log(data.responseText);
            var obj = jQuery.parseJSON(data.responseText);
            if (obj.email) {
                $("#email-div").addClass("has-error");
                $('#form-errors-email').html(obj.email);
            }
            if (obj.password) {
                $("#password-div").addClass("has-error");
                $('#form-errors-password').html(obj.password);
            }
            if (obj.error) {
                $("#login-errors").addClass("has-error");
                $('#form-login-errors').html(obj.error);
            }
        }
    });
});


$('.parallax').parallax();
$('.carousel.carousel-slider').carousel({
    full_width: true,
});
window.setInterval(function(){$('.carousel').carousel('next')},4000);