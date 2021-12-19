window.onload = () => {
    //Criamos uma variável de mapa centrado nas coordenadas e com o zoom a 18
    const map = L.map('map').setView([39.23328932746503, -8.686713238019466], 17);
    //Adicionamos uma camada gratuita ao mapa
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
    {
        maxZoom: 20,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' + 'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/satellite-v9',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(map);
    //Adicionamos um marcador da nossa localização ao mapa
    const marcador = L.marker([39.23328932746503, -8.686713238019466]).addTo(map);
    //Adicionamos uma mensagem ao marcador
    marcador.bindPopup('Estamos aqui!!!').openPopup();

    const gmap = new google.maps.Map(document.getElementById("gmap"), {
        center: { lat: -34.397, lng: 150.644 },
        zoom: 8,
    });
};