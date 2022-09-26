document.addEventListener('click', e => {
    const isDropdownButton = e.target.matches("[datadropdownbtn]")
    if(!isDropdownButton && e.target.closest('[datadropdown]') != null) return

    let currentDropdown
    if(isDropdownButton){
        currentDropdown = e.target.closest('[datadropdown]')
        currentDropdown.classList.toggle('active')
    }
    document.querySelectorAll("[datadropdown].active").forEach(dropdown =>{
        if(dropdown === currentDropdown) return
        dropdown.classList.remove("active")
    })
})