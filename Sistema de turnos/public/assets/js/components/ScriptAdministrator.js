
class ScriptAdministrator {

    static setNewScript(tagElement, attributes = {}) {
        const element = document.createElement(tagElement);

        for(const attribute in attributes) {
            element.setAttribute(attribute, attributes[attribute]);
        }

        return element;
    }
    
    static loadScript(scriptName, urlScript, fnCallback = null) {
        let script = document.querySelector("script#" + scriptName);

        if(!script) {
            script = this.setNewScript("script", {src:urlScript, id:scriptName});

            if(fnCallback) 
                script.addEventListener("load", fnCallback);
            
            document.head.appendChild(script);
        }

        return script;
    }

    static loadLink(urlLink) {
    
        const link= this.setNewScript("link", {rel:"stylesheet", type:"text/css", media:"all", href:urlLink});            
    
        return document.head.appendChild(link);;
    }
}