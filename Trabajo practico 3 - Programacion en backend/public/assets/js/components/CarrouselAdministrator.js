
class HomeCarrousel {
      
  constructor() {
    // Variables globales
    this.indiceSlide = 0;
    this.slides = document.querySelectorAll(".carousel img");
    this.prevBtn = document.querySelector(".carousel-btn.prev");
    this.nextBtn = document.querySelector(".carousel-btn.next");
    this.pauseBtn = document.querySelector(".carousel-btn.pause");
    this.barraProgreso = document.querySelector(".progress");
    this.contenedorThumbs = document.querySelector(".thumbnails");
    this.thumbs = this.contenedorThumbs.querySelectorAll("img");
    this.duracionAnimacion = 5;
    this.animacionesSlides = ["fadeIn", "slideIn", "zoomIn"];
    this.intervaloCarrousel;
    this.estaPausadoElCarousel = false;

    this.mostrarSlide = this.mostrarSlide.bind(this);
    this.setAnimacion = this.setAnimacion.bind(this);
    this.cambiarSlide = this.cambiarSlide.bind(this);
    this.animarCarrousel = this.animarCarrousel.bind(this);
    this.actualizarBarraProgreso = this.actualizarBarraProgreso.bind(this);
    this.thumbnailClickHandler = this.manejarEventosThumbnail.bind(this);
    this.mostrarSlideYAnimar = this.mostrarSlideYAnimar.bind(this);

    // Agregar eventos de clic a los botones
    this.prevBtn.addEventListener("click", () => this.cambiarSlide(-1));
    this.nextBtn.addEventListener("click", () => this.cambiarSlide(1));
    this.pauseBtn.addEventListener("click", () => {
      if (this.estaPausadoElCarousel) {
        this.continuarCarousel();
      } else {
        this.pausarCarousel();
      }
    });

    // Asignar eventos a los thumbnails
    this.thumbs.forEach(thumb => {
      thumb.addEventListener('click', event => this.manejarEventosThumbnail(event));
    });

    // Iniciar la barra de progreso y mostrar el primer slide
    this.actualizarBarraProgreso();
    this.animarCarrousel();
  }

  // Mostrar el primer slide y comenzar la animación después de que la barra de progreso esté completa
  mostrarSlide(n) {
    if (n > this.slides.length - 1) {
      this.indiceSlide = 0;
    } else if (n < 0) {
      this.indiceSlide = this.slides.length - 1;
    } else {
      this.indiceSlide = n;
    }

    // Ocultar todos los slides y reiniciar las animaciones
    for (var i = 0; i < this.slides.length; i++) {
      this.slides[i].classList.remove("active");
      this.slides[i].style.animation = "none";
    }

    // Mostrar el slide actual con animación
    this.slides[this.indiceSlide].classList.add("active");
    this.setAnimacion(this.slides[this.indiceSlide]);

    // Actualizar el contenido del h4 y p del div_introduccion_noticia
    var tituloNoticia = document.getElementById("titulo-noticia");
    var contenidoNoticia = document.getElementById("contenido-noticia");

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

    tituloNoticia.innerText = noticias[this.indiceSlide].titulo; // ERROR
    contenidoNoticia.innerText = noticias[this.indiceSlide].contenido;
  }

  // Función para establecer una animación aleatoria al slide
  setAnimacion(slide) {
    var animacionRandom = this.animacionesSlides[Math.floor(Math.random() * this.animacionesSlides.length)];
    slide.style.animation = animacionRandom + " " + this.duracionAnimacion + "s";
  }

  // Función para cambiar de slide
  cambiarSlide(n) {
    this.mostrarSlide(this.indiceSlide += n); // ERROR
  }

  // Función para animar el carrusel en loop
  animarCarrousel() {
    this.intervaloCarrousel = setInterval(() => {
      this.mostrarSlideYAnimar();
    }, this.duracionAnimacion * 2000);
  }

  // Función para actualizar la barra de progreso
  actualizarBarraProgreso() {
    this.barraProgreso.style.width = "0%"; /* Ancho inicial en 0% */
    setTimeout(() => {
      this.barraProgreso.style.width = "100%";
      this.barraProgreso.style.transition = "width " + 5 + "s linear";/* Ancho final en 100% */
    }, 10);
  }

  // Función para manejar el evento de clic en un thumbnail
  manejarEventosThumbnail(event) {
    var clickedThumbnail = event.target;
    var clickedIndex = Array.from(this.thumbs).indexOf(clickedThumbnail);
    this.mostrarSlide(clickedIndex);
  }

  continuarCarousel() {
    this.animarCarrousel();
    this.estaPausadoElCarousel = false;
    this.pauseBtn.innerHTML = "&#10074;&#10074;"; // Cambiar el símbolo a pausa
  }

  pausarCarousel() {
    clearInterval(this.intervaloCarrousel); // Detener el intervalo de tiempo
    this.estaPausadoElCarousel = true; // Actualizar el estado de reproducción
    this.pauseBtn.innerHTML = "&#9658;"; // Cambiar el símbolo a reproducción (play)
  }

  mostrarSlideYAnimar() {
    this.cambiarSlide(1);
  }
}
  