var img = document.getElementById('Displayimg');
let next = document.querySelector('#nextimg');
let prev = document.querySelector('#previmg');

var tag = 2;

    
function nextimg() {
    console.log("next image");
    if (tag < 3) {
        console.log("value accept");
            tag += 1;
    } else {
        tag = 1;
    }
    setimg();
}
function previmg() {
    console.log("previous image");
    if (tag > 1) {
        console.log("value accept");
            tag -= 1;
    } else {
        tag = 3
    }
    setimg();
}
function setimg() {
    console.log("switching images");
    switch (tag) {
        case 1:
            img.src = '/Resources/Images/Gallery/Dubai/Burj-Khalfia.jpg';
            break;
        case 2:
            img.src = '/Resources/Images/Background/Destination-picture.jpg';
            break;
        case 3:
            img.src = '/Resources/Images/Gallery/Dubai/Burj-Khalifa.jpg';
            break;
        default:
            img.src = '/Resources/Background/Destination-picture.jpg';
            break;
    }
}