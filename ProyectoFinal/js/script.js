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
});




