function getBotResponse(input) {
    if (input == "menu" || "MENU" || "Menu") {
        return "estamos para brindarte la mejor de las ayudas";
    } else if (input == "informacion") {
        return "esta es la informacion presente";
    } else if (input == "numero de contacto") {
        return "este es el numero de contacto 555555555555";
    }

    // Simple responses
    if (input == "hola") {
        return "hola bienvenido";

    } else if (input == "adios") {
        return "hasta luego";
    } else {
        return "Trata con otra pregunta!";
    }
}