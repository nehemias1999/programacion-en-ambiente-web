
class WaitingRoomShiftTableFunctionalities {

    constructor() {

        document.addEventListener("DOMContentLoaded", () => {

            ScriptAdministrator.loadScript("element-administrator", "/assets/js/components/ElementsAdministrator.js", () => {});
        
            ScriptAdministrator.loadScript("shift-table-administrator", "/assets/js/components/ShiftTableAdministrator.js", () => {

                // Crear instancia de la tabla de atención
                const actualShiftTable = new ActualShiftTableAdministrator(".tabla-turno-actual");
                // Crear instancias de las tablas
                const pendingShiftTable = new PendingShiftTableAdministrator(".tabla-turnos-pendientes", actualShiftTable, [
                    {estimatedTime:"08:00 PM", patient:"Juan Perez"},
                    {estimatedTime:"08:15 PM", patient:"Maria Gomez"},
                    {estimatedTime:"08:30 PM", patient:"Pablo Gonzalez"},
                    {estimatedTime:"09:00 PM", patient:"Marta Fernandez"}
                ]);  
            });       
        });
    };
};

let waitingRoomShiftTableFunctionalities = new WaitingRoomShiftTableFunctionalities();