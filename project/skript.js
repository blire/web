//alert("Hello i am js");

function guess() {
    var number = prompt("Введи число");

    console.log(number);
    var a = 10;
    if (number > a) {
        alert('Слишком много')
        return guess();
    } else if (number < a) {
        alert('Слишком мало')
        return guess();
    } else if (number == a) {
        alert('вы угадали')
    }

}
//guess();
function reminder() {
    alert("Вы здесь слишком долго, уходите");
}
//setTimeout(reminder(), 10000);
function valid() {
    var name = document.getElementById("name").value;
    var surname = document.getElementById("surname").value;
    var nameX = document.getElementById("nameX").value;
    var passw = document.getElementById("passw").value;
    var reg_name = /^[a-zа-яё]+$/i;
    var reg_surname = /^[a-zа-яё]+$/i;
    var reg_nameX = /^[a-zа-яё]+$/i;
    var reg_passw = /^[0-9]{5,100}/i;
    if (reg_name.test(name) == false) {
        alert("Ошибка в поле фио");
    }
    if (reg_surname.test(surname) == false) {
        alert("Ошибка в поле фио");
    }
    if (reg_nameX.test(nameX) == false) {
        alert("Ошибка в поле фио");
    }
    if (reg_passw.test(passw) == false) {
        alert("Ошибка в поле пароль");
    }
}




document.querySelector(".button").addEventListener("click", valid);