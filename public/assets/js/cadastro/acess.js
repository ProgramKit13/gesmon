$(function(){
    $("#cadastrar").on("click", function(e){
        e.preventDefault();
    
        var inNome = $("#nome").val();
        var inSobrenome = $("#sobrenome").val();
        var inEmail = $("#email").val();
        var inData = $("#data").val();
        var inPass = $("#password").val();
        var inCpf = $("#cpf").val();


        $.ajax({
            url:"server/cadastro.php",
            type: "POST",
            data: {
                nome: inNome,
                sobrenome: inSobrenome,
                email: inEmail,
                data: inData,
                password: inPass,
                cpf: inCpf
            },
                success: function(retorno) {
                    retorno = JSON.parse(retorno);
                    if(retorno.send == true) {
                        window.location = 'index.php';
                    } else {
                        console.log('error');
                    }
                }
        })
    });
});


$(function(){
    $("#logar").on("click", function(e){
        e.preventDefault();
    
        var inEmail = $("#email").val();
        var inPass = $("#password").val();


        $.ajax({
            url:"server/login.php",
            type: "POST",
            data: {
                email: inEmail,
                password: inPass,
            },
                success: function(retorno) {
                    retorno = JSON.parse(retorno);
                    if(retorno.send == true) {
                        window.location = 'index.php';
                    } else {
                        console.log('error');
                    }
                }
        })
    });
});

