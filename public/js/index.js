let container = document.getElementById("container");

async function renderPage(path) {

    let filePath = `templates/${path}`;
    let file = await fetch(filePath);

    let result = await file.text();

    container.innerHTML = result;

    // 🔧 Ejecutar scripts del HTML inyectado
    const scripts = container.querySelectorAll("script");
    scripts.forEach(oldScript => {
        const newScript = document.createElement("script");
        if (oldScript.src) {
            // si tiene atributo src, lo cargamos externamente
            newScript.src = oldScript.src;
        } else {
            // si tiene código inline, lo copiamos
            newScript.textContent = oldScript.textContent;
        }
        document.body.appendChild(newScript);
        oldScript.remove(); // limpieza opcional
    });

}

document.addEventListener("DOMContentLoaded", function () {
    let listItem = document.querySelector("#apiList").addEventListener("change", (function (event) {

        let newPath = (`${event.target.value}.html`);

        renderPage(newPath);
    }));
});