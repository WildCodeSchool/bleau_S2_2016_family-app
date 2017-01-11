/**
 * Created by baur on 12/12/16.
 */



$(document).ready(function() {

    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

    var calendar = $('#calendar').fullCalendar({
        
        events: "http://localhost/bleau_S2_2016_family-app/src/FamilyBundle/Resources/views/Default/events.php",
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
                start = $.fullCalendar.formatDate(start, "yyyy-MM-dd HH:mm:ss");
                end = $.fullCalendar.formatDate(end, "yyyy-MM-dd HH:mm:ss");
                $.ajax({
                    url: 'http://localhost/bleau_S2_2016_family-app/src/FamilyBundle/Resources/views/Default/add_events.php',
                    data: 'title='+ title+'&start='+ start +'&end='+ end ,
                    type: "POST",
                    success: function(json) {
                        alert('OK');
                    }
                });
                calendar.fullCalendar('renderEvent',
                    {
                        title: title,
                        start: start,
                        end: end,
                        allDay: allDay
                    },
                    true // make the event "stick"
                );
            }
            calendar.fullCalendar('unselect');
        },
        editable: true,
        eventDrop: function(event, delta) {
            start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
            end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
            $.ajax({
                url: 'http://localhost/bleau_S2_2016_family-app/src/FamilyBundle/Resources/views/Default/update_events.php',
                data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
                type: "POST",
                success: function(json) {
                    alert("OK");
                }
            });
        },
        eventResize: function(event) {
            start = $.fullCalendar.formatDate(event.start, "yyyy-MM-dd HH:mm:ss");
            end = $.fullCalendar.formatDate(event.end, "yyyy-MM-dd HH:mm:ss");
            $.ajax({
                url: 'http://localhost/bleau_S2_2016_family-app/src/FamilyBundle/Resources/views/Default/update_events.php',
                data: 'title='+ event.title+'&start='+ start +'&end='+ end +'&id='+ event.id ,
                type: "POST",
                success: function(json) {
                    alert("OK");
                }
            });

        }
    });

});


