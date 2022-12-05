$(document).ready(function() {

    //Consulta base de datos // 
    $('#btnConsultarBD').click(function() {
        $('#modal1').modal();
        $('#modal1').on('hidden.bs.modal',function(e){
            let paridCte=$('#idConsulta').val();
            $.post('./php/conectar.php',{par1:paridCte},function(data){
                refrescar(data);
            },'json');
        })
    });

    $('#btnBorrarBD'). click(function() {
        let paridCte=$('#numregistro').val();
        $.post('./php/Borrar.php',{par1:paridCte},function(data){
            refrescar(data);
        },'json');

        Swal.fire ('Correct!', 'Se a eliminado el libro '.paridCte, 'success'); 
        refrescar(data); 
});

    $('#btnInsertarBD').click(function() {
        let titulo=$('#titulo').val();
        let fechadeingreso=$('#fechadeingreso').val();
        let editorial = $('#editorial').val();
        let numerodepaginas = $('#numerodepaginas').val();
        let autor=$('#autor').val();
        let tipo=$('#tipo').val();
        let idioma=$('#idioma').val();
        let precio=$('#precio').val();
        $.post('./php/insertar.php',{ti:titulo,fe:fechadeingreso,ed:editorial,numpag:numerodepaginas,aut:autor,tip:tipo,id:idioma,prec:precio});
        Swal.fire('Correct!', 'Se a agregado el libro '.titulo, 'success'); 
        refrescar(data); 
    });
    
    function refrescar(objeto){
        console.log(objeto);
        $('#numregistro').val(objeto.numregistro);
        $('#titulo').val(objeto.titulo);
        $('#fechadeingreso').val(objeto.fechadeingreso);
        $('#editorial').val(objeto.editorial);
        $('#numerodepaginas').val(objeto.numerodepaginas);
        $('#autor').val(objeto.autor);
        $('#tipo').val(objeto.tipo);
        $('#idioma').val(objeto.idioma);
        $('#precio').val(objeto.precio);
    }

    $('#btnModificarBD'). click(function() {
        let paridCte=$('#numregistro').val();
        let titulo=$('#titulo').val();
        let fechadeingreso=$('#fechadeingreso').val();
        let editorial = $('#editorial').val();
        let numerodepaginas = $('#numerodepaginas').val();
        let autor=$('#autor').val();
        let tipo=$('#tipo').val();
        let idioma=$('#idioma').val();
        let precio=$('#precio').val();
        $.post('./php/Modificar.php',{par1:paridCte,ti:titulo,fe:fechadeingreso,ed:editorial,numpag:numerodepaginas,aut:autor,tip:tipo,id:idioma,prec:precio});
        
        Swal.fire('Correct!', 'Se a realizado la modificacion de libro '.titulo, 'success');
    });
    
});




