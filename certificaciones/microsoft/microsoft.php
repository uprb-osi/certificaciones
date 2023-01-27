<?php
include_once('certificaciones/certificaciones_detalles.php');
echo   '<!-- Main -->
        <div id="main-wrapper">
            <div class="container">
                <!-- Content -->
                <article class="box post">
                    <center><a href="#" class="image featured"><img src="images/microsoft/microsoft-logo.png" alt="" /></a></center>
                    <header>
                        <center><h2>¡Conoce las certificaciones Microsoft que ofrecemos!</h2></center>
                    </header>
                    <br><br>
                    <!-- MOS 
                    <section>
                        <header class="major">
                            <h2>Microsoft Office Specialist - MOS</h2>
                        </header>
                        <div class="row">
                            <div class="4u 12u(mobile)">
                                <section class="box">
                                    <a href="http://certificaciones.uprb.edu/?p=microsoft-mos-word" class="image featured"><img src="images/microsoft/mos/mos-word.png" alt="" /></a>
                                    <header>
                                        <h3>MOS: Word</h3>
                                    </header>
                                    <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                                    <footer>
                                        <a href="http://certificaciones.uprb.edu/?p=microsoft-mos-word" class="button alt">Ver más información <i class="icon fa-angle-right"></i></a>
                                    </footer>
                                </section>
                            </div>
                            <div class="4u 12u(mobile)">
                                <section class="box">
                                    <a href="http://certificaciones.uprb.edu/?p=microsoft-mos-excel" class="image featured"><img src="images/microsoft/mos/mos-excel.png" alt="" /></a>
                                    <header>
                                        <h3>MOS: Excel</h3>
                                    </header>
                                    <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                                    <footer>
                                        <a href="http://certificaciones.uprb.edu/?p=microsoft-mos-excel" class="button alt">Ver más información <i class="icon fa-angle-right"></i></a>
                                    </footer>
                                </section>
                            </div>
                            <div class="4u 12u(mobile)">
                                <section class="box">
                                    <a href="#" class="image featured"><img src="images/microsoft/mos/mos-access.png" alt="" /></a>
                                    <header>
                                        <h3>MOS: Access</h3>
                                    </header>
                                    <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                                    <footer>
                                        <a href="http://certificaciones.uprb.edu/?p=microsoft-mos-access" class="button alt">Ver más información <i class="icon fa-angle-right"></i></a>
                                    </footer>
                                </section>
                            </div>
                        </div>
                    </section> -->';
getTableMOS();

getTableMCE();

getTableMTA();

echo '
                    <!-- Academic Roadmap -->
                    <section>
                        <header class="major">
                            <h2>Academic Roadmap</h2>
                        </header>
                        <div class="row">
                            <div class="12u 12u(mobile)">
                                <section class="box">
                                    <a href="http://certificaciones.uprb.edu/certificaciones/microsoft/Academic_Certification_Roadmap_Jan2018.pdf" target="_blank" class="image featured"><img src="images/microsoft/microsoft-roadmap-thumbnail.png" alt="" /></a>
                                    <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                                    <footer>
                                        <a href="http://certificaciones.uprb.edu/certificaciones/microsoft/Academic_Certification_Roadmap_Jan2018.pdf" target="_blank" class="button alt">Ver el Academic Roadmap <i class="icon fa-angle-right"></i></a>
                                    </footer>
                                </section>
                            </div>
                        </div>
                    </section>
                </article>
            </div>
        </div>';




function getTableMOS() {
    echo '
        <!-- MOS -->
        <section>
            <header class="major">
                <h2>Microsoft Office Specialist - MOS</h2>
            </header>
            <div class="row">
                <div class="12u 12u(mobile)">
                    <div class="table-responsive">
                        <table class="table table-fixed table-hover table-condensed table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" rowspan="2">Nombre</th>
                                    <th scope="col" colspan="3" class="text-center">Estudiantes UPR</th>
                                    <th scope="col" colspan="3" class="text-center">Público General</th>
                                    <th scope="col" rowspan="2" class="text-center">Documentos / Enlaces</th>
                                </tr>
                                <tr>
                                    <th scope="col" class="text-center">Curso + Examen</th>
                                    <th scope="col" class="text-center">Examen</th>
                                    <th scope="col" class="text-center">Repetición</th>
                                    <th scope="col" class="text-center">Curso + Examen</th>
                                    <th scope="col" class="text-center">Examen</th>
                                    <th scope="col" class="text-center">Repetición</th>
                                </tr>
                            </thead>
                            <tbody>';
    for ($i = 0; $i < count($_SESSION['certificacionesDetalles']); $i++) {
        $record = $_SESSION['certificacionesDetalles'][$i];
        if ((isset($record['tipo'])) && (strcmp($record['tipo'], "MOS") == 0)) {
            echo '
                                <tr>
                                    <td>'.$record['nombre'].'</td>
                                    <td class="text-center">'.$record['costoUPR-curso'].'</td>
                                    <td class="text-center">'.$record['costoUPR-examen'].'</td>
                                    <td class="text-center">'.$record['costoUPR-repeticion'].'</td>
                                    <td class="text-center">'.$record['costoGeneral-curso'].'</td>
                                    <td class="text-center">'.$record['costoGeneral-examen'].'</td>
                                    <td class="text-center">'.$record['costoGeneral-repeticion'].'</td>
                                    <td class="text-center">';
            foreach ($record['links'] as $key => $value) {
                $linkDetails = explode(";", $value);
                echo '<a href="'.$linkDetails[1].'" target="_blank">'.$linkDetails[0].'</a><br>';
            }
            echo '                  </td>
                                </tr>
            ';
        }
    }
    echo '                  </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>';
}

