// header-navbar toggling event listener

import { timeout } from '../functions/index'

const navbarToggle = document.getElementById("navbar-toggle")
const navbar = document.getElementById("navbar")
const openClass = "dropdown-is-open"
// hiding the dropdown is necessary to prevent it
// from showing up when resizing the window
const hiddenClass = "dropdown-is-hidden"

navbarToggle?.addEventListener('click', async () => {
    if (navbar?.classList.contains(openClass)) {
        navbar?.classList.remove(openClass)
        await timeout(300);
        navbar?.classList.add(hiddenClass)
        return
    }
    navbar?.classList.remove(hiddenClass)
    await timeout(20)
    navbar?.classList.add(openClass)
})