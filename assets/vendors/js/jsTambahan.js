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


