const carrouselAnimationDuration = 600

document.addEventListener('DOMContentLoaded', () => {
    let screenElem = document.getElementById("project-picture-container")
    if (screenElem == null || typeof screenElem == 'undefined') return;

    let carrouselIndex = 0
    let viewportElements = screenElem.getElementsByClassName("viewport")

    let moving = false
    if (viewportElements.length > 1) {
        for (let i = 0; i < viewportElements.length - 1; i++) {
            viewportElements[i + 1].classList.add("hidden-pic")
        }

        let prevButton = document.getElementById("prev-button")
        let nextButton = document.getElementById("next-button")

        prevButton.addEventListener("click", () => {
            if (!moving) {
                let currentIndex = carrouselIndex
                if (carrouselIndex === 0) {
                    carrouselIndex = viewportElements.length - 1
                } else {
                    carrouselIndex --
                }

                let start = Date.now()
                let fromElement = viewportElements[currentIndex]
                let toElement = viewportElements[carrouselIndex]
                toElement.classList.remove("hidden-pic")
                toElement.style.left = "-100%"
                toElement.style.right = "100%"
                fromElement.classList.remove("completely-shown")
                moving = true

                let callback = () => {

                    let progress = (Date.now() - start) / carrouselAnimationDuration
                    if (progress >= 1) {
                        toElement.style.left = "0"
                        toElement.style.right = "0"
                        toElement.classList.add("completely-shown")
                        fromElement.style.left = "0"
                        fromElement.style.right = "0"
                        fromElement.classList.add("hidden-pic")
                        moving = false
                    } else {
                        toElement.style.left = (-(1 - progress) * 100).toString() + "%"
                        toElement.style.right = ((1 - progress) * 100).toString() + "%"
                        fromElement.style.left = (progress * 100).toString() + "%"
                        fromElement.style.right = (-progress * 100).toString() + "%"
                        requestAnimationFrame(callback)
                    }
                }

                requestAnimationFrame(callback)
            }
        })

        nextButton.addEventListener("click", () => {
            if (!moving) {
                let currentIndex = carrouselIndex
                if (carrouselIndex === viewportElements.length - 1) {
                    carrouselIndex = 0
                } else {
                    carrouselIndex ++
                }

                let start = Date.now()
                let fromElement = viewportElements[currentIndex]
                let toElement = viewportElements[carrouselIndex]
                toElement.classList.remove("hidden-pic")
                toElement.style.left = "100%"
                toElement.style.right = "-100%"
                fromElement.classList.remove("completely-shown")
                moving = true

                let callback = () => {

                    let progress = (Date.now() - start) / carrouselAnimationDuration
                    if (progress >= 1) {
                        toElement.style.left = "0"
                        toElement.style.right = "0"
                        toElement.classList.add("completely-shown")
                        fromElement.style.left = "0"
                        fromElement.style.right = "0"
                        fromElement.classList.add("hidden-pic")
                        moving = false
                    } else {
                        toElement.style.left = ((1 - progress) * 100).toString() + "%"
                        toElement.style.right = (-(1 - progress) * 100).toString() + "%"
                        fromElement.style.left = (-progress * 100).toString() + "%"
                        fromElement.style.right = (progress * 100).toString() + "%"
                        requestAnimationFrame(callback)
                    }
                }

                requestAnimationFrame(callback)
            }
        })
    }
})