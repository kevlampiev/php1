function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        '(?:^|\s)' + name.replace(/([.$?*+\\\/{}|()\[\]^])/g, '\\$1') + '=(.*?)(?:;|$)'
    ))
    return matches ? decodeURIComponent(matches[1]) : ''
}

/**
 * 
 * @param {Event} event  событие
 * @param {Number} good_id код товара
 * @param {number} amount  изменение количества
 */
function addToCart(event, good_id, amount) {
    event.preventDefault();
    let user = getCookie('user');
    if (user != '') {
        let queryStr = `user=${user}&goodId=${good_id}&amount=${amount}`

        $.ajax({
            type: "POST",
            url: "cartoperation.php",
            data: queryStr,
            success: (answer) => {
                console.log(answer)
                location.reload() //извращение
            }
        })
    } else {
        throw new Error('user is not logged in...')
    }
    //location.reload() //извращение
}