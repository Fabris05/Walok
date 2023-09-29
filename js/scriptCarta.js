const elementoH2 = document.querySelectorAll('.title-menu-platillo');

elementoH2.forEach((elemento) => {
    elemento.addEventListener('click', function () {
        const informacionDiv = this.parentElement.nextElementSibling;
        const responsive = window.matchMedia("(max-width:768px)").matches; 

        if (responsive){
            if (informacionDiv.style.display === 'block'){
                informacionDiv.style.display='none';
            }else{
                informacionDiv.style.display='block';
            }
        }else{
            if (informacionDiv.style.display==='none' || informacionDiv.style.display===''){
                informacionDiv.style.display='flex';
            }else{
                informacionDiv.style.display='none';
            }
        }

    });
});