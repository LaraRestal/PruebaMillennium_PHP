'use strict'

$(document).ready(function(){
    var contenido = $('.message');
    contenido.hide();

    $('#form_insert').on('submit',function(e){
        e.preventDefault();
        var nombre = $('#name').val();        
        var apellidos = $('#apellidos').val();                
        if(nombre != '' && apellidos != ''){               
            $.ajax({
            type: 'POST',
            url: 'class/insertar.php',
            data: {nombre: nombre,
                   apellidos: apellidos}, 
            success: function(dataResult){  
                if(dataResult.statusCode != 200){
                                        
                    contenido.show();
                    setInterval(function(){                        
                        contenido.hide();  
                    }, 4000);
                    
                    } else{
                    alert('Error del servidor');
                    }
                }
            });
            return false;

        }else{
            alert('nombre y apellidos son requerido');
        }
    });
    

});