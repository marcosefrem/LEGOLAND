/*	----------------------------------------------------------------------------------------------------
	 Cargamos las fuentes con fontfaceobserver
	 https://www.filamentgroup.com/lab/font-events.html
------------------------------------------------------------------------------------------------------ */

var font = new FontFaceObserver('Lato');
//var font2 = new FontFaceObserver('Helvetica');

Promise.all([
	
	font.check(),
//	font2.check()
	
	]).then(function () {
  document.documentElement.className += " fonts-loaded";
});