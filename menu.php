 <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element" style="text-align: center;"> <span >
                            <img width="50px" height="50px" alt="image" class="img" src="img/logo.png" />
                           
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs" style="text-align: left;"> <strong class="font-bold"><?php
                        //  session_start();
         echo strtoupper($_SESSION["nombre"]);
                ?></strong>
                             </span> <span class="text-muted text-xs block" style="text-align: left;" ><?php 
               if ($_SESSION["roles"]==1) {
                  echo "Administrador";
               }
               if ($_SESSION["roles"]==2) {
                  echo "Operador";
               }
               if ($_SESSION["roles"]==3) {
                  echo "Usuario";
               }
                ?></span> </span> </a>
                            
                        </div>
                        <div class="logo-element">
                              TS
                        </div>
                    </li>

                     <li>
                        <a href="panel.php"><i class="fa fa-table"></i> <span class="nav-label">Cartelera</span></a>
                    </li>
                   
                    <?php

                    ////Susanita
////op1= Status o panel-
////op2= Registro Control de Piso-
////op3= Informes-
////op4= Tablas Maestras-
///op5= Configuracion-
                    ////Susanita




////op10= Proforma-

///op6= PRoveedores
//op7= libro Diario 
//op8 pusuarios  -                              
//op9 informes     -                           


                   if ($_SESSION["op1"]==1) {
               ?>
                     <li>
                        <a href="capacitaciones.php"><i class="fa fa-comments"></i> <span class="nav-label">Capacitaciones</span></a>
                    </li>
                    
                    <?php
                        }

                       if ($_SESSION["op2"]==1) { 
                    ?>
                    <li>
                        <a href="ausentismo.php"><i class="fa fa-medkit"></i> <span class="nav-label">Ausentismo</span></a>
                    </li>
                     <?php
                        }

                       if ($_SESSION["op3"]==1) { 
                    ?>
                    <li>
                        <a  href="dane.php"><i class="fa fa-laptop"></i> <span class="nav-label">DANE</span></a>
                    </li>
                     <?php
                        }

                    

                       if ($_SESSION["op4"]==1) { 
                    ?>
                   <li>
                    <a href="#"><i class="fa fa-line-chart"></i> <span class="nav-label">Informes</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="indicadores_cap.php">Indicadores Capacitaciones</a></li>
                        <li><a href="indicadores_aus.php">Indicadores Ausentismo</a></li>
                        <li><a href="indicadores_dane.php">Indicadores DANE</a></li>
                    </ul>
                     <?php
                        }
                       

                         if ($_SESSION["op5"]==1) { 
                    ?>

                     <li>
                    <a href="#"><i class="fa fa-database"></i> <span class="nav-label">Base de Datos</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="empleados.php">Empleados</a></li>
                        <li><a href="cargos.php">Cargos</a></li>
                        <li><a href="areas.php">Áreas</a></li>
                        <li><a href="ccostos.php">Centro de Costos</a></li>
                        <li><a href="eps.php">EPS</a></li>
                        <li><a href="codigos.php">Código Diagnóstico</a></li>
                        <li><a href="eventos.php">Tipo de Eventos</a></li>
                        <li><a href="usuarios.php">Usuarios</a></li>

                    </ul>
                    </li>

                    
                    </li>
                     <?php
                        }
                        ?>

                     
                </ul>

            </div>
        </nav>