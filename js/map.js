var map = L.map('map').setView([51.505, -0.09], 13);
                var Jawg_Light = L.tileLayer('https://tile.jawg.io/jawg-light/{z}/{x}/{y}{r}.png?access-token=8UsGXrnys5mnswuRb3DlEMpE4tDnm9kGNv0FIzQ6UKrMFkcKxu4tMLRFmF4IFnE7', {
                    attribution: 'Plant Monitor',
                    minZoom: 0,
                    maxZoom: 22,
                    accessToken: "8UsGXrnys5mnswuRb3DlEMpE4tDnm9kGNv0FIzQ6UKrMFkcKxu4tMLRFmF4IFnE7"
                });
                Jawg_Light.addTo(map);
                var marker = L.marker([51.5, -0.09]).addTo(map);
                marker.bindPopup("<b>Hello world!</b><br>I am a popup.");