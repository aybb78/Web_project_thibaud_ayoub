Vue.createApp({
    data(){
        return {
            zoomObjet: 16,
          };
    },


    mounted() {
        var map = L.map('map').setView([29.97606, 31.13042], 13);

        L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            minZoom: 4,
            attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
        }).addTo(map);

        // je gère le zoom des objets par un layer. 
        //zoomend is a map state change event : the following code will be apply when the map zoom changed.
        var objects = new L.FeatureGroup();
        
        map.on('zoomend', function() {
            if (map.getZoom() < /*this.zoomObjet*/ 16){
                    map.removeLayer(objects);
            }
            else {
                    map.addLayer(objects);
                }
        })

        //mes icons 
        var diamondblue = L.icon({
            iconUrl: 'assets/images/diamond.svg',
            iconSize: [128, 128], //dans les propriétés de l'image : 1280*1280 pixels.
            iconAnchor: [0, 0], //coord of the top left corner tip of the png.  
            //popupAnchor: [-3, -76],
            });
        var myIcon = L.marker([29.97606, 31.13042], {icon: diamondblue})
        objects.addLayer(myIcon);

        
    }
}).mount('#app')

/*
Au sein de mounted, j'éxécute tout ce qui est code complexe. Donc je vais créer la carte dans ça; 
Dans data de Vue, j'aurais récupéré les données de ma BDD. Dans monted je pourrais accéder à ces données 
par this.### !!!
*/


/*
gerer le zoom :             if(map.getZoom() <= min_zoom){
                groupMarkers.removeLayer(marck);}
*/