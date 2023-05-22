
class DragAndDropAdministrator {

    constructor(dragAndDropArea, imageList, imagenInput) {
        this.dragAndDropArea = ElementAdministrator.getElement(dragAndDropArea);
        this.imageList = ElementAdministrator.getElement(imageList);
        this.imagenInput = ElementAdministrator.getElement(imagenInput);
        
        // eventos
        this.dragAndDropArea.addEventListener("dragenter", () => this.dragEnter());
        this.dragAndDropArea.addEventListener("dragleave", () => this.dragLeave());
        this.dragAndDropArea.addEventListener("dragover", (event) => this.dragOver(event));

        document.addEventListener("drop", (event) => this.dropItem(event));
    }

    dragEnter() {
        this.dragAndDropArea.classList.remove("div-drag-and-drop");
        this.dragAndDropArea.classList.add("div-drag-over");
    }

    dragLeave() {
        this.dragAndDropArea.classList.remove("div-drag-over");
        this.dragAndDropArea.classList.add("div-drag-and-drop");
    }

    dragOver(event) {
        event.preventDefault();
    }

    updateImageInput() {
        const imageItems = this.imageList.getElementsByTagName("li");
        const imageNames = Array.from(imageItems).map((item) => item.textContent);
        this.imagenInput.value = imageNames.join(",");
    }
    
    dropItem(event) {
        event.preventDefault();
        this.dragLeave();
    
        const file = event.dataTransfer.files[0];
    
        if (file && file.type.match("image.*")) {
            const reader = new FileReader();
        
            reader.onload = () => {
                const imageName = file.name;
                const listItem = document.createElement("li");
                listItem.textContent = imageName;
        
                const removeButton = document.createElement("button");
                removeButton.innerHTML = "&times;";
                removeButton.classList.add("remove-button");
                removeButton.addEventListener("click", () => {
                listItem.remove();
                this.updateImageInput();
                });
                listItem.appendChild(removeButton);
        
                this.imageList.appendChild(listItem);
                this.updateImageInput();
            };
        
            reader.readAsDataURL(file);
            this.dragAndDropArea.innerHTML = "Arrastra y suelta la imagen del estudio aquí";
        } else {
            this.dragAndDropArea.innerHTML = "El archivo seleccionado no es una imagen";
        }
    }
}