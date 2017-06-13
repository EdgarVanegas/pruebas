function mostrar(){
        var table =$("#tabla").DataTable({
            "ajax":{
                "method":"POST",
                "url":"conection.php"
            },
            "columns":[
            {"data":"id"},
            {"data":"name"},
            {"data":"price"},
            {"data":"special_price"},
            {"defaultContent": "<button type='button' class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i></button> <button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar' ><i class='fa fa-trash-o'></i></button>"}
            ]
        });
        obtener_data_editar("#tabla tbody", table);
    }

 function obtener_data_editar(tbody, table){
        $(tbody).on("click", "button.editar", function(){
            var data=table.row($(this).parents("tr")).data();
            console.log(data);
            var id=table.
        });
    }