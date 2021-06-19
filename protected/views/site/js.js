
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        buttonText:
            {
                month:    'MES',
                week:     'SEMANA',
                day:      'DIA',
                list:     'list'
            },
        hiddenDays: [0],
        // hiddenDays: [0, 1, 2, 3, 4,5],
        default: 'standar',
        selectable: true,
        businessHours: {
            // days of week. an array of zero-based day of week integers (0=Sunday)
            daysOfWeek: [ 1, 2, 3, 4, 5 ], // Monday - Friday

            startTime: '10:00', // a start time (10am in this example)
            endTime: '18:00', // an end time (6pm in this example)
        },
        events: [
            {
                title:  'Cita Medica',
                start:  '2021-05-20T14:30:00',
                allDay: false
            }],
        headerToolbar: {
            left: '',
            // left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
            //right: ''
        },
        dateClick: function(info) {
            alert('Clicked on: ' + info.dateStr);
            alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
            alert('Current view: ' + info.view.type);
            // change the day's background color just for fun
            info.dayEl.style.backgroundColor = 'red';
        },
        // dateClick: function(info) {
        //     alert('clicked ' + info.dateStr);
        // },
        select: function(info) {
            alert('selected ' + info.startStr + ' to ' + info.endStr);
        }
    });
    calendar.setOption('locale', 'es');
    calendar.render();
});
