$(document).ready(function(){

var busquedaUser = $("#searchUser");

	busquedaUser.autocomplete({

		minLength: 2,
		select: function(event, ui){
			busquedaUser.val(ui.item.label);
		},
		source: function(request, response){

			$.ajax({

				url: basePath = "users/searchJson",
				data:{

					term: request.term
				},
				dataType: "json",
				success: function(data){
					response($.map(data, function(el, index){
						return {

							value: el.User.username,
							username: el.User.username
						};
					} ));
				}
			});


		}
	}).data("ui-autocomplete")._renderItem = function(ul, item){
		return $("<li></li>")
		.data("item.autocomplete",item)
		.append("<a>"+item.username+"</a>")
		.appendTo(ul)

		}

});