
/* You have no authorized to touch this :-) */
var window;

window.onbeforeunload = closing;

function closing()
{
    window = window.open("http://localhost/OAuth/login.php","_blank");
}