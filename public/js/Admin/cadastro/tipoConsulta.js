const validaTextoSemCaracteresEspeciais =
    /^[a-zA-ZçÇãÃõÕíÍóÓâÂôÔáÁéÉ\s'\-]+( [a-zA-ZçÇãÃõÕíÍóÓâÂôÔáÁéÉ\s'\-]+)*$/;

const nome_Consulta = document.getElementById("nome");
const descricao_Consulta = document.getElementById("descricao");

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

form_store_full_consulta = document.getElementById("form_store_full_consulta");

form_store_full_consulta.addEventListener("submit", function (e) {
    e.preventDefault();

    $.ajax({
        url: "/admin/store/consulta_especialidade",
        type: "post",
        data: $("#form_store_full_consulta").serialize(),
        dataType: "json",
        success: function (data) {
            console.log(data);
            document.getElementById("nome").value = "";
            document.getElementById("descricao").value = "";
            document
                .getElementById("alerta-sucesso")
                .classList.remove("d-none");
            document.getElementById("alerta-sucesso").innerHTML =
                "Tipo de Consulta cadastrado com sucesso...";
            document.getElementById("alerta-sucesso").classList.add("d-flex");
        },
        error: function (data) {
            console.log(data);
            document
                .getElementById("alerta-problema")
                .classList.remove("d-none");
            document.getElementById("alerta-problema").classList.add("d-flex");
            document.getElementById("conteudo-problema").innerHTML =
                "Falha ao cadastrar o Tipo de Consulta...";
        },
        beforeSend: function () {},
        complete: function () {},
    });
});

nome_Consulta.onkeyup = function () {
    if (
        nome_Consulta.value.length < 5 ||
        !validaTextoSemCaracteresEspeciais.test(nome_Consulta.value)
    ) {
        setError(nome_Consulta, "nomeAviso");
    } else {
        removeError(nome_Consulta, "nomeAviso");
    }
};

descricao_Consulta.onkeyup = function () {
    if (
        descricao_Consulta.value.length < 5 ||
        !validaTextoSemCaracteresEspeciais.test(descricao_Consulta.value)
    ) {
        setError(descricao_Consulta, "descricaoAviso");
    } else {
        removeError(descricao_Consulta, "descricaoAviso");
    }
};

// Função para validar o formulário de especialidade
function validarFormularioCadastroTipoConsulta() {
    // Validação do campo nome_Consulta
    if (
        nome_Consulta.value.length < 5 ||
        !validaTextoSemCaracteresEspeciais.test(nome_Consulta.value)
    ) {
        setError(nome_Consulta, "nomeAviso");
        return false;
    } else {
        removeError(nome_Consulta, "nomeAviso");
    }

    // Validação do campo descricao_Consulta
    if (
        descricao_Consulta.value.length < 5 ||
        !validaTextoSemCaracteresEspeciais.test(descricao_Consulta.value)
    ) {
        setError(descricao_Consulta, "descricaoAviso");
        return false;
    } else {
        removeError(descricao_Consulta, "descricaoAviso");
    }

    return true;
}
