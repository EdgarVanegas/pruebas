
function mostrar(){
        var table =$("#tabla").DataTable({
            "ajax":{
                "method":"POST",
                "url":"conection.php"
            },
            "columns":[
            {"data":"id"},
            {"data":"name"},
            {"data":"special_price"},
            {"defaultContent": "<button type='button' class='editar btn btn-primary'>Editar</button><button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar' ><i class='fa fa-trash-o'></i></button>"}
            ]
        });
        obtener_data_editar("#tabla tbody", table);   
    }

 function obtener_data_editar(tbody, table){
       $(tbody).on("click", "button.editar", function(){
            var data=table.row( $(this).parents("tr") ).data();
            var Id=$("#id").val(data.id),
                Nombre=$("#name").val(data.name),
                Descripcion=$("#description").val(data.description),
                Price=$("#specialprice").val(data.special_price),
                Category=(data.category);
                if (Category!="318" && Category!="245"){
                $('#nuevo').prop('checked', false);
                $('#oferta').prop('checked', false);   
                }else if(Category=="245"){
                 $('#nuevo').prop('checked', false);   
                 $('#oferta').prop('checked', true);   
                }else if(Category=="318"){
                    $('#oferta').prop('checked', false);
                    $('#nuevo').prop('checked', true); 
                }
                
               
        });
    }