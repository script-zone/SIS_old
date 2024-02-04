
const form_store_full_admin = document.getElementById('form_store_full_admin');

form_store_full_admin.addEventListener('submit',function(event){
    event.preventDefault();

    $.ajax({
        url: "/admin/store/user_admin",
        type: "post",
        data: $("#form_store_full_admin").serialize(),
        dataType: "json",
        success: function(data) {
            console.log(data);
        },
        error: function(data) {

        },
        beforeSend: function() {
            
        },
        complete: function() {

        },
    });
});