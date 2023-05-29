
class RowAdministrator {

    constructor(id, horario, paciente) {
        this.id = id;
        this.horario = horario;
        this.paciente = paciente;
        this.elemento = this.renderizar();
    }
  
    renderizar() {
        const tr = document.createElement('tr');
    
        const tdHorario = document.createElement('td');
        tdHorario.textContent = this.horario;
        tr.appendChild(tdHorario);
    
        const tdPaciente = document.createElement('td');
        tdPaciente.textContent = this.paciente;
        tr.appendChild(tdPaciente);
    
        const tdBotones = document.createElement('td');
        const botonHistoriaClinica = document.createElement('button');
        botonHistoriaClinica.textContent = 'Historia Clínica';
        botonHistoriaClinica.addEventListener('click', () => this.mostrarHistoriaClinica());
        const botonAceptar = document.createElement('button');
        botonAceptar.textContent = 'Aceptar';
        botonAceptar.addEventListener('click', () => this.aceptarFila());
        const botonCancelar = document.createElement('button');
        botonCancelar.textContent = 'Cancelar';
        botonCancelar.addEventListener('click', () => this.cancelarFila());
        tdBotones.appendChild(botonHistoriaClinica);
        tdBotones.appendChild(botonAceptar);
        tdBotones.appendChild(botonCancelar);
        tr.appendChild(tdBotones);
    
        return tr;
    }
  
    mostrarHistoriaClinica() {
        console.log('Mostrando historia clínica:', this);
    }
  
    aceptarFila() {
        if (tablaPrincipal.fila) {
            tablaPrincipal.eliminarFila();
        }
    
        tablaPrincipal.agregarFila(this);
        tablaAceptadas.eliminarFila(this.id);
    }
  
    cancelarFila() {
        tablaAceptadas.eliminarFila(this.id);
    }
}