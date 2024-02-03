
form_store_full_especialidade = document.getElementById('form_store_full_especialidade');

form_store_full_especialidade.addEventListener('submit',function(e){
    e.preventDefault();
    // if(document.getElementById('search').value == "")return;
    console.log($("#form_store_full_especialidade").serialize());
    $.ajax({
        url: "/admin/store/especialidade",
        type: "post",
        data: $("#form_store_full_especialidade").serialize(),
        dataType: "json",
        success: function(data) {
            console.log(data);
        },
        error: function(data) {

        },
        beforeSend: function() {
            
        },
        complete: function() {

        }
    , });
});