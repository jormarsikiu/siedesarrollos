<!-- Mainly scripts -->
    <script src="../SIE/js/jquery-3.1.1.min.js"></script>
    <script src="../SIE/js/bootstrap.min.js"></script>
    <script src="../SIE/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../SIE/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../SIE/js/inspinia.js"></script>
    <script src="../SIE/js/plugins/pace/pace.min.js"></script>

 <!-- Flot -->
    <script src="../SIE/js/plugins/flot/jquery.flot.js"></script>
    <script src="../SIE/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="../SIE/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="../SIE/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="../SIE/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="../SIE/js/plugins/flot/jquery.flot.symbol.js"></script>
    <script src="../SIE/js/plugins/flot/jquery.flot.time.js"></script>
<!-- Sparkline -->
    <script src="../SIE/js/plugins/sparkline/jquery.sparkline.min.js"></script>

  <script src="../SIE/js/plugins/dataTables/datatables.min.js"></script>
  <!-- Select2 -->
    <script src="../SIE/js/plugins/select2/select2.full.min.js"></script>

     <!-- Chosen -->
    <script src="../SIE/js/plugins/chosen/chosen.jquery.js"></script>

    
    <!-- blueimp gallery -->
    <script src="../SIE/js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>

     <!-- Page-Level Scripts -->

      <script src="simple-mask-money.js"></script>
     <!-- Page-Level Scripts -->
    <script>



     

$(document).ready(function(){
      
 

$("#rendi_ref").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        // sin decimales --> .replace(/([0-9])([0-9]{0})$/, '$1')
                        .replace(/([0-9])([0-9]{2})$/, '$1,$2')

                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
        });
    }
});


$("#entrada_libro").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        // sin decimales --> .replace(/([0-9])([0-9]{0})$/, '$1')
                        .replace(/([0-9])([0-9]{2})$/, '$1,$2')

                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
        });
    }
});

$("#salida_libro").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        // sin decimales --> .replace(/([0-9])([0-9]{0})$/, '$1')
                        .replace(/([0-9])([0-9]{2})$/, '$1,$2')

                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
        });
    }
});

$("#factor").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        // sin decimales --> .replace(/([0-9])([0-9]{0})$/, '$1')
                        .replace(/([0-9])([0-9]{2})$/, '$1.$2')

                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});

$("#prec_comp").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        // sin decimales --> .replace(/([0-9])([0-9]{0})$/, '$1')
                        .replace(/([0-9])([0-9]{2})$/, '$1.$2')

                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});


$("#prec_venta").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        // sin decimales --> .replace(/([0-9])([0-9]{0})$/, '$1')
                        .replace(/([0-9])([0-9]{2})$/, '$1.$2')

                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});


$("#valor_pago").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        // sin decimales --> .replace(/([0-9])([0-9]{0})$/, '$1')
                        .replace(/([0-9])([0-9]{2})$/, '$1.$2')

                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});



 $("#iva_compra").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        // Con decimales --> .replace(/([0-9])([0-9]{2})$/, '$1,$2')
                        .replace(/([0-9])([0-9]{0})$/, '$1')

                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
        });
    }
});



 $("#precio_unitw").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        // Con decimales --> .replace(/([0-9])([0-9]{2})$/, '$1,$2')
                        .replace(/([0-9])([0-9]{0})$/, '$1')

                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
        });
    }
});


 $("#cantidadw").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        // Con decimales --> .replace(/([0-9])([0-9]{2})$/, '$1,$2')
                        .replace(/([0-9])([0-9]{0})$/, '$1')

                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
        });
    }
});


          $("#cupo").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        // Con decimales --> .replace(/([0-9])([0-9]{2})$/, '$1,$2')
                        .replace(/([0-9])([0-9]{0})$/, '$1')

                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
        });
    }
});


$("#costow").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        // Con decimales --> .replace(/([0-9])([0-9]{2})$/, '$1,$2')
                        .replace(/([0-9])([0-9]{0})$/, '$1')

                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
        });
    }
});

