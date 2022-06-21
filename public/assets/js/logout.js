$(function(){
    $("#logout").on("click", function(e){
        e.preventDefault();

        $.ajax({
            url:"logout.php",
            type: "POST",
            success: function() {
                    window.location = 'login';
            }
        })
    });
});

