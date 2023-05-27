
class SolicitarTurnoFunctionalities {

    constructor() {

        document.addEventListener("DOMContentLoaded", () => {

            ScriptAdministrator.loadScript("element-administrator", "/assets/js/components/ElementsAdministrator.js", () => {	
                let elementAdministrator = new ElementAdministrator();

                this.addElementsDesktop();
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
}

let solicitarTurnoFunctionalities = new SolicitarTurnoFunctionalities();