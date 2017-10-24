$(document).ready(function() {
		
		$("#areas li").click(function(){
				id = "#"+($(this).attr('id'));
				$(".active").removeClass("active");
				$(id).addClass("active");
				
				if(id == "#todos"){
					$(".container-fluid > .row > .span4 > div > *").show("slow");
				}else{
					classe = "."+this.id;	
					$(".container-fluid > .row > .span4 > div > *").show();				
					$(".container-fluid > .row > .span4 > div > :not("+classe+")").hide("slow");
				}				
				
			});
			
			
	});
