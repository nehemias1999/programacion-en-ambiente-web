
class ElementAdministrator {

    static getElement(element) {

        if (!document.querySelector(element)) {
            throw new Error("No se encontró " + element + " dentro de el DOM.");
        }

        return document.querySelector(element);
    }

    static setNewElement(tagElement, content, attibutes = {}) {
        const element = document.createElement(tagElement);

        for(const attibute in attibutes) {
            element.setAttribute(attibute, attibutes[attibute]);
        }

        if(content.tagName) 
            element.appendChild(content);
        else
            element.appendChild(document.createTextNode(content));

        return element;
    }
}