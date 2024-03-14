window.addEventListener("load", () => {
    console.log("1")

    let closed = localStorage.getItem("parcoursup-message-closed")
    if (closed == null || typeof closed == 'undefined' || closed === "false") {
        let elem = document.getElementById("parcoursup-message")
        if (elem != null && typeof elem != 'undefined') {
            elem.classList.add("shown")

            let button = document.getElementById("close-parcoursup-message")
            console.log(button)
            button.addEventListener("click", () => {
                elem.classList.remove("shown")
                localStorage.setItem("parcoursup-message-closed", "true")
            })
        }
    }
})