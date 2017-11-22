$(document).ready(function(){

var busquedaUser = $("#searchCliente");

	busquedaUser.autocomplete({

		minLength: 2,
		select: function(event, ui){
			busquedaUser.val(ui.item.label);
		},
		source: function(request, response){

			$.ajax({

				url: basePath = "clientes/searchJson",
				data:{

					term: request.term
				},
				dataType: "json",
				success: function(data){
					response($.map(data, function(el, index){
						return {

							value: el.Cliente.nombre,
							nombre: el.Cliente.nombre
						};
					} ));
				}
			});


		}
	}).data("ui-autocomplete")._renderItem = function(ul, item){
		return $("<li></li>")
		.data("item.autocomplete",item)
		.append("<a>"+item.nombre+"</a>")
		.appendTo(ul)

		}

});