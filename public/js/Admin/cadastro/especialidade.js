const validaTextoSemCaracteresEspeciais =
    /^[a-zA-ZçÇãÃõÕíÍóÓâÂôÔáÁéÉ\s]+(\s[a-zA-ZçÇãÃõÕíÍóÓâÂôÔáÁéÉ\s]+)*$/;

const nome_Especialidade = document.getElementById("nome");
const descricao_Especialidade = document.getElementById("descricao");

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

form_store_full_especialidade = document.getElementById(
    "form_store_full_especialidade"
);

form_store_full_especialidade.addEventListener("submit", function (e) {
    e.preventDefault();

    if (!validarFormularioCadastroEspecialidade()) {
        alert("AAAAAAAAAAAAAAAA");
        return;
    }

    $.ajax({
        url: "/admin/store/especialidade",
        type: "post",
        data: $("#form_store_full_especialidade").serialize(),
        dataType: "json",
        success: function (data) {
            console.log(data);
            document.getElementById("nome").value = "";
            document.getElementById("descricao").value = "";
            document
                .getElementById("alerta-sucesso")
                .classList.remove("d-none");
            document.getElementById("alerta-sucesso").innerHTML =
                "Especialidade cadastrado com sucesso...";
            document.getElementById("alerta-sucesso").classList.add("d-flex");
        },
        error: function (data) {
            console.log(data);
            document
                .getElementById("alerta-problema")
                .classList.remove("d-none");
            document.getElementById("alerta-problema").classList.add("d-flex");
            document.getElementById("conteudo-problema").innerHTML =
                "Falha ao cadastrar a Especialidade...";
        },
        beforeSend: function () {},
        complete: function () {
            console.log(data);
        },
    });
});

nome_Especialidade.onkeyup = function () {
    if (
        nome_Especialidade.value.length < 5 ||
        !validaTextoSemCaracteresEspeciais.test(nome_Especialidade.value)
    ) {
        setError(nome_Especialidade, "nomeAviso");
    } else {
        removeError(nome_Especialidade, "nomeAviso");
    }
};

descricao_Especialidade.onkeyup = function () {
    if (
        descricao_Especialidade.value.length < 5 ||
        !validaTextoSemCaracteresEspeciais.test(descricao_Especialidade.value)
    ) {
        setError(descricao_Especialidade, "descricaoAviso");
    } else {
        removeError(descricao_Especialidade, "descricaoAviso");
    }
};

// Função para validar o formulário de especialidade
function validarFormularioCadastroEspecialidade() {
    // Validação do campo nome_Especialidade
    if (
        nome_Especialidade.value == "" ||
        nome_Especialidade.value.length < 5 ||
        !validaTextoSemCaracteresEspeciais.test(nome_Especialidade.value)
    ) {
        setError(nome_Especialidade, "nomeAviso");
        return false;
    } else {
        removeError(nome_Especialidade, "nomeAviso");
    }

    // Validação do campo descricao_Especialidade
    if (
        descricao_Especialidade.value == "" ||
        descricao_Especialidade.value.length < 5 ||
        !validaTextoSemCaracteresEspeciais.test(descricao_Especialidade.value)
    ) {
        setError(descricao_Especialidade, "descricaoAviso");
        return false;
    } else {
        removeError(descricao_Especialidade, "descricaoAviso");
    }

    return true;
}
