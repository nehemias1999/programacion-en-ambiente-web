
class ShiftsAdministrator {

    constructor() {
  
        this.selectProfesional = ElementAdministrator.getElement('#select-profesional');
        this.buttonBuscar = ElementAdministrator.getElement('.button-buscar');
        this.ulElement = ElementAdministrator.getElement('#div-diasAtiende ul');
        this.ulElementTurnos = ElementAdministrator.getElement('#div-turnosDisponibles ul');
        this.ulElementResultados = ElementAdministrator.getElement('#div-resultado');
    
        this.buttonBuscar.addEventListener('click', () => this.fechasTurnos());
    }
  
    fechasTurnos() {

        let profesionalSeleccionado = this.selectProfesional.value;

        fetch('/portal-del-paciente/inicio/solicitar-turno/getAllProfessionalData', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'professional_id=' + encodeURIComponent(profesionalSeleccionado)
        })
        .then((response) => {
            if (!response.ok) 
                console.error('Error al obtener los datos.');

            return response.json();
        })
        .then((data) => {

            console.info(
                data
            );
        })
        .catch((error) => {
            console.error('Error en el procesamiento de la respuesta:', error);
        });
    }
}