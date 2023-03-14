let hamburgerMenu = document.getElementById('hamburger-menu')
let sideBar = document.getElementsByClassName('sidebar')[0]

hamburgerMenu.addEventListener('click', function () {
    // hamburgerMenu.preventDefault()
    sideBar.classList.toggle('active')
})

document.addEventListener('click', function (e) {
    if (!hamburgerMenu.contains(e.target) && !sideBar.contains(e.target)) {
        sideBar.classList.remove('active')
    }
})

console.log(sideBar);