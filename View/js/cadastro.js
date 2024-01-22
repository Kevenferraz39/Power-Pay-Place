
// Array de países
var paises = [
    "África do Sul", "Albânia", "Alemanha", "Andorra", "Angola", "Antígua e Barbuda", "Arábia Saudita", "Argélia",
    "Argentina", "Armênia", "Austrália", "Áustria", "Azerbaijão", "Bahamas", "Bangladesh", "Barbados", "Barém",
    "Bélgica", "Belize", "Benin", "Bielorrússia", "Bolívia", "Bósnia e Herzegovina", "Botsuana", "Brasil",
    "Brunei", "Bulgária", "Burkina Faso", "Burundi", "Butão", "Cabo Verde", "Camarões", "Camboja", "Canadá",
    "Catar", "Cazaquistão", "Chade", "Chile", "China", "Chipre", "Cingapura", "Colômbia", "Comores",
    "Coreia do Norte", "Coreia do Sul", "Costa do Marfim", "Costa Rica", "Croácia", "Cuba", "Dinamarca",
    "Djibuti", "Dominica", "Egito", "El Salvador", "Emirados Árabes Unidos", "Equador", "Eritreia", "Eslováquia",
    "Eslovênia", "Espanha", "Estados Unidos", "Estônia", "Eswatini", "Etiópia", "Fiji", "Filipinas", "Finlândia",
    "França", "Gabão", "Gâmbia", "Gana", "Geórgia", "Granada", "Grécia", "Guatemala", "Guiana", "Guiné",
    "Guiné Equatorial", "Guiné-Bissau", "Haiti", "Holanda", "Honduras", "Hungria", "Iémen", "Ilhas Marshall",
    "Ilhas Salomão", "Índia", "Indonésia", "Irã", "Iraque", "Irlanda", "Islândia", "Israel", "Itália", "Jamaica",
    "Japão", "Jordânia", "Kosovo", "Kuwait", "Laos", "Lesoto", "Letônia", "Líbano", "Libéria", "Líbia",
    "Liechtenstein", "Lituânia", "Luxemburgo", "Macedônia do Norte", "Madagascar", "Malásia", "Malaui",
    "Maldivas", "Mali", "Malta", "Marrocos", "Maurícia", "Mauritânia", "México", "Micronésia", "Moçambique",
    "Moldávia", "Mônaco", "Mongólia", "Montenegro", "Myanmar", "Namíbia", "Nauru", "Nepal", "Nicarágua",
    "Níger", "Nigéria", "Noruega", "Nova Zelândia", "Omã", "Países Baixos (Holanda)", "Palau", "Panamá",
    "Papua-Nova Guiné", "Paquistão", "Paraguai", "Peru", "Polônia", "Portugal", "Quênia", "Quirguistão",
    "Quiribati", "Reino Unido", "República Centro-Africana", "República Checa", "República Democrática do Congo",
    "República Dominicana", "Romênia", "Ruanda", "Rússia", "Samoa", "San Marino", "Santa Lúcia",
    "São Cristóvão e Nevis", "São Tomé e Príncipe", "São Vicente e Granadinas", "Seicheles", "Senegal",
    "Serra Leoa", "Sérvia", "Singapura", "Síria", "Somália", "Sri Lanka", "Suazilândia", "Sudão", "Sudão do Sul",
    "Suécia", "Suíça", "Suriname", "Tailândia", "Taiwan", "Tajiquistão", "Tanzânia", "Timor-Leste", "Togo",
    "Tonga", "Trinidad e Tobago", "Tunísia", "Turcomenistão", "Turquia", "Tuvalu", "Ucrânia", "Uganda",
    "Uruguai", "Uzbequistão", "Vanuatu", "Vaticano", "Venezuela", "Vietnã", "Zâmbia", "Zimbábue"
];

// Elementos HTML
var label = document.createElement("label");
label.setAttribute("for", "selectPais");
label.textContent = "País:";

var select = document.createElement("select");
select.setAttribute("name", "selectPais");
select.setAttribute("id", "selectPais");

var defaultOption = document.createElement("option");
defaultOption.textContent = "\u00A0"; // Adiciona um espaço em branco
select.appendChild(defaultOption);

// Preencher as opções do menu suspenso
for (var i = 0; i < paises.length; i++) {
    var option = document.createElement("option");
    option.setAttribute("value", paises[i]);
    option.textContent = paises[i];
    select.appendChild(option);
}

// Adicionar elementos ao corpo do documento

