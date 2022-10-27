

// Paginattion pour shop page 



var pageActuelle = 1;
var proAffi = 10; // Nombre(max) des produits qui seront affichés
var produits = document.querySelectorAll('.product');
var produitsContainer = document.getElementById('produits-list');

function prevProduits()
{
    if (pageActuelle > 1) {
        pageActuelle--;
        changePage(pageActuelle);
    }
}

function nextProduits()
{
    if (pageActuelle < numPages()) {
        pageActuelle++;
        changePage(pageActuelle);
    }
}
    
function changePage(page)
{
    var next = document.getElementById("next");
    var prev = document.getElementById("prev");
    var produitsContainer = document.getElementById('produits-list');
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



