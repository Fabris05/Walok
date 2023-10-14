function validarLetras(e){
    var inputText=e.target.value;

    //Verificamos si se ingresan letras

    //[^a-zA-ZnÑ]: Conjunto negado donde se especifica el rango de letras
    if(/[^a-zA-ZnÑ ]/.test(inputText)){
        alert("Solo puedes ingresar letras");
        e.target.value=inputText.replace(/[^a-zA-ZnÑ]/g,'');
    }
}

function validarNumeros(e){
    var inputNum=e.target.value;

    if(isNaN(inputNum)){
        alert("Solo puedes ingresar números");

        e.target.value = inputNum.replace(/[^0-9]/g, '');
    }
}

function validarEmail(e){
    var inputText=e.target.value;

    //Verificamos si se ingresan letras

    //[^a-zA-ZnÑ]: Conjunto negado donde se especifica el rango de letras
    if(/[^a-zA-ZnÑ@.0-9]/.test(inputText)){
        alert("Solo puedes ingresar letras");
        e.target.value=inputText.replace(/[^a-zA-ZnÑ@.0-9]/g,'');
    }
}
