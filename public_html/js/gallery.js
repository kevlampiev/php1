let displayWnd = document.querySelector('.pop-up-window')


function displayImg(imgName) {
    let img = displayWnd.querySelector('img')
    img.src = imgName
    displayWnd.classList.remove('invisible')
}

function closeImg() {
    displayWnd.classList.add('invisible')
}