function getTableMCE() {
    echo '
        <!-- MCE -->
        <section>
            <header class="major">
                <h2>Microsoft Certified Educator - MCE</h2>
            </header>
            <div class="row">
                <div class="12u 12u(mobile)">
                    <div class="table-responsive">
                        <table class="table table-fixed table-hover table-condensed table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" rowspan="2">Nombre</th>
                                    <th scope="col" colspan="3" class="text-center">Estudiantes UPR</th>
                                    <th scope="col" colspan="3" class="text-center">Público General</th>
                                </tr>
                                <tr>
                                    <th scope="col" class="text-center">Curso + Examen</th>
                                    <th scope="col" class="text-center">Examen</th>
                                    <th scope="col" class="text-center">Repetición</th>
                                    <th scope="col" class="text-center">Curso + Examen</th>
                                    <th scope="col" class="text-center">Examen</th>
                                    <th scope="col" class="text-center">Repetición</th>
                                </tr>
                            </thead>
                            <tbody>';
    for ($i = 0; $i < count($_SESSION['certificacionesDetalles']); $i++) {
        $record = $_SESSION['certificacionesDetalles'][$i];
        if ((isset($record['tipo'])) && (strcmp($record['tipo'], "MCE") == 0)) {
            echo '
                                <tr>
                                    <td>'.$record['nombre'].'</td>
                                    <td class="text-center">'.$record['costoUPR-curso'].'</td>
                                    <td class="text-center">'.$record['costoUPR-examen'].'</td>
                                    <td class="text-center">'.$record['costoUPR-repeticion'].'</td>
                                    <td class="text-center">'.$record['costoGeneral-curso'].'</td>
                                    <td class="text-center">'.$record['costoGeneral-examen'].'</td>
                                    <td class="text-center">'.$record['costoGeneral-repeticion'].'</td>
                                </tr>
            ';
        }
    }
    echo '                  </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>';
}

function getTableMTA() {
    echo '
        <!-- MTA -->
        <section>
            <header class="major">
                <h2>Microsoft Technology Associate - MTA</h2>
            </header>
            <div class="row">
                <div class="12u 12u(mobile)">
                    <div class="table-responsive">
                        <table class="table table-fixed table-hover table-condensed table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" rowspan="2">Nombre</th>
                                    <th scope="col" colspan="3" class="text-center">Estudiantes UPR</th>
                                    <th scope="col" colspan="3" class="text-center">Público General</th>
                                </tr>
                                <tr>
                                    <th scope="col" class="text-center">Curso + Examen</th>
                                    <th scope="col" class="text-center">Examen</th>
                                    <th scope="col" class="text-center">Repetición</th>
                                    <th scope="col" class="text-center">Curso + Examen</th>
                                    <th scope="col" class="text-center">Examen</th>
                                    <th scope="col" class="text-center">Repetición</th>
                                </tr>
                            </thead>
                            <tbody>';
    for ($i = 0; $i < count($_SESSION['certificacionesDetalles']); $i++) {
        $record = $_SESSION['certificacionesDetalles'][$i];
        if ((isset($record['tipo'])) && (strcmp($record['tipo'], "MTA") == 0)) {
            echo '
                                <tr>
                                    <td>'.$record['nombre'].'</td>
                                    <td class="text-center">'.$record['costoUPR-curso'].'</td>
                                    <td class="text-center">'.$record['costoUPR-examen'].'</td>
                                    <td class="text-center">'.$record['costoUPR-repeticion'].'</td>
                                    <td class="text-center">'.$record['costoGeneral-curso'].'</td>
                                    <td class="text-center">'.$record['costoGeneral-examen'].'</td>
                                    <td class="text-center">'.$record['costoGeneral-repeticion'].'</td>
                                </tr>
            ';
        }
    }
    echo '                  </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>';
}