const form_marcar_exame = document.getElementById("form_marcar_exame");

form_marcar_exame.addEventListener("submit", function (e) {
    e.preventDefault();

    $.ajax({
        url: "/admin/store/exame/marcar",
        type: "post",
        data: $("#form_marcar_exame").serialize(),
        dataType: "json",
        success: function (data) {
            console.log(data);
        },
        error: function (data) {},
        beforeSend: function () {},
        complete: function () {},
    });
});
