var sidebar = document.querySelector('#side-bar');
var toggle = document.getElementsByClassName('toggle');
for (var i = 0; i <= toggle.length; i++) {
    toggle[i].addEventListener('click', function() {
        sidebar.classList.toggle('active');
    });
}

