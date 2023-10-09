document.addEventListener("DOMContentLoaded", function(){
    const headers=document.querySelectorAll('.index-header, .index-header2, .index-header3');
    let currentIndex=0;

    function mostrarHeader(){
        headers[currentIndex].style.display='none';
        currentIndex=(currentIndex+1) % headers.length;
        headers[currentIndex].style.display='flex'
    }

    setInterval(mostrarHeader, 3500);
});

