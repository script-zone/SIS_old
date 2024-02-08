
const formPapelPermissoes = document.getElementById('formPapelPermissoes');


formPapelPermissoes.addEventListener('submit',function(e){
    e.preventDefault();

    const ids = [];

    const permissoes = document.getElementsByClassName('permissao');

    for (const permissao of permissoes) {
        if(permissao.checked == true){
            ids.push(permissao.name);
        }
        
    }

    let parametro = `&permissoes=${ids}`;
    
    $.ajax({
        url: '/admin/store/papel_permissoes',
        type: "post",
        data: $('#formPapelPermissoes').serialize()+parametro,
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