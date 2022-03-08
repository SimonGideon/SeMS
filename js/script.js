var sidebar = document.querySelector('#side-bar');
var toggle = document.getElementsByClassName('toggle');
for (var i = 0; i <= toggle.length; i++) {
    toggle[i].addEventListener('click', function() {
        sidebar.classList.toggle('active');
    });
}
$(document).ready(function() {
    swal({
        title: "User created!",
        text: "Suceess message sent!!",
        icon: "success",
        button: "Ok",
        timer: 2000
    });
});