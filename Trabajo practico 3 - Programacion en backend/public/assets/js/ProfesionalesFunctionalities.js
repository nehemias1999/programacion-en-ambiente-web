
class ProfesionalesFunctionalities {

    constructor() {

        document.addEventListener("DOMContentLoaded", () => {

            ScriptAdministrator.loadScript("element-administrator", "/assets/js/components/ElementsAdministrator.js", () => {	

                let elementAdministrator = new ElementAdministrator();
			});

            ScriptAdministrator.loadScript("filter-administrator", "/assets/js/components/FilterAdministrator.js", () => {	

                let table = [
                    { imagen: "imagen1.jpg", nombre: "John Doe", especialidad: "Medico" },
                    { imagen: "imagen2.jpg", nombre: "Jane Smith", especialidad: "Abogada" },
                    { imagen: "imagen3.jpg", nombre: "David Johnson", especialidad: "Ingeniero" },
                    { imagen: "imagen2.jpg", nombre: "Jane Smith", especialidad: "Abogada" },
                    { imagen: "imagen3.jpg", nombre: "David Johnson", especialidad: "Ingeniero" },
                    { imagen: "imagen2.jpg", nombre: "Jane Smith", especialidad: "Abogada" },
                    { imagen: "imagen3.jpg", nombre: "David Johnson", especialidad: "Ingeniero" },
                    { imagen: "imagen1.jpg", nombre: "John Doe", especialidad: "Medico" },
                    { imagen: "imagen1.jpg", nombre: "John Doe", especialidad: "Medico" },
                    { imagen: "imagen1.jpg", nombre: "John Doe", especialidad: "Medico" },
                ];

                let filterAdministrator = new FilterAdministrator(
                    "#input-search",
                    "select",
                    "#input-checkbox",
                    "#input-cantidad-resultados",
                    "#searchButton",
                    table
                );
			});

			ScriptAdministrator.loadScript("table-administrator", "/assets/js/components/TableAdministrator.js", () => {	

                let tableAdministrator = new TableAdministrator(
                    ["imagen", "nombre", "especialidad"],
                    [
                        { imagen: "imagen1.jpg", nombre: "John Doe", especialidad: "Medico" },
                        { imagen: "imagen2.jpg", nombre: "Jane Smith", especialidad: "Abogada" },
                        { imagen: "imagen3.jpg", nombre: "David Johnson", especialidad: "Ingeniero" },
                        { imagen: "imagen2.jpg", nombre: "Jane Smith", especialidad: "Abogada" },
                        { imagen: "imagen3.jpg", nombre: "David Johnson", especialidad: "Ingeniero" },
                        { imagen: "imagen2.jpg", nombre: "Jane Smith", especialidad: "Abogada" },
                        { imagen: "imagen3.jpg", nombre: "David Johnson", especialidad: "Ingeniero" },
                        { imagen: "imagen1.jpg", nombre: "John Doe", especialidad: "Medico" },
                        { imagen: "imagen1.jpg", nombre: "John Doe", especialidad: "Medico" },
                        { imagen: "imagen1.jpg", nombre: "John Doe", especialidad: "Medico" },
                ]);
			});
        });
    }
}

let profesionalesFunctionalities = new ProfesionalesFunctionalities();