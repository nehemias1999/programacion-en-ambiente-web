// Obtener referencia a las tablas
const tablaPrincipal = document.getElementById('tablaPrincipal');
const tablaAceptadas = document.getElementById('tablaAceptadas');

// Simular datos iniciales de la tabla principal
let datosTablaPrincipal = [
    { id: 1, texto: 'Fila 1' },
    { id: 2, texto: 'Fila 2' },
    // ... más filas
];

// Función para renderizar la tabla principal
function renderizarTablaPrincipal() {
    tablaPrincipal.innerHTML = '';

    datosTablaPrincipal.forEach(fila => {
        const tr = document.createElement('tr');
        const tdTexto = document.createElement('td');
        tdTexto.textContent = fila.texto;
        const tdBotones = document.createElement('td');
        const botonAceptar = document.createElement('button');
        botonAceptar.textContent = 'Aceptar';
        botonAceptar.addEventListener('click', () => aceptarFila(fila.id));
        const botonEliminar = document.createElement('button');
        botonEliminar.textContent = 'Eliminar';
        botonEliminar.addEventListener('click', () => eliminarFila(fila.id));
        tdBotones.appendChild(botonAceptar);
        tdBotones.appendChild(botonEliminar);
        tr.appendChild(tdTexto);
        tr.appendChild(tdBotones);
        tablaPrincipal.appendChild(tr);
    });
}

// Función para aceptar una fila
function aceptarFila(id) {
    const filaAceptada = datosTablaPrincipal.find(fila => fila.id === id);
    
    if (filaAceptada) {
        datosTablaPrincipal = datosTablaPrincipal.filter(fila => fila.id !== id);
        // Agregar fila aceptada a la tabla correspondiente
        // Código para agregar la fila en tablaAceptadas
        renderizarTablaPrincipal();
    }
}

// Función para eliminar una fila
function eliminarFila(id) {
    datosTablaPrincipal = datosTablaPrincipal.filter(fila => fila.id !== id);
    renderizarTablaPrincipal();
}

// Renderizar la tabla principal inicialmente
renderizarTablaPrincipal();

// Simular actualización de la tabla cada 10 minutos
setInterval(() => {
    // Obtener nuevos datos de la tabla (por ejemplo, mediante una solicitud AJAX)
    // Actualizar datosTablaPrincipal con los nuevos datos
    renderizarTablaPrincipal();
}, 10 * 60 * 1000); // 10 minutos (en milisegundos)
