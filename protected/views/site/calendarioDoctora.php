<?php
$this->pageTitle=Yii::app()->name . ' - Calendario';
$this->breadcrumbs=array('Calendario');

$cedu = Yii::app()->user->name;
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.7.0/main.min.css,npm/fullcalendar@5.7.0/main.min.css">
<script src='https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.7.0,npm/fullcalendar@5.7.0/locales-all.min.js,npm/fullcalendar@5.7.0/locales-all.min.js,npm/fullcalendar@5.7.0/main.min.js'></script>

<style>
    #agenda{max-width: 900px; margin: 40px auto;}
</style>
<script>
    document.addEventListener('DOMContentLoaded', function()
        {
            var calendarEl = document.getElementById('agenda');
            var calendar = new FullCalendar.Calendar(calendarEl,
                {
                    initialView: 'dayGridMonth',
                    locale: 'es',
                    headerToolbar: {
                                     left:   'prev,next today',
                                     center: 'title',
                                     locale: 'es',
                                      right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    buttonText: {
                                today: 'Hoy',
                                month: 'Mes',
                                week:  'Semana',
                                day:   'Dia',
                                list:  'lista'
                    },
                    businessHours: {
                        // days of week. an array of zero-based day of week integers (0=Sunday)
                        daysOfWeek: [ 0, 1, 2, 3, 4, 5, 6 ], // Monday - Thursday

                        startTime: '08:00', // a start time (10am in this example)
                        endTime: '18:00', // an end time (6pm in this example)
                    }
                    // dateClick: function(info) {
                    //     alert('Clicked on: ' + info.dateStr);
                    //     // change the day's background color just for fun
                    //     info.dayEl.style.backgroundColor = 'red';
                    // },
                });

            <?php
            $citas = Agenda::model()->findAll();
            $cantidad = Agenda::model()->count();
            $nombres = Usuario::model()->findAll();
            $i1 = 1;
            $i2 = 1;
            foreach ($citas as $cita)
            {
                $citaMedica[$i1] = "$cita->fecha" . "T" . "$cita->hora";
                $citaAgendada[$i1] = "$cita->confirmacion";
                $ciCliente[$i1] = "$cita->nombreCompleto";
                $i1++;
            }
            foreach ($nombres as $nombre)
            {
                $nombreCliente[$i2] = "$nombre->primerNombre"." "."$nombre->primerApellido";$i2++;
            }
                    for($i=1;$i<=$cantidad;$i++)
                    if($citaAgendada[$i] == "SI")
                    {?>
                    calendar.addEvent({ title: 'Cita Medica de <?php echo $ciCliente[$i]; ?>', start: '<?php echo $citaMedica[$i];?>'});
               <?php }?>


            calendar.render();
        });

</script>

<div class="container">
    <div id="agenda"></div>
</div>
