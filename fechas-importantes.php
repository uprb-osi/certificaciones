<?php
$fechas = array(
/*
La informacion se debe guardar con el siguiente formato y usando ";" como separador de campos:
    MMM = 3 letras del mes correspondiente, por ejemplo ENE o JUN
    DD = Dos caracteres numericos para el dia correspondiente, por ejmeplo 01 o 30
    Titulo = Un titulo para esa fecha, por ejemplo "Dia de examen!"
    Descripcion = Una explicacion de lo que sucedera ese dia, por ejemplo "El examen se ofrecera en el salon 123"

    Finalmente la linea debe verse asi:
    AGO;01;Examen de Certificacion;El examen sera en el salon #123 a las 12:00pm
*/
    '0' => "Ago;18;Examen de Certificación;Se estará ofreciendo exámenes de certificación, recuerden llenar y pagar la solicitud de matrícula para tomar el examen.",
    '1' => "Ago;25;Examen de Certificación;Se estará ofreciendo exámenes de certificación, recuerden llenar y pagar la solicitud de matrícula para tomar el examen.",
    //'2' => ""
);

echo '
                        <section>
                            <header>
                                <h2>Fechas importantes</h2>
                            </header>
                            <ul class="dates">';
// foreach ($fechas as $key => $value) {
for ($i=count($fechas); $i > 0; $i--) {

    $fecha_detalles = explode(";", $fechas[$i-1]);
    echo '
                                <li>
                                    <span class="date">'.$fecha_detalles[0].' <strong>'.$fecha_detalles[1].'</strong></span>
                                    <h3>'.$fecha_detalles[2].'</h3>
                                    <p>'.$fecha_detalles[3].'</p>
                                </li>
    ';
}
echo '
                            </ul>
                        </section>';