const validaTextoSemCaracteresEspeciais =
    /^[a-zA-ZçÇãÃõÕíÍóÓâÂôÔáÁéÉ\s]+(\s[a-zA-ZçÇãÃõÕíÍóÓâÂôÔáÁéÉ\s]+)*$/;

const nome_Exame = document.getElementById("nome");
const descricao_Exame = document.getElementById("descricao");

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

form_store_full_exame = document.getElementById("form_store_full_exame");

form_store_full_exame.addEventListener("submit", function (e) {
    e.preventDefault();

    if (!validarFormularioCadastroTipoExame()) {
        alert(
            "Formulário Cadastro inválido. Corrija os erros antes de enviar."
        );
        return;
    }

    $.ajax({
        url: "/admin/store/exame_especialidade",
        type: "post",
        data: $("#form_store_full_exame").serialize(),
        dataType: "json",
        success: function (data) {
            console.log(data);
            document.getElementById("nome").value = "";
            document.getElementById("descricao").value = "";
            document
                .getElementById("alerta-sucesso")
                .classList.remove("d-none");
            document.getElementById("alerta-sucesso").innerHTML =
                "Tipo de Exame cadastrado com sucesso...";
            document.getElementById("alerta-sucesso").classList.add("d-flex");
        },
        error: function (data) {
            console.log(data);
            document
                .getElementById("alerta-problema")
                .classList.remove("d-none");
            document.getElementById("alerta-problema").classList.add("d-flex");
            document.getElementById("conteudo-problema").innerHTML =
                "Falha ao cadastrar o Tipo de Exame...";
        },
        beforeSend: function () {},
        complete: function () {},
    });
});

nome_Exame.onkeyup = function () {
    if (
        nome_Exame.value.length < 5 ||
        !validaTextoSemCaracteresEspeciais.test(nome_Exame.value)
    ) {
        setError(nome_Exame, "nomeAviso");
    } else {
        removeError(nome_Exame, "nomeAviso");
    }
};

descricao_Exame.onkeyup = function () {
    if (
        descricao_Exame.value.length < 5 ||
        !validaTextoSemCaracteresEspeciais.test(descricao_Exame.value)
    ) {
        setError(descricao_Exame, "descricaoAviso");
    } else {
        removeError(descricao_Exame, "descricaoAviso");
    }
};

// Função para validar o formulário de especialidade
function validarFormularioCadastroTipoExame() {
    // Validação do campo nome_Especialidade
    if (
        nome_Exame.value == "" ||
        nome_Exame.value.length < 5 ||
        !validaTextoSemCaracteresEspeciais.test(nome_Exame.value)
    ) {
        setError(nome_Exame, "nomeAviso");
        return false;
    } else {
        removeError(nome_Exame, "nomeAviso");
    }

    // Validação do campo descricao_Especialidade
    if (
        descricao_Exame.value == "" ||
        descricao_Exame.value.length < 5 ||
        !validaTextoSemCaracteresEspeciais.test(descricao_Exame.value)
    ) {
        setError(descricao_Exame, "descricaoAviso");
        return false;
    } else {
        removeError(descricao_Exame, "descricaoAviso");
    }

    return true;
}
