const scrollTop = document.getElementById('scrollTop');


window.document.addEventListener('scroll', () => {
    const scrolled = window.scrollY;
    if(scrolled > 300){
        scrollTop.classList.remove('opacity-0');
        scrollTop.classList.add('opacity-1');
    }else{
        scrollTop.classList.remove('opacity-1');
        scrollTop.classList.add('opacity-0');
    }
});


scrollTop.addEventListener('click', ()=>{
    window.scrollTo({ top: 0, behavior: 'smooth' });
})
