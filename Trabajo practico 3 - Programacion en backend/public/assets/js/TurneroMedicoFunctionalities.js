
class TurneroMedicoFunctionalities {

    constructor() {

        document.addEventListener("DOMContentLoaded", () => {
        
            

            ScriptAdministrator.loadScript("table-administrator", "/assets/js/components/TablaAdministrator.js", () => {

                ScriptAdministrator.loadScript("row-administrator", "/assets/js/components/RowAdministrator.js", () => {
                    
                });

                var data = new RowAdministrator(1, '9:00 AM', 'Juan Pérez');
                
                console.info(
                    this.data
                );
                
                let tablaTurnoActual = new TablaAdministrator('.tabla-turno-actual', []);
                let tablaTurnosPendientes = new TablaAdministrator('.tabla-turnos-pendientes', this.data);

                this.tablaTurnoActual.renderizar();
                this.tablaTurnosPendientes.renderizar();

                console.info(
                    "LLEGO"
                );
            });
        });
    };
};

let turneroMedicoFunctionalities = new TurneroMedicoFunctionalities();
  