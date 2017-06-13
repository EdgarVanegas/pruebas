<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Conexion y Datatabless</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
	<!-- Buttons DataTables -->
	<link rel="stylesheet" href="css/buttons.bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>


       <div class="row fondo">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 id="solover" class="text-center text-uppercase">Lisstado de Productos</h1> 
                </div>
     </div></br>
        
     <div class="data-table">
                    <table id="tabla" class="table table-bordered table-hover" cellspacing="0" width="100%">
                     <thead>
                            <tr>
                                <th>Id</th>
                                <th>Producto</th>
                                <th>Precio especial</th>
                                <th>Acciones</th>
                            </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    </table>
     </div>
        

    

    
     <div class="diseño">

                <form class="producto">
                        <tr>
                                <td>
                                    <!--<div><label>Id:</label><input id="id" type="text" value=""></div>-->
                                    <div><label>Nombre</label><input id="name" type="text" value=""></div>
                                    <div><label>Descripcion</label><textarea  id="description" rows="5" cols="50"></textarea></div>
                                    <div><label>Precio de Oferta:</label><input id="specialprice" type="text" value=""></div>
                                    <div><label>Seccion de Oferta:</label><input id="oferta" type="checkbox" value="" ></div>
                                    <div><label>Seccion Nuevo:</label><input id="nuevo" type="checkbox" name="prodnuevo" value=""></div>
                                    <div><label>Liquidaciones:</label><input id="liquidation" type="checkbox" value=""></div>
                                    <div><input type="submit" value="Guardar" class="button"></div>

                                </td>
                        </tr>
                </form>
      </div>
    
    
     


<script src="js/jquery-1.12.3.js"></script>
    
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.js"></script>
    <!--botones DataTables-->   
    <script src="js/dataTables.buttons.min.js"></script>
    <script src="js/buttons.bootstrap.min.js"></script>
    <!--Libreria para exportar Excel-->
    <script src="js/jszip.min.js"></script>
    <!--Librerias para exportar PDF-->
    <script src="js/pdfmake.min.js"></script>
    <script src="js/vfs_fonts.js"></script>
    <!--Librerias para botones de exportación-->
    <script src="js/buttons.html5.min.js"></script> 
    <script type="text/javascript" src="functions.js"></script>
    <script>
    $(document).on ("ready", function(){
                   mostrar();

        });

</script> 
   
</body>
</html>


