function deleteRow(action){
	if(confirm('¿Esta seguro que desea eliminar el registro seleccionado?')){
  		location.href = action; 
  	}
  	return;
}  

$(document).ready(function(){ 
	$('.deleteImage').click(function(){
		phpUrl = $(this).attr('url');
		$.ajax({ 
			data: "", 
			type: "GET", 
			dataType: "json", 
			url: phpUrl, 
			success: function(data){
				if(data.no_error == true){
					var rel = $('.deleteImage').attr('rel');
					$(rel).attr('src', data.imageDefault);						
				}else{
					alert("Surgio un error al intentar eliminar el archivo!")
				}
			} 
		});		
	});
});

var a;
function fillSubCategorySelect(categoryId, elementId){
	
	$.ajax({ 
		data: "", 
		type: "GET", 
		dataType: "json", 
		url: wwwroot + 'productSubCategory/listSubCategoriesByCategoryId/' + categoryId, 
		success: function(data){
			$('#' + elementId).html('');
			
			if(data.error == false){
				$('#' + elementId).append('<option value="0">Seleccione una opcion...</option>');
				$.each(data.productSubCategory, function(i,item){
					console.log(item);
					$('#' + elementId).append('<option value="' + item.id + '">' + item.description + '</option>');
				});
			}else{
				$('#' + elementId).append('<option value="0">Sin opciones</option>');
			}
		} 
	});		
}
