jQuery(function($) {

    var texto = document.querySelectorAll("input.texto");

    if(texto != 0) {
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
}
});


function moeda(a, e, r, t) {
    let n = ""
      , h = j = 0
      , u = tamanho2 = 0
      , l = ajd2 = ""
      , o = window.Event ? t.which : t.keyCode;
    if (13 == o || 8 == o)
        return !0;
    if (n = String.fromCharCode(o),
    -1 == "0123456789".indexOf(n))
        return !1;
    for (u = a.value.length,
    h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
        ;
    for (l = ""; h < u; h++)
        -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
    if (l += n,
    0 == (u = l.length) && (a.value = ""),
    1 == u && (a.value = "0" + r + "0" + l),
    2 == u && (a.value = "0" + r + l),
    u > 2) {
        for (ajd2 = "",
        j = 0,
        h = u - 3; h >= 0; h--)
            3 == j && (ajd2 += e,
            j = 0),
            ajd2 += l.charAt(h),
            j++;
        for (a.value = "",
        tamanho2 = ajd2.length,
        h = tamanho2 - 1; h >= 0; h--)
            a.value += ajd2.charAt(h);
        a.value += r + l.substr(u - 2, u)
    }
    return !1
}




function editar(id) {
   $.ajax({
    url:'reservas',
    type:'POST',
    data:{id:id},
    success:function(html) {
      $('.modal-js').on('submit', function(e){
        e.preventDefault();

        var nome = $(this).find('input[name=nome]').val();
        var cpf = $(this).find('input[name=cpf]').val();
        var entrada = $(this).find('input[name=entrada]').val();
        var saida = $(this).find('input[name=saida]').val();
        var forma_pg = $(this).find('select[name=forma_pg]').val();
        var valor = $(this).find('input[name=valor]').val();
        var status = $(this).find('select[name=status]').val();
        var obs = $(this).find('textarea[name=obs]').val();
        
        $.ajax({
            url:'reservas/editar',
            type:'POST',
            data:{nome:nome, cpf:cpf, entrada:entrada, saida:saida, forma_pg:forma_pg,
            valor:valor, status:status, obs:obs, id:id},
            success:function(){
                alert("Dados alterados com sucesso");
                window.location.href = window.location.href;
            }
        })
      });
    }
   })
}

