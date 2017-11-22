$(document).ready(function(){

var busquedaUser = $("#searchFormula");

	busquedaUser.autocomplete({

		minLength: 2,
		select: function(event, ui){
			busquedaUser.val(ui.item.label);
		},
		source: function(request, response){

			$.ajax({

				url: basePath = "formulas/searchJson",
				data:{

					term: request.term
				},
				dataType: "json",
				success: function(data){
					response($.map(data, function(el, index){
						return {

							value: el.Formula.nombre,
							nombre: el.Formula.nombre
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