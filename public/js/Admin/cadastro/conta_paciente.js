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
const sobrenome = document.getElementById("sobrenome");
const telefone = document.getElementById("telefone");
const telefoneEmergencia = document.getElementById("telefoneEmergencia");
const dataNascimento = document.getElementById("dataNascimento");
const bi = document.getElementById("bi");
const morada = document.getElementById("morada");
const localidade = document.getElementById("localidade");
const codigoPostal = document.getElementById("codigoPostal");
const fileFoto = document.getElementById("fileFoto");
const addNote = document.getElementById("addNote");
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

form_store_full_paciente.addEventListener("submit", (e) => {
    e.preventDefault();

    if (!validarFormularioCadastroPaciente()) {
        alert("AAAAAAAAAAAAAAAA");
        return;
    }
    $.ajax({
        url: "/admin/store/paciente",
        type: "post",
        data: $("#form_store_full_paciente").serialize(),
        dataType: "json",
        success: function (data) {
            console.log(data);
            document.getElementById("nome").value = "";
            document.getElementById("sobrenome").value = "";
            document.getElementById("telefone").value = "";
            document.getElementById("telefoneEmergencia").value = "";
            document.getElementById("dataNascimento").value = "";
            document.getElementById("bi").value = "";
            document.getElementById("morada").value = "";
            document.getElementById("localidade").value = "";
            document.getElementById("codigoPostal").value = "";
            document.getElementById("fileFoto").value = "";
            document.getElementById("addNote").value = "";
            document.getElementById("email").value = "";
            document.getElementById("password").value = "";
            document.getElementById("re_password").value = "";
            document
                .getElementById("alerta-sucesso")
                .classList.remove("d-none");
            document.getElementById("alerta-sucesso").innerHTML =
                "Paciente cadastrado com sucesso...";
            document.getElementById("alerta-sucesso").classList.add("d-flex");
        },
        error: function (data) {
            document
                .getElementById("alerta-problema")
                .classList.remove("d-none");
            document.getElementById("alerta-problema").classList.add("d-flex");
            document.getElementById("conteudo-problema").innerHTML =
                "Falha ao cadastrar o Paciente...";
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

telefone.onkeyup = function () {
    if (!validaNumeroDeTelefone.test(telefone.value)) {
        setError(telefone, "telefoneAviso");
    } else {
        removeError(telefone, "telefoneAviso");
    }
};

telefoneEmergencia.onkeyup = function () {
    if (!validaNumeroDeTelefone.test(telefoneEmergencia.value)) {
        setError(telefoneEmergencia, "telefoneEmergenciaAviso");
    } else {
        removeError(telefoneEmergencia, "telefoneEmergenciaAviso");
    }
};

dataNascimento.onkeyup = function () {
    if (!verificarIdade(dataNascimento.value)) {
        setError(dataNascimento, "dataNascimentoAviso");
    } else {
        removeError(dataNascimento, "dataNascimentoAviso");
    }
};
bi.onkeyup = function () {
    if (!validaNumeroDoBIAngolano.test(bi.value)) {
        setError(bi, "biAviso");
    } else {
        removeError(bi, "biAviso");
    }
};
morada.onkeyup = function () {
    if (
        morada.value.length < 5 ||
        !validaTextoSemCaracteresEspeciais.test(morada.value)
    ) {
        setError(morada, "moradaAviso");
    } else {
        removeError(morada, "moradaAviso");
    }
};
localidade.onkeyup = function () {
    if (
        localidade.value.length < 5 ||
        !validaTextoSemCaracteresEspeciais.test(localidade.value)
    ) {
        setError(localidade, "localidadeAviso");
    } else {
        removeError(localidade, "localidadeAviso");
    }
};

codigoPostal.onkeyup = function () {
    if (
        codigoPostal.value.length < 7 ||
        !validaTextoSemCaracteresEspeciais.test(codigoPostal.value)
    ) {
        setError(codigoPostal, "codigoPostalAviso");
    } else {
        removeError(codigoPostal, "codigoPostalAviso");
    }
};

fileFoto.onkeyup = function () {
    if (!validaTextoSemCaracteresEspeciais.test(fileFoto.value)) {
        setError(fileFoto, "fileFotoAviso");
    } else {
        removeError(fileFoto, "fileFotoAviso");
    }
};
addNote.onkeyup = function () {
    if (!validaTextoSemCaracteresEspeciais.test(addNote.value)) {
        setError(addNote, "addNoteAviso");
    } else {
        removeError(addNote, "addNoteAviso");
    }
};

sobrenome.onkeyup = function () {
    if (
        sobrenome.value.length < 3 ||
        !validaTextoSemCaracteresEspeciais.test(sobrenome.value)
    ) {
        setError(sobrenome, "sobrenomeAviso");
    } else {
        removeError(sobrenome, "sobrenomeAviso");
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

// Função para validar o formulário
function validarFormularioCadastroPaciente() {
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

    // Validação do campo telefone
    if (!validaNumeroDeTelefone.test(telefone.value) || telefone.value == "") {
        setError(telefone, "telefoneAviso");
        return false;
    } else {
        removeError(telefone, "telefoneAviso");
    }

    // Validação do campo telefoneEmergencia
    if (
        telefoneEmergencia.value == "" ||
        !validaNumeroDeTelefone.test(telefoneEmergencia.value)
    ) {
        setError(telefoneEmergencia, "telefoneEmergenciaAviso");
        return false;
    } else {
        removeError(telefoneEmergencia, "telefoneEmergenciaAviso");
    }

    // Validação do campo dataNascimento
    if (dataNascimento.value == "" || !verificarIdade(dataNascimento.value)) {
        setError(dataNascimento, "dataNascimentoAviso");
        return false;
    } else {
        removeError(dataNascimento, "dataNascimentoAviso");
    }

    // Validação do campo bi
    if (bi.value == "" || !validaNumeroDoBIAngolano.test(bi.value)) {
        setError(bi, "biAviso");
        return false;
    } else {
        removeError(bi, "biAviso");
    }

    // Validação do campo morada
    if (
        morada.value == "" ||
        morada.value.length < 5 ||
        !validaTextoSemCaracteresEspeciais.test(morada.value)
    ) {
        setError(morada, "moradaAviso");
        return false;
    } else {
        removeError(morada, "moradaAviso");
    }

    // Validação do campo localidade
    if (
        localidade.value == "" ||
        localidade.value.length < 5 ||
        !validaTextoSemCaracteresEspeciais.test(localidade.value)
    ) {
        setError(localidade, "localidadeAviso");
        return false;
    } else {
        removeError(localidade, "localidadeAviso");
    }

    // Validação do campo codigoPostal
    if (
        codigoPostal.value == "" ||
        codigoPostal.value.length < 7 ||
        !validaTextoSemCaracteresEspeciais.test(codigoPostal.value)
    ) {
        setError(codigoPostal, "codigoPostalAviso");
        return false;
    } else {
        removeError(codigoPostal, "codigoPostalAviso");
    }

    // Validação do campo fileFoto (adicionado tipo file)
    if (fileFoto.value == "" || !fileFoto.value) {
        setError(fileFoto, "fileFotoAviso");
        return false;
    } else {
        removeError(fileFoto, "fileFotoAviso");
    }

    // Validação do campo addNote
    if (
        addNote.value == "" ||
        !validaTextoSemCaracteresEspeciais.test(addNote.value)
    ) {
        setError(addNote, "addNoteAviso");
        return false;
    } else {
        removeError(addNote, "addNoteAviso");
    }

    // Validação do campo email
    if (email.value == "" || !validaEmail.test(email.value)) {
        setError(email, "emailAviso");
        return false;
    } else {
        removeError(email, "emailAviso");
    }

    // Validação do campo password
    if (password.value == "" || password.value.length < 8) {
        setError(password, "passwordAviso");
        return false;
    } else {
        removeError(password, "passwordAviso");
    }

    // Validação do campo re_password
    if (
        re_password.value == "" ||
        re_password.value.length < 8 ||
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

function verificarIdade(dataNascimento) {
    // Dividir a string da data de nascimento em dia, mês e ano
    const partes = dataNascimento.split("/");
    const dia = parseInt(partes[0], 10);
    const mes = parseInt(partes[1], 10);
    const ano = parseInt(partes[2], 10);

    // Criar um objeto Date com a data de nascimento
    const dataNasc = new Date(ano, mes - 1, dia);

    // Calcular a idade atual
    const hoje = new Date();
    const idade = hoje.getFullYear() - dataNasc.getFullYear();

    // Verificar se a pessoa tem mais de 18 anos e menos de 90 anos
    if (idade >= 18 && idade < 90) {
        return true; // A pessoa está dentro da faixa etária desejada
    } else {
        return false; // A pessoa não está dentro da faixa etária desejada
    }
}
