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

let reporte = {
  generate : (e,v) => {
    let id = $(e).val();
    $.post(base_url + 'alumnos/getReport/' + id,null,(resp)=>{
      $("#alumlist").empty();
      $("#rp_title").text("Reporte " + resp.resume[0].c_grado + "° grado");
      $("#rp_altas").text("Altas : " + resp.rows.length);
      $("#rp_bajas").text("Bajas : " + resp.resume[0].bajas);
      $("#rp_total").text("Total : " + resp.resume[0].total);
      //Genera listado de alumnos
      let base = $("<li>").addClass('collection-item');
      resp.rows.forEach( (i,it) => {
        let li = base.clone();
        let maticon = $("<i>")
        .addClass('material-icons')
        .text('account_circle')
        .css({'vertical-align': 'middle'});
        if(i.genero == 'M'){
          maticon.addClass('blue-text text-lighten-3');
          li.addClass('blue-text text-darken-4');
        }
        if(i.genero == 'F'){
          maticon.addClass('pink-text text-lighten-3');
          li.addClass('pink-text text-darken-4');
        }
        li.append(maticon);
        li.append(" " + i.apat + " " + i.amat + " " + i.nombre);
        $("#alumlist").append(li);
      } );
    },'json');
  }
}