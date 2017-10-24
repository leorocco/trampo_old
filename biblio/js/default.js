$(document).ready( function(){
	
		 
	 $("#inputPesq").keyup(function(){       
        var valor = $(this).val().toUpperCase();
        $("#livros_tb tbody tr").show();
        
        $(".tit").each(function(){
            if($(this).text().toUpperCase().indexOf(valor) < 0){
                $(this).parent().hide();
            }
        });
    });
 
    $("#livros_tb input").blur(function(){
        $(this).val("");
    });


	
});
