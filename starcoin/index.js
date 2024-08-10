function openTab(tabName) {
    document.getElementById("tab-iframe").src = tabName;
    var tablinks = document.getElementsByClassName("tab");
    for (var i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
    }
    var btns = document.getElementsByClassName("tab");
    for (var i = 0; i < btns.length; i++) {
        if (btns[i].getAttribute("onclick").includes(tabName)) {
            btns[i].classList.add("active");
        }
    }
}

function openGameEV1(tabName) {
    document.getElementById("tab-iframe").src = tabName;
    var tablinks = document.getElementsByClassName("tab");
    for (var i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
    }
    var btns = document.getElementsByClassName("tab");
    for (var i = 0; i < btns.length; i++) {
        if (btns[i].getAttribute("onclick").includes(tabName)) {
            btns[i].classList.add("active");
        }
    }
}