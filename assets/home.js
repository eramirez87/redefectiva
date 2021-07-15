document.addEventListener('DOMContentLoaded', function() {
    M.AutoInit();
  });

let list = {
  drop : (elem, e, id) => {
    if( confirm("Esta accion no se puede deshacer") ){
      $.post(base_url + 'alumnos/delete',{matricula:id},(r)=>{
        $(elem).closest('li.collection-item').remove();
        M.toast({html: 'Alumno eliminado'})
      },'json');
    }
  }
}