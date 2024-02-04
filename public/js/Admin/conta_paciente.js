
const form_store_full_paciente = document.getElementById('form_store_full_paciente');

form_store_full_paciente.addEventListener('submit',function(e){
    e.preventDefault();
    
    $.ajax({
        url: "/admin/store/paciente",
        type: "post",
        data: $("#form_store_full_paciente").serialize(),
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