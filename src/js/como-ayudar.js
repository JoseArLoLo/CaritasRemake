const menu_1 = document.querySelector(".informacion-dona-tiempo");
const menu_2 = document.querySelector(".informacion-dona-recursos");
const menu_3 = document.querySelector(".informacion-dona-especie");
const menu_4 = document.querySelector(".informacion-dona-empresa");
const menu_5 = document.querySelector(".informacion-dona-profesionista");
const menus = document.querySelectorAll(".informacion-ayudar");
const overlay = document.getElementById("overlay");
menus.forEach(item => {
    item.querySelectorAll(".close-btn").forEach(boton => {
        boton.addEventListener('click', function () {
            menus.forEach(item => item.classList.remove('active'));
            overlay.classList.remove("active");
        });
    })
});

menu_1.addEventListener('click', function () {
    menus.forEach(item => item.classList.remove('active'));
    overlay.classList.add("active");
    menus[0].classList.add('active');
});
menu_2.addEventListener('click', function () {
    menus.forEach(item => item.classList.remove('active'));
    overlay.classList.add("active");
    menus[1].classList.add('active');
});
menu_3.addEventListener('click', function () {
    menus.forEach(item => item.classList.remove('active'));
    overlay.classList.add("active");
    menus[2].classList.add('active');
});
menu_4.addEventListener('click', function () {
    menus.forEach(item => item.classList.remove('active'));
    overlay.classList.add("active");
    menus[3].classList.add('active');
});
menu_5.addEventListener('click', function () {
    menus.forEach(item => item.classList.remove('active'));
    overlay.classList.add("active");
    menus[4].classList.add('active');
});