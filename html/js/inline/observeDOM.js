/*	--------------------------------------------------
	ObserveDom: Detecta cambios en el DOM por ajax
	para cargar funciones que aplican al nuevo DOM
-------------------------------------------------- */

//window.onload = function(e){ // window.onload para evitar stack overflow en IE
	
	console.log('Window loaded');
	
	document.addEventListener("DOMContentLoaded", function(event) { 
		
		//Observamos si hay cambios en el DOM
		var observeDOM = (function() {
			var MutationObserver = window.MutationObserver || window.WebKitMutationObserver,
				eventListenerSupported = window.addEventListener;
			return function(obj, callback) {
				if (MutationObserver) {
				  var obs = new MutationObserver(function(mutations, observer) {
				  	if (mutations[0].addedNodes.length || mutations[0].removedNodes.length) callback();
				  });
				  obs.observe(obj, {
				  	childList: true,
				  	subtree: true
				  });
				} else if (eventListenerSupported) {
					obj.addEventListener('DOMNodeInserted', callback, false);
					obj.addEventListener('DOMNodeRemoved', callback, false);
				}
			};
		})();
	
		console.log('DOM Loaded');
	
		observeDOM( document.querySelector('body') ,function(){
			//Volvemos a inyectar iconos
			//grunticon.svgLoadedCallback();
			//Recargamos los helpers críticos para volver a calcular alturas y demás.
			//initCriticalHelpers();
			
			console.log('Cambios en el DOM detectados');
		});		
	
	});
//}
	
	
	