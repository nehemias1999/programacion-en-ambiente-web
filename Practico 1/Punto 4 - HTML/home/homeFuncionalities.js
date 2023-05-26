
class HomeFunctionalities {

    constructor() {

        document.addEventListener("DOMContentLoaded", () => {
            ScriptAdministrator.loadScript("home-carrousel", "homeCarrousel.js", () => {	
                let elementHomeCarrousel = new HomeCarrousel();
            });
        });
    }
}

let homeFunctionalities = new HomeFunctionalities();