
class HomeFunctionalities {

    constructor() {

        document.addEventListener("DOMContentLoaded", () => {
            ScriptAdministrator.loadScript("home-carrousel", "homeCarrousel.js", () => {	
                let elementHomeCarrousel = new HomeCarrousel(); /*creo objeto donde se crea el carrousel */
            });
        });
    }
}

let homeFunctionalities = new HomeFunctionalities();