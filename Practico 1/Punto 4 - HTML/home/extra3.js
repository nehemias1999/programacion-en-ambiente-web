document.addEventListener('DOMContentLoaded', function() {
    // Variables globales
    var indiceSlide = 0;
    var slides = document.querySelectorAll(".carousel img");
    var prevBtn = document.querySelector(".carousel-btn.prev");
    var nextBtn = document.querySelector(".carousel-btn.next");
    var pauseBtn = document.querySelector(".carousel-btn.pause");
    var barraProgreso = document.querySelector(".progress");
    var contenedorThumbs = document.querySelector(".thumbnails");
    var thumbs = contenedorThumbs.querySelectorAll("img");
    var duracionAnimacion = 5;
    var animacionesSlides = ["fadeIn", "slideIn", "zoomIn"];

    var intervaloCarrousel;
    var estaPausadoElCarousel = false;
  
    // Mostrar el primer slide y comenzar la animación después de que la barra de progreso esté completa
    function mostrarSlide(n) {
      if (n > slides.length - 1) {
        indiceSlide = 0;
      } else if (n < 0) {
        indiceSlide = slides.length - 1;
      } else {
        indiceSlide = n;
      }
  
      // Ocultar todos los slides y reiniciar las animaciones
      for (var i = 0; i < slides.length; i++) {
        slides[i].classList.remove("active");
        slides[i].style.animation = "none";
      }
  
      // Mostrar el slide actual con animación
      slides[indiceSlide].classList.add("active");
      setAnimacion(slides[indiceSlide]);
  
      // Actualizar el contenido del h4 y p del div_introduccion_noticia
      var tituloNoticia = document.getElementById("titulo_noticia");
      var contenidoNoticia = document.getElementById("contenido_noticia");
  
      var noticias = [
        {
          titulo: "Sala angiográfica 2023",
          contenido: "UNLu Paw inauguró la nueva sala angiográfica con la más alta tecnología permitiendo así tratar pacientes con problemas vasculares neurológicos, cardiacos y vasculares periféricos"
        },
        {
          titulo: "Expansión del quirofano",
          contenido: "Se instalaron nuevos equipamientos con la más alta tecnologia para realizar ..."
        },
        {
          titulo: "Semana #donaUNLUPaw ",
          contenido: "Acercate a UNLUPaw para donar sangre ..."
        }
        // Aca agrego más objetos de noticias según sea necesario
      ];
  
      tituloNoticia.innerText = noticias[indiceSlide].titulo;
      contenidoNoticia.innerText = noticias[indiceSlide].contenido;
      
     
    } //fin show
  
    // Función para establecer una animación aleatoria al slide
    function setAnimacion(slide) {
      var animacionRandom = animacionesSlides[Math.floor(Math.random() * animacionesSlides.length)];
      slide.style.animation = animacionRandom + " " + duracionAnimacion + "s";
    }
  
    // Función para cambiar de slide
    function cambiarSlide(n) {
      mostrarSlide(indiceSlide += n);
    }
  
    // Función para animar el carrusel en loop
    function animarCarrousel() {
        intervaloCarrousel = setInterval(function() {
        mostrarSlideYAnimar();
      }, duracionAnimacion * 2000);
    }
  
    // Función para actualizar la barra de progreso
    function actualizarBarraProgreso() {
     
      //progressBar.style.transition = "width " + 5 + "s linear";
      barraProgreso.style.width = "0%"; /* Ancho inicial en 0% */
      setTimeout(function() { barraProgreso.style.width = "100%"; barraProgreso.style.transition = "width " + 5 + "s linear";/* Ancho final en 100% */}, 10 );
    }
  
    // Agregar eventos de clic a los botones
    prevBtn.addEventListener("click", function() {
      cambiarSlide(-1);
    });
  
    nextBtn.addEventListener("click", function() {
      cambiarSlide(1);
    });

    pauseBtn.addEventListener("click", function(){
        if (estaPausadoElCarousel){
            continuarCarousel();
        } else {
            pausarCarousel();
        }
        
    });

    function continuarCarousel(){
       animarCarrousel();
       estaPausadoElCarousel = false;
       pauseBtn.innerHTML = "&#10074;&#10074;"; // Cambiar el símbolo a pausa
    }

    function pausarCarousel(){
        clearInterval(intervaloCarrousel); // Detener el intervalo de tiempo
        estaPausadoElCarousel = true; // Actualizar el estado de reproducción
        pauseBtn.innerHTML = "&#9658;"; // Cambiar el símbolo a reproducción (play)
    }

  
    // Función para manejar el evento de clic en un thumbnail
    function controlarThumbnail(event) {
      var clickedThumbnail = event.target;
      var clickedIndex = Array.from(thumbs).indexOf(clickedThumbnail);
      mostrarSlide(clickedIndex);
    }
  
    // Asignar eventos a los thumbnails
    thumbs.forEach(thumb => {
      thumb.addEventListener('click', controlarThumbnail);
    });

    function mostrarSlideYAnimar(){
        cambiarSlide(1);
    }

  
    // Iniciar la barra de progreso y mostrar el primer slide
   actualizarBarraProgreso();
   animarCarrousel();
  });
  