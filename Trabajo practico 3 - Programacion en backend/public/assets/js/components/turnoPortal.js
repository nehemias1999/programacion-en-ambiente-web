class turnoDisponible {
    constructor() {
      this.especialistas = [
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
            "MIÉRCOLES"
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
              "horas": 9,
              "minutos": 30
            },
            {
              "dia": "Viernes",
              "horas": 10,
              "minutos": 0
            }
          ]
        }
      ];
  
      this.selectProfesional = document.querySelector('#select_pro');
      this.ulElement = document.querySelector('#div_diasAtiende ul');
      this.ulElementTurnos = document.querySelector('#div_turnosDisponibles ul');
      this.ulElementResultados = document.querySelector('#div_resultado');
  
      this.selectProfesional.addEventListener('change', () => this.fechasTurnos());
    }
  
    fechasTurnos() {
      var profesionalSeleccionado = this.selectProfesional.value;
      var especialista = this.especialistas.find(function(especialista) {
        return especialista.nombre === profesionalSeleccionado;
      });
  
      if (especialista) {
        this.ulElement.innerHTML = '';
        this.ulElementTurnos.innerHTML = '';
        this.ulElementResultados.innerHTML = '';
  
        var diaActual = new Date().getDay();
        var daysOfWeek = ['DOMINGO', 'LUNES', 'MARTES', 'MIÉRCOLES', 'JUEVES', 'VIERNES', 'SÁBADO'];
        var diasOrdenados = daysOfWeek.slice(diaActual).concat(daysOfWeek.slice(0, diaActual));
  
        daysOfWeek.forEach(function(day, index) {
          var liElement = document.createElement('li');
          liElement.textContent = diasOrdenados[index];
          this.ulElement.appendChild(liElement);
        }, this);
  
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
          this.ulElement.appendChild(liElement);
  
          liElement.dataset.nombreDia = daysOfWeek[fecha.getDay()];
  
          liElement.addEventListener('click', (event) => {
            var fechaSeleccionada = event.target.textContent;
            var nombreDiaSeleccionado = event.target.dataset.nombreDia;
  
            console.log('Fecha seleccionada:', fechaSeleccionada);
            console.log('Nombre del día:', nombreDiaSeleccionado);
  
            var turnosTomadosFecha = especialista.turnosTomados.filter(function(turno) {
              return turno.dia.toUpperCase() === nombreDiaSeleccionado.toUpperCase();
            });
  
            console.log('TurnosTomados:', turnosTomadosFecha);
  
            var horariosDisponibles = [];
            var horaInicio = especialista.horarioInicio.horas;
            var minutosInicio = especialista.horarioInicio.minutos;
            var horaFinalizacion = especialista.horarioFinalizacion.horas;
            var minutosFinalizacion = especialista.horarioFinalizacion.minutos;
            var duracionTurno = especialista.duracionTurno;
  
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
  
              var rangoHorario = `${HoraIni.toString().padStart(2, '0')}:${minutosIni.toString().padStart(2, '0')} a ${HoraNuevaFinTurno.toString().padStart(2, '0')}:${MinutosNuevaFinTurno.toString().padStart(2, '0')}`;
              horariosDisponibles.push(rangoHorario);
  
              HoraIni = HoraNuevaFinTurno;
              minutosIni = MinutosNuevaFinTurno;
            }
  
            console.log('Horarios Disponibles rangos:', horariosDisponibles);
  
            horariosDisponibles = horariosDisponibles.filter(function(horarioDisponible) {
              var horarioTomado = turnosTomadosFecha.find(function(turno) {
                return turno.horas === parseInt(horarioDisponible.split(':')[0]) &&
                  turno.minutos === parseInt(horarioDisponible.split(':')[1]);
              });
              return !horarioTomado;
            });
  
            if (horariosDisponibles.length === 0) {
              var mensajeElement = document.createElement('li');
              mensajeElement.textContent = 'No hay turnos disponibles';
              mensajeElement.classList.add('no-disponibles');
              this.ulElementTurnos.appendChild(mensajeElement);
            } else {
              horariosDisponibles.forEach(function(horario) {
                var liElementTurnos = document.createElement('li');
                liElementTurnos.textContent = horario;
                this.ulElementTurnos.appendChild(liElementTurnos);
              }, this);
            }
  
            this.ulElementTurnos.addEventListener('click', () => {
              var horaElegida = event.target.textContent;
  
              var liElementResultado = document.createElement('p');
              liElementResultado.textContent = `Ud a seleccionado un turno el día ${nombreDiaSeleccionado} fecha: ${fechaSeleccionada} con el especialista ${profesionalSeleccionado} a las ${horaElegida} Hs`;
              this.ulElementResultados.appendChild(liElementResultado);
  
              console.log('Especialista:', profesionalSeleccionado);
              console.log('Turno el día:', nombreDiaSeleccionado);
              console.log('Fecha:', fechaSeleccionada);
              console.log('Hora:', horaElegida);
            });
          });
        }
      }
    }
  }
  

  