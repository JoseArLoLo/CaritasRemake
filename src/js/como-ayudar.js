const menu_1 = document.querySelector(".informacion-dona-tiempo");
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

/*
const iconos = document.querySelectorAll('.sin-datos')
    iconos.forEach(item => {
        item.addEventListener('click', function() {
            document.getElementById('overlay').style.display = 'block';
            document.getElementById('popup-container').style.display = 'block';
            document.body.style.overflow = 'hidden';
        });
    })
    document.getElementById('close-btn').addEventListener('click', function() {
        document.getElementById('overlay').style.display = 'none';
        document.getElementById('popup-container').style.display = 'none';
        document.body.style.overflow = 'auto';
    });
*/