var data;
var inVal;
$(".recLink").click(function() {
    inVal = $(this).data("value");
    console.log(inVal);
    if (inVal != undefined) {
        data = "";
        fetch("./database/" + inVal + "_all.json")
            .then(function(response) {
                return response.json();
            })
            .then(function(obj) {
                data = obj;
            });
    } else {
        data = "";
        fetch("./database/myRecommendations.json")
            .then(function(response) {
                return response.json();
            })
            .then(function(obj) {
                data = obj;
            });
    }
});

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function loadRecData() {
    var count = getRandomInt(0, data.features.length - 5);
    for (var x = count; x < count + 5; x++) {
        var listItem = document.createElement("LI");
        var itemValue = document.createTextNode(data.features[x].properties.name);
        listItem.appendChild(itemValue);
        listItem.className = "collection-item";
        document.getElementById("recData").appendChild(listItem);
    }
}

function refRecData() {
    var recList = document.getElementById("recData");
    while (recList.hasChildNodes()) {
        recList.removeChild(recList.firstChild);
    }
    loadRecData();
}

function OpenPopup(pageURL, title, w, h) {
    var left = (screen.width - w) / 2;
    var top = (screen.height - h) / 4; // for 25% - devide by 4  |  for 33% - devide by 3
    var targetWin = window.open(
        pageURL,
        title,
        "toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=" +
        w +
        ", height=" +
        h +
        ", top=" +
        top +
        ", left=" +
        left
    );
}