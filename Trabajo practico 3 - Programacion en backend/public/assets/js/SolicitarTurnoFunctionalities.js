
class SolicitarTurnoFunctionalities {

    constructor() {

        document.addEventListener("DOMContentLoaded", () => {

            ScriptAdministrator.loadScript("element-administrator", "/assets/js/components/ElementsAdministrator.js", () => {	
                let elementAdministrator = new ElementAdministrator();
			});

            ScriptAdministrator.loadScript("drag-and-drop-administrator", "/assets/js/components/DragAndDropAdministrator.js", () => {	
                let dragAndDropAdministrator = new DragAndDropAdministrator(
                    ".div-drag-and-drop",
                    ".list-images",
                    "#input-image"
                );
            });         
        });
    }
}

let solicitarTurnoFunctionalities = new SolicitarTurnoFunctionalities();