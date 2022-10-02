let audio = document.getElementsByTagName('audio');

milk.addEventListener('click', () => audio[1].play());
eating.addEventListener('click', () => audio[0].play());
fry.addEventListener('click', () => audio[3].play());
crunch.addEventListener('click', () => audio[2].play());

var sc1 = document.getElementById("content1");
var sc2 = document.getElementById("content2");
var sc3 = document.getElementById("content3");
var sc4 = document.getElementById("content4");
var sc5 = document.getElementById("content5");

sc1.addEventListener('mouseenter', () => document.querySelector('body').style = "cursor: url('img/tort.png'), auto");
sc2.addEventListener('mouseenter', () => document.querySelector('body').style = "cursor: url('img/kursor.png'), auto");
sc3.addEventListener('mouseenter', () => document.querySelector('body').style = "cursor: url('img/droz.png'), auto");
sc4.addEventListener('mouseenter', () => document.querySelector('body').style = "cursor: url('img/plesniak_kursor.png'), auto");
sc5.addEventListener('mouseenter', () => document.querySelector('body').style = "cursor: url('img/paczek.png'), auto");

let dymek = document.getElementById("dymek");

dymek.addEventListener('click', () => {
dymek.innerHTML = "<a href='#Nagłówek', style='text-decoration:none'>1. Nagłówek</a> <br>" +
        "<a style='text-decoration:none'href='#Pani_Walewska'>2. Pani Walewska</a> <br>" +
        "<a style='text-decoration:none'href='#Drożdzówka'>3. Drożdzówka</a> <br>" +
        "<a style='text-decoration:none'href='#Pleśniak'>4. Pleśniak</a> <br>" +
        "<a style='text-decoration:none'href='#Mini_pączki'>5. Mini pączki</a> <br>" +
        "<a style='text-decoration:none'href='#Kontakt'>6. Kontakt</a> <br>";
});