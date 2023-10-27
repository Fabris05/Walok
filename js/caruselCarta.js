let imagenes=[
    {
        "url":"img/platillos/arroz-chaufa-especial.webp",
        "nombre":"Arroz Chaufa Especial",
        "descripcion":"Arroz frito previamente mezclado con huevo y salteado con lomito de chancho, langostino, pollo y cebolla china",
        "precio":"S/. 25.00",
        "alt":"arrozchaufaespecial"
    },
    {
        "url":"img/platillos/cacerola-de-pollo-con-hongos.webp",
        "nombre":"Cacerola de Pollo con Hongos",
        "descripcion":"Trozos de pollo con verduras y hongos",
        "precio":"S/. 55.00",
        "alt":"caceroladepolloconhongos"
    },
    {
        "url":"img/platillos/carnecontausi.webp",
        "nombre":"Carne con Tausi",
        "descripcion":"Carne salteada con salsa de Tausi",
        "precio":"S/. 48.00",
        "alt":"carnecontausi"
    },
    {
        "url":"img/platillos/gallina-pachikay.webp",
        "nombre":"Gallina Pac Chi Kay",
        "descripcion":"Gallina sancochada con salsa de kión",
        "precio":"S/. 52.00",
        "alt":"gallinapacchikay"
    },
    {
        "url":"img/platillos/langostinos-al-vapor-con-ajo.webp",
        "nombre":"Langostino al Vapor con Ajo",
        "descripcion":"Langostinos al vapor con crema de ajo",
        "precio":"S/. 65.00",
        "alt":"langostinoalvaporconajo"
    },
    {
        "url":"img/platillos/pato-pekines.webp",
        "nombre":"Pato Pekines",
        "descripcion":"Un delicioso pato el cual es asado en 2 tiempos",
        "precio":"S/. 160.00",
        "alt":"patopekines"
    },
    {
        "url":"img/platillos/pollo-al-limon.webp",
        "nombre":"Pollo al Limón",
        "descripcion":"Filete de pollo arrebozado y frito con una salsa de limón agridulce",
        "precio":"S/. 42.00",
        "alt":"polloallimon"
    },
    {
        "url":"img/platillos/pollo-crukay-con-frutas.webp",
        "nombre":"Pollo Crukay con Frutas",
        "descripcion":"Pollo frito en trozos con una salsa de frutas",
        "precio":"S/. 60.00",
        "alt":"pollocrukayconfrutas"
    },
    {
        "url":"img/platillos/pollo-enrollado-con-salsa-de-ostion.webp",
        "nombre":"Pollo Enrollado en Salsa de Ostion",
        "descripcion":"Filete de pollo enrollado con espárragos en salsa de ostión",
        "precio":"S/. 46.00",
        "alt":"polloenrolladoensalsadeostion"
    },
    {
        "url":"img/platillos/sahofan-con-carne.webp",
        "nombre":"Sahofan / Maifan Saltado con Carne",
        "descripcion":"Fideos previamente sancochados saltados con carne",
        "precio":"S/. 38.00",
        "alt":"maifansaltadoconcarne"
    },
    {
        "url":"img/platillos/shaofan-maifan-saltado-de-carne.webp",
        "nombre":"Sahofan / Maifan con Carne de Res",
        "descripcion":"Fideos previamente sancochado salteado con carne de res",
        "precio":"S/. 40.00",
        "alt":"maifanconcarnederes"
    },
    {
        "url":"img/platillos/sopa-sui-kao.webp",
        "nombre":"Sopa Sui Kao",
        "descripcion":"Sopa con suikao relleno de langostinos y chancho, choysam y fideo",
        "precio":"S/. 29.00",
        "alt":"sopasuikao"
    },
    {
        "url":"img/platillos/sopa-fuchifu.webp",
        "nombre":"Sopa Fuchifu",
        "descripcion":"Crema con clara de huevo, pollo picado y fideo de arroz",
        "precio":"S/. 19.00",
        "alt":"sopafuchifu"
    },
    {
        "url":"img/platillos/taypa-a-la-plancha.webp",
        "nombre":"Taipa a la Plancha",
        "descripcion":"Saltado de pato, lomito de chancho, pollo, langostino, huevo y verduras mixtas a la plancha",
        "precio":"S/. 78.00",
        "alt":"taipaalaplancha"
    },
]

const atras=document.getElementById('gobackRight');
const adelante=document.getElementById('returnLefth');
const imagen=document.getElementById('imgnPlatillo');
const informacion=document.getElementById('textPlatillo');
const punto=document.getElementById('pointer');

let puntoActual=0;
//posicionActualCarrusel();

atras.addEventListener('click',function(){
    puntoActual-=1;

    if(puntoActual==-1){
        puntoActual=imagenes.length-1;
    }

    transiccion();
})

adelante.addEventListener('click',function(){
    puntoActual+=1;

    if(puntoActual==imagenes.length){
        puntoActual=0;
    }

    transiccion();
})

function transiccion(){
    imagen.style.transition = "opacity 0.5s ease-in-out";
    informacion.style.transition = "opacity 0.5s ease-in-out";
    imagen.style.opacity = 0;
    informacion.style.opacity = 0;

    setTimeout(function() {
        imagen.innerHTML = `<img src="${imagenes[puntoActual].url}" alt="${imagenes[puntoActual].alt}" class="imgn">`;
        informacion.innerHTML = `
            <h3 style="fon-wight: bold;">${imagenes[puntoActual].nombre}</h3>
            <p>${imagenes[puntoActual].descripcion}</p>
            <p style="font-style: italic; font-weight: bold;">${imagenes[puntoActual].precio}</p>
        `;
        setTimeout(function() {
            imagen.style.opacity = 1;
            informacion.style.opacity = 1;
        }, 10);
    }, 500);
}
/*
function posicionActualCarrusel(){
    punto.innerHTML="";
    for(var i=0;i<imagenes.length;i++){
        if(i==puntoActual){
            punto.innerHTML+='<p class="bold">.</p>';
        }else{
            punto.innerHTML+='<p>.</p>';
        }
    }
}*/