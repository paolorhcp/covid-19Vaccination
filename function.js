function mostraContatti() {
    window.alert("Regione Campania - Sede legale: via S. Lucia, 81 - 80132 Napoli      //      Sede Centro Direzionale Isola A6 +39 081 796 61 11      //      Sede Centro Direzionale Isola C3-C5 +39 081 796 91 11");
}

function tipoVaccino() {
    var vaccini = [
   "Pfizer",
   "Astrazeneca",
   "Moderna",
];
var randomVac = Math.floor(Math.random()*vaccini.length);

document.write(vaccini[randomVac]);
    }

    function dataVaccino() {
        var g = Math.floor(Math.random() * 30) + 1;
        var m = Math.floor(Math.random() * 12) + 4;
        var a = 2020
var randomDate = [g, m, a];

document.write(randomDate);
    }