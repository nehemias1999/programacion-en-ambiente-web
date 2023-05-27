
class HomeFunctionalities {

    constructor() {

        document.addEventListener("DOMContentLoaded", () => {
            ScriptAdministrator.loadScript("home-carrousel", "/assets/js/components/CarrouselAdministrator.js", () => {	
                let elementHomeCarrousel = new HomeCarrousel(); /*creo objeto donde se crea el carrousel */
            });
        });
    }
}

let homeFunctionalities = new HomeFunctionalities();