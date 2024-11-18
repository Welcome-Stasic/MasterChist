
function showForm() {
    const formContainer = document.getElementById('formContainer');
    const formTemplate = document.getElementById('serviceFormTemplate');
    const formClone = formTemplate.content.cloneNode(true);
    formContainer.appendChild(formClone);

    const form = formContainer.querySelector('.serviceForm');
    form.addEventListener('click', (event) => {
        event.preventDefault();

        let isValid = true;

        const name = form.querySelector('#name').value.trim();
        if (!name) {
            form.querySelector('#nameError').textContent = "Пожалуйста, введите ваше имя.";
            isValid = false;
        } else {
            form.querySelector('#nameError').textContent = "";
        }

        const phone = form.querySelector('#phone').value.trim();
        const phoneRegex = /^[+]?\d{10,15}$/;
        if (!phone || !phoneRegex.test(phone)) {
            form.querySelector('#phoneError').textContent = "Пожалуйста, введите корректный номер телефона.";
            isValid = false;
        } else {
            form.querySelector('#phoneError').textContent = "";
        }

        const service = form.querySelector('#service').value;
        if (!service) {
            form.querySelector('#serviceError').textContent = "Пожалуйста, выберите услугу.";
            isValid = false;
        } else {
            form.querySelector('#serviceError').textContent = "";
        }

        const email = form.querySelector('#email').value.trim();
        const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!email || !emailRegex.test(email)) {
            form.querySelector('#emailError').textContent = "Пожалуйста, введите корректный email.";
            isValid = false;
        } else {
            form.querySelector('#emailError').textContent = "";
        }

        if (isValid) {
            alert("Ваш запрос отправлен успешно!");

            form.reset();
        }
    });
}
window.onload = showForm;
function validate() {
    let name = document.querySelector(".name")
    let tel = document.querySelector(".phone")
    let usluga = document.querySelector(".service")
    let email = document.querySelector(".email")
    var submit = document.querySelector(".submit");


    submit.addEventListener("click", (e) => {
        success()
        e.preventDefault()


        if (name.value == "" || tel.value == "" || usluga.value == "" || email.value == "") {
            inputempty();
        }


        else {
            sendemail()
            success();
            console.log("email sent")
        }

    })

}
validate()
function sendemail() {
    emailjs.send("service_ouy8aq4", "template_s2cz87r", {
        to_name: "Мастер Чист",
        from_name: "Клиент",
        reply_to: "",
    });
}

function success() {
    swal({
        title: "Отлично!",
        text: "В ближайшее время с вами свжуться!",
        icon: "success",
        button: "Закрыть",
    });
}

function error() {
    swal({
        title: "Ошибка!",
        text: "Попробуйте ещё раз",
        icon: "error",
        button: "Закрыть",
    });
}

function inputempty() {
    swal({
        title: "О нет!",
        text: "Вы не указали все данные",
        icon: "error",
        button: "Закрыть",
    });
}
const sendEmail = () => {
    window.emailjs.sendForm(
        'service_ouy8aq4',
        'template_s2cz87r',
        '#contact-form',
        '6ly8F3tTDCKSfbSSE'
    )
        .then(() => {
            success();
        })
        .catch((error) => {
            error();
        });
};
