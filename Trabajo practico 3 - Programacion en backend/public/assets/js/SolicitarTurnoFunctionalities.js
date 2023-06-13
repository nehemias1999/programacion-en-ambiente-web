
class SolicitarTurnoFunctionalities {

    constructor() {

        document.addEventListener("DOMContentLoaded", () => {

            ScriptAdministrator.loadScript("element-administrator", "/assets/js/components/ElementsAdministrator.js", () => {	
                let elementAdministrator = new ElementAdministrator();

                this.addElementsDesktop();  
			});   

            let selectSpeciality = document.querySelector('#select-especialidad');

            this.initSelectSpeciality();
 
            selectSpeciality.addEventListener('change', () => {
                this.initAction();
            }); 

            ScriptAdministrator.loadScript("shifts-administrator", "/assets/js/components/ShiftsAdministrator.js", () => {	
                let shiftsAdministrator = new ShiftsAdministrator();
            });

            ScriptAdministrator.loadScript("drag-and-drop-administrator", "/assets/js/components/DragAndDropAdministrator.js", () => {	
                let dragAndDropAdministrator = new DragAndDropAdministrator(
                    ".div-drag-and-drop",
                    ".list-dropped-images",
                    ".input-image"
                );
            });         
        });
    }

    addElementsDesktop() {
        let dragAndDropContainer = ElementAdministrator.getElement(".div-input-files");

        let inputImages = ElementAdministrator.setNewElement(
            "input",
            "",
            {
                class:"input-image",
                type:"hidden"
            }
        );

        let divDragAndDrop = ElementAdministrator.setNewElement(
            "div",
            "Arrastra y suelta la imagen del estudio aquí",
            {
                class:"div-drag-and-drop",
                draggable:"true"
            }
        );

        let listDroppedImages = ElementAdministrator.setNewElement(
            "ul",
            "",
            {
                class:"list-dropped-images"
            }
        );

        divDragAndDrop.appendChild(inputImages);
        dragAndDropContainer.appendChild(divDragAndDrop);
        dragAndDropContainer.appendChild(listDroppedImages);
    }

    initSelectSpeciality() {
        fetch('/portal-del-paciente/inicio/solicitar-turno/getAllSpecialities', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        })
        .then((response) => {
            if (!response.ok) 
                console.error('Error al obtener los datos.');

            return response.json();
        })
        .then((data) => {

            selectSpeciality.innerHTML = ''; 

            if(data.length == 0) {    
                selectSpeciality.disabled = true;
                return;
            }

            selectSpeciality.disabled = false;
            
            data.forEach((row) => {
                let option = document.createElement('option')
                option.value = row.speciality_id; 
                option.textContent = row.speciality_name;
                selectSpeciality.appendChild(option); 
            });
        })
        .catch((error) => {
            console.error('Error en el procesamiento de la respuesta:', error);
        });
    }

    initAction() {
        let especialidadSeleccionada = selectSpeciality.value;

        fetch('/portal-del-paciente/inicio/solicitar-turno/getAllDoctorsThatMatch', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: 'speciality=' + encodeURIComponent(especialidadSeleccionada)
        })
        .then((response) => {
            if (!response.ok) 
                console.error('Error al obtener los datos.');

            return response.json();
        })
        .then((data) => {

            let selectDoctor = document.querySelector('#select-profesional');
            selectDoctor.innerHTML = ''; 

            if(data.length == 0) {    
                selectDoctor.disabled = true;
                return;
            }

            selectDoctor.disabled = false;
            
            data.forEach((row) => {
                let option = document.createElement('option')
                option.value = row.professional_id; 
                option.textContent = row.last_name + ', ' + row.first_name;
                selectDoctor.appendChild(option); 
            });
        })
        .catch((error) => {
            console.error('Error en el procesamiento de la respuesta:', error);
        });
    }
}

let solicitarTurnoFunctionalities = new SolicitarTurnoFunctionalities();