
/*Pozo González José Antonio. DNI: 71440331P
email: iwc70842@educastur.es*/

$(function () {

  $("#fechanacimiento").datepicker({
    regional: "es",
    closeText: "Cerrar",
    changeYear: true,
    changeMonth: true,
    firstDay: 1, 
    dateFormat: "dd-mm-yy", 
    dayNames: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado",],
    dayNamesShort: ["Dom", "Lun", "Mar", "Mié", "Juv", "Vie", "Sáb"],
    dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sá"],
    monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
    monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
    yearRange: "1950:-14" //En España la edad minima legal para hacer un usuario web son 14 años y suponemos nuestro socio mas veterano nacido en 1950.
  });
});