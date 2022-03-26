
function auth() {

    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var newloc = "Dashboard"

    if (email === "admin" && password === "admin" ) {
       window.location.href= newloc;
    } else {
        alert("Invalid Information");
        return;
    }
}

