import { timeout } from '../functions/index'

const downArrow = document.getElementById("second-slide__btn-box")

downArrow?.addEventListener("click", () => {
    window.scroll(0, window.innerHeight*2)
})