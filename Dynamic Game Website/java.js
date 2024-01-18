function navigate() {
    var menu = document.getElementById("menu");
    var url = menu.options[menu.selectedIndex].value;
    location.href = url;

}
function myconfirm() {
    if (!confirm("Confirm delete!")) {
        event.preventDefault();
    }

}


