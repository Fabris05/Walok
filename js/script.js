//Info
const testimonials = [
    {
      name: "Cristian Oscco",
      social: "Instagram",
      image: "img/clients/c1.jpg",
      testimonial:
        "El restaurante tiene comidas deliciosas. Hace poco reservé una mesa para dos y fue muy rápido el proceso, el servicio y la atención de calidad.",
    },
    {
      name: "Emma Watson",
      social: "Facebook",
      image: "img/clients/c2.jpg",
      testimonial:
        "The Chinese restaurant is my absolute favorite spot for a delicious meal. The staff is always friendly, and the food quality is unmatched.",
    },
    {
      name: "Virgilio Martínez",
      social: "X",
      image: "img/clients/c3.jpg",
      testimonial:
        "La consistencia es clave, y este restaurante nunca me ha decepcionado. Cada visita es una experiencia deliciosa y reconfortante.",
    },
    {
      name: "Gastón Acurio",
      social: "X",
      image: "img/clients/c4.jpg",
      testimonial:
        "La presentación de los platos es impecable, y el sabor es simplemente excepcional. Nunca dejo de recomendar este lugar a mis amigos y familiares.",
    },
  ];
  //Slide
  let i = 0;
  //Cantidad de slide
  let j = testimonials.length;
  let testimonialContainer = document.getElementById("testimonial-container");
  let nextBtn = document.getElementById("next");
  let prevBtn = document.getElementById("prev");
  nextBtn.addEventListener("click", () => {
    i = (j + i + 1) % j;
    displayTestimonial();
  });
  prevBtn.addEventListener("click", () => {
    i = (j + i - 1) % j;
    displayTestimonial();
  });
  let displayTestimonial = () => {
    testimonialContainer.innerHTML = `
      <p>${testimonials[i].testimonial}</p>
      <img src=${testimonials[i].image}>
      <h3>${testimonials[i].name}</h3>
      <h6>${testimonials[i].social}</h6>
    `;
  };
  window.onload = displayTestimonial;