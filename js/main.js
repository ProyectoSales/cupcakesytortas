contIngredientes = 0;
var listaProductos;

colocarImgCup('cupcake')

function colocarImgCup(id) {
  $("#cupcake").show();
  $("#torta").hide();
 imagen = document.getElementById(id);
 document.getElementById(id);
 imagen.innerHTML = '<img src="../img/croquis/cupcakeCroquis.png"/>';
 listaProductos = [
  { idCategoria  : 0, precio  : 900}
];
getPrecio();
 ocultarBoton();
}

function colocarImgTor(id) {
  $("#torta").show();
  $("#cupcake").hide();
 imagen = document.getElementById(id);
 imagen.innerHTML = '<img src="../img/croquis/torta.png"/>';
 listaProductos = [
  { idCategoria  : 0, precio  : 20000}
];
getPrecio();
 ocultarBoton();
}

function colocarImgIngrediente(idCategoria, nombre, isCheck){
  check = document.getElementById("check-"+idCategoria);
  
    imagen = document.getElementById(nombre.id);
    
    if(check.checked == true){
     idRadio = findSelection("radios-"+idCategoria);
     radios = idRadio.split("-");
     ruta = radios[1];
     imagen.style.display = "block";
     imagen.innerHTML = '<img src='+ ruta + '>';
     if (isCheck) {
      contIngredientes++;
     }
     modificarLista(idCategoria,radios[2],true);
    }else{
      imagen.style.display = "none";
     imagen.innerHTML = '<img src=>';
     if (isCheck) {
      contIngredientes--;
      modificarLista(idCategoria,0,false);
     }   
    }
 ocultarBoton();
}

function mostrarCupcake(idCategoria,nombre,isCheck){
 
}

function modificarLista(idCategoria, precio, isInsert){
if (isInsert) {
  exist = false;
  listaProductos.forEach(lp => {
    if(lp.idCategoria == idCategoria){
      lp.precio = precio;
      exist = true;
    }
  });
  if(!exist){
    listaProductos.push({ idCategoria  : idCategoria, precio  : precio})
  }
}else{
  for (let i = 0; i < listaProductos.length; i++) {
    if (listaProductos[i].idCategoria==idCategoria){
      listaProductos.splice(i,i);
      break;
    }    
  }
}
getPrecio();
}

function getPrecio(){
  costo = 0;
  listaProductos.forEach(lp => {
    costo += parseInt(lp.precio);
  });
  $("#precio").text(costo);
}

function findSelection(nameRadios){
  var radios = document.getElementsByName(nameRadios);

for (var i = 0, length = radios.length; i < length; i++) {
  if (radios[i].checked) {
    // do whatever you want with the checked radio
    return radios[i].value;
  }
}
}

function ocultarBoton(){
  if (contIngredientes > 0) {
    document.getElementById('btn-comprar').style.display='block';
  }else{
    document.getElementById('btn-comprar').style.display='none';
  }
}

