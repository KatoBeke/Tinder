document.addEventListener('DOMContentLoaded', (event) => {
    // Eerste persoon op actief zetten
    var eerstePersoon = document.querySelectorAll(".js-person")[0];
    eerstePersoon.style.display = "block"; 
    var melding = document.querySelector(".einde");
    melding.style.display = "none";
    console.log(document.querySelectorAll(".js-person").length);
})
  
var index = 0;

/*// Dislike button
document.querySelector("#dislike").addEventListener("click", function() {
    var lengte = document.querySelectorAll(".js-person").length;
    document.querySelectorAll(".js-person")[index].style.display = "none";
    index++;

    var geliked = document.getElementById("dislike").value;
    console.log(geliked);
    document.getElementById("#geliked").value = geliked;

    if (index == lengte) {
        document.querySelector("#dislike").style.display = "none";
        document.querySelector("#like").style.display = "none";
        melding.style.display = "block";
        melding.style.fontSize = "25px";
    }
    
    document.querySelectorAll(".js-person")[index].style.display = "block";

    document.getElementById("#personlike").submit();

})*/

function processMatch(personLikedId, geliked)
{
    console.log("Hello world!");
    var lengte = document.querySelectorAll(".js-person").length;
    document.querySelectorAll(".js-person")[index].style.display = "none";
    index++;

    document.getElementById("#geliked").value = geliked;

    if (index == lengte) {
        document.querySelector("#dislike").style.display = "none";
        document.querySelector("#like").style.display = "none";
        melding.style.display = "block";
        melding.style.fontSize = "25px";
    }
    
    document.querySelectorAll(".js-person")[index].style.display = "block";
    console.log("#personlike-{0}".format(personLikedId));
    setTimeout(() => { console.log("here!"); }, 200000000000);

    document.getElementById("#personlike-{0}".format(personLikedId)).submit();

}

/*// Like button
document.querySelector("#like").addEventListener("click", function() {
    var lengte = document.querySelectorAll(".js-person").length;
    document.querySelectorAll(".js-person")[index].style.display = "none";
    index++;

    var geliked = document.getElementById("like").value;
    console.log(geliked);
    document.getElementById("#geliked").value = geliked;

    if (index == lengte) {
        document.querySelector("#dislike").style.display = "none";
        document.querySelector("#like").style.display = "none";
        melding.style.display = "block";
        melding.style.fontSize = "25px";
    }
    document.querySelectorAll(".js-person")[index].style.display = "block";
    
    document.getElementById("#personlike").submit();
})*/

