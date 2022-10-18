function init() {
    const parcThabor = {
        lat: 35.2806274716704,
        lng: -5.099161428773707
    }

    const zoomLevel = 9;
    const map = L.map('mapid', { zoomControl: false }).setView([parcThabor.lat, parcThabor.lng], zoomLevel);
    const mainLayer = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Topo_Map/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Tiles &copy; Esri &mdash; Esri, DeLorme, NAVTEQ, TomTom, Intermap, iPC, USGS, FAO, NPS, NRCAN, GeoBase, Kadaster NL, Ordnance Survey, Esri Japan, METI, Esri China (Hong Kong), and the GIS User Community'
    });
    mainLayer.addTo(map);
    
}

