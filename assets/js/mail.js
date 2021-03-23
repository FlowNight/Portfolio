function sendEmail(e) {
    let element = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        message: document.getElementById("message").value,
    };
    // console.log(element);
    emailjs.send('orange', 'portfolio', element)
        .then((result) => {
            alert("alert-success");
        }, (error) => {
            alert("alert-error");
        });
        document.querySelector(".contact__form").reset();
}