<head>
    <link rel="stylesheet" href="./css/bot_style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <script src="./js/bot_script.js" defer></script>
</head>
<body>
    <button class="chatbot-toggler">
        <span class="material-symbols-rounded">mode_comment</span>
        <span class="material-symbols-outlined">close</span>
    </button>
    <div class="chatbot">
        <header>
            <h2>WalokBot</h2>
            <span class="close-btn material-symbols-outlined">close</span>
        </header>
        <ul class="chatbox">
            <li class="chat incoming">
                <span class="material-symbols-outlined">smart_toy</span>
                <p>Hola... 👋🏼</p>
            </li>
        </ul>
        <div class="chat-input">
            <textarea placeholder="Escribe un mensaje..." spellcheck="false" required></textarea>
            <span id="send-btn" class="material-symbols-outlined">send</span>
        </div>
    </div>
</body>