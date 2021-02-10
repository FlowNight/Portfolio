// On initialise la carte
var map = L.map('myMap').setView([47.20537603917996, -1.5396125775775193], 13);

// On charge les "tuiles"
L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    minZoom: 1,
    maxZoom: 20
}).addTo(map);
// On créer le marqueur et on lui attibue une popup
var marker = L.marker([47.20537603917996, -1.5396125775775193]).addTo(map);
marker.bindPopup("<h1> Nantes Ynov Campus </h1>");