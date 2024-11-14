document.addEventListener('DOMContentLoaded', function () {
    // Wenn das Eingabefeld leer ist und der Benutzer das Formular abschickt, wird der Wert auf "1" gesetzt
    const amountField = document.getElementById('Anzahl_Eingabefeld');
    amountField.addEventListener('blur', function() {
        if (amountField.value === '') {
            amountField.value = '1';
        }
    });

    const sizeInput = document.getElementById('numberInput');
    sizeInput.addEventListener('blur', function() {
        if (sizeInput.value === '') {
            sizeInput.value = 'Normal';
        }
    });
});


function berechneGesamtpreis() {
    const pizzaPreis = parseFloat(document.getElementById('Groesse_Eingabefeld').value);
    const anzahl = parseInt(document.getElementById('Anzahl_Eingabefeld').value);
    const getraenkePreis = parseFloat(document.getElementById('Getraenke_Eingabefeld').value);
    const anzahlGetraenke = parseInt(document.getElementById('Anzahl_Getraenke_Eingabefeld').value);
    
    let toppingsPreis = 0;
    document.querySelectorAll('input[name="toppings"]:checked').forEach(topping => {
        toppingsPreis += parseFloat(topping.value);
    });

    const gesamtpreis = (pizzaPreis * anzahl) + (getraenkePreis * anzahlGetraenke) + toppingsPreis;
    document.getElementById('gesamtpreis').textContent = gesamtpreis.toFixed(2) + '€';
}
