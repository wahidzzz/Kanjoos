function hidePreloader() {
    var pre = document.getElementById("preloader");
    setTimeout(function() {
        pre.style.display = "none";
    }, 1000);
}

function ProfileUpdate(pageURL, title, w, h) {
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