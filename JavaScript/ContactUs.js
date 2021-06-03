console.log('Start')

$(document).ready(function () {
    $('.submit').click(function(event) {
        event.preventDefault();
        console.log('send id clicked')
    })
})