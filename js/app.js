var budget = 1400;
var type;
var region;

var geojson;
var region_data;
var slider = document.getElementById("priceRange");
var price = document.getElementById("priceVal");
price.innerHTML = slider.value;

function getType() {
    type = document.getElementById("type").value;
    console.log(type);
}

function getRegion() {
    region = document.getElementById("region").value;
    console.log(budget + type + region);
    geojson = {
        type: "FeatureCollection",
        features: []
    };
    fetch("./database/" + region + "_" + type + ".json")
        .then(function(response) {
            return response.json();
        })
        .then(function(obj) {
            console.log(obj);
            region_data = obj;
        });
    console.log(region_data);

    function getData() {
        setTimeout(() => {
            for (var i = 0; i < region_data.features.length; i++) {
                if (
                    region_data.features[i].properties.type == type &&
                    region_data.features[i].properties.region == region &&
                    region_data.features[i].properties.min <= budget
                ) {
                    console.log(region_data.features[i]);
                    geojson.features.push(region_data.features[i]);
                }
            }
            if (geojson.features[0] == undefined) {
                alert("No place found in this budget, prefernce or region");
            } else {
                alert("Check the map");
            }
            console.log("getting data" + geojson["features"][0]);

            geojson.features.forEach(function(marker) {
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
            map.zoomTo(12, { duration: 9000 });
        }, 2000);
    }
    getData();
}

slider.oninput = function() {
    price.innerHTML = this.value;
    budget = this.value;
};

$(document).ready(function() {
    $(".button-collapse").sideNav();
    $("select").material_select();
});