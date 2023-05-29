
class TurneroMedicoFunctionalities {

    constructor() {

        document.addEventListener("DOMContentLoaded", () => {

            ScriptAdministrator.loadScript("element-administrator", "/assets/js/components/ElementsAdministrator.js", () => {});
        
            ScriptAdministrator.loadScript("shift-table-administrator", "/assets/js/components/ShiftTableAdministrator.js", () => {

                let data = [
                    RowAdministrator.renderRow('9:00 AM', 'Juan Pérez'),
                    RowAdministrator.renderRow('10:30 AM', 'María Gómez'),
                    RowAdministrator.renderRow('11:00 AM', 'María Gómez'),
                    RowAdministrator.renderRow('11:30 AM', 'María Gómez')
                ];

                let table = new ShiftTableAdministrator(".tabla-turnos-pendientes", data);
            });
                          
        });
    };
};

let turneroMedicoFunctionalities = new TurneroMedicoFunctionalities();