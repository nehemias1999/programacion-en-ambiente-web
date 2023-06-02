
class tFuncionalities {

    constructor() {

        document.addEventListener("DOMContentLoaded", () => {
            ScriptAdministrator.loadScript("turnos-disponibles", "turnoPortal.js", () => {	
                let elementTurnos = new turnoDisponible();
            });
        });
    }
}

let turnoFuncionalities = new tFuncionalities();