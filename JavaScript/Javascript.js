
// Activates the function for Nav bar
function myFunction() {
    var x = document.getElementById("nav");
    
    if (x.className == "container") {
        x.className += " res";
    }
    else {
        x.className = "container";
    }
}