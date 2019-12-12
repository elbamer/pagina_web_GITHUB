/*creo una variable para el slider*/ 
let slider_index = 0;
/*Se crea una funcion  para mostrar el slider con un parametro que es el index*/
function show_slide(index) {
  let slides = document.querySelectorAll('.slide');
   /* Selecciono todos los elementos  que tengan la clase SLIDE en este caso son las imagenes*/
 
  let dots = document.querySelectorAll('.dot-nav');//igual selecciono todos los elementos de la clase dot-nav

  if (index >= slides.length) slider_index = 0;//si el index es mayor o igual aslider .lengh- vuelve al inicio
  if (index < 0) { slider_index = slides.length - 1 };//si es menor a cero . el slider sera igual a slider - 1 .

  for (let i = 0; i < slides.length; i++) {//iteramos sobre todos los elementos lo recorre y lo esconde 
    slides[i].style.display = 'none';
    dots[i].classList.remove('active-dot');// lo remueve 
  }

  slides[slider_index].style.display = 'block';//para que se muestre , por block lo muestra
  dots[slider_index].classList.add('active-dot');// añadimos la clase active-dot a todos los puntos que quitamos con remove
}

show_slide(slider_index);
//Un click para que escuche la flecha el previo o el anterior
document.querySelector('#arrow-prev').addEventListener('click', () => {// dos parametros el arrow y el click
  show_slide(--slider_index);
});


document.querySelector('#arrow-next').addEventListener('click', () => {
  // dos parametros el arrow y el click, lo mismo para next and previous
  show_slide(++slider_index);
});
/*Para los puntos , cargamos selecionamos la clase dot-nav que es a de los puntos y le aplico un listener a cada uno de 
ellos Cuando cliccamos en uno de elloe, con el indexOf, recupero el indice del String , (posicion)*/

document.querySelectorAll('.dot-nav').forEach((element) => {//para recorrer 
  element.addEventListener('click', function () {
    var dots = Array.prototype.slice.call(this.parentElement.children),
      dot_index = dots.indexOf(element);
    show_slide(slider_index = dot_index);
  })
});

//Set Interval para que cambie cada segundo o lo que le deseemos dar 
setInterval(() => {
  show_slide(++slider_index)
}, 2000);