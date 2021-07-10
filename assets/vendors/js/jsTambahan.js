// baguetBox
baguetteBox.run('.thumbnail', {
    animation: 'fadeIn',
    noScrollbars: false,
    buttons: true,
    overlayBackgroundColor: 'rgba(0,0,0,0.8)'
});


// lihat selengkapnya
function selengkapnya(){
    const titikTiga = document.getElementById('titikTiga');
    const selengkapnya = document.getElementById('selengkapnya');
    const btn = document.getElementById('btn-selengkapnya');

    if(titikTiga.style.display === 'none'){
        titikTiga.style.display = 'inline';
        btn.innerHTML = 'Lihat Selengkapnya';
        selengkapnya.style.display = 'none';
    } else {
        titikTiga.style.display = 'none';
        btn.innerHTML = 'Sembunyikan';
        selengkapnya.style.display = 'inline';
    }
}
function selengkapnyaSyarat(){
    const titikTiga = document.getElementById('titikTiga-syarat');
    const selengkapnya = document.getElementById('selengkapnya-syarat');
    const btn = document.getElementById('btn-selengkapnya-syarat');

    if(titikTiga.style.display === 'none'){
        titikTiga.style.display = 'inline';
        btn.innerHTML = 'Lihat Selengkapnya';
        selengkapnya.style.display = 'none';
    } else {
        titikTiga.style.display = 'none';
        btn.innerHTML = 'Sembunyikan';
        selengkapnya.style.display = 'inline';
    }
}

// incremnt dexcrement
let dec = document.querySelector('#dec');
let inc = document.querySelector('#inc');
let qtyinput = document.querySelector('.qtyinput');
inc.addEventListener('click',function(e){
    e.preventDefault();
    qtyinput.value = parseInt(qtyinput.value) + 1;
})
dec.addEventListener('click',function(e){
    e.preventDefault();
    qtyinput.value = parseInt(qtyinput.value) - 1;
    if(qtyinput.value <= 0){
        qtyinput.value = 0
    }
})

// smooth scroll
$(function(){
    var scroll = new SmoothScroll('a[href*="#section-"]', {
        speed: 500,
        speedAsDuration: true,
    });
})

