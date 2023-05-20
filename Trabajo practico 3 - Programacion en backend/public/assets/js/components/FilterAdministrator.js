
class FilterAdministrator {

    constructor(searchInput, filterSelect, sortTypeButton, amountResultButton, searchButton, table) {
        this.searchInput = ElementAdministrator.getElement(searchInput);
        this.filterSelect = ElementAdministrator.getElement(filterSelect);
        this.sortTypeButton = ElementAdministrator.getElement(sortTypeButton);
        this.amountResultButton = ElementAdministrator.getElement(amountResultButton);
        this.searchButton = ElementAdministrator.getElement(searchButton);
        this.table = table;

        // eventos
        this.searchButton.addEventListener("click", this.searchData.bind(this));
    }

    filterData(dataList, enteredSearch, filterColumn) {
        const filteredTable = [];

        dataList.forEach((row) => {

            const columnData = row[filterColumn].toLowerCase();

            if(columnData.includes(enteredSearch))
                filteredTable.push(row);
        });

        return filteredTable;
    }    

    sortData(dataList, sortType, filterColumn) {

        return dataList.sort((actualItem, nextItem) => {

            if (sortType === "asc")
                return actualItem[filterColumn].localeCompare(nextItem[filterColumn]);
            
            return nextItem[filterColumn].localeCompare(actualItem[filterColumn]);
        });
    }

    selectData(dataList, dataAmount) {

        if(dataList.length <= dataAmount)
            return dataList;

        return dataList.slice(0, dataAmount);
    }
    
    updateTableData(filteredList, tBody) {

        tBody.innerHTML = '';
        
        filteredList.forEach((row) => {

            const tr = document.createElement("tr");

            for(let dataField in row) {

                const td = document.createElement("td");
                td.innerHTML = row[dataField];
                tr.appendChild(td);
            }

            tBody.appendChild(tr);
        });
    }

    searchData() {
        const enteredSearch = this.searchInput.value.toLowerCase(); 
        const filterColumn = this.filterSelect.value.toLowerCase();
        const sortType = (this.sortTypeButton.checked)? "asc": "desc";
        const dataAmount = parseInt(this.amountResultButton.value, 10);

        const filteredList = this.filterData(this.table, enteredSearch, filterColumn);

        const sortedList = this.sortData(filteredList, sortType, filterColumn);   

        const selectedList = this.selectData(sortedList, dataAmount);

        // ...

        this.updateTableData(selectedList, document.querySelector("table tbody"));
    }
}