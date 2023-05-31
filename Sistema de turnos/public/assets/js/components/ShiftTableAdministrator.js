
class PendingShiftTableAdministrator {

    constructor(tableSelector, destinyTable, pendingShifts) {
        this.table = ElementAdministrator.getElement(tableSelector);
        this.destinyTable = destinyTable;
        this.pendingShifts = pendingShifts;
        if(this.pendingShifts !== [])
            this.renderTable();
    }

    addShift(shift) {
        this.pendingShifts.push(shift);
        this.renderTable();
    }

    removeShift(index) {
        this.pendingShifts.splice(index, 1);
        this.renderTable();
    }

    renderTable() {

        this.table.innerHTML = "";

        let rowId = 0;
    
        this.pendingShifts.forEach((pendingShift) => {

            const trShift = ElementAdministrator.setNewElement("tr", "", {id:rowId ++});
    
            const tdEstimatedTime = ElementAdministrator.setNewElement("td", pendingShift.estimatedTime, {});
            trShift.appendChild(tdEstimatedTime);

            const tdPatient = ElementAdministrator.setNewElement("td", pendingShift.patient, {});
            trShift.appendChild(tdPatient);

            const tdAcceptButton = ElementAdministrator.setNewElement("td", "", {});
            const buttonAccept = ElementAdministrator.setNewElement("button", "Aceptar", {class:"button-accept"});
            tdAcceptButton.appendChild(buttonAccept);
            trShift.appendChild(tdAcceptButton);

            buttonAccept.addEventListener("click", () => {
                this.destinyTable.changeActualShift(trShift);
                this.removeShift(trShift.id);
            });
        
            this.table.appendChild(trShift);
        });
    }
}

class ActualShiftTableAdministrator {
    
    constructor(tableSelector) {
        this.table = ElementAdministrator.getElement(tableSelector);
        this.actualShift = null;
    }
  
    changeActualShift(shift) {
        this.actualShift = shift;
        this.renderTable();
    }
    
    renderTable() {

        this.table.innerHTML = "";
        
        const tdClinicHistoryButton = ElementAdministrator.setNewElement("td", "", {});
        const buttonClinicHistory = ElementAdministrator.setNewElement("button", "Historia clinica", {class:"button-clinic-history"});
        tdClinicHistoryButton.appendChild(buttonClinicHistory);
        
        this.actualShift.appendChild(tdClinicHistoryButton);

        buttonClinicHistory.addEventListener("click", () => {
            console.info(
                "Historia clinica"
            );
        });
    
        this.table.appendChild(this.actualShift);
    }
}