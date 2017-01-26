/**
 * Main JS
 */


$(document).ready(function() {

  
    $('select').material_select();
    // Ini Menu burger 
    $(".button-collapse").sideNav();
    $('.collapsible').collapsible();
    $('.slider').slider();

    $('.modal').modal();

    $( ".datepicker" ).pickadate({
        firstDay: 1,
        // dayNamesShort: [ "Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam" ],
        // dayNamesMin: [ "Di", "Lu", "Ma", "Me", "Je", "Ve", "Sa" ],
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 90, // Creates a dropdown of 15 years to control year
        dateFormat: 'dd-mm-yyyy',
        formatSubmit: 'yyyy-mm-dd'
    });
    $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrain_width: false, // Does not change width of dropdown to that of the activator
            hover: true, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: false, // Displays dropdown below the button
            alignment: 'left' // Displays dropdown with edge aligned to the left of button
        }
    );
});



// $(function() {
//     $('#pagination-short').materializePagination({
//         align: 'center',
//         lastPage:  3,
//         firstPage:  1,
//         useUrlParameter: false,
//     });
//
//     $('#pagination-long').materializePagination({
//         align: 'center',
//         lastPage:  10,
//         firstPage:  1,
//         useUrlParameter: false,
//         onClickCallback: function(requestedPage){
//             console.log('Requested page from #pagination-long: '+ requestedPage);
//         }
//     });
// });






