const menuButton = document.getElementById("menu-button")
const menuItems = document.getElementById("menu-items")

menuButton.addEventListener('click', () => {
    const isRotated = menuButton.style.transform === 'rotate(90deg)'
    menuButton.style.transform = isRotated ? 'rotate(0)' : 'rotate(90deg)'
    menuItems.classList.toggle('open')
})
