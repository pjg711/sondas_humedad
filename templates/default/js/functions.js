// USERS
function delete_user(id){
    var respuesta = window.confirm('\u00BFEst\u00E1 seguro que quiere borrar el usuario?');
    if(respuesta){
        // lo elimino
        confirmed_delete_user(id);
    } else {
        location.href='index.php';
    }
}
function confirmed_delete_user(id){
    form = document.createElement('form');
    form.setAttribute('method', 'POST');
    form.setAttribute('action', 'index.php');
    myvar = document.createElement('input');
    myvar.setAttribute('name', 'confirmed_delete_user');
    myvar.setAttribute('type', 'hidden');
    myvar.setAttribute('value', id);
    form.appendChild(myvar);
    document.body.appendChild(form);
    form.submit();
}

// REPORTS
function borrar_todos(){
    //borra todos los informes del mismo usuario
    var respuesta = window.confirm('\u00BFEst\u00E1 seguro que quiere borrar todos los informes?');
    if(respuesta){
        // lo elimino
        confirmed_delete_all();
    } else {
        location.href='index.php';
    }
}
function confirmed_delete_all(){
    //location.href='index.php?confirmed_erase_all';
    form = document.createElement('form');
    form.setAttribute('method', 'POST');
    form.setAttribute('action', 'index.php');
    myvar = document.createElement('input');
    myvar.setAttribute('name', 'confirmed_erase_all');
    myvar.setAttribute('type', 'hidden');
    myvar.setAttribute('value', '');
    form.appendChild(myvar);
    document.body.appendChild(form);
    form.submit();
}
function delete_report(id){
    var respuesta = window.confirm('\u00BFEst\u00E1 seguro que quiere borrar el informe?');
    if(respuesta){
        // lo elimino
        confirmar_borrar_informe(id);
    }else{
        location.href='index.php';
    }
}
function confirmed_delete_report(id){
    form = document.createElement('form');
    form.setAttribute('method', 'POST');
    form.setAttribute('action', 'index.php');
    myvar = document.createElement('input');
    myvar.setAttribute('name', 'confirmed_delete_report');
    myvar.setAttribute('type', 'hidden');
    myvar.setAttribute('value', id);
    form.appendChild(myvar);
    document.body.appendChild(form);
    form.submit();
}
/*
function make_report(user){
    alert("pase por aca");
    form = document.createElement('form');
    form.setAttribute('method', 'POST');
    form.setAttribute('action', 'index.php');
    myvar = document.createElement('input');
    myvar.setAttribute('name', 'make_report');
    myvar.setAttribute('type', 'hidden');
    myvar.setAttribute('value', user);
    form.appendChild(myvar);
    document.body.appendChild(form);
    form.submit();
}
*/
function view_reports(){

}

// SHOW-HIDE
function show_hide(id, visible){
    /*
    if(grupo === 'undefined'){

    }else{
        var elementos=document.getElementsByClassName(grupo);
        for(i = 0; i < elementos.length; i++){
            elementos[i].style.display = 'none';
        }
    }
    */
    /* console.log(visible); */
    obj_ver = document.getElementById(id);
    if(visible === undefined){
        obj_ver.style.display = (obj_ver.style.display == 'block') ? 'none' : 'block';
    }else{
        obj_ver.style.display = visible;
    }
}
