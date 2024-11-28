var map = L.map('map').setView([51.448740, 7.005344], 13);
var Jawg_Light = L.tileLayer('https://tile.jawg.io/jawg-light/{z}/{x}/{y}{r}.png?access-token=8UsGXrnys5mnswuRb3DlEMpE4tDnm9kGNv0FIzQ6UKrMFkcKxu4tMLRFmF4IFnE7', {
    attribution: 'Plant Monitor',
    minZoom: 0,
    maxZoom: 22,
    accessToken: "8UsGXrnys5mnswuRb3DlEMpE4tDnm9kGNv0FIzQ6UKrMFkcKxu4tMLRFmF4IFnE7"
});
Jawg_Light.addTo(map);

fetch('../includes/models/phptojs.php')
    .then(response => response.json())
    .then(data => {
        data.forEach(plant => {
            var plantMarker = L.marker([plant.latitude, plant.longitude]).addTo(map);
            plantMarker.bindPopup(`<b>${plant.name}</b>`);
            element = document.getElementById(String(plant.id));
            if (element) {
                element.addEventListener('click', () => {
                    map.setView([plant.latitude, plant.longitude], 15);
                    plantMarker.openPopup();
                });
            }
        });
    })
    .catch(error => console.error('Error fetching plant data:', error));