
document.addEventListener("DOMContentLoaded",
() => {

    const dragAndDropArea = document.querySelector(".div-drag-and-drop");
    const imagenInput = document.querySelector("imagen");
    const imageList = document.querySelector(".list-images");

    // al pasar con la imagen por encima del contenedor
    dragAndDropArea.addEventListener("dragover", (event) => {
        event.preventDefault();
        dragAndDropArea.classList.remove("div-drag-and-drop");
        dragAndDropArea.classList.add("div-drag-over");
    });

    // al salir del area del contenedor con la imagen
    dragAndDropArea.addEventListener("dragleave", (event) => {
        event.preventDefault();
        dragAndDropArea.classList.remove("div-drag-over");
        dragAndDropArea.classList.add("div-drag-and-drop");
    });

    // al depositar la imagen dentro del contenedor
    dragAndDropArea.addEventListener("drop", (event) => {
        event.preventDefault();
        dragAndDropArea.classList.remove("div-drag-over");
        dragAndDropArea.classList.add("div-drag-and-drop");
    
        const file = event.dataTransfer.files[0];
        if (file.type.match("image.*")) {

            const reader = new FileReader();

            reader.onload = function(event) {
                const imageName = file.name;
                const listItem = document.createElement("li");
                listItem.textContent = imageName;
        
                const removeButton = document.createElement("button");
                removeButton.innerHTML = "&times;"
                removeButton.classList.add("remove-button");
                removeButton.addEventListener("click", () => {
                    listItem.remove();
                    updateImageInput();
                });
                listItem.appendChild(removeButton);
        
                imageList.appendChild(listItem);
                updateImageInput();
            }

            reader.readAsDataURL(file);
            dragAndDropArea.innerHTML = "Arrastra y suelta la imagen del estudio aquí";
        } else {
            dragAndDropArea.innerHTML = "El archivo seleccionado no es una imagen";
        }
    });

    function updateImageInput() {
        const imageItems = imageList.getElementsByTagName("li");
        const imageNames = Array.from(imageItems).map((item) => item.textContent);
        imagenInput.value = imageNames.join(",");
    }

});