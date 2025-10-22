let container = document.getElementById("container");

async function renderPage(path) {
    let filePath = `templates/${path}`;
    window.location.href = filePath;
}

document.addEventListener("DOMContentLoaded", function () {
    let listItem = document.querySelector("#apiList").addEventListener("change", (function (event) {
        let newPath = (`${event.target.value}.html`);
        renderPage(newPath);
    }));
});