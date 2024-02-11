


form_store_full_exame = document.getElementById(
    "form_store_full_exame"
);

form_store_full_exame.addEventListener("submit", function (e) {
    e.preventDefault();

    $.ajax({
        url: "/admin/store/exame_especialidade",
        type: "post",
        data: $("#form_store_full_exame").serialize(),
        dataType: "json",
        success: function (data) {
            console.log(data);
        },
        error: function (data) {
        },
        beforeSend: function () {
            
        },
        complete: function () {

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
