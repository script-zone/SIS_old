const validaTextoSemCaracteresEspeciais =
    /^[a-zA-ZçÇãÃõÕíÍóÓâÂôÔáÁéÉ\s]+(\s[a-zA-ZçÇãÃõÕíÍóÓâÂôÔáÁéÉ\s]+)*$/;

const formPapelPermissoes = document.getElementById("formPapelPermissoes");
const nomePapel = document.getElementById("nomePapel");

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

formPapelPermissoes.addEventListener("submit", function (e) {
    e.preventDefault();

    // Adicione a verificação das condições de validação antes de enviar o formulário
    if (!validarFormularioAddPapelPermissoes()) {
        // Se a validação falhar, não envie o formulário
        alert(
            "Formulário de Papel e Permissões inválido. Corrija os erros antes de enviar."
        );
        return;
    }

    const ids = [];

    const permissoes = document.getElementsByClassName("permissao");

    for (const permissao of permissoes) {
        if (permissao.checked == true) {
            ids.push(permissao.name);
        }
    }

    let parametro = `&permissoes=${ids}`;

    $.ajax({
        url: "/admin/store/papel_permissoes",
        type: "post",
        data: $("#formPapelPermissoes").serialize() + parametro,
        dataType: "json",
        success: function (data) {
            console.log(data);
            document.getElementById("nomePapel").value = "";
            document
                .getElementById("alerta-sucesso")
                .classList.remove("d-none");
            document.getElementById("alerta-sucesso").innerHTML =
                "Papel e as suas Permissões foram adicionados com sucesso...";
            document.getElementById("alerta-sucesso").classList.add("d-flex");
        },
        error: function (data) {
            document
                .getElementById("alerta-problema")
                .classList.remove("d-none");
            document.getElementById("alerta-problema").classList.add("d-flex");
            document.getElementById("conteudo-problema").innerHTML =
                "Falha ao adicionar Papeis e suas Permissões...";
        },
        beforeSend: function () {},
        complete: function () {},
    });
});

nomePapel.onkeyup = () => {
    if (
        nomePapel.value.length < 5 ||
        !validaTextoSemCaracteresEspeciais.test(nomePapel.value)
    ) {
        setError(nomePapel, "nomeAviso");
    } else {
        removeError(nomePapel, "nomeAviso");
    }
};

// Função para validar o formulário de Papel e Permissões
function validarFormularioAddPapelPermissoes() {
    // Validação do campo nomePapel
    if (
        nomePapel.value == "" ||
        nomePapel.value.length < 5 ||
        !validaTextoSemCaracteresEspeciais.test(nomePapel.value)
    ) {
        setError(nomePapel, "nomeAviso");
        return false;
    } else {
        removeError(nomePapel, "nomeAviso");
    }

    return true;
}
