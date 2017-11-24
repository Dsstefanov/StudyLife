$('.button-collapse').sideNav({
        menuWidth: 200,
        closeOnClick: true,
        draggable: true
    }
);
$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
});
