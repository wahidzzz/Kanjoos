var everyThing;
var swatches = document.getElementById("swatches");
var layer = document.getElementById("layer");
var colors = [
    "#ffffcc",
    "#a1dab4",
    "#41b6c4",
    "#2c7fb8",
    "#253494",
    "#fed976",
    "#feb24c",
    "#fd8d3c",
    "#f03b20",
    "#bd0026"
];

colors.forEach(function(color) {
    var swatch = document.createElement("button");
    swatch.style.backgroundColor = color;
    swatch.addEventListener("click", function() {
        map.setPaintProperty(layer.value, "fill-color", color);
    });
    swatches.appendChild(swatch);
});
setTimeout(() => {
    fetch("./database/all.json")
        .then(function(response) {
            return response.json();
        })
        .then(function(obj) {
            everyThing = obj;
            everyThing.features.forEach(function(marker) {
                // create a HTML element for each feature
                var el = document.createElement("div");
                el.className = "marker";
                // make a marker for each feature and add to the map
                new mapboxgl.Marker(el)
                    .setLngLat(marker.geometry.coordinates)
                    .addTo(map);
                new mapboxgl.Marker(el)
                    .setLngLat(marker.geometry.coordinates)
                    .setPopup(
                        new mapboxgl.Popup({ offset: 25 }) // add popups
                        .setHTML(
                            "<h3>" +
                            marker.properties.name +
                            "</h3><p>" +
                            marker.properties.min +
                            "</p>"
                        )
                    )
                    .addTo(map);
                //document.getElementsByClassName("marker").style.backgroundImage = "url('./food.svg')";
            });
        });
}, 5000);