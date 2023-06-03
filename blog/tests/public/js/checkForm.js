
document.getElementById('kayitForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Formun otomatik gönderilmesini engeller

    var firstName = document.getElementById('kayitFirst').value;
    var lastName = document.getElementById('kayitLast').value;
    var email = document.getElementById('kayitEmail').value;
    var password = document.getElementById('kayitPass1').value;
    var confirmPassword = document.getElementById('kayitPass2').value;

    if (firstName === '') {
        alert('First Name alanı boş bırakılamaz.');
        return;
        
    }

    if (lastName === '') {
        alert('Last Name alanı boş bırakılamaz.');
        return;
        
    }

    if (email === '') {
        alert('Your Email alanı boş bırakılamaz.');
        return;
        
    }

    if (password === '') {
        alert('Password alanı boş bırakılamaz.');
        return;
        
    }

    if (confirmPassword === '') {
        alert('Repeat your password alanı boş bırakılamaz.');
        return;
        
    }

    if (password !== confirmPassword) {
        alert('Passwords do not match.');
        return;
    }else{
        var formData = new FormData(this);
        this.submit();
    }

});

document.getElementById('girisForm').addEventListener('submit', function (event) {
    event.preventDefault();

    var email = document.getElementById('girisEmail').value;
    var password = document.getElementById('girisPass').value;

    if (email === '') {
        alert('Your Email alanı boş bırakılamaz.');
        return;

    }

    if (password === '') {
        alert('Password alanı boş bırakılamaz.');
        return;

    }

        var formData = new FormData(this);
        this.submit();
    

});


