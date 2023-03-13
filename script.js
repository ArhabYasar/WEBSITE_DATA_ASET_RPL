let vifa = document.getElementById('vifa');

window.addEventListener('scroll', () => {
    let value = window.scrollY;

    vifa.style.top = value * 2.5 + 'px';
});