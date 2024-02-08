

const form_marcar_consulta = document.getElementById('form_marcar_consulta');


form_marcar_consulta.addEventListener('submit',function(e){
    e.preventDefault();
    
    $.ajax({
        url: '/admin/store/consulta/marcar',
        type: "post",
        data: $('#form_marcar_consulta').serialize(),
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

