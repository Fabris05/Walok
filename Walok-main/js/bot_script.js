const chatbotToggler = document.querySelector(".chatbot-toggler");
const closeBtn = document.querySelector(".close-btn");
const chatbox = document.querySelector(".chatbox");
const chatInput = document.querySelector(".chat-input textarea");
const sendChatBtn = document.querySelector(".chat-input span");

const inputInitHeight = chatInput.scrollHeight;

const createChatLi = (message, className) => {
    const chatLi = document.createElement("li");
    chatLi.classList.add("chat", `${className}`);
    let chatContent = `<p>${message}</p>`;
    
    if (className === "incoming") {
        chatContent = `<span class="material-symbols-outlined">smart_toy</span>${chatContent}`;
    }

    chatLi.innerHTML = chatContent;
    return chatLi;
}

const handleChat = () => {
    const userMessage = chatInput.value.trim().toLowerCase();
  
    if (userMessage.includes("carta") || userMessage.includes("mostrar carta") || userMessage.includes("ver carta")) {
        const cartaLink = "https://walokrestaurant.rf.gd/carta_walok.pdf"; // menú walok
        chatbox.appendChild(createChatLi(userMessage, "outgoing"));
        chatbox.appendChild(createChatLi(`¡Aquí está nuestra carta! Puedes verla aquí: <a href="${cartaLink}" target="_blank">Ver la carta</a>`, "incoming"));
        chatbox.appendChild(createChatLi(`¿Deseas realizar otra consulta?`, "incoming"))
    } else if (userMessage === "si"){
        // volver a realizar otra consulta
        chatbox.appendChild(createChatLi(userMessage, "outgoing"));
        chatbox.appendChild(createChatLi(`¡Perfecto!, Walokbot siempre estará a tu disposición, ¿Cuál es tu otra consulta?`, "incoming"))
    } else if (/(\s|^)no(\s|,|$)/.test(userMessage)) {
        // finalizar consultas al bot
        chatbox.appendChild(createChatLi(userMessage, "outgoing"));
        chatbox.appendChild(createChatLi(`Espero haberte ayudado, nos vemos en una próxima oportunidad. 👋🏼🤖`, "incoming"))
    } else if (/(\s|^)gracias(\s|,|$)/.test(userMessage)){
        // mensaje de gracias
        chatbox.appendChild(createChatLi(userMessage, "outgoing"));
        chatbox.appendChild(createChatLi(`Siempre es un placer poder ayudarte. En Wa Lok nos importa la satisfacción de nuestros clientes.🙌🏼`, "incoming"))
        chatbox.appendChild(createChatLi(`¿Deseas realizar otra consulta?`, "incoming"))
    } else if (userMessage === "hi" || userMessage === "hola" || userMessage === "hello") {
        chatbox.appendChild(createChatLi(userMessage, "outgoing"));
        chatbox.appendChild(createChatLi("¡Bienvenido!, mi nombre es WalokBot 👋🏼🤖. ¿En qué puedo ayudarte?", "incoming"));
    } else if (userMessage.includes("reserva") || userMessage.includes("hacer una reserva")) {
        // reserva
        chatbox.appendChild(createChatLi(userMessage, "outgoing"));
        chatbox.appendChild(createChatLi("Para hacer una reserva, sigue los siguientes pasos:\n<br> 1. Dirígete a la parte superior derecha del menú y regístrarte.\n 2. Inicia sesión.\n 3. Colocar los datos de tu reserva.\n 4. Puedes ver tu reserva en la sección <b>VER RESERVAS</b> que se encuentra en el menú.<br>\n ¡Listo!, confirmaremos tu reserva via telefónica, e-mail y mensaje por WhatsApp.<br>\n <b>¡Esperamos verte pronto en nuestro restaurante!</b>", "incoming"));
        chatbox.appendChild(createChatLi(`¿Deseas realizar otra consulta?`, "incoming"))
    } else {
        // error
        chatbox.appendChild(createChatLi(userMessage, "outgoing"));
        chatbox.appendChild(createChatLi("Lo siento, no pude entenderte. ¿Podrías repetir de nuevo tu consulta?", "incoming"));
    }
  
    chatInput.value = "";
    chatInput.style.height = `${inputInitHeight}px`;
    chatbox.scrollTo(0, chatbox.scrollHeight);
};


sendChatBtn.addEventListener("click", handleChat);
chatInput.addEventListener("keydown", (event) => {
    if (event.key === "Enter") {
        event.preventDefault(); // Evitar que el Enter haga un salto de línea en el textarea
        handleChat();
    }
});
closeBtn.addEventListener("click", () => document.body.classList.remove("show-chatbot"));
chatbotToggler.addEventListener("click", () => document.body.classList.toggle("show-chatbot"));
