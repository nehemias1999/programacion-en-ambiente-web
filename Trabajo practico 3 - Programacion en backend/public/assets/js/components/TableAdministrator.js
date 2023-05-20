
class TableAdministrator {

    constructor(headerContent, bodyContent) {
        this.setTableHeader(headerContent);
        this.setTableBody(bodyContent);
    }

    getTableData() {
        
    }

    setTableHeader(headerContent) {
        const tableHead = ElementAdministrator.getElement("thead");
        const headerRow = document.createElement("tr");

        headerContent.forEach(columnName => {

            const headerCell = document.createElement("th");
            headerCell.textContent = columnName;
            headerRow.appendChild(headerCell);

        });

        tableHead.appendChild(headerRow);
    }

    setTableBody(bodyContent) {
        const tableBody = ElementAdministrator.getElement("tbody");

        bodyContent.forEach(contentRow => {

            const bodyRow = document.createElement("tr"); 

            for(let dataField in contentRow) {

                const tableData = document.createElement('td');
                tableData.textContent = contentRow[dataField.toLowerCase()]; 
                bodyRow.appendChild(tableData); 

            }

            tableBody.appendChild(bodyRow); 
        });
    }
}