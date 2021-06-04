console.log('Start')

$(document).ready(function () {
    $('.submit').click(function(event) {
        console.log('send id clicked')

        var email = $('.E-mail').val()
        var firstname = $('.First_Name').val()
        var lastname = $('.Last_Name').val()
        var message = $('.msg').val()
        var statusE = $('.status')
        statusE.empty()

        if( firstname.length >= 2) {
            statusE.append('<div>First name is valid</div>')
        } else {
            statusE.append('<div>First name is invalid</div>')
            event.preventDefault();
        }

        if( lastname.length >= 2) {
            statusE.append('<div>Last is valid</div>')
        } else {
            statusE.append('<div>Last name is invalid</div>')
            event.preventDefault();
        }

        if(email.length > 5 && email.includes('@') && email.includes('.')) {
            statusE.append('<div>Email is valid</div>')
        } else {
            statusE.append('<div>Email is invalid</div>')
            event.preventDefault();
        }
        
        if( message.length > 20) {
            statusE.append('<div>message is valid</div>')
        } else {
            statusE.append('<div>message is invalid</div>')
            event.preventDefault();
        }
    })
})