$("#ivaw").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        // Con decimales --> .replace(/([0-9])([0-9]{2})$/, '$1,$2')
                        .replace(/([0-9])([0-9]{0})$/, '$1')

                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
        });
    }
});


                        $('.chosen-select').chosen({width: "100%"});


            $('.dataTables-example').DataTable({

                pageLength: 15,
                responsive: true,
                "bAutoWidth": false,
                dom: '<"html5buttons"B>lTfgitp',
                    "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },
                buttons: [
                    /*  { extend: 'copy'},
                    {extend: 'csv'},*/
                    {extend: 'excel', title: 'Archivo de Excel'},
                   /* {extend: 'pdf', title: 'ExampleFile'},*/

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });



 $('.dataTables-example-pagos').DataTable({
                pageLength: 15,
                responsive: true,
                 "ordering": false,
                  "bPaginate": false,
    "bLengthChange": false,
    "searching": false,  
"info": false,       
"sinfo": false,       
                dom: '<"html5buttons"B>lTfgitp',
                    "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },
                buttons: [
                    /*  { extend: 'copy'},
                    {extend: 'csv'},*/
                    {extend: 'excel', title: 'ArchivoExcel'},
                   /* {extend: 'pdf', title: 'ExampleFile'},*/

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });






            //////data table cliente

             $('.dataTables-example_cliente').DataTable({

                // AGRUPACION
         "columnDefs": [
            { "visible": false, "targets": 0 }
        ],
        "order": [[ 0, 'asc' ]],
        "displayLength": 50,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(0, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group" style="background-color:rgba(118, 123, 132,0.5);"><td colspan="8"><b>Tipo: </b> '+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        },

// AGRUPACION 


                pageLength: 25,
                responsive: true,
                stateSave: true,
                dom: '<"html5buttons"B>lTfgitp',
                            "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },

                buttons: [
                   // { extend: 'copy'},
                   // {extend: 'csv'},
                    {extend: 'excel', title: 'ArchivoExcel'},
                    {extend: 'pdf', title: 'ArchivoPDF'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });




  //////data table cliente

             $('.dataTables-example_2').DataTable({

                // AGRUPACION
         "columnDefs": [
            { "visible": false, "targets": 0 }
        ],
        "order": [[ 0, 'asc' ]],
        "displayLength": 50,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(0, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group" style="background-color:rgba(118, 123, 132,0.5);"><td colspan="15"><b>Moje: </b> '+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        },

// AGRUPACION 


                pageLength: 25,
                responsive: true,
                stateSave: true,
                dom: '<"html5buttons"B>lTfgitp',
                            "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },

                buttons: [
                   // { extend: 'copy'},
                   // {extend: 'csv'},
                    {extend: 'excel', title: 'ArchivoExcel'},
                    {extend: 'pdf', title: 'ArchivoPDF'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });








            //////data table control de piso


   $('.dataTables-example_3').DataTable({

                // AGRUPACION
         "columnDefs": [
            { "visible": false, "targets": 0 }
        ],
        "order": [[ 0, 'asc' ]],
        "displayLength": 50,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(0, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group" style="background-color:rgba(118, 123, 132,0.5);"><td colspan="31"><b>Moje: </b> '+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        },

// AGRUPACION 


                pageLength: 25,
                responsive: true,
                stateSave: true,
                dom: '<"html5buttons"B>lTfgitp',
                            "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },

                buttons: [
                   // { extend: 'copy'},
                   // {extend: 'csv'},
                    {extend: 'excel', title: 'ArchivoExcel'},
                    {extend: 'pdf', title: 'ArchivoPDF'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });








            //////data table control de piso





 //////data table informe


   var table = $('.dataTables-example_4').DataTable({

                //* AGRUPACION
         "columnDefs": [
            { "visible": false, "targets": 0 }
        ],
        "order": [[ 0, 'asc' ]],
        "displayLength": 50,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(0, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group" style="background-color:rgba(118, 123, 132,0.5);"><td colspan="29"><b> </b> '+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        },

// AGRUPACION 
                


                pageLength: 15,
                responsive: true,
                //stateSave: true,
                dom: '<"html5buttons"B>lTfgitp',
                            "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },

                buttons: [
                   // { extend: 'copy'},
                   // {extend: 'csv'},
                    {extend: 'excel', title: 'ArchivoExcel'},
                    {extend: 'pdf', title: 'ArchivoPDF'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });





$('a.toggle-vis').on( 'click', function (e) {
        e.preventDefault();
 
        // Get the column API object
        var column = table.column( $(this).attr('data-column') );
 
        // Toggle the visibility
        column.visible( ! column.visible() );
    } );




            //////data table informe



            $('.dataTables-example_fichero').DataTable({
                pageLength: 15,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                    "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },
                buttons: [
                    /*  { extend: 'copy'},
                    {extend: 'csv'},*/
                    {extend: 'excel', title: 'ArchivoExcel'},
                   /* {extend: 'pdf', title: 'ExampleFile'},*/

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });             


        });


function MaysPrimera2(oracion){

var string = oracion.value;
 var minusculas = string.toLowerCase(); 
//// CADA PALABRA
oracion.value = minusculas.replace(/^([a-z\u00E0-\u00FC])|\s+([a-z\u00E0-\u00FC])/g, function($1){
return $1.toUpperCase(); 
});

//oracion.value=minusculas.charAt(0).toUpperCase() + minusculas.slice(1);
}



  function despliegue_campos(sel) {
    if (sel.value=="Administración" || sel.value=="Producción" || sel.value=="Ventas"  || sel.value=="Logistica" || sel.value=="Mano de obra indirecta" ){
     divC = document.getElementById("desplegable");
     divC.style.display = "";

     divT = document.getElementById("nodesplegable");
     divT.style.display = "none";

   }else{

     divC = document.getElementById("desplegable");
     divC.style.display="none";

     divT = document.getElementById("nodesplegable");
     divT.style.display = "";
   }
 }




// AJAX

 function objetoAjax(){
                  var xmlhttp=false;
                  try {
                    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                  } catch (e) {
                 
                  try {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                  } catch (E) {
                    xmlhttp = false;
                  }
                }
                 
                if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
                    xmlhttp = new XMLHttpRequest();
                  }
                  return xmlhttp;
                }


//AJAX



function eliminar_item(id) 
    { 


var variable= document.getElementById('resultado');

var num_reg= document.getElementById('num_reg').value;



        //ajax interno
           ajax=objetoAjax();
      ajax.open("POST", "elim_det_orden.php",true); 
        ajax.onreadystatechange=function() {
          if (ajax.readyState==4) {

          variable.innerHTML = ajax.responseText;
       }
}
      
       ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     ajax.send("id="+id+"&num_reg="+num_reg);





    } 



    function componer_referencias(id_moje) 
    { 

    //alert(id_moje); 
     //var mostrar =document.getElementById("proyecto").value;
     //alert(idmepresa);
    document.getElementById("referencia").length=0; 
    document.getElementById("referencia").options[0] = new Option("-- Seleccione --","","defaultSelected",""); 
    var indice=1; 
    <?php
     INCLUDE("conexion.php");

        $query="SELECT `id_referencia`, `nombre_item`, `id_moje`FROM `referencias` order by id_moje asc";
                           
     $resultado=$conexion-> query ($query);                                                         
                            
    while ($row=$resultado->fetch_assoc()) {

    ?> 
     if(id_moje=='<?=$row["id_moje"]?>') 
    { 
    document.getElementById("referencia").options[indice] = new Option("<?=strtoupper($row["nombre_item"])?>","<?=$row["id_referencia"]?>");

    indice++; 
    } 
    <?php 
     
    } 

    ?> 

     $('#referencia').trigger("chosen:updated");

    } 
    



function regdetalles_moje(){

var variable= document.getElementById('resultado');
var referencia= document.getElementById('referencia').value;
var num_reg= document.getElementById('num_reg').value;
var num_paq =  document.getElementById('num_paq').value;
var merma =  document.getElementById('merma').value;
var sobrepeso =  document.getElementById('sobrepeso').value;
var fecha =  document.getElementById('fecha').value;
var id_moje =  document.getElementById('id_moje').value;


var des_tapas =  document.getElementById('des_tapas').value;
var desp_despegue =  document.getElementById('desp_despegue').value;
var desp_emp =  document.get

//var variable =0;
        if ( referencia.length==0 || num_paq.length==0 ) {
          
alert('Algunos valores estan vacíos.');
        }
        else
        { //ajax interno
           ajax=objetoAjax();
      ajax.open("POST", "reg_det_moje.php",true); 
        ajax.onreadystatechange=function() {
          if (ajax.readyState==4) {

           variable.innerHTML = ajax.responseText;
       }

      }
       ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     ajax.send("referencia="+referencia+"&des_tapas="+des_tapas+"&desp_despegue="+desp_despegue+"&num_paq="+num_paq+"&desp_emp="+desp_emp+"&merma="+merma+"&sobrepeso="+sobrepeso+"&num_reg="+num_reg+"&fecha="+fecha+"&id_moje="+id_moje);

        }

    
    }



function regdetalles_pedidos_consulta(id){


 var variable= document.getElementById('resultado');

           ajax=objetoAjax();
      ajax.open("POST", "consulta_det_orden.php",true); 
        ajax.onreadystatechange=function() {
          if (ajax.readyState==4) {

           variable.innerHTML = ajax.responseText;
       }

      }
       ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     ajax.send("id="+id);


       }


function regdetalles_pedidos(){

var variable= document.getElementById('resultado');

var referencia= document.getElementById('referencia').value;
var supplier= document.getElementById('supplier').value;
var um_ref= document.getElementById('um_ref').value;
var ancho_ref= document.getElementById('ancho_ref').value;
var peso_ref= document.getElementById('peso_ref').value;
var rendi_ref= document.getElementById('rendi_ref').value;
var cap_ref= document.getElementById('cap_ref').value;
var porc_ocup= document.getElementById('porc_ocup').value;
var quantity= document.getElementById('quantity').value;
var com_colim= document.getElementById('com_colim').value;
var bon_fab= document.getElementById('bon_fab').value;
var remark= document.getElementById('remark').value;
var prec_venta= document.getElementById('prec_venta').value;
var prec_comp= document.getElementById('prec_comp').value;
var fob= document.getElementById('fob').value;
var fecha_final= document.getElementById('fecha_final').value;


 var num_orden= document.getElementById('num_orden').value;

//var variable =0;
        if ( referencia.length==0 || quantity.length==0 ) {
          
alert('Algunos valores estan vacíos.');
        }
        else
        { //ajax interno
           ajax=objetoAjax();
      ajax.open("POST", "reg_det_orden.php",true); 
        ajax.onreadystatechange=function() {
          if (ajax.readyState==4) {

           variable.innerHTML = ajax.responseText;
       }

      }
       ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     ajax.send("referencia="+referencia+"&supplier="+supplier+"&um_ref="+um_ref+"&ancho_ref="+ancho_ref+"&peso_ref="+peso_ref+"&rendi_ref="+rendi_ref+"&cap_ref="+cap_ref+"&porc_ocup="+porc_ocup+"&quantity="+quantity+"&com_colim="+com_colim+"&bon_fab="+bon_fab+"&remark="+remark+"&prec_venta="+prec_venta+"&prec_comp="+prec_comp+"&fob="+fob+"&num_orden="+num_orden+"&fecha_final="+fecha_final);





       }

    
document.getElementById('um_ref').value="";
document.getElementById('ancho_ref').value="";
document.getElementById('peso_ref').value="";
document.getElementById('rendi_ref').value="";
document.getElementById('cap_ref').value="";
document.getElementById('porc_ocup').value="";
document.getElementById('quantity').value="";
document.getElementById('com_colim').value="";
document.getElementById('bon_fab').value="";
document.getElementById('remark').value="";
document.getElementById('prec_venta').value="";
document.getElementById('prec_comp').value="";
document.getElementById('fob').value="";

    }



    function actdetalles_pedidos_real2(){



 var variable= document.getElementById('resultado');




var referencia= document.getElementById('referencia').value;
var supplier= document.getElementById('supplier').value;
var um_ref= document.getElementById('um_ref').value;
var ancho_ref= document.getElementById('ancho_ref').value;
var peso_ref= document.getElementById('peso_ref').value;
var rendi_ref= document.getElementById('rendi_ref').value;
var cap_ref= document.getElementById('cap_ref').value;
var porc_ocup= document.getElementById('porc_ocup').value;
var quantity= document.getElementById('quantity').value;
var com_colim= document.getElementById('com_colim').value;
var bon_fab= document.getElementById('bon_fab').value;
var remark= document.getElementById('remark').value;
var prec_venta= document.getElementById('prec_venta').value;
var prec_comp= document.getElementById('prec_comp').value;
var fob= document.getElementById('fob').value;
var fecha_final= document.getElementById('fecha_final').value;


 var num_orden= document.getElementById('orden').value;
 //var variable =0;
        if ( referencia.length==0 || quantity.length==0 || prec_venta.length==0 || prec_comp.length==0 ) {
          
alert('Algunos valores estan vacíos.');
        }
        else
        { //ajax interno
           ajax=objetoAjax();
      ajax.open("POST", "act_det_orden_2.php",true); 
        ajax.onreadystatechange=function() {
          if (ajax.readyState==4) {

           variable.innerHTML = ajax.responseText;
       }

      }
       ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     ajax.send("referencia="+referencia+"&supplier="+supplier+"&um_ref="+um_ref+"&ancho_ref="+ancho_ref+"&peso_ref="+peso_ref+"&rendi_ref="+rendi_ref+"&cap_ref="+cap_ref+"&porc_ocup="+porc_ocup+"&quantity="+quantity+"&com_colim="+com_colim+"&bon_fab="+bon_fab+"&remark="+remark+"&prec_venta="+prec_venta+"&prec_comp="+prec_comp+"&fob="+fob+"&num_orden="+num_orden+"&fecha_final="+fecha_final);





       }

document.getElementById('um_ref').value="";
document.getElementById('ancho_ref').value="";
document.getElementById('peso_ref').value="";
document.getElementById('rendi_ref').value="";
document.getElementById('cap_ref').value="";
document.getElementById('porc_ocup').value="";
document.getElementById('quantity').value="";
document.getElementById('com_colim').value="";
document.getElementById('bon_fab').value="";
document.getElementById('remark').value="";
document.getElementById('prec_venta').value="";
document.getElementById('prec_comp').value="";
document.getElementById('fob').value="";

    
    }






function regdetalles_color_real(id){



 var variable= document.getElementById('resultado_detalles_'+id);

var id_pedidos_color= document.getElementById('id_pedidos_color_'+id).value;
var referencia_det= document.getElementById('referencia_det_'+id).value;
var color_det= document.getElementById('color_det_'+id).value;
var qty_det= document.getElementById('qty_det_'+id).value;
var q_real= document.getElementById('q_real_'+id).value;
var numpedido= document.getElementById('numpedido_'+id).value;



//var variable =0;
        if ( color_det.length==0 || qty_det.length==0 || referencia_det.length==0 || q_real.length==0) {
          
alert('Algunos valores estan vacíos.');

        }
        else
        { //ajax interno
           ajax=objetoAjax();
      ajax.open("POST", "reg_det_color_real.php",true); 
        ajax.onreadystatechange=function() {
          if (ajax.readyState==4) {

           variable.innerHTML = ajax.responseText;
       }

      }
       ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     ajax.send("referencia_det="+referencia_det+"&color_det="+color_det+"&q_real="+q_real+"&qty_det="+qty_det+"&numpedido="+numpedido+"&id_pedidos_color="+id_pedidos_color);



document.getElementById('color_det_'+id).value="";
document.getElementById('qty_det_'+id).value="";
document.getElementById('q_real_'+id).value="";

       }

    
    }

function regdetalles_color(id){



 var variable= document.getElementById('resultado_detalles_'+id);

var referencia_det= document.getElementById('referencia_det_'+id).value;
var color_det= document.getElementById('color_det_'+id).value;
var qty_det= document.getElementById('qty_det_'+id).value;
var numpedido= document.getElementById('numpedido_'+id).value;



//var variable =0;
        if ( color_det.length==0 || qty_det.length==0 || referencia_det.length==0) {
          
alert('Algunos valores estan vacíos.');
        }
        else
        { //ajax interno
           ajax=objetoAjax();
      ajax.open("POST", "reg_det_color.php",true); 
        ajax.onreadystatechange=function() {
          if (ajax.readyState==4) {

           variable.innerHTML = ajax.responseText;
       }

      }
       ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     ajax.send("referencia_det="+referencia_det+"&color_det="+color_det+"&qty_det="+qty_det+"&numpedido="+numpedido);





       }

    

document.getElementById('color_det_'+id).value="";
document.getElementById('qty_det_'+id).value="";

    }





function regdetalles_consumos(){



 var variable= document.getElementById('resultado');

 var num_cotiz= document.getElementById('num_cotiz').value;
var referencia =  document.getElementById('referencia').value;
var nombre_referencia =  document.getElementById('nombre_referencia').value;
var cantidad =  document.getElementById('cantidad').value;
var precio_unit =  document.getElementById('precio_unit').value;
var iva_consumos =  document.getElementById('iva_consumos').value;
var total =  document.getElementById('total').value;
//var variable =0;
        if ( nombre_referencia.length==0 || cantidad.length==0 ) {
          
alert('Algunos valores estan vacíos.');
        }
        else
        { //ajax interno
           ajax=objetoAjax();
      ajax.open("POST", "reg_det_cotizacion_consumos.php",true); 
        ajax.onreadystatechange=function() {
          if (ajax.readyState==4) {

           variable.innerHTML = ajax.responseText;
       }

      }
       ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     ajax.send("num_cotiz="+num_cotiz+"&referencia="+referencia+"&nombre_referencia="+nombre_referencia+"&cantidad="+cantidad+"&precio_unit="+precio_unit+"&total="+total+"&iva_consumos="+iva_consumos);







        }

    
    }



    function elminar_det(id){
 var variable= document.getElementById('resultado');
  //ajax interno
           ajax=objetoAjax();
      ajax.open("POST", "elim_det_cotizacion.php",true); 
        ajax.onreadystatechange=function() {
          if (ajax.readyState==4) {

           variable.innerHTML = ajax.responseText;
       }

      }
       ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     ajax.send("id="+id);


    
    }



       function elminar_det_color_real(id,id_pedido){
 var variable= document.getElementById('resultado_detalles_'+id_pedido);
  //ajax interno
           ajax=objetoAjax();
      ajax.open("POST", "elminar_det_color_real.php",true); 
        ajax.onreadystatechange=function() {
          if (ajax.readyState==4) {

           variable.innerHTML = ajax.responseText;
       }

      }
       ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     ajax.send("id="+id+"&id_pedido="+id_pedido);


    
    }



       function elminar_det_color(id,id_pedido){
 var variable= document.getElementById('resultado_detalles_'+id_pedido);
  //ajax interno
           ajax=objetoAjax();
      ajax.open("POST", "elminar_det_color.php",true); 
        ajax.onreadystatechange=function() {
          if (ajax.readyState==4) {

           variable.innerHTML = ajax.responseText;
       }

      }
       ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     ajax.send("id="+id+"&id_pedido="+id_pedido);


    
    }





function elminar_det_pedido_real(id){
      //alert("Hola");
 var variable= document.getElementById('resultado');
  //ajax interno
           ajax=objetoAjax();
      ajax.open("POST", "elminar_det_pedido_real.php",true); 
        ajax.onreadystatechange=function() {
          if (ajax.readyState==4) {

           variable.innerHTML = ajax.responseText;
       }

      }
       ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     ajax.send("id="+id);


    }

function elminar_det_pedido_real_2(id){
      //alert("Hola");
 var variable= document.getElementById('resultado');
  //ajax interno
           ajax=objetoAjax();
      ajax.open("POST", "elminar_det_pedido_real_2.php",true); 
        ajax.onreadystatechange=function() {
          if (ajax.readyState==4) {

           variable.innerHTML = ajax.responseText;
       }

      }
       ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     ajax.send("id="+id);


    }



    function elminar_det_pedido(id){
      //alert("Hola");
 var variable= document.getElementById('resultado');
  //ajax interno
           ajax=objetoAjax();
      ajax.open("POST", "elminar_det_pedido.php",true); 
        ajax.onreadystatechange=function() {
          if (ajax.readyState==4) {

           variable.innerHTML = ajax.responseText;
       }

      }
       ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     ajax.send("id="+id);







        

    
    }



  function elim_det_consumos(id){
      //alert("Hola");
 var variable= document.getElementById('resultado');
  //ajax interno
           ajax=objetoAjax();
      ajax.open("POST", "elim_det_consumos.php",true); 
        ajax.onreadystatechange=function() {
          if (ajax.readyState==4) {

           variable.innerHTML = ajax.responseText;
       }

      }
       ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     ajax.send("id="+id);







        

    
    }

     function elminar_det_componer(id,referencia){
      //alert("Hola");

 var variable= document.getElementById('resultado_'+referencia);
  //ajax interno
           ajax=objetoAjax();
      ajax.open("POST", "elminar_det_componer.php",true); 
        ajax.onreadystatechange=function() {
          if (ajax.readyState==4) {

           variable.innerHTML = ajax.responseText;
       }

      }
       ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     ajax.send("id="+id+"&referencia="+referencia);







        

    
    }



function cal_total()
{
    var cantidad =  document.getElementById('cantidad').value;
var precio_unit =  document.getElementById('precio_unit').value;
document.getElementById('total').value=cantidad*precio_unit;
}

 function MaysPrimera(oracion){

var string = oracion.value;
 var minusculas = string.toLowerCase(); 

//oracion.value = minusculas.replace(/^([a-z\u00E0-\u00FC])|\s+([a-z\u00E0-\u00FC])/g, function($1){
//return $1.toUpperCase(); 
//});
/// SOLO LA PROMERA DE TODO EL TEXTO
oracion.value=minusculas.charAt(0).toUpperCase() + minusculas.slice(1);
}

function cal_total_compras()
{

  var cantidad = document.getElementById("cantidad").value;
        cantidad = cantidad.replace(".", "");

        var cantidad = cantidad;
        cantidad = cantidad.replace(".", "");
        

        var cantidad = cantidad;
        cantidad = cantidad.replace(".", "");


         var precio_unit = document.getElementById("precio_unit").value;
        precio_unit = precio_unit.replace(".", "");

        var precio_unit = precio_unit;
        precio_unit = precio_unit.replace(".", "");
        

        var precio_unit = precio_unit;
        precio_unit = precio_unit.replace(".", "");



            var iva_compra = document.getElementById("iva_compra").value;
        iva_compra = iva_compra.replace(".", "");

        var iva_compra = iva_compra;
        iva_compra = iva_compra.replace(".", "");
        

        var iva_compra = iva_compra;
        iva_compra = iva_compra.replace(".", "");
        
    var cantidad =  document.getElementById('cantidad').value;
var precio_unit =  document.getElementById('precio_unit').value;
var iva_compra =  document.getElementById('iva_compra').value;
document.getElementById('total').value=parseFloat(cantidad*precio_unit);
}

 


   function MaysPrimera2(oracion){

var string = oracion.value;
 var minusculas = string.toLowerCase(); 
//// CADA PALABRA
oracion.value = minusculas.replace(/^([a-z\u00E0-\u00FC])|\s+([a-z\u00E0-\u00FC])/g, function($1){
return $1.toUpperCase(); 
});

//oracion.value=minusculas.charAt(0).toUpperCase() + minusculas.slice(1);
}

         function minusculas(oracion){

var string = oracion.value;
 var minusculas = string.toLowerCase(); 

//oracion.value = minusculas.replace(/^([a-z\u00E0-\u00FC])|\s+([a-z\u00E0-\u00FC])/g, function($1){
//return $1.toUpperCase(); 
//});
/// SOLO LA PROMERA DE TODO EL TEXTO
oracion.value=minusculas;
}



function copiar_valor()
    {   var input_g = document.getElementById("cupo").value;
        document.getElementById("cupo2").value = input_g.replace(".", "");

        var input_g = document.getElementById("cupo2").value;
        document.getElementById("cupo2").value = input_g.replace(".", "");
        

        var input_g = document.getElementById("cupo2").value;
        document.getElementById("cupo2").value = input_g.replace(".", "");
        

        input_g = document.getElementById("cupo2").value;
        document.getElementById("cupo2").value = input_g.replace(",", "."); }

      function mascara_valor()
      { // configuration
      let args = {
        prefix: '', suffix: '', fixed: true, fractionDigits: 0, decimalSeparator: ',', thousandsSeparator: '.', autoCompleteDecimal: true
      }; // select the element
      let input = SimpleMaskMoney.setMask('#cupo', args); }


function mostrarinput()
{
  document.getElementById("cupo").style.display="block";
}


function ocultarinput()
{
  document.getElementById("cupo").style.display="none";
}

function escribir(a,b)
{
  document.getElementById("direccion").value=a;
  document.getElementById("direccion_dian").value=b;
}

function escribir2(a,b)
{
  document.getElementById("direcc_1").value=a;
  document.getElementById("direcc_1_dian").value=b;
}

 function registro(id){
       //alert(id);
            // alert("hola");
        //Registrar detalle factura
        if (id==3) {
        // alert("Eduar entraste en la funcion pero aun no has pasado al php");
        //validar campos
        //alert("hola");
        document.getElementById('showtoast4').style.display='block';
        var divResultado2 =document.getElementById('detalle');
         var cantidad= document.getElementById('cantidad').value;
        var producto =  document.getElementById('producto').value;
        var num_fac =  document.getElementById('num_fac').value;
        //var cliente =  document.getElementById('cliente').value;
        var valor =  document.getElementById('valor').value;

        //alert("E22222");
        if (cantidad.length==0 || producto.length==0 || num_fac.length==0 ) {
          
           return 3; 

        }
        else
        {
            //ajax interno
          
           ajax=objetoAjax();
         
      ajax.open("POST", "guardar_detalle.php",true); 
    
        ajax.onreadystatechange=function() {

          if (ajax.readyState==4) {
 
       divResultado2.innerHTML = ajax.responseText;
       }  

      }
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    ajax.send("cantidad="+cantidad+"&producto="+producto+"&num_fac="+num_fac+"&valor="+valor);

     // alert ("hola4");
           // ajax interno
//return 1;

            
        }
    //alert("hola");
    
    }//// termina el if 3

     //Registrar factura
    if (id==4) {
        //validar campos

//var divResultado2 =document.getElementById('respuesta');
 document.getElementById('btnimprimir').style.display='none';
 document.getElementById('btncancelar').style.display='none';
 document.getElementById('showtoast3').style.display='none';
 document.getElementById('showtoast4').style.display='none';
var num_fac =  document.getElementById('num_fac').value;
var numero_max =  document.getElementById('numero_max').value;
var empresa =  document.getElementById('empresa').value;
var idv =  document.getElementById('idv').value;
    
//alert(empresa);
        var RETEFUENTE= document.getElementById('RETEFUENTE').value;
        var IVA =  document.getElementById('IVA').value;
        var RETEIVA =  document.getElementById('RETEIVA').value;

      


var comentarios =  document.getElementById('comentarios').value;

       
            //ajax interno
          
           ajax=objetoAjax();
         
      ajax.open("POST", "guardar_factura.php",true); 
    
        ajax.onreadystatechange=function() {

          if (ajax.readyState==4) {
 //alert('BIEN');
      // divResultado2.innerHTML = ajax.responseText;
   
       }  

      }
       ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
     ajax.send("empresa="+empresa+"&comentarios="+comentarios+"&num_fac="+num_fac+"&numero_max="+numero_max+"&RETEIVA="+RETEIVA+"&RETEFUENTE="+RETEFUENTE+"&IVA="+IVA);

    //location.href=;
 
    //location.href=nueva_factura2.php;
  window.open('imprimir2.php?aleatorio='+idv, '_blank');
    window.location.href = 'nueva_factura2.php';

           // ajax interno
//return 1;
           
        }
    //alert("hola");
    
    }//// termina el if 4



function agregarproducto(id){
alert("Entre");
}




$(document).ready(function(){

           $("#valor2").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
       var input_g = document.getElementById("valor2").value;
      document.getElementById("valor").value=input_g.replace(".", "");
       input_g =document.getElementById("valor").value;
      document.getElementById("valor").value=input_g.replace(".", "");
      input_g =document.getElementById("valor").value;
      document.getElementById("valor").value=input_g.replace(".", "");
      input_g =document.getElementById("valor").value;
      document.getElementById("valor").value=input_g.replace(".", "");
      input_g =document.getElementById("valor").value;
      document.getElementById("valor").value=input_g.replace(".", "");
      input_g =document.getElementById("valor").value;
      document.getElementById("valor").value=input_g.replace(".", "");
      document.getElementById("valor").value=input_g.replace(".", "");
      document.getElementById("valor").value=input_g.replace(".", "");
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        // Con decimales --> .replace(/([0-9])([0-9]{2})$/, '$1,$2')
                        .replace(/([0-9])([0-9]{0})$/, '$1')

                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ".");
        });
    }
});
   });



    </script>
