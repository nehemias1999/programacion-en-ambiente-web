
class ProfesionalesFunctionalities {

    constructor() {

        document.addEventListener("DOMContentLoaded", () => {

            ScriptAdministrator.loadScript("element-administrator", "/assets/js/components/ElementsAdministrator.js", () => {	
                let elementAdministrator = new ElementAdministrator();
			});

            ScriptAdministrator.loadScript("filter-administrator", "/assets/js/components/FilterAdministrator.js", () => {	

                let table = [
                    {src:"/assets/images/medico.jpg", nombre:"John Doe", especialidad:"Medico clinico"},
                    {src:"/assets/images/medico1.jpg", nombre:"Jane Smith", especialidad:"Cardiologa"},
                    {src:"/assets/images/medico2.jpg", nombre:"David Johnson", especialidad:"Neumonologo"},
                    {src:"/assets/images/medico.jpg", nombre:"John Doe", especialidad:"Medico clinico"},
                    {src:"/assets/images/medico1.jpg", nombre:"Jane Smith", especialidad:"Traumatologo"},
                    {src:"/assets/images/medico2.jpg", nombre:"David Johnson", especialidad:"Cirujano"},
                    {src:"/assets/images/medico.jpg", nombre:"John Doe", especialidad:"Urologo"},
                    {src:"/assets/images/medico1.jpg", nombre:"Jane Smith", especialidad:"Neumonologo"},
                    {src:"/assets/images/medico2.jpg", nombre:"David Johnson", especialidad:"Neumonologo"}
                ];

                let filterAdministrator = new FilterAdministrator(
                    "#input-search",
                    "select",
                    "#input-checkbox",
                    "#label-checkbox",
                    "#input-cantidad-resultados",
                    "#searchButton",
                    table
                );

			});

			ScriptAdministrator.loadScript("table-administrator", "/assets/js/components/TableAdministrator.js", () => {	

                let tableAdministrator = new TableAdministrator(
                    ["imagen", "nombre", "especialidad"],
                    [
                        {src:"/assets/images/medico.jpg", nombre:"John Doe", especialidad:"Medico clinico"},
                        {src:"/assets/images/medico1.jpg", nombre:"Jane Smith", especialidad:"Cardiologa"},
                        {src:"/assets/images/medico2.jpg", nombre:"David Johnson", especialidad:"Neumonologo"},
                        {src:"/assets/images/medico.jpg", nombre:"John Doe", especialidad:"Medico clinico"},
                        {src:"/assets/images/medico1.jpg", nombre:"Jane Smith", especialidad:"Traumatologo"},
                        {src:"/assets/images/medico2.jpg", nombre:"David Johnson", especialidad:"Cirujano"},
                        {src:"/assets/images/medico.jpg", nombre:"John Doe", especialidad:"Urologo"},
                        {src:"/assets/images/medico1.jpg", nombre:"Jane Smith", especialidad:"Neumonologo"},
                        {src:"/assets/images/medico2.jpg", nombre:"David Johnson", especialidad:"Neumonologo"}
                    ]);
                        
			});

            ScriptAdministrator.loadLink("/assets/css/jsStyle/Profesional.css");
        });
    }
}

let profesionalesFunctionalities = new ProfesionalesFunctionalities();