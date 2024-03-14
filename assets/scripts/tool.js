document.addEventListener("DOMContentLoaded", () => {
    for (let elem of document.getElementsByClassName("tool-button")) {
        let tool = elem.dataset.tool
        let content = document.getElementById("tool-window-" + tool)

        elem.addEventListener("click", () => {
            content.classList.add("shown")
        })

        content.addEventListener("click", () => {
            content.classList.remove("shown")
        })
    }
})