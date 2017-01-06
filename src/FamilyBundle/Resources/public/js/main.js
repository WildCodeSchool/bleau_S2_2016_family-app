/**
 * Main JS
 */


$(document).ready(function() {
    $('select').material_select();
    // Ini Menu burger 
    $(".button-collapse").sideNav();

    $('#calendar').fullCalendar();
});



$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 90 // Creates a dropdown of 15 years to control year

});



