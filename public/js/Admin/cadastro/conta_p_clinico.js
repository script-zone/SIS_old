

const form_store_full_p_clinico = document.getElementById('form_store_full_p_clinico');


form_store_full_p_clinico.addEventListener('submit',function(e){
    e.preventDefault();

    const ids = [];

    const dias = document.getElementsByClassName('dia');

    for (const dia of dias) {
        if(dia.checked == true){
            console.log(dia.name);
            ids.push(dia.name);
        }
        
    }

    let parametro = `&dias=${ids}`;
    
    $.ajax({
        url: '/admin/store/p_clinic',
        type: "post",
        data: $('#form_store_full_p_clinico').serialize()+parametro,
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

