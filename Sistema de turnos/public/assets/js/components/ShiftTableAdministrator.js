
class ShiftTableAdministrator {
    
    constructor(className, data) {
        this.className = className;
        this.data = data;
        this.row = null;
        this.shiftTable = ElementAdministrator.getElement(className);

        ShiftTableAdministrator.renderTable(this.shiftTable, this.data);
    }
  
    static renderTable(shiftTable, data) {

        if((shiftTable === null) || (data.length == 0))
            throw new Exception(""); 

        shiftTable.innerHTML = "";
    
        data.forEach(dataRow => {
            const tr = dataRow;
            shiftTable.appendChild(tr);
        });
    }
  
    agregarFila(fila) {
        this.datos.push(fila);
        this.fila = fila;
        this.renderizar();
    }
  
    eliminarFila(id) {
        this.datos = this.datos.filter(fila => fila.id !== id);
        this.fila = null;
        this.renderizar();
    }
}

class RowAdministrator {

    constructor() {
    }
  
    static renderRow(estimatedTime, patient) {
        const tr = document.createElement('tr');
    
        const tdEstimmatedTime = document.createElement('td');
        tdEstimmatedTime.textContent = estimatedTime;
        tr.appendChild(tdEstimmatedTime);
    
        const tdPatient = document.createElement('td');
        tdPatient.textContent = patient;
        tr.appendChild(tdPatient);
    
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