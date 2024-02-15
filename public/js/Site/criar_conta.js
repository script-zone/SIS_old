const validaTextoSemCaracteresEspeciais =
    /^[a-zA-ZçÇãÃõÕíÍóÓâÂôÔáÁéÉ\s]+(\s[a-zA-ZçÇãÃõÕíÍóÓâÂôÔáÁéÉ\s]+)*$/;
const validaNumeroDoBIAngolano =
    /^[0-9]{9}(LA|BO|BA|BE|CA|CC|KN|KS|CE|HO|HA|LN|LS|ME|MO|NE|UE|ZE|OE|VP)[0-9]{3}$/;
const validaNumeroDeTelefone =
    /^([9]{1}[0-9]{8}|[222]{3}[0-9]{6}|\+244[9]{1}[0-9]{8}|\+244[222]{3}[0-9]{6})$/;
const validaEmail = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;

const form_store_full_paciente = document.getElementById(
    "form_store_full_paciente"
);

const nome = document.getElementById("nome");
const sobreNome = document.getElementById("sobreNome");
const email = document.getElementById("email");
const password = document.getElementById("password");
const re_password = document.getElementById("re_password");
const confirmo = document.getElementById("confirmo");
const form_store_full_paciente_site = document.getElementById("form_store_full_paciente_site");

function setError(inputId, spanAvisoIde) {
    inputId.classList.add("border-danger");
    document.getElementById(spanAvisoIde).classList.remove("d-none");
    document.getElementById(spanAvisoIde).classList.add("d-block");
}

function removeError(inputId, spanAvisoIde) {
    inputId.classList.remove("border-danger");
    document.getElementById(spanAvisoIde).classList.remove("d-block");
    document.getElementById(spanAvisoIde).classList.add("d-none");
}

form_store_full_paciente_site.addEventListener("submit", function (event) {
    event.preventDefault();

    if (!validarFormularioCadastroPacienteSite()) {
        alert(
            "Formulário Cadastro inválido. Corrija os erros antes de enviar."
        );
        return;
    }

    $.ajax({
        url: "/paciente/sign_up",
        type: "post",
        data: $("#form_store_full_paciente_site").serialize(),
        dataType: "json",
        success: function (data) {
            console.log(data);
            alert("A sua conta foi criada com sucesso, faça Login na Aplicaçao")
        },
        error: function (data) {
        },
        beforeSend: function () {},
        complete: function () {},
    });
});


nome.onkeyup = function () {
    if (
        nome.value.length < 3 ||
        !validaTextoSemCaracteresEspeciais.test(nome.value)
    ) {
        setError(nome, "nomeAviso");
    } else {
        removeError(nome, "nomeAviso");
    }
};

sobreNome.onkeyup = function () {
    if (
        sobreNome.value.length < 3 ||
        !validaTextoSemCaracteresEspeciais.test(sobreNome.value)
    ) {
        setError(sobreNome, "sobrenomeAviso");
    } else {
        removeError(sobreNome, "sobrenomeAviso");
    }
};

email.onkeyup = function () {
    if (!validaEmail.test(email.value)) {
        setError(email, "emailAviso");
    } else {
        removeError(email, "emailAviso");
    }
};
password.onkeyup = function () {
    if (password.value.length < 8) {
        setError(password, "passwordAviso");
    } else {
        removeError(password, "passwordAviso");
    }
};
re_password.onkeyup = function () {
    if (re_password.value.length < 8 || password.value != re_password.value) {
        setError(re_password, "re_passwordAviso");
    } else {
        removeError(re_password, "re_passwordAviso");
    }
};

function validarFormularioCadastroPacienteSite() {
    // Validação do campo nome
    if (
        nome.value.length < 3 ||
        nome.value == "" ||
        !validaTextoSemCaracteresEspeciais.test(nome.value)
    ) {
        setError(nome, "nomeAviso");
        return false;
    } else {
        removeError(nome, "nomeAviso");
    }

    if (
        !confirmo.value
    ) {
        confirmo.classList.add("border-danger");
        return false;
    } else {
        confirmo.classList.remove("border-danger");
    }

    // Validação do campo sobrenome
    if (
        sobreNome.value.length < 3 ||
        sobreNome.value == "" ||
        !validaTextoSemCaracteresEspeciais.test(sobreNome.value)
    ) {
        setError(sobreNome, "sobrenomeAviso");
        return false;
    } else {
        removeError(sobreNome, "sobrenomeAviso");
    }

    // Validação do campo email
    if (!validaEmail.test(email.value) || email.value == "") {
        setError(email, "emailAviso");
        return false;
    } else {
        removeError(email, "emailAviso");
    }

    // Validação do campo password
    if (password.value.length < 8 || password.value == "") {
        setError(password, "passwordAviso");
        return false;
    } else {
        removeError(password, "passwordAviso");
    }

    // Validação do campo re_password
    if (
        re_password.value.length < 8 ||
        password.value != re_password.value ||
        re_password.value == ""
    ) {
        setError(re_password, "re_passwordAviso");
        return false;
    } else {
        removeError(re_password, "re_passwordAviso");
    }

    // Se todas as condições de validação passarem, retorne true
    return true;
}
