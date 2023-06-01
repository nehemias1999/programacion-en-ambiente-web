document.addEventListener('DOMContentLoaded', function() {
    var selectProfesional = document.querySelector('#select_pro');
    
      selectProfesional.addEventListener('change', function() {
    
      var profesionalSeleccionado = selectProfesional.value;
      var ulElement;
      var especialista;
      especialista = especialistas.find(function(especialista) {
        return especialista.nombre === profesionalSeleccionado;
      });
   
      if (especialista) {
        ulElement = document.querySelector('#div_diasAtiende ul');
        ulElement.innerHTML = '';
  
       // Obtener el día actual
        var diaActual = new Date().getDay(); // 0 para domingo, 1 para lunes, etc.

        // Ajustar el orden de los días en base al día actual
        var daysOfWeek = ['DOMINGO', 'LUNES', 'MARTES', 'MIÉRCOLES', 'JUEVES', 'VIERNES', 'SÁBADO'];
        var diasOrdenados = daysOfWeek.slice(diaActual).concat(daysOfWeek.slice(0, diaActual));

        // Generar los nombres de los días
        daysOfWeek.forEach(function(day, index) {
          var liElement = document.createElement('li');
          liElement.textContent = diasOrdenados[index];
          ulElement.appendChild(liElement);
        });

  
        // Generar los elementos li con las fechas de los días
        var fechaActual = new Date();
        for (var i = 0; i < daysOfWeek.length; i++) {
          var fecha = new Date(fechaActual);
          fecha.setDate(fecha.getDate() + i);
          var dia = fecha.getDate();
          var mes = fecha.getMonth() + 1;
          var anio = fecha.getFullYear();
          var fechaString = dia.toString().padStart(2, '0') + '/' + mes.toString().padStart(2, '0') + '/' + anio;
  
          var liElement = document.createElement('li');
          liElement.textContent = fechaString;
          if (especialista.diasQueAtiende.includes(daysOfWeek[fecha.getDay()].toUpperCase())) {
            liElement.classList.add('atencion');
          } else {
            liElement.classList.add('no-atencion');
            liElement.classList.add('no-seleccionable');
          }
          ulElement.appendChild(liElement);

                // Guardar el nombre del día en un atributo de datos del elemento li
          liElement.dataset.nombreDia = daysOfWeek[fecha.getDay()];

          ulElement.appendChild(liElement);
          
          // Agregar el evento clic al elemento li
          liElement.addEventListener('click', function(event) {
            // Obtener la fecha seleccionada
            var fechaSeleccionada = event.target.textContent;
            
            // Obtener el nombre del día
            var nombreDiaSeleccionado = event.target.dataset.nombreDia;
                 
            // Hacer algo con la fecha y el nombre del día seleccionados
            console.log('Fecha seleccionada:', fechaSeleccionada);
            console.log('Nombre del día:', nombreDiaSeleccionado);

            // Filtrar los turnos tomados para la fecha seleccionada - Aca guardo los turnos tomados en ese día elegido, con hora y minutos
          var turnosTomadosFecha = especialista.turnosTomados.filter(function(turno) {
            return turno.dia.toUpperCase() === nombreDiaSeleccionado.toUpperCase();
          });

           console.log('TurnosTomados: ', turnosTomadosFecha);

             // Calcular los horarios disponibles
          var horariosDisponibles = [];
          var horaInicio = especialista.horarioInicio.horas;
          var minutosInicio = especialista.horarioInicio.minutos;
          var horaFinalizacion = especialista.horarioFinalizacion.horas;
          var minutosFinalizacion = especialista.horarioFinalizacion.minutos;
          var duracionTurno = especialista.duracionTurno;
          console.log('horariosDisponibles hasta el momento: ', horariosDisponibles);

          var HoraIni;
          var minutosIni;
          var HoraFin;
          var minutosFin;
          var minutosSumados;
          var HoraNuevaFinTurno;
          var MinutosNuevaFinTurno;
          HoraIni = horaInicio;
          minutosIni = minutosInicio;
          HoraFin = horaFinalizacion;
          minutosFin = minutosFinalizacion;
          
          while (HoraIni < horaFinalizacion || (HoraIni === horaFinalizacion && minutosIni < minutosFin)) {
            minutosSumados = minutosIni + duracionTurno;
          
            if (minutosSumados >= 60) {
              HoraNuevaFinTurno = HoraIni + 1;
              MinutosNuevaFinTurno = minutosSumados - 60;
            } else {
              HoraNuevaFinTurno = HoraIni;
              MinutosNuevaFinTurno = minutosSumados;
            }
          
            // Guardar el par HoraIni:MinutosIni y HoraNuevaFinTurno:MinutosNuevaFinTurno
            var rangoHorario = `${HoraIni.toString().padStart(2, '0')}:${minutosIni.toString().padStart(2, '0')} a ${HoraNuevaFinTurno.toString().padStart(2, '0')}:${MinutosNuevaFinTurno.toString().padStart(2, '0')}`;
            horariosDisponibles.push(rangoHorario);
          
            HoraIni = HoraNuevaFinTurno;
            minutosIni = MinutosNuevaFinTurno;
          
           }
         
           console.log('Horarios Disponibles rangos; ', horariosDisponibles);
          /* var ulElementTurnos = document.querySelector('#div_turnosDisponibles ul');
           ulElementTurnos.innerHTML = '';
           // Filtrar los horarios disponibles y descartar los que están tomados
            for (var i = 0; i < horariosDisponibles.length; i++) {
              var horarioDisponible = horariosDisponibles[i];
              var horarioTomado = turnosTomadosFecha.find(function(turno) {
                return turno.horas === parseInt(horarioDisponible.split(':')[0]) &&
                  turno.minutos === parseInt(horarioDisponible.split(':')[1]);
              });
              if (!horarioTomado) {
                // El horario está disponible, mostrarlo en la lista
                var liElementTurnos = document.createElement('li');
                liElementTurnos.textContent = horarioDisponible;
                ulElementTurnos.appendChild(liElementTurnos);
              }
            }*/
            // Filtrar los horarios disponibles y descartar los que están tomados
              horariosDisponibles = horariosDisponibles.filter(function(horarioDisponible) {
                var horarioTomado = turnosTomadosFecha.find(function(turno) {
                  return turno.horas === parseInt(horarioDisponible.split(':')[0]) &&
                    turno.minutos === parseInt(horarioDisponible.split(':')[1]);
                });
                return !horarioTomado;
              });
              

              var ulElementTurnos = document.querySelector('#div_turnosDisponibles ul');
              var liElementTurnos ;
              if(horariosDisponibles.length === 0){
                var mensajeElement = document.createElement('li');
                mensajeElement.textContent = 'No hay turnos disponibles';
                mensajeElement.classList.add('no-disponibles');
                ulElementTurnos.appendChild(mensajeElement);
             
              } else {   // Actualizar la lista de turnos disponibles en el HTML
                   ulElementTurnos.innerHTML = '';
                  for (var i = 0; i < horariosDisponibles.length; i++) {
                    liElementTurnos = document.createElement('li');
                    liElementTurnos.textContent = horariosDisponibles[i];
                    ulElementTurnos.appendChild(liElementTurnos);
                  }
                  console.log('Horarios Disponibles sin turnos tomados; ', horariosDisponibles);
              } 

              var ulElementResultados = document.querySelector('#div_resultado');
              var liElementResultado;
              ulElementTurnos.addEventListener('click', function() {
                 // ulElementTurnos.innerHTML = '';
                 // var horaElegida = liElementTurnos.textContent;
                  liElementResultado =  document.createElement('p');
                  liElementResultado.textContent = 'Ud a seleccionado un turno el día ' + nombreDiaSeleccionado + ' fecha: ' + fechaSeleccionada + ' con el especialista ' + profesionalSeleccionado + ' a las ' + 'Hs';
                  ulElementResultados.appendChild(liElementResultado);
                  console.log('Especialista: ', profesionalSeleccionado); 
                  console.log('Turno el día: ', nombreDiaSeleccionado);
                  console.log('Fecha: ', fechaSeleccionada);
                  console.log('Hora: ', liElementTurnos.textContent); 
                             
              });
          }); //fin liElement 

        }//fin for
      
      }//if especialista

    });

}); //fin document
  

  
  var especialistas = [
    {
      "nombre": "Pagani Rocio",
      "diasQueAtiende": [
        "LUNES",
        "MARTES",
        "JUEVES"
      ],
      "horarioInicio": {
        "horas": 9,
        "minutos": 0
      },
      "horarioFinalizacion": {
        "horas": 12,
        "minutos": 0
      },
      "duracionTurno": 35,
      "turnosTomados": [
        {
          "dia": "Lunes",
          "horas": 9,
          "minutos": 0
        },
        {
          "dia": "Martes",
          "horas": 10,
          "minutos": 0
        },
        {
          "dia": "Jueves",
          "horas": 9,
          "minutos": 0
        },
        {
          "dia": "Jueves",
          "horas": 11,
          "minutos": 0
        }
      ]
    },
    {
      "nombre": "De Negri Gerardo",
      "diasQueAtiende": [
        "MARTES",
        "JUEVES",
        "VIERNES"
      ],
      "horarioInicio": {
        "horas": 13,
        "minutos": 0
      },
      "horarioFinalizacion": {
        "horas": 18,
        "minutos": 15
      },
      "duracionTurno": 45,
      "turnosTomados": [
        {
          "dia": "Martes",
          "horas": 14,
          "minutos": 30
        },
        {
          "dia": "Jueves",
          "horas": 16,
          "minutos": 0
        },
        {
          "dia": "Viernes",
          "horas": 13,
          "minutos": 45
        }
      ]
    },
    {
      "nombre": "Fernandez Gustavo",
      "diasQueAtiende": [
          "MIÉRCOLES",
      ],
      "horarioInicio": {
          "horas": 11,
          "minutos": 0
      },
      "horarioFinalizacion": {
          "horas": 14,
          "minutos": 0
      },
      "duracionTurno": 45,
      "turnosTomados": [
          {
              "dia": "Miércoles",
              "horas": 13,
              "minutos": 15
          },
          {
              "dia": "Miércoles",
              "horas": 12,
              "minutos": 30
          }
      ]
  },
  {
    "nombre": "Solei Sofia",
    "diasQueAtiende": [
        "LUNES",
        "VIERNES"
    ],
    "horarioInicio": {
        "horas": 7,
        "minutos": 0
    },
    "horarioFinalizacion": {
        "horas": 17,
        "minutos": 0
    },
    "duracionTurno": 30,
    "turnosTomados": [
        {
            "dia": "Lunes",
            "horas": 13,
            "minutos": 30
        },
        {
            "dia": "Viernes",
            "horas": 8,
            "minutos": 0
        }
    ]
}
  ];

