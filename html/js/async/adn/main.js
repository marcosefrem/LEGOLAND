/*	----------------------------------------------------------------------------------------------------
	 JS ADN global para todo el proyecto de carga asíncrona
------------------------------------------------------------------------------------------------------ */

/*	--------------------------------------------------
	Declaración de funciones
-------------------------------------------------- */

//Si hacemos una llamada AJAX lanzaremos esta función para recargar los plugins
function initAsync(){
	
	// if( windowWidth >= xsBreak ){$('.selectpicker').selectpicker();}
	
	//Dropdowns
	$('.dropdown-toggle').dropdown();
	
	//Form slider
	$('.js-input-slider').slider();
	
	//Date Picker
	$('.js-datepicker').datepicker({
		format: 'dd/mm/yyyy',
		orientation: 'top'
	});
	
	//Tooltips
	$('[data-toggle="tooltip"]').tooltip();
	
	//Popovers
	$('[data-toggle="popover"]').popover({ html : true});
	
	//Tabs responsive
	$('.nav-tabs.tab-drop').tabdrop();
	
	//Validaciones formularios
	$("input,select,textarea").not("[type=submit]").jqBootstrapValidation(
		{
			filter: function () {
				return $(this).is(":visible");
			}
		}		
	);
	
}

/*	--------------------------------------------------
	Lógica de scripts
-------------------------------------------------- */
$(function() {
	

	/*	--------------------------------------------------
		Ejemplo : Descripción de script.
		indicar siempre descripcion y documentar el script
		segun se vaya ejecutando.
	-------------------------------------------------- */


	
	/*	--------------------------------------------------
		Llamada de funciones
	-------------------------------------------------- */
	initAsync();

	
	/*	--------------------------------------------------
		Llamada de funciones en resize
	-------------------------------------------------- */
	$( window ).on('resize', function() {



	});

});

