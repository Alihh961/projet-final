// Slider dans la page d'accueil 


// var swiper = new Swiper(".mySwiper", {
//   spaceBetween: 30,
//   centeredSlides: true,
//   autoplay: {
//     delay: 2500,
//     disableOnInteraction: false,
//   },
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//   },
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
   
//   },
// });


// Paginattion pour shop page 



var current_page = 1;
var proAffi = 10;
var produits = document.querySelectorAll('.product');
var produitsContainer = document.getElementById('produits-list');

function prevProduits()
{
    if (current_page > 1) {
        current_page--;
        changePage(current_page);
    }
}

function nextProduits()
{
    if (current_page < numPages()) {
        current_page++;
        changePage(current_page);
    }
}
    
function changePage(page)
{
    var next = document.getElementById("next");
    var prev = document.getElementById("prev");
    var produitsContainer = document.getElementById('test');
    var page_span = document.getElementById("page");

    if (page < 1) page = 1;
    if (page > numPages()) page = numPages();

    produitsContainer.innerHTML = "";

    for (var i = (page-1) * proAffi; i < (page * proAffi) && i < produits.length; i++) {
     
      produitsContainer.append(produits[i]) + "<br>";
    }
    page_span.innerHTML = page + "/" + numPages();

    if (page == 1) {
        prev.style.opacity ='0.5'
    } else {
        prev.style.opacity ='1'
    }

    if (page == numPages()) {
        next.style.opacity ='0.5'
    } else {
        next.style.opacity ='1'
    }
}

function numPages()
{
    return Math.ceil(produits.length / proAffi);
}

window.onload = function() {
    changePage(1);
};



