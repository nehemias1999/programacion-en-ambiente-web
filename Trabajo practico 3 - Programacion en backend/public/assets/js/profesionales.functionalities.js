
document.addEventListener("DOMContentLoaded", () => {

    const filterSelect = document.getElementById("filterSelect");
    const sortButton = document.getElementById("sortButton");
    const searchButton = document.getElementById("searchButton");
    const resultsPerPageInput = document.getElementById("resultsPerPageInput");
    const listContainer = document.getElementById("listContainer");
    let originalList = Array.from(listContainer.children);
  
    // Evento de búsqueda
    searchButton.addEventListener("click", () => {
        const filterValue = filterSelect.value;
        const filteredList = originalList.filter(item => {
            const text = item.textContent.toLowerCase();
            return text.includes(filterValue);
        });
        displayList(filteredList);
    });
  
    // Evento de ordenamiento
    sortButton.addEventListener("click", () => {
        const sortOrder = sortButton.textContent.toLowerCase();
        let sortedList;
        if (sortOrder === "ordenar ascendente") {
            sortButton.textContent = "Ordenar descendente";
            sortedList = originalList.slice().sort((a, b) => a.textContent.localeCompare(b.textContent));
        } else {
            sortButton.textContent = "Ordenar ascendente";
            sortedList = originalList.slice().sort((a, b) => b.textContent.localeCompare(a.textContent));
        }
        displayList(sortedList);
    });
  
    // Función para mostrar la lista
    function displayList(items) {
        listContainer.innerHTML = "";
        const resultsPerPage = parseInt(resultsPerPageInput.value);
        const slicedItems = items.slice(0, resultsPerPage);
        for (const item of slicedItems) {
            listContainer.appendChild(item);
        }
    }
});  