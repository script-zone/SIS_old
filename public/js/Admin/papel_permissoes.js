
const formPapelPermissoes = document.getElementById('formPapelPermissoes');


formPapelPermissoes.addEventListener('submit',function(e){
    e.preventDefault();

    const ids = [];

    const permissoes = document.getElementsByClassName('permissao');
    const nome = document.getElementById('name');

    for (const permissao of permissoes) {
        if(permissao.checked == true){
            ids.push(permissao.name);
        }
        
    }

    let parametros = `&permissoes=${ids}`;
    
    $.ajax({
        url: '/admin/store/papel_permissoes',
        type: "post",
        data: $('#formPapelPermissoes').serialize()+parametros,
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