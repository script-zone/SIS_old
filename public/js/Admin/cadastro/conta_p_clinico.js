const validaTextoSemCaracteresEspeciais =
    /^[a-zA-ZçÇãÃõÕíÍóÓâÂôÔáÁéÉ\s]+(\s[a-zA-ZçÇãÃõÕíÍóÓâÂôÔáÁéÉ\s]+)*$/;
const validaNumeroDoBIAngolano =
    /^[0-9]{9}(LA|BO|BA|BE|CA|CC|KN|KS|CE|HO|HA|LN|LS|ME|MO|NE|UE|ZE|OE|VP)[0-9]{3}$/;
const validaNumeroDeTelefone =
    /^([9]{1}[0-9]{8}|[222]{3}[0-9]{6}|\+244[9]{1}[0-9]{8}|\+244[222]{3}[0-9]{6})$/;
const validaEmail = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;

const nome = document.getElementById("nome");
const sobrenome = document.getElementById("sobrenome");
const bi = document.getElementById("bi");
const crm = document.getElementById("CRM");
const email = document.getElementById("email");
const password = document.getElementById("password");
const re_password = document.getElementById("re_password");

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

const form_store_full_p_clinico = document.getElementById(
    "form_store_full_p_clinico"
);

form_store_full_p_clinico.addEventListener("submit", function (e) {
    e.preventDefault();

    if (!validarFormularioCadastroPessoalClinica()) {
        alert("AAAAAAAAAAAAAAAA");
        return;
    }

    const ids = [];

    const dias = document.getElementsByClassName("dia");

    for (const dia of dias) {
        if (dia.checked == true) {
            console.log(dia.name);
            ids.push(dia.name);
        }
    }

    let parametro = `&dias=${ids}`;

    $.ajax({
        url: "/admin/store/p_clinic",
        type: "post",
        data: $("#form_store_full_p_clinico").serialize() + parametro,
        dataType: "json",
        success: function (data) {
            console.log(data);
            document.getElementById("nome").value = "";
            document.getElementById("sobrenome").value = "";
            document.getElementById("bi").value = "";
            document.getElementById("CRM").value = "";
            document.getElementById("email").value = "";
            document.getElementById("password").value = "";
            document.getElementById("re_password").value = "";
            document
                .getElementById("alerta-sucesso")
                .classList.remove("d-none");
            document.getElementById("alerta-sucesso").innerHTML =
                "Doctor cadastrado com sucesso...";
            document.getElementById("alerta-sucesso").classList.add("d-flex");
        },
        error: function (data) {
            document.getElementById("nome").value = "";
            document.getElementById("sobrenome").value = "";
            document.getElementById("bi").value = "";
            document.getElementById("CRM").value = "";
            document.getElementById("email").value = "";
            document.getElementById("password").value = "";
            document.getElementById("re_password").value = "";
            document
                .getElementById("alerta-sucesso")
                .classList.remove("d-none");
            document.getElementById("alerta-sucesso").innerHTML =
                "Falha ao cadastrar a Especialidade...";
            document.getElementById("alerta-sucesso").classList.add("d-flex");
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

sobrenome.onkeyup = function () {
    if (
        sobrenome.value.length < 3 ||
        !validaTextoSemCaracteresEspeciais.test(sobrenome.value)
    ) {
        setError(sobrenome, "sobreNomeAviso");
    } else {
        removeError(sobrenome, "sobreNomeAviso");
    }
};

bi.onkeyup = function () {
    if (bi.value.length < 3 || !validaNumeroDoBIAngolano.test(bi.value)) {
        setError(bi, "biAviso");
    } else {
        removeError(bi, "biAviso");
    }
};

crm.onkeyup = function () {
    if (
        crm.value.length < 3 ||
        !validaTextoSemCaracteresEspeciais.test(crm.value)
    ) {
        setError(crm, "CRMAviso");
    } else {
        removeError(crm, "CRMAviso");
    }
};

email.onkeyup = function () {
    if (email.value.length < 3 || !validaEmail.test(email.value)) {
        setError(email, "CRMAviso");
    } else {
        removeError(email, "CRMAviso");
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

// Função para validar o formulário
function validarFormularioCadastroPessoalClinica() {
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

    // Validação do campo sobrenome
    if (
        sobrenome.value.length < 3 ||
        sobrenome.value == "" ||
        !validaTextoSemCaracteresEspeciais.test(sobrenome.value)
    ) {
        setError(sobrenome, "sobrenomeAviso");
        return false;
    } else {
        removeError(sobrenome, "sobrenomeAviso");
    }

    if (
        crm.value.length < 3 ||
        crm.value == "" ||
        !validaTextoSemCaracteresEspeciais.test(crm.value)
    ) {
        setError(crm, "CRMAviso");
    } else {
        removeError(crm, "CRMAviso");
    }

    // Validação do campo bi
    if (!validaNumeroDoBIAngolano.test(bi.value) || bi.value == "") {
        setError(bi, "biAviso");
        return false;
    } else {
        removeError(bi, "biAviso");
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
        re_password.value == "" ||
        password.value != re_password.value
    ) {
        setError(re_password, "re_passwordAviso");
        return false;
    } else {
        removeError(re_password, "re_passwordAviso");
    }

    // Se todas as condições de validação passarem, retorne true
    return true;
}
