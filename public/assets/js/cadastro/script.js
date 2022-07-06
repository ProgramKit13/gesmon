    function vCamp(el, er) {
        var e=$(el).val().replace(er, '');
        $(el).val(e);
    }

    function num(el) {
        vCamp(el, /[^0-9]/g)
    }


$("#estado").on("change", function() {
    var idEstado = $("#estado").val();

    $.ajax({
        url: '/gesmon/public/configuracao',
        type: 'POST',
        data:{id:idEstado},
        dataType: 'json',
        success: function(json) {
            var html = '';

			for(var i in json) {
				html += '<option value="'+json[i].id+'">'+json[i].nome+'</option>';
			}

			$("#cidades").html(html);
        },
        error: function(data) {
            $("#cidades").html('Erro no carregamento');
        }
    })
});


$("#cidades").on("change", function() {
    var idCidade = $("#cidades").val();
    $.ajax({
        url: '/gesmon/public/configuracao',
        type: 'POST',
        data:{id:idCidade},
        dataType: 'json'
    })
});


jQuery(function($) {

    var texto = document.querySelectorAll("input.texto");
    for (var i=0; i<= texto.length;i++) {

    texto[i].addEventListener("input", function(){
        const allowedCharacters="azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN ";
        let newValue="";
        this.value.split("").forEach(function(char){
            if(in_array(char, allowedCharacters.split(""))) newValue+=char;
        });
        this.value=newValue;
    });
    function in_array(elem, array){
        let isIn=false;
        for(var i=0;i<array.length;i++){
            if(elem==array[i]) isIn=true;
        }
        return isIn;
    }
}
});



