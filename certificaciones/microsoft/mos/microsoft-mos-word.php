<?php
@session_start();
include_once('certificaciones/costos.php');
$costos = $_SESSION['certificacionesCostos']['mos-word'];

echo   '<!-- Main -->
        <div id="main-wrapper">
            <div class="container">
                <div class="row">
                    <div class="4u 12u(mobile)">
                        <!-- Sidebar -->
                            <section class="box">
                                <a href="#" class="image featured"><img src="images/microsoft/mos/mos-word.png" alt="" /></a>
                                <header>
                                    <h3>Estudiantes de UPR</h3>
                                </header>
                                <h4><u>Costo</u></h4>
                                <li><strong>Curso + Examen: '.$costos['costoUPR-curso'].'</strong></li>
                                <li><strong>Examen: '.$costos['costoUPR-examen'].'</strong></li>
                                <li><strong>Retake: '.$costos['costoUPR-retake'].'</strong></li>
                            </section>
                            <section class="box">
                                <header>
                                    <h3>Personas Externas</h3>
                                </header>
                                <h4><u>Costo</u></h4>
                                <li><strong>Curso + Examen: '.$costos['costoExterno-curso'].'</strong></li>
                                <li><strong>Examen: '.$costos['costoExterno-examen'].'</strong></li>
                                <li><strong>Retake: '.$costos['costoExterno-retake'].'</strong></li>
                            </section>
                    </div>
                    <div class="8u 12u(mobile) important(mobile)">

                        <!-- Content -->
                            <article class="box post">
                                <a href="https://www.microsoft.com/en-us/learning/mos-certification.aspx" class="image featured" target="_blank"><img src="images/microsoft/mos/mos-office.png" alt="" /></a>
                                <header>
                                    <h2>MOS: Word</h2>
                                    <p>Lorem ipsum dolor sit amet feugiat</p>
                                </header>
                                <p>
                                    Vestibulum scelerisque ultricies libero id hendrerit. Vivamus malesuada quam faucibus ante dignissim auctor
                                    hendrerit libero placerat. Nulla facilisi. Proin aliquam felis non arcu molestie at accumsan turpis commodo.
                                    Proin elementum, nibh non egestas sodales, augue quam aliquet est, id egestas diam justo adipiscing ante.
                                    Pellentesque tempus nulla non urna eleifend ut ultrices nisi faucibus.
                                </p>
                                <p>
                                    Praesent a dolor leo. Duis in felis in tortor lobortis volutpat et pretium tellus. Vestibulum ac ante nisl,
                                    a elementum odio. Duis semper risus et lectus commodo fringilla. Maecenas sagittis convallis justo vel mattis.
                                    placerat, nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc,
                                    eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean
                                    elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
                                    sit amet nullam consequat feugiat dolore tempus.
                                </p>
                                <section>
                                    <header>
                                        <h3>Something else</h3>
                                    </header>
                                    <p>
                                        Elementum odio duis semper risus et lectus commodo fringilla. Maecenas sagittis convallis justo vel mattis.
                                        placerat, nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc,
                                        eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean
                                        elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
                                        sit amet nullam consequat feugiat dolore tempus.
                                    </p>
                                    <p>
                                        Nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc,
                                        eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean
                                        elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
                                        sit amet nullam consequat feugiat dolore tempus.
                                    </p>
                                </section>
                                <section>
                                    <header>
                                        <h3>So in conclusion ...</h3>
                                    </header>
                                    <p>
                                        Nunc diam iaculis massa, et aliquet nibh leo non nisl vitae porta lobortis, enim neque fringilla nunc,
                                        eget faucibus lacus sem quis nunc suspendisse nec lectus sit amet augue rutrum vulputate ut ut mi. Aenean
                                        elementum, mi sit amet porttitor lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor
                                        sit amet nullam consequat feugiat dolore tempus. Elementum odio duis semper risus et lectus commodo fringilla.
                                        Maecenas sagittis convallis justo vel mattis.
                                    </p>
                                </section>
                            </article>

                    </div>
                </div>
            </div>
        </div>';