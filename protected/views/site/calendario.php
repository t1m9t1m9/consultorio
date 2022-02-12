<?php
$this->pageTitle=Yii::app()->name . ' - Calendario';
$this->breadcrumbs=array('Calendario');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.7.0/main.min.css,npm/fullcalendar@5.7.0/main.min.css">
<script src='https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.7.0,npm/fullcalendar@5.7.0/locales-all.min.js,npm/fullcalendar@5.7.0/locales-all.min.js,npm/fullcalendar@5.7.0/main.min.js'></script>
<style>
    #agenda{max-width: 900px; margin: 10px auto;}
</style>
<script>
    document.addEventListener('DOMContentLoaded', function()
        {
            var calendarEl = document.getElementById('agenda');
            var calendar = new FullCalendar.Calendar(calendarEl,
                {
                    initialView: 'dayGridMonth',
                    locale: 'es',
                    headerToolbar: {left: '', center: 'title', right: ''},
                });
            calendar.addEvent({title: 'CITA MEDICA',
                    start: '<?php
                        $cedu = Yii::app()->user->name;
                        $citas = Agenda::model()->findAll();
                        $i1 = 1;
                        $i2 = 1;
                        $posision = 0;
                        foreach ($citas as $cita)
                        {
                            if($cedu == $ced[$i1++]="$cita->ciUsuario")
                            {
                                if("SI" == $agenda[$i2++]="$cita->confirmacion")
                                {
                                    $posision=$i1;
                                }
                            }
                            $fecha[$i1]="$cita->fecha";
                            $hora[$i1]="$cita->hora";
                        }
                        if($posision == 0)
                        {

                        }
                        else
                        {
                            echo $fecha[$posision]."T".$hora[$posision];
                        }
                        ?>',
                    color: 'red'});
            calendar.render();
        });
</script>

<div class="container">
    <div id="agenda"></div>
</div>
