

const password = document.getElementById("password");
const re_password = document.getElementById("re_password");



password.addEventListener("change", (event) => {

    if(re_password.value == "" || password.value == ""){
        feedback.innerHTML = "";
        // formBtn.setAttribute("disabled", "disabled");
    }else if (password.value != re_password.value) {
        feedback.innerHTML = "Esta senha é diferente da primeira!!!";
        // formBtn.setAttribute("disabled", "disabled");
    }else {
        feedback.innerHTML = "Senhas Iguais";
        // formBtn.setAttribute("disabled", "enabled");
    }

});

re_password.addEventListener("change", (event) => {

    if(re_password.value == "" || password.value == "") {
        feedback.innerHTML = "";
        // formBtn.setAttribute("disabled", "disabled");
    }else if(re_password.value == password.value){
        feedback.innerHTML = "Senhas Iguais";
        // formBtn.setAttribute("disabled", "enabled");
    }else{
        feedback.innerHTML = "Esta senha é diferente da primeira!!!";
        // formBtn.setAttribute("disabled", "disabled");
    }

});

