<?php
include("session.php");
?>
<!DOCTYPE html>
<html>


<?php
include("head.php"); ?>
<body>


 <div id="wrapper">
   <?php
   include ("menu.php");
   include ("links.php");
   ?>

   <div id="page-wrapper" class="gray-bg dashbard-1">
    <div class="row border-bottom">
      <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
          <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
          <li>
            <a href="index.php">
              <i class="fa fa-sign-out"></i> Salir
            </a>
          </li>
        </ul>
      </nav>
    </div>

    <div class="row">
      <div class="col-lg-12">
       <div class="ibox float-e-margins">

         <div class="ibox-title">
          <div class="row">
            <div class="col-xs-10">
              <h2><i class="fas fa-users"></i> BD.Empleados</h2>
            </div> 
            <div class="col-xs-2">
              <?php 
              if ($_SESSION["roles"]==1 || $_SESSION["roles"]==2) {
                ?>   
                <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal"><i class="fas fa-user-plus"></i>  Nuevo</button>
                <?php 
              }
              ?>   
            </div>  <!--div class="col-xs-10"-->
          </div><!--div class="row"-->
        </div> <!--div class="ibox-title"-->


        <div class="ibox-content">
          <div class="table-responsive">
            <table class="table table-striped table-hover dataTables-example_emple" id="tabla-empleados">
              <thead style="background-color:rgb(221,9,22);color: #FFFFFF">
                <tr>
                  <?php 
                  if ($_SESSION["roles"]==1 || $_SESSION["roles"]==2) {
                   ?>                  
                   <th><i class="fas fa-pencil-alt"></i></th>
                   <?php if ($_SESSION["roles"]==1) {
                    ?>
                    <th><i class="fa fa-trash"></i></th>
                    <?php
                  }
                }
                ?>
                <th>ESTADO</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>CC</th>
                <th>SEXO</th>
                <th>CORREO</th>
                <th>CELULAR</th>
                <th>SEDE</th>
                <th>EMPRESA</th>
                <th>CIUDAD</th>
                <th>NOMBRE_CARGO</th>
                <th>SALARIO</th>
                <th>TIPO CONTRATO</th>
                <th>FECHA NAC</th>
                <th>EDAD</th>
                <th>MES DE CUMPLEAÑOS</th>
                <th>RH</th>
                <th>CENTRO</th>
                <th>FECHA ING</th>
                <th>DURACION CONTR.</th>
                <th>PRORROGA</th>
                <th>AUXILIO</th>
                <th>AUXILIO TTE</th>
                <th>EPS</th>
                <th>AFP</th>
                <th>CCF</th>
                <th>ARL</th>
                <th>DIRECCION</th>
                <th>BARRIO</th>
                <th>TELEFONO</th>
                <th>CONTACTO</th>
                <th>CELULAR_CONT</th>
                <th>LUGAR NAC</th>
                <th>ANTIGUEDAD</th>
                <th>JEFE INM</th>
                <th>FECHA RETIRO</th>
                <th>MES DE RETIRO</th>
                <th>Año DE RETIRO</th>
                <th>PARENTESCO</th>
                <th>CELULAR CONTACTO</th>
                <th>AREA</th>
                <th>DEPTO</th>
                <th>ZONA</th>
                <th>NIVEL EDU 1</th>
                <th>NIVEL EDU 2</th>
                <th>TITULO OBT</th>
                <th>ESTADO CIVIL</th>
                <th>CONYUGE</th>
                <th>CELULAR CONYUGE</th>
                <th>HIJOS</th>
                <th>ESTRATO</th>
                <th>RAZA</th>
                <th>TASA RIEGO</th>
                <th>CESANTIAS</th>
                <th>COMITES</th>
                <th>FORMA PAGO</th>
                <th>CUENTA BAN</th>
                <th>TIPO CTA</th>
                <th>ENTIDAD</th>
                <th>PRORROGA</th>
              </tr>
            </thead>

            <tbody style="font-weight: bold;">
              <?php 
              include("conexion_rh.php");
              $query='SELECT empleados.idempleados id, empleados.nombre nombre_empleados, `apellido`, `cc`, `correo`, Tipo_cargo.nombre nombre_cargo, `salario`, `tipo_contrato`, `id_empresas`, `responsable`, `valor_hora`, `costo_hora`, `nombre2`, `apellido2`, `tipo_doc`, `fecha_nac`, `rh`, `centro`, `fecha_ing`, `duracion_cont`, `prorroga`, `auxilio`, `auxilio_tte`, `porcentaje`, `total_dev`, `eps`, `fecha_eps`, `afp`, `fecha_afp`, `ccf`, `fecha_ccf`, `arl`, `fecha_arl`, `equipo`, `descripcion_equipo`, `clave_correo`, `usuario_correo`, `examen`, `forma_pago`, `cuenta_ban`, `tipo_cta`, `entidad`, `direccion`, `barrio`, `telefono`, `celular`, `contacto`, `celular_cont`, `afiliadopor`, `imagen`, `sexo`, `lugar_nac`, `antiguedad`, `jefe_inm`, `estado`, `fecha_retiro`, Tipo_cargo.identificador `sede`, `empresa`, `ciudad`, `parentesco`, `celular_contacto`, area.nombre_area area, `depto`, `zona`, `nivel_edu_1`, `nivel_edu_2`, `titulo_obt`, `estado_civil`, `conyuge`, `celular_conyuge`, `solo`, `estrato`, `raza`, `tasa_riego`, `cesantias`, `comites` FROM empleados left JOIN Tipo_cargo ON (Tipo_cargo.id=empleados.id_cargo) left join area on (area.id_areas=empleados.area) where empleados.idempleados!=35 order by nombre_empleados ASC';
              $resultado=$conexion_rh-> query ($query);
              while ($row=$resultado->fetch_assoc()) {
                ?>
                <tr style="font-size: 10px">
                  <?php 
                  if ($_SESSION["roles"]==1 || $_SESSION["roles"]==2) {
                   ?>                  
                   <td><a href="empleados.php?id=<?php echo $row['id'];?>"><i class="fas fa-pencil-alt"></i></a></td>
                   <?php if ($_SESSION["roles"]==1) {
                    ?>
                    <td ><a href="eliminar_empleados.php?id=<?php echo $row['id'] ?>"><i class="fa fa-trash"></i></a></td>
                    <?php
                  }
                }
                ?>
                <td style="font-size:11px"><?php echo $row['estado']; ?></td>
                <td style="font-size:11px"><?php echo $row['nombre_empleados']; ?></td>
                <td style="font-size:11px"><?php echo $row['apellido']; ?></td>
                <td style="font-size:11px"><?php echo  $row['cc']; ?></td>
                <td style="font-size:11px"><?php echo $row['sexo']; ?></td>
                <td style="font-size:11px"><?php echo $row['correo']; ?></td>
                <td style="font-size:11px"><?php echo $row['celular']; ?></td>
                <td style="font-size:11px"><?php echo $row['sede']; ?></td>
                <td style="font-size:11px"><?php echo $row['empresa']; ?></td>
                <td style="font-size:11px"><?php echo $row['ciudad']; ?></td>
                <td style="font-size:11px"><?php echo $row['nombre_cargo']; ?></td>
                <td style="font-size:11px"><?php if($row['salario']!=""){echo number_format($row['salario'],0,",",".");}else{echo $row['salario'];} ?></td>
                <td style="font-size:11px"><?php echo $row['tipo_contrato']; ?></td>
                <td style="font-size:11px"><?php echo $row['fecha_nac']; ?></td>
                <td style="font-size:11px">
                  <?php
                  $dia=date("d");
                  $mes=date("m");
                  $ano=date("Y");
                  $dianaz=date("d",strtotime($row['fecha_nac']));
                  $mesnaz=date("m",strtotime($row['fecha_nac']));
                  $anonaz=date("Y",strtotime($row['fecha_nac']));

                  if (($mesnaz == $mes) && ($dianaz > $dia)) {
                    $ano=($ano-1); }

                    if ($mesnaz > $mes) {
                      $ano=($ano-1);}
                      echo $edad=($ano-$anonaz);
                                 //echo $annos->y;
                      ?>

                    </td>

                    <td style="font-size:11px"><?php echo date("M",strtotime($row['fecha_nac'])); ?></td>
                    <td style="font-size:11px"><?php echo $row['rh']; ?></td>
                    <td style="font-size:11px"><?php echo $row['centro']; ?></td>
                    <td style="font-size:11px"><?php echo $row['fecha_ing']; ?></td>
                    <td style="font-size:11px"><?php echo $row['duracion_cont']; ?></td>
                    <td style="font-size:11px"><?php echo $row['prorroga']; ?></td>
                    <td style="font-size:11px"><?php if($row['auxilio']!=""){echo number_format($row['auxilio'],0,",",".");}else{echo $row['auxilio'];} ?></td>
                    <td style="font-size:11px"><?php if($row['auxilio_tte']!=""){echo number_format($row['auxilio_tte'],0,",",".");}else{echo $row['auxilio_tte'];} ?></td>
                    <td style="font-size:11px"><?php echo $row['eps']."<br>". $row['fecha_eps']; ?></td>
                    <td style="font-size:11px"><?php echo $row['afp'] . "<br>" . $row['fecha_afp']; ?></td>
                    <td style="font-size:11px"><?php echo $row['ccf']."<br>". $row['fecha_ccf']; ?></td>
                    <td style="font-size:11px"><?php echo $row['arl']."<br>".$row['fecha_arl']; ?></td>
                    <td style="font-size:11px"><?php echo $row['direccion']; ?></td>
                    <td style="font-size:11px"><?php echo $row['barrio']; ?></td>
                    <td style="font-size:11px"><?php echo $row['telefono']; ?></td>
                    <td style="font-size:11px"><?php echo $row['contacto']; ?></td>
                    <td style="font-size:11px"><?php echo $row['celular_cont']; ?></td>
                    <td style="font-size:11px"><?php echo $row['lugar_nac']; ?></td>
                    <td style="font-size:11px">
                      <?php
                                 /* $cumpleanos = new DateTime($row['fecha_ing']);
                                  $hoy = new DateTime();
                                  $annos = $hoy->diff($cumpleanos);*/
                                  if ($row['fecha_retiro']=="") {

                                    $dia=date("d");
                                    $mes=date("m");
                                    $ano=date("Y");
                                    $dianaz=date("d",strtotime($row['fecha_ing']));
                                    $mesnaz=date("m",strtotime($row['fecha_ing']));
                                    $anonaz=date("Y",strtotime($row['fecha_ing']));

                                    if (($mesnaz == $mes) && ($dianaz > $dia)) {
                                      $ano=($ano-1); }

                                      if ($mesnaz > $mes) {
                                        $ano=($ano-1);}

                                        echo $edad=($ano-$anonaz);
                                      //  echo $annos->y;
                                      }
                                      ?>
                                    </td>

                                    <td style="font-size:11px"><?php echo $row['jefe_inm']; ?></td>
                                    <td style="font-size:11px"><?php echo $row['fecha_retiro']; ?></td>
                                    <td style="font-size:11px"><?php echo date("M",strtotime($row['fecha_retiro'])); ?></td>
                                    <td style="font-size:11px"><?php echo date("Y",strtotime($row['fecha_retiro'])); ?></td>
                                    <td style="font-size:11px"><?php echo $row['parentesco']; ?></td>
                                    <td style="font-size:11px"><?php echo $row['celular_contacto']; ?></td>
                                    <td style="font-size:11px"><?php echo $row['area']; ?></td>
                                    <td style="font-size:11px"><?php echo $row['depto']; ?></td>
                                    <td style="font-size:11px"><?php echo $row['zona']; ?></td>
                                    <td style="font-size:11px"><?php echo $row['nivel_edu_1']; ?></td>
                                    <td style="font-size:11px"><?php echo $row['nivel_edu_2']; ?></td>
                                    <td style="font-size:11px"><?php echo $row['titulo_obt']; ?></td>
                                    <td style="font-size:11px"><?php echo $row['estado_civil']; ?></td>
                                    <td style="font-size:11px"><?php echo $row['conyuge']; ?></td>
                                    <td style="font-size:11px"><?php echo $row['celular_conyuge']; ?></td>
                                    <td style="font-size:11px"><?php echo "Hijos Registrados" ;
                                    $id_empleados=$row['id'];
                                    $query_hj="SELECT `id_det_hijos`, `nombre`, `fecha_nac`, `vive_con_el`, `sexo`, id_emp FROM `detalles_hijos` WHERE id_emp='$id_empleados'";
                                    $resultado_hj=$conexion_rh-> query ($query_hj);
                                    while ($row_hj=$resultado_hj->fetch_assoc()) 
                                    {
                                      echo "<li>".$row_hj['nombre']."</li>";
                                    }
                                    ?>
                                  </td>

                                  <td style="font-size:11px"><?php echo $row['estrato']; ?></td>
                                  <td style="font-size:11px"><?php echo $row['raza']; ?></td>
                                  <td style="font-size:11px"><?php echo $row['tasa_riego']; ?></td>
                                  <td style="font-size:11px"><?php echo $row['cesantias']; ?></td>
                                  <td style="font-size:11px"><?php echo $row['comites']; ?></td>
                                  <td style="font-size:11px"><?php echo $row['forma_pago']; ?></td>
                                  <td style="font-size:11px"><?php echo $row['cuenta_ban']; ?></td>
                                  <td style="font-size:11px"><?php echo $row['tipo_cta']; ?></td>
                                  <td style="font-size:11px"><?php echo $row['entidad']; ?></td>
                                  <td style="font-size:11px"><?php 

                                  if ($row['tipo_contrato']!="INDEFINIDO")
                                  {
                                  ////// NUEVO METODO DE CONDICION 1: ///////////////////////
                                    $format = 'Y-m-d';
                                  /// fecha de inicio

                                  //$startDateString = '2017-03-01';
                                    $startDateString = $row['fecha_ing'];
                                    $endDateString = date("Y-m-d");

                                  /// fecha de fin
                                  //$endDateString = '2017-03-31';
                                    if ($row['fecha_ing']=="") {
                                      $startDateString =date("Y-m-d");
                                    }
                                    $startDateTime = DateTime::createFromFormat($format, $startDateString);
                                    $endDateTime = DateTime::createFromFormat($format, $endDateString);
                                    $dateInterval = new DateInterval('P1D');
                                    $days = new DatePeriod($startDateTime, $dateInterval, $endDateTime);

                                //$startDateTime = new DateTime('first day of this month');
                                //$endDateTime = new DateTime('last day of this month');

                                    $condicion1="";
                                    foreach ($days as $day) {
                                  // Asignamos un número por cada día de la semana 6 y 7 para sábado y domingo
                                      $weekDay = $day->format('N');
                                      $dia = $day->format('Y-m-d');
                                  // Si es sábado 6, domingo 7 o festivo no lo imprime


                                      $condicion1=$condicion1+1;

                                //// aqui cuenta o imprime sino es ssabado ni domingo ni feriado   
                                  //print_r($day->format('d-m-Y'));
                                    //echo PHP_EOL; 
                                    }    

                                //echo $condicion1;
                                //$row['fecha_ing'];
                                    if (($row['duracion_cont']*30)<=($condicion1-20))
                                    {
                                      echo "<span style='color:red'>Alerta</span>";
                                    }
                                    else
                                    {
                                      echo "<span style='color:green'>OK</span>";

                                    }
                                  }


                                  ?>
                                </td>
                              </tr>

                              <?php }       ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php include("footer.php"); ?>
              </div>


              <!-- VENTANA MODAL-->
              <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                <form enctype="multipart/form-data" class="form-horizontal" action="<?php 
                if (isset($_GET['id'])) {
                  echo "act_empleados.php";
                }
                else
                {
                  echo "nuevo_empleados.php";
                }
                ?>" method="POST" name="formulario" >
                <?php
                $idempleados=0;
                if (isset($_GET['id'])) {
                  $idempleados=$_GET['id'];
                }  
                $query="SELECT `idempleados`, `nombre`, `apellido`, `cc`, `correo`, `id_cargo`, `salario`, `tipo_contrato`, `id_empresas`, `responsable`, `valor_hora`, `costo_hora`, `nombre2`, `apellido2`, `tipo_doc`, `fecha_nac`, `rh`, `centro`, `fecha_ing`, `duracion_cont`, `prorroga`, `auxilio`, `auxilio_tte`, `porcentaje`, `total_dev`, `eps`, `fecha_eps`, `afp`, `fecha_afp`, `ccf`, `fecha_ccf`, `arl`, `fecha_arl`, `equipo`, `descripcion_equipo`, `clave_correo`, `usuario_correo`, `examen`, `forma_pago`, `cuenta_ban`, `tipo_cta`, `entidad`, `direccion`, `barrio`, `telefono`, `celular`, `contacto`, `celular_cont`, `afiliadopor`,imagen,sexo, lugar_nac, antiguedad, jefe_inm, estado, fecha_retiro, empresa, ciudad, parentesco, celular_contacto, area, celular_contacto, depto, zona, nivel_edu_1, nivel_edu_2, titulo_obt, estado_civil, conyuge, celular_conyuge, solo, estrato, raza, tasa_riego, cesantias, comites 
                FROM `empleados` 
                WHERE idempleados='$idempleados'";
                $resultadoc=$conexion_rh->query($query);
                $rowx=$resultadoc->fetch_assoc();
                ?>                                          

                <div class="modal-dialog modal-lg">
                  <div class="modal-content animated bounceInRight">
                    <div class="modal-header">
                      <a href="empleados.php"><button type="button" class="close" ><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></a>
                      <h4 style="text-align: left;" class="modal-title"> <h2 class='modal-title'><img alt='Logo' src='img/logo.png' height='7%' width='7%'> Nuevo Empleado</h2>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                          <div class="row">

                            <div class="col-xs-2">
                              <div id="file-preview-zone"><img src="img/<?php if (isset($_GET['id'])) { if ($rowx['imagen']!="") {echo $rowx['imagen'];} else { echo "no-user.jpg"; } } else {
                                echo "no-user.jpg"; } ?>" id="profile" height="200px" width="150px"> 
                              </div>
                              <label class="custom-file-upload">
                                <input id="file-upload" name="file-upload" type="file" accept="image/*" />
                                <i class="fa fa-camera"></i>
                              </label>
                            </div>

                            <div class="col-xs-1">
                            </div>


                            <!-- Datos-->                                                   
                            <div class="col-xs-9">
                              <h3>Datos Personales</h3>
                              <hr style="margin:2% 0;border: 2px solid #fc9;">
                              
                              <div tyle="margin:1% 0;" class="row">
                                <div class="col-md-6">
                                  <input type="hidden" placeholder="" class="form-control" name="idempleados" value="<?php echo $rowx['idempleados'] ;?>" >
                                  <label>Primer Nombre <i style="padding-top: 0px; display: none " title="Escriba con el teclado en minúsculas" class="fa fa-info-circle"></i></label>
                                  <input type="text" placeholder="Ingresa tu nombre" onkeyup="MaysPrimera(this);"  class="form-control" name="nombre" id="nombre
                                  " value="<?php echo $rowx['nombre'] ;?>" >
                                </div>

                                <div class="col-md-6">
                                  <label>Segundo Nombre</label> <input onkeyup="MaysPrimera(this);"" type="text" placeholder="Ingresa los nombres" class="form-control" name="nombre2" value="<?php echo $rowx['nombre2'] ;?>">
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6">
                                  <label>Primer Apellido</label> <input onkeyup="MaysPrimera(this);"" type="text" placeholder="Ingresa los apellidos" class="form-control" name="apellido" value="<?php echo $rowx['apellido'] ;?>" >
                                </div>
                                
                                <div class="col-md-6">
                                  <label>Segundo Apellido</label> <input onkeyup="MaysPrimera(this);"" type="text" placeholder="Ingresa los apellidos" class="form-control" name="apellido2" value="<?php echo $rowx['apellido2'] ;?>">
                                 </div>
                              </div>

                              <div class="row">
                                <div class="col-md-2">
                                  <label>Tipo Doc</label> 
                                  <select name="tipo_doc" class="form-control">
                                    <option value="">Selecc.</option>
                                    <?php if (isset($_GET['id'])) {
                                      echo "<option selected  value='".$rowx['tipo_doc']."'>".$rowx['tipo_doc']."</option>";
                                    }  
                                    ?>                                    
                                    <option value="Cédula de Ciudadanía ">CC Cédula de Ciudadanía </option>
                                    <option value="Cédula de Extranjería">CE Cédula de Extranjería</option>
                                    <option value="Pasaporte">Pass. Pasaporte</option>
                                    <option value="Permiso Especial de Permanencia">PEP Permiso Especial de Permanencia</option>
                                    <option value="Tarjeta de Identidad">TI Tarjeta de Identidad</option>
                                  </select>
                                </div>

                                <div class="col-md-4">
                                  <label>Num. Doc.</label> <input type="text" placeholder="Ingresa tu número de identificaci&oacute;n" class="form-control" name="cc" value="<?php echo $rowx['cc'] ;?>"></div>

                                  <div class="col-md-2">
                                    <label>Sexo</label>
                                    <select class="form-control" name="sexo">
                                      <option value="">Sel.</option>
                                      <?php if ($rowx['sexo']=="F") {
                                        echo "<option selected  value='F'>F</option>";
                                      }  
                                      else
                                      {
                                        echo "<option value='F'>F</option>";
                                      }
                                      if ($rowx['sexo']=="M") {
                                        echo "<option selected  value='M'>M</option>";
                                      }  
                                      else
                                      {
                                        echo "<option value='M'>M</option>";
                                      }
                                      ?>
                                    </select>
                                  </div>

                                  <div class="col-md-4">
                                    <label>Fecha de Nac.</label> <input type="date" placeholder="" class="form-control" name="fecha_nac" value="<?php echo $rowx['fecha_nac'] ;?>"></div>
                                  </div>

                                  <div class="row">
                                    <div class="col-md-2">
                                     <label>RH</label>
                                     <select name="rh" class="form-control">
                                      <option value="A +">A +</option>
                                      <option value="A -">A -</option>
                                      <option value="B +">B +</option>
                                      <option value="B -">B -</option>
                                      <option value="O +">O +</option>
                                      <option value="O -">O -</option>
                                      <option value="AB +">AB +</option>
                                      <option value="AB -">AB -</option>

                                    </select>
                                  </div>

                                  <div class="col-md-4">
                                   <label>Télefono</label>
                                   <input type="text" name="telefono" class="form-control" placeholder="Ingresa telefono" value="<?php echo $rowx['telefono'] ;?>">
                                 </div>

                                 <div class="col-md-6">
                                  <label>Celular</label>
                                  <input type="text" name="celular" class="form-control" placeholder="Ingresa celular" value="<?php echo $rowx['celular'] ;?>">
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-6">
                                  <label>Lugar de Nacimiento</label>
                                  <input type="text" name="lugar_nac" class="form-control" placeholder="Ingresa lugar" value="<?php echo $rowx['lugar_nac'] ;?>">
                                </div>

                                <div class="col-md-6">
                                  <label>Correo electronico</label>
                                  <input type="email" name="correo" class="form-control" placeholder="Ingresa correo" value="<?php echo $rowx['correo'] ;?>">
                                </div>
                              </div>


                              <!-- Datos-->
                            </div>
                          </div>
                        </div>

                              <h3>Datos de dirección y contacto</h3>
                              <hr style="border: 2px solid #fc9;">

                              <div class="form-group">
                                <div class="row">    
                                 <div class="col-md-8">
                                  <label>Dirección</label>
                                  <input autocomplete="off" placeholder="Ingresa direccion" readonly required type="text" onkeyup="MaysPrimera2(this);"  class="form-control" value="<?php echo $rowx['direccion'] ?>" name="direccion" id="direccion" ondblclick='javascript:window.open("generador.html", "Direcion", "width=1000, height=600")' >
                                                        
                                </div>
                                
                                <div class="col-md-4">
                                  <label>Tipo de vivienda</label>
                                  <select name="tvivienda" class="form-control">
                                    <option value="PROPIA">PROPIA</option>
                                    <option value="ALQUILADA">ALQUILADA</option>
                                    <option value="FAMILIAR">FAMILIAR</option>
                                  </select>

                                </div>
                              </div>

                              <div class="row"> 

                                <div class="col-md-4">
                                  <label>Barrio</label>
                                  <input type="text" name="barrio" class="form-control" placeholder="Ingresa barrio" value="<?php echo $rowx['barrio'] ;?>">
                                </div>

                                <div class="col-md-4">
                                  <label>Ciudad</label>
                                  <input type="text" name="ciudad" class="form-control" placeholder="Ingresa ciudad" value="<?php echo $rowx['ciudad'] ;?>">
                                </div>
                                
                                <div class="col-md-4">
                                  <label>Estrato</label>    
                                  <select id="estrato" name="estrato" class="form-control">
                                    <option value="">Seleccione</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                  </select>
                                </div>
                                
                              </div>

                              <div class="row"> 

                                <div class="col-md-4">
                                  <label>Contacto</label>
                                  <input type="text" name="contacto" class="form-control" placeholder="Ingresa nombre contacto" value="<?php echo $rowx['contacto'] ;?>">
                                </div>
                                <div class="col-md-4">
                                  <label>Parentesco</label>
                                  <input type="text" name="parentesco" class="form-control" placeholder="Ingresa nombre y apellido" value="<?php echo $rowx['parentesco'] ;?>">
                                </div>
                                <div class="col-md-4">
                                  <label>Telefono del contacto</label>
                                  <input type="text" name="celular_cont" class="form-control" placeholder="Ingresa telefono" value="<?php echo $rowx['celular_cont'] ;?>">
                                </div>
                                <div class="col-md-4">
                                  <label>Celular del contacto</label>
                                  <input type="text" name="celular_contacto" class="form-control" placeholder="Ingresa celular" value="<?php echo $rowx['celular_contacto'] ;?>">
                                </div>

                              </div>
                            </div>


                            <h3>Datos Profesionales</h3>
                            <hr style="border: 2px solid #fc9;">
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-5">
                                  <label>Nivel educativo 1</label>
                                  <select class="form-control" name="nivel_edu_1" id="nivel_edu_1">
                                    <option value="Primaria">Primaria</option>
                                    <option value="Primaria Incompleta">Primaria Incompleta</option>
                                    <option value="Bachiller">Bachiller</option>
                                    <option value="Bachiller incompleto">Bachiller Incompleto</option>
                                    <option value="Técnico">Técnico</option>
                                    <option value="Tecnólogo">Tecnólogo</option>
                                    <option value="Universitario/Profesional">Universitario/Profesional</option>
                                    <option value="Diplomado">Diplomado</option>
                                    <option value="Especialista">Especialista</option>
                                    <option value="Master">Master</option>
                                    <option value="Doctor">Doctor</option>
                                  </select>

                                </div>

                                <div class="col-md-3" style="display: none">
                                  <label>Nivel educativo 2</label>
                                  <input type="text" name="nivel_edu_2" class="form-control" placeholder="Ingresa nivel 2" value="<?php echo $rowx['nivel_edu_2'] ;?>">
                                </div>
                                <div class="col-md-5">
                                  <label>Titulo Obtenido</label>
                                  <input type="text" name="titulo_obt" id="titulo_obt" class="form-control" placeholder="Ingresa titulo">
                                </div>
                                <div class="col-md-2">
                                  <label style="color: white">.</label><br>
                                  <button type="button" onclick="reg_titulo()" class="btn btn-primary">Agregar</button>
                                </div>


                                <!-- Tabla responsive-->

                                <div class="col-md-12">
                                  <br>
                                  <label><h4>Titulos Registrados</h4></label>
                                  <div class="table-responsive">
                                    <div id="resultado_nivel">
                                      <?php
                                      echo "<table class='table table-hover table-responsive'>
                                      <thead>
                                      <tr style='background-color:#fc9; color:black'>
                                      <th>#</th>
                                      <th>Nivel Educativo</th>
                                      <th>Titulo Obtenido</th>
                                      <th><i class='fa fa-trash'></i></th>
                                      </tr>
                                      </thead>
                                      <tbody>";

                 ////Datos del Moje 

                                      if (isset($_GET['id'])) {
                                        $num_reg=$_GET['id'];
                                        $i=0;
                                        $query="SELECT `id_nivel`, `id_empleado`, `nivel_educ`, `titulo_educ` FROM `niveles_educativos` WHERE id_empleado='$num_reg'";
                                        $resultado=$conexion_rh-> query ($query);
                                        while ($row=$resultado->fetch_assoc()) 
                                        {
                                          $i=$i+1;
                                          echo "<tr >
                                          <td>".$i."</td>
                                          <td>".$row['nivel_educ']."</td>
                                          <td>".$row['titulo_educ']."</td>
                                          <td><a onclick='eliminar_titulo(".$row['id_nivel'].")'><i class='fa fa-trash'></i></a></td>
                                          </tr>";
                                        }
                                      }
                                      echo "</tbody>
                                      </table>";
                                      ?>
                                    </div>
                                  </div>
                                </div>
                                <!-- -->
                              </div>
                            </div>



                            <h3>Datos Civiles</h3>
                            <hr style="border: 2px solid #fc9;">
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-4">
                                 <label>Estado Civil</label>
                                 <select class="form-control" name="estado_civil">
                                  <option value="">Sel.</option>
                                  <?php if ($rowx['estado_civil']=="Soltero/a") {
                                    echo "<option selected  value='Soltero/a'>Soltero/a</option>";
                                  }  
                                  else
                                  {
                                    echo "<option value='Soltero/a'>Soltero/a</option>";
                                  }
                                  if ($rowx['estado_civil']=="Casado/a") {
                                    echo "<option selected  value='Casado/a'>Casado/a</option>";
                                  }  
                                  else
                                  {
                                    echo "<option value='Casado/a'>Casado/a</option>";
                                  }
                                  if ($rowx['estado_civil']=="Unión Libre") {
                                    echo "<option selected  value='Unión Libre'>Unión Libre</option>";
                                  }  
                                  else
                                  {
                                    echo "<option value='Unión Libre'>Unión Libre</option>";
                                  }
                                  if ($rowx['estado_civil']=="Divorciado/a") {
                                    echo "<option selected  value='Divorciado/a'>Divorciado/a</option>";
                                  }  
                                  else
                                  {
                                    echo "<option value='Divorciado/a'>Divorciado/a</option>";
                                  }
                                  if ($rowx['estado_civil']=="Viudo/a") {
                                    echo "<option selected  value='Viudo/a'>Viudo/a</option>";
                                  }  
                                  else
                                  {
                                    echo "<option value='Viudo/a'>Viudo/a</option>";
                                  }
                                  ?>
                                </select>

                              </div>
                              <div class="col-md-4">
                                <label>Nombre del conyuge</label>
                                <input type="text" name="conyuge" class="form-control" placeholder="Ingresa nombre" value="<?php echo $rowx['conyuge'] ;?>">
                              </div>
                              <div class="col-md-4">
                                <label>Celular del conyuge</label>
                                <input type="text" name="celular_conyuge" class="form-control" placeholder="Ingresa número" value="<?php echo $rowx['celular_conyuge'] ;?>">
                              </div>
                              <div class="col-md-4" style="display: none">
                                <label>Solo/a</label>
                                <input type="text" name="solo" class="form-control" placeholder="Ingrese su respuesta" value="<?php echo $rowx['solo'] ;?>">
                              </div>

                              <div class="col-md-4">
                                <label>Raza</label>
                                <input type="text" name="raza" class="form-control" placeholder="Ingrese su respuesta" value="<?php echo $rowx['raza'] ;?>">
                              </div>

                              <div class="col-md-2">
                                <label>Sexo</label>
                                <select id="sexo_conyuge" name="sexo_conyuge" class="form-control">
                                  <option value="">Sel</option>
                                  <option value="F">F</option>
                                  <option value="M">M</option>
                                </select>
                              </div>

                              <div class="col-md-12">
                                
                                <?php
                                if (isset($_GET['id'])) {
                                  $temporal=$_GET['id'];
                                }
                                else
                                {
                                  $temporal=rand(999, 9999999);
                                }
                                ?>

                                <input type="hidden" name="num_reg" id="num_reg" value='<?php echo $temporal; ?>'>

                                <label><h3>Datos de Hijos</h3></label>

                                <div class="row">
                                  <div class="col-md-4">
                                    <label>Nombre y Apellido</label>
                                    <input type="text" name="nombre_hijo" id="nombre_hijo" class="form-control">
                                  </div>
                                  
                                  <div class="col-md-3">
                                    <label>Fecha Nac.</label>
                                    <input type="date" name="fecha_hijo" id="fecha_hijo" class="form-control">
                                  </div>

                                  <form action="" method="POST">
                                  <div class="col-md-2">
                                    <label>Sexo</label>
                                    <select id="sexo" name="sexo" class="form-control">
                                      <option value="">Sel</option>
                                      <option  value="F">F</option>
                                      <option  value="M">M</option>
                                    </select>
                                  </div>
                                </form>

                                  <div class="col-md-2">
                                    <label>Vive con el</label>
                                    <select id="vive_con_el" name="vive_con_el" class="form-control">
                                      <option value="">Sel</option>
                                      <option value="Si">Si</option>
                                      <option value="No">No</option>
                                    </select>
                                  </div>

                                  <div class="col-md-2">
                                    <label style="color: white">.</label><br>
                                    <button type="button" onclick="reg_hijo()" class="btn btn-primary">Agregar</button>
                                  </div>
                                </div>
                              </div>

                              <div class="col-md-12">
                                <br>
                                <label><h4>Hijos Registrados</h4></label>
                                <div class="table-responsive">
                                  <div id="resultado">
                                    <?php

                                    echo "<table class='table table-hover table-responsive'>
                                    <thead>
                                    <tr style='background-color:#fc9; color:black'>
                                    <th>#</th>
                                    <th>Nombre y Apellido</th>
                                    <th>Fecha de Nac.</th>
                                    <th>Edad</th>
                                    <th>Sexo</th>
                                    <th>Vive con el</th>
                                    <th><i class='fa fa-trash'></i></th>
                                    </tr>
                                    </thead>
                                    <tbody>";


                 ////Datos del Moje 

                                    if (isset($_GET['id'])) {
                                      $num_reg=$_GET['id'];
                                      $i=0;

                                      $query="SELECT `id_det_hijos`, `nombre`, `fecha_nac`, `vive_con_el`, `sexo`, id_emp FROM `detalles_hijos` WHERE id_emp='$num_reg'";
                                      $resultado=$conexion_rh-> query ($query);
                                      while ($row=$resultado->fetch_assoc()) 
                                      {

                                        $i=$i+1;

                                        if ($row['fecha_nac']!="") {

                                          $dia=date("d");
                                          $mes=date("m");
                                          $ano=date("Y");


                                          $dianaz=date("d",strtotime($row['fecha_nac']));
                                          $mesnaz=date("m",strtotime($row['fecha_nac']));
                                          $anonaz=date("Y",strtotime($row['fecha_nac']));

                                          if (($mesnaz == $mes) && ($dianaz > $dia)) {
                                            $ano=($ano-1); }

                                            if ($mesnaz > $mes) {
                                              $ano=($ano-1);}
                                              $edad=($ano-$anonaz);
        //  echo $annos->y;
                                            }
                                            echo "<tr >
                                            <td>".$i."</td>
                                            <td>".$row['nombre']."</td>
                                            <td>".$row['fecha_nac']."</td>
                                            <td>".$edad."</td>
                                            <td>".$row['sexo']."</td>
                                            <td>".$row['vive_con_el']."</td>
                                            <td><a onclick='eliminar_hijo(".$row['id_det_hijos'].")'><i class='fa fa-trash'></i></a></td>
                                            </tr>";
                                          }
                                        }
                                        echo "</tbody>
                                        </table>";

                                        ?>
                                      </div>
                                    </div>

                                  </div>

                                </div>
                              </div>

                              <h3>Datos Prestacionales</h3>
                              <hr style="border: 2px solid #fc9;">
                              <div class="form-group">
                                <div class="row">
                                 <div class="col-md-4">
                                  <label>Estado</label>
                                  <select class="form-control" name="estado">
                                    <option value="">Seleccione</option>
                                    <?php if ($rowx['estado']=="Activo") {
                                      echo "<option selected  value='Activo'>Activo</option>";
                                    }  
                                    else
                                    {
                                      echo "<option value='Activo'>Activo</option>";
                                    }
                                    if ($rowx['estado']=="Retirado") {
                                      echo "<option selected  value='Retirado'>Retirado</option>";
                                    }  
                                    else
                                    {
                                      echo "<option value='Retirado'>Retirado</option>";
                                    }
                                    ?>
                                  </select>
                                </div>

                                <div class="col-md-4">
                                  <label>Empresa</label>
                                  <select class="form-control" name="empresa">
                                    <option value="">Seleccione</option>
                                    <?php if ($rowx['empresa']=="TITA") {
                                      echo "<option selected  value='TITA'>TITA</option>";
                                    }  
                                    else
                                    {
                                      echo "<option value='TITA'>TITA</option>";
                                    }
                                    if ($rowx['empresa']=="TIEMPOS") {
                                      echo "<option selected  value='TIEMPOS'>TIEMPOS</option>";
                                    }  
                                    else
                                    {
                                      echo "<option value='TIEMPOS'>TIEMPOS</option>";
                                    }
                                    ?>
                                  </select>
                                </div> 

                                <div class="col-md-4"> 
                                   <label>Departamento</label>  
                                   <select class="form-control" onChange="despliegue_campos(this)">
                                    <option value="">Seleccione</option>
                                    <option value="Administración">Administración</option>
                                    <option value="Producción">Producción</option>
                                    <option value="Ventas">Ventas</option>
                                    <option value="Logistica">Logistica</option>
                                    <option value="Mano de obra indirecta">Mano de obra indirecta</option>
                                  </select>
                                </div>
                              </div>
                            </div>

                          <div class="form-group"  >
                            <div class="row" id="desplegable" style="display:none;">
                              <div class="col-md-4">
                                <label>Centro de Costo</label>                                                                   
                                <select name="centro" id="centro" class="col-sm-2 form-control">
                                 <?php 
                                 echo "<option selected >Seleccione</option>";
                                 include 'conexion_rh.php';                                                            
                                 $query="SELECT * from centro_costos order by nombre_cc";
                                 $resultado=$conexion_rh-> query ($query);                                                                                                                                             
                                 while ($row=$resultado->fetch_assoc()) {
                                  if ($row["cod_cc"]==$rowx['centro']) {
                                    ?> 
                                    <option selected value="<?php echo $row["cod_cc"] ?>"><?php echo $row['nombre_cc']; ?></option>
                                    <?php
                                  }
                                  else
                                  {  
                                    ?> 
                                    <option value="<?php echo $row["cod_cc"] ?>"><?php echo $row['nombre_cc']; ?></option>
                                    <?php 
                                  }                                                            
                                } 
                                ?> 
                              </select>
                            </div>

                            <div class="col-md-4">                                                           
                              <label>Área</label>
                              <select name="area" id="area" class="col-sm-2 form-control">
                                <?php 
                                echo "<option selected >Seleccione</option>";
                                include 'conexion_rh.php';
                                $query="SELECT * from area order by nombre_area";
                                $resultado=$conexion_rh-> query ($query);                                                        

                                while ($row=$resultado->fetch_assoc()) {
                                 if ($row['id_areas']==$rowx['area']) {
                                  ?> 
                                  <option selected value="<?php echo $row['id_areas'] ?>"><?php echo $row['nombre_area']; ?></option>
                                  <?php
                                }
                                else
                                {  
                                  ?> 
                                  <option value="<?php echo $row['id_areas'] ?>"><?php echo $row['nombre_area']; ?>
                                  </option>
                                  <?php 
                                }                                                             
                              } 
                              ?> 
                            </select>
                          </div>

                          <div id="nodesplegable" style="display:;">
                          </div>

                          <div class="col-md-4">
                            <label>Cargo</label>
                            <select name="cargo" id="cargo" class="col-sm-2 form-control">
                             <?php 
                             echo "<option selected >Seleccione</option>";                                                                    
                             include 'conexion_rh.php';                                                            
                             $query="SELECT * from Tipo_cargo order by identificador, nombre";
                             $resultado=$conexion_rh-> query ($query);                                                                                                                                             
                             while ($row=$resultado->fetch_assoc()) {
                              if ($row["id"]==$rowx['id_cargo']) {
                                ?> 
                                <option selected value="<?php echo $row["id"] ?>"><?php echo $row['nombre']; ?></option>
                                <?php
                              }
                              else
                              {  
                                ?> 
                                <option value="<?php echo $row["id"] ?>"><?php echo $row['nombre']; ?></option>
                                <?php 
                              }
                            } 
                            ?> 
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group"  >
                      <div class="row">
                        <div class="col-md-4" style="display: none">
                          <label>Antiguedad</label>
                          <input type="text" class="form-control" name="antiguedad" placeholder="Ingresa antiguedad" value="<?php echo $rowx['antiguedad'] ;?>">
                        </div>

                        <div class="col-md-4">
                          <label>Jefe Inmediato</label>
                          <select id="jefe_inm" name="jefe_inm" class="form-control">
                            <option value="">Seleccione</option>
                            <option value="Edward Mejia">Edward Mejia</option>
                            <option value="Andres Pelaez">Andres Pelaez</option>
                            <option value="Luisa Fernanda Ramírez">Luisa Fernanda Ramirez</option>
                            <option value="Beatriz Pelaez">Beatriz Pelaez</option>
                            <option value="Lucia Victoria Florez">Lucia Victoria Florez</option>
                            <option value="Sonia Montoya">Sonia Montoya</option>
                            <option value="Jorge Serna">Jorge Serna</option>
                            <option value="Mateo Rico">Mateo Rico</option>
                            <option value="Joel Pineda">Joel Pineda</option>
                            <option value="Lina Pelaez">Lina Pelaez</option>
                            <option value="Claudia Muñoz">Claudia Muñoz</option>
                            <option value="Denis Gallego">Denis Gallego</option>
                            <option value="Hector Pérez">Hector Perez</option>
                            <option value="Johana González">Johana Gonzalez</option>
                            <option value="Monica Gómez">Monica Gómez</option>
                          </select>
                        </div>

                        <div class="col-md-4">
                          <label>Comites</label>
                          <select name="comites" class="form-control" >
                           <?php if (isset($_GET['id'])) {
                            echo "<option selected  value='".$rowx['comites']."'>".$rowx['comites']."</option>";
                          }  
                          ?>
                          <option >Seleccione</option>
                          <option value="COPASST">COPASST</option>
                          <option value="COMITÉ DE CONVIVENCIA">COMITÉ DE CONVIVENCIA</option>                               
                          <option value="BRIGADA DE EMERGENCIA">BRIGADA DE EMERGENCIA</option>                   
                          <option value="HACCP">HACCP</option>
                          <option value="INVESTIGACION Y DESARROLLO">INVESTIGACION Y DESARROLLO</option>
                          <option value="INDICADORES">INDICADORES</option>
                          <option value="TPM">TPM</option>
                        </select>
                      </div>

                      <div class="col-md-4" style="display: none;">
                        <label>Zona</label>
                        <input type="text" class="form-control" name="zona" placeholder="Ingresa zona" value="<?php echo $rowx['zona'] ;?>">
                      </div>

                      <div class="col-md-4">
                        <label>Tasa de Riesgo</label>
                        <select name="tasa_riego" class="form-control" >
                         <?php if (isset($_GET['id'])) {
                          echo "<option selected  value='".$rowx['tasa_riego']."'>".$rowx['tasa_riego']."</option>";
                        }  
                        ?>
                        <option >Seleccione</option>
                        <option value="Clase I Riesgo Mínimo (0,522)">Clase I Riesgo Mínimo (0,522)</option>
                        <option value="Clase II Riesgo Bajo (1,044)">Clase II Riesgo Bajo (1,044)</option>                               
                        <option value="Clase III Riesgo Medio (2,436)">Clase III Riesgo Medio (2,436)</option>                   
                        <option value="Clase IV Riesgo Alto (4,350)">Clase IV Riesgo Alto (4,350)</option>
                        <option value="Clase V Riesgo Máximo (6,960)">Clase V Riesgo Máximo (6,960)</option>
                      </select>
                    </div>

                    <div class="col-md-4">
                      <label>Fecha de Ingreso</label>
                      <input type="date" class="form-control" name="fecha_ing" placeholder="Ingresa direccion" value="<?php echo $rowx['fecha_ing'] ;?>">
                    </div>


                    <div class="col-md-4">
                      <label>Tipo de Contrato</label>
                      <select name="tipo_contrato" class="form-control" >
                       <?php if (isset($_GET['id'])) {
                        echo "<option selected  value='".$rowx['tipo_contrato']."'>".$rowx['tipo_contrato']."</option>";
                      }  
                      ?>
                      <option >Seleccione</option>
                      <option value="APRENDIZ LECTIVA">APRENDIZ LECTIVA</option>
                      <option value="APRENDIZ PRACTICA">APRENDIZ PRACTICA</option>                               
                      <option value="FIJO">FIJO</option>                   
                      <option value="INDEFINIDO">INDEFINIDO</option>
                      <option value="MISION">MISION</option>
                    </select>
                  </div>

                  <div class="col-md-4">
                    <label>Jornada Laboral</label>
                    <select id="duracion_cont" name="duracion_cont" class="form-control">
                      <option value="">Seleccione</option>
                      <option value="Medio tiempo">Medio tiempo</option>
                      <option value="Tiempo completo">Tiempo completo</option>
                    </select>
                  </div>

                  <div class="col-md-4" style="display: none">
                    <label>Prórroga</label>
                    <input type="text" value="<?php echo $rowx['prorroga'] ;?>" class="form-control" name="prorroga" placeholder="Ingresa prorroga">
                  </div>

                  <div class="col-md-4">
                    <label>Fecha de Retiro</label>
                    <input type="date" class="form-control" name="fecha_retiro" placeholder="Ingresa retiro" value="<?php echo $rowx['fecha_retiro'] ;?>">
                  </div>

                  <div class="col-md-4">
                    <label>EPS</label>
                    <select name="eps" class="form-control" >
                     <?php if (isset($_GET['id'])) {
                      echo "<option selected  value='".$rowx['eps']."'>".$rowx['eps']."</option>";
                    }  
                    ?>
                    <option value="">Selecc.</option>
                    <option value="Café Salud">Café Salud</option>
                    <option value="Compensar">Compensar</option>
                    <option value="Coomeva">Coomeva</option>
                    <option value="Nueva EPS">Nueva EPS</option>
                    <option value="Salud Total">Salud Total</option>
                    <option value="Sanitas">Sanitas</option>
                    <option value="Sura">Sura</option>
                  </select>
                </div>

                <div class="col-md-4" style="display: none;">
                  <label>Fecha Afil. EPS</label>
                  <input type="date" value="<?php echo $rowx['fecha_eps'] ;?>"  class="form-control" name="fecha_eps" placeholder="Ingresa auxilio">
                </div>

                <div class="col-md-4">
                  <label>AFP</label>
                  <select name="afp" class="form-control">
                   <?php if (isset($_GET['id'])) {
                    echo "<option selected  value='".$rowx['afp']."'>".$rowx['afp']."</option>";
                  }  
                  ?>
                  <option value="">Selecc.</option>
                  <option value="Colfondos">Colfondos</option>
                  <option value="Colpensiones">Colpensiones</option>
                  <option value="Porvenir">Porvenir</option>
                  <option value="Protección">Protección</option>
                </select>
              </div>

              <div class="col-md-4" style="display: none;">
                <label>Fecha Afil. AFP</label>
                <input type="date" value="<?php echo $rowx['fecha_afp'] ;?>" class="form-control" name="fecha_afp" placeholder="Ingresa auxilio">
              </div>

              <div class="col-md-4">
                <label>CCF</label>
                <select name="ccf" class="form-control">
                  <?php if (isset($_GET['id'])) {
                    echo "<option selected  value='".$rowx['ccf']."'>".$rowx['ccf']."</option>";
                  }  
                  ?>
                  <option value="">Selecc.</option>
                  <option value="Comfama">Comfama</option>
                  <option value="Compensar">Compensar</option>
                </select>
              </div>

              <div class="col-md-4" style="display: none;">
                <label>Fecha Afil. CCF</label>
                <input type="date" class="form-control" value="<?php echo $rowx['fecha_ccf'] ;?>" name="fecha_ccf" placeholder="Ingresa auxilio">
              </div>

              <div class="col-md-4">
                <label>ARL</label>
                <select name="arl" class="form-control">
                  <?php if (isset($_GET['id'])) {
                    echo "<option selected  value='".$rowx['arl']."'>".$rowx['arl']."</option>";
                  }  
                  ?>
                  <option value="">Selecc.</option>
                  <option value="Sura">Sura</option>
                </select>
              </div> 

              <div class="col-md-4" style="display: none;">
                <label>Fecha Afil. ARL</label>
                <input type="date" class="form-control" name="fecha_arl" placeholder="Ingresa auxilio" value="<?php echo $rowx['fecha_arl'] ;?>">
              </div>

              <div class="col-md-4">
                <label>Cesantías</label>
                <input type="text" class="form-control" name="cesantias" placeholder="Ingresa cesantías" value="<?php echo $rowx['cesantias'] ;?>">
              </div>
            </div>
          </div>


          <h3>Datos Nominales</h3>
          <hr style="border: 2px solid #fc9;">
          <div class="form-group">
            <div class="row">
             <div class="col-md-4">
              <label>Salario </label> <input id=salario type="text" placeholder="salario" class="form-control" name="salario" value="<?php echo $rowx['salario'] ;?>">
            </div>

            <div class="col-md-4">
              <label>Auxilio de Movilidad</label>
              <input type="texto" class="form-control" name="auxilio" placeholder="Ingresa auxilio" value="<?php echo $rowx['auxilio'] ;?>">
            </div>

            <div class="col-md-4">
              <label>Auxilio Transporte</label>
              <input type="text" class="form-control" name="auxilio_tte" placeholder="Ingresa auxilio" value="<?php echo $rowx['auxilio_tte'] ;?>">
            </div>

            <div class="col-md-4">
              <label>Forma de Pago</label>
              <select class="form-control" name="forma_pago">
                <?php if (isset($_GET['id'])) {
                  echo "<option selected  value='".$rowx['forma_pago']."'>".$rowx['forma_pago']."</option>";
                }  
                ?>
                <option value="">Selecc.</option>
                <option value="Efectivo">Efectivo</option>
                <option value="Transferencia">Transferencia</option>
              </select>
            </div>

            <div class="col-md-4">
              <label>Cuenta bancaria</label>
              <input type="text" name="cuenta_ban" class="form-control" value="<?php echo $rowx['cuenta_ban'] ;?>">
            </div>

            <div class="col-md-4">
              <label>Tipo de Cuenta</label>
              <select class="form-control" name="tipo_cta">
                <option value="">Selecc.</option>
                <?php if (isset($_GET['id'])) {
                  echo "<option selected  value='".$rowx['tipo_cta']."'>".$rowx['tipo_cta']."</option>";
                }  
                ?>
                <option value="Ahorros">Ahorros</option>
                <option value="Corriente">Corriente</option>
              </select>
            </div>

            <div class="col-md-4">
              <label>Entidad Bancaria</label>
              <select class="form-control" name="entidad">
                <?php if (isset($_GET['id'])) {
                  echo "<option selected  value='".$rowx['entidad']."'>".$rowx['entidad']."</option>";
                }  
                ?>
                <option value="">Selecc.</option>
                <option value="Banco de Bogotá">Banco de Bogotá</option>
                <option value="Bancolombia">Bancolombia</option>
                <option value="BBVA">BBVA</option>
                <option value="Caja Social">Caja Social</option>
              </select>
            </div>

          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>

      </div>
    </div>
  </form>
</div>

<!-- VENTANA MODAL-->
</div>
<?php include("script.php"); ?>

<script type="text/javascript">
 <?php
 if (isset($_GET['id'])) {
  ?>
  $('#myModal').modal('show');
  <?php                       }  
  ?>
  function readFile(input) {
  if (input.files && input.files[0]) {
  var reader = new FileReader();

  reader.onload = function (e) {
  var previewZone = document.getElementById('file-preview-zone');

  if (document.getElementById('file-preview')) {
  previewZone.removeChild(document.getElementById('file-preview'));
}

var filePreview = document.createElement('img');
filePreview.id = 'file-preview';
filePreview.style.width = '150px';
filePreview.style.height = '200px';
document.getElementById("profile").style.display="none";
//e.target.result contents the base64 data from the image uploaded
filePreview.src = e.target.result;
console.log(e.target.result);
previewZone.appendChild(filePreview);
}

reader.readAsDataURL(input.files[0]);
}
}

var fileUpload = document.getElementById('file-upload');
fileUpload.onchange = function (e) {
readFile(e.srcElement);
}



</body>
</html>
