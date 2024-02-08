

const form_marcar_procedimento = document.getElementById('form_marcar_procedimento');


form_marcar_procedimento.addEventListener('submit',function(e){
    e.preventDefault();
    
    $.ajax({
        url: '/admin/store/procedimento/marcar',
        type: "post",
        data: $('#form_marcar_procedimento').serialize(),
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

