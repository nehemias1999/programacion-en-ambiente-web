
class TablaAdministrator {
    
    constructor(className, datos) {
        this.className = className;
        this.datos = datos;
        this.fila = null;
        this.elemento = document.querySelector(className);
        this.renderizar();

        console.info(
            this.elemento
        );
    }
  
    renderizar() {
        this.elemento.innerHTML = '';
    
        this.datos.forEach(fila => {
            const tr = fila.elemento;
            this.elemento.appendChild(tr);
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