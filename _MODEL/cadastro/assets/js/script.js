    $(document).ready(function(){
        $('#application-form').validate({
            rules:{
                nome:{
                        required: true,
                        lettersonly: true,
                        minlength: 3,
                        maxlength: 100
                },
                sobrenome:{
                        required: true,
                        lettersonly: true,
                        minlength: 3,
                        maxlength: 100
                },
                email:{
                        required: true,
                        email: true
                },
                email2:{
                        required: true,
                        equalTo: '#email'
                },
                nascimento: {
                    required: true,
                    date: true
                },
                password: {
                    required: true,
                    minlength: 4,
                    maxlength: 20
                },
                passconfirm: {
                    required: true,
                    minlength: 4,
                    maxlength: 20,
                    equalTo: '#password'
                },
                cpf: {
                    required: true,
                    cpfBR: true
                },
                telefone: {
                    required: true,
                    minlength: 14,
                    maxlength: 14
                },
                celular: {
                    required: true,
                    minlength: 14,
                    maxlength: 15
                },
                rua: {
                    required:true,
                    lettersonly: true,
                },
                bairro: {
                    required:true,
                    lettersonly: true
                },
                cidade: {
                    required:true,
                    lettersonly: true
                },
                numero: {
                    required:true,
                    number: true
                },
                estado: {
                    required:true,
                    lettersonly: true
                },
                cep: {
                    required:true,
                    minlength: 9,
                    maxlength: 9
                },
                razaos: {
                    required: true,
                    lettersonly: true
                },
                cnpj: {
                    required:true,
                    cnpjBR: true
                },
                insc: {
                    required:true,
                    number:true
                },
                telcon: {
                    required: true,
                    minlength: 14,
                    maxlength: 14
                },
                ruacom: {
                    required:true,
                    lettersonly: true
                },
                bairrocom: {
                    required:true,
                    lettersonly: true
                },
                cidadecom: {
                    required:true,
                    lettersonly: true
                },
                numerocom: {
                    required:true,
                    number: true
                },
                estadocom: {
                    required:true,
                    lettersonly: true
                },
                cepcom: {
                    required:true,
                    minlength: 9,
                    maxlength: 9
                },
                email:{
                    required: true,
                    email: true
                },
                email2:{
                        required: true,
                        equalTo: '#email'
                }
            }
        })
    })
 

    function vCamp(el, er) {
        var e=$(el).val().replace(er, '');
        $(el).val(e);
    }

    function num(el) {
        vCamp(el, /[^0-9]/g)
    }