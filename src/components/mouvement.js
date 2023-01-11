

function turnCarte() {
    document.getElementById("back").classList.toggle("showZone");
    document.getElementById("recto").classList.toggle("showZone2");
}

function turnApp() {
    document.getElementById("appPlay").classList.toggle("showSound");
}

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

function secteur() {
    document.getElementById("myDropdown2").classList.toggle("show2");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn2')) {
            var dropdowns = document.getElementsByClassName("dropdown-content2");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}