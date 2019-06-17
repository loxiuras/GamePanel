
let el = document.getElementById('arrow__next');

el.onclick = function() {
    alert('Click just happened');
};


document.getElementById("arrow__next").addEventListener("click", displayDate);

function displayDate() {
    document.getElementById("arrow__next").innerHTML = Date();
}