let burger = document.querySelector(".hamburgerDiv");
let menu = document.querySelector(".mobileNav");
let counter = 0;

function hamburgerMenu() {
    if(counter === 0) {
        document.querySelector(".mobileNav").style.display = "block";
        counter++;
    }
    else if(counter === 1) {
        document.querySelector(".mobileNav").style.display = "none";
        counter--;
    }
}

window.addEventListener('resize', ()=>{
    if(counter === 1) {
        document.querySelector(".mobileNav").style.display = "none";
        counter--;
    }
});

document.addEventListener("click", function(event) {
    var dropdown = document.getElementById("dropdownMenu");
    var arrow = document.querySelector(".dropdown .arrow");

    // Check if the click is inside the dropdown or the toggle
    var isClickInside = dropdown.contains(event.target) || event.target.closest(".dropdown");

    if (!isClickInside) {
        // Hide the dropdown and rotate the arrow back
        dropdown.style.display = "none";
        arrow.classList.remove("open");
    }
});

function toggleDropdown() {
    var dropdown = document.getElementById("dropdownMenu");
    var arrow = document.querySelector(".dropdown .arrow");
    alert("Ok");
    
    if (dropdown.style.display === "flex") {
        dropdown.style.display = "none";
        arrow.classList.remove("open");
    } else {
        dropdown.style.display = "flex";
        arrow.classList.add("open");
    }
}
