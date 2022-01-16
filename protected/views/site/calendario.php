<?php
$this->pageTitle=Yii::app()->name . ' - Calendario';
$this->breadcrumbs=array('Calendario');
//$cedu=Yii::app()->user->name;
//$idusu = Usuario::model()->findAll();
//$i1 = 1;
//$posision = 0;
//foreach($idusu as $idusuced)
//{
//    if($cedu == $ced[$i1++]="$idusuced->ci")
//    {
//        $posision=$i1;
//    }
//    $nom[$i1]="$idusuced->primerNombre";
//    $ape[$i1]="$idusuced->primerApellido";
//}?>
<!--<br>-->
<?php
//$citas = Agenda::model()->findAll();
//$i1 = 1;
//$posision = 0;
//foreach ($citas as $cita)
//{
//    if($cedu == $ced[$i1++]="$cita->ciUsuario")
//    {
//        $posision=$i1;
//    }
//    $fecha[$i1]="$cita->fecha";
////    echo "T";
//    $hora[$i1]="$cita->hora";
//}
//echo $fecha[$posision];
//echo "T";
//echo $hora[$posision];
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.7.0/main.min.css,npm/fullcalendar@5.7.0/main.min.css">
<script src='https://cdn.jsdelivr.net/combine/npm/fullcalendar@5.7.0,npm/fullcalendar@5.7.0/locales-all.min.js,npm/fullcalendar@5.7.0/locales-all.min.js,npm/fullcalendar@5.7.0/main.min.js'></script>
<script>
    document.addEventListener('DOMContentLoaded', function()
        {
            var calendarEl = document.getElementById('agenda');
            var calendar = new FullCalendar.Calendar(calendarEl,
                {
                    initialView: 'dayGridMonth',
                    locale: 'es',
                    headerToolbar: {left: '', center: 'title', right: ''},
                    // headerToolbar: {
                    //     left: '',
                    //     // left: 'prev,next today',
                    //     center: 'title',
                    //     locale: 'es',
                    //     right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    //     //right: ''
                    // },
                });
            calendar.addEvent({title: 'CITA MEDICA',
                    start: '<?php
                        $cedu = Yii::app()->user->name;
                        $citas = Agenda::model()->findAll();
                        $i1 = 1;
                        $posision = 0;

                        foreach ($citas as $cita)
                        {
                            if($cedu == $ced[$i1++]="$cita->ciUsuario" && $cita->confirmacion == "SI")
                            {
                               $posision=$i1;

                            }
                            $fecha[$i1]="$cita->fecha";
                            $hora[$i1]="$cita->hora";
                        }
                        if($posision == 0)
                        {

                        }
                        else
                        {
                            echo $fecha[$posision];
                            echo "T";
                            echo $hora[$posision];
                        }
                        ?>',
                    color: 'red'});
            calendar.render();
        });
</script>

<div class="container">
    <div id="agenda"></div>
</div>
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col"></div>-->
<!--        <div class="col-7"> <div id='agenda'></div></div>-->
<!--        <div class="col"></div>-->
<!--    </div>-->
<!--</div>-->


<br>