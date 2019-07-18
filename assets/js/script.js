var blockReponse = document.querySelector('#block-reponse');
var oui = document.querySelector('#oui');
var header = document.querySelector('header');
var test = document.querySelector('.test');
var open_header = document.querySelector('.open-header');
var close_header = document.querySelector('.close-header');
var btn_header = document.querySelector('.btn-header');

open_header.addEventListener('click', showHeader);
close_header.addEventListener('click', hiddenHeader);

// open_header.addEventListener('click', showHeader);

function showHeader() {
    console.log('yooo');
    header.style.left = "0%";
    open_header.style.left = "0%";
    close_header.style.left = "30%";
    btn_header.style.left = "30%";
    open_header.style.display = "none";
    close_header.style.display = "block";
    header.style.transition = "all 2s";
    btn_header.style.transition = "all 2s";
    // close_header.style.transition = "all 2s";

}

function hiddenHeader() {
    console.log('salut');
    header.style.left = "-50%";
    open_header.style.left = "0%";
    close_header.style.left = "30%";
    btn_header.style.left = "0%";
    open_header.style.display = "block";
    close_header.style.display = "none";
    header.style.transition = "all 2s";
    btn_header.style.transition = "all 2s";
}

oui.addEventListener('change', function () {
    if (oui.checked) {
        blockReponse.style.display = 'block';
    }
    else {
        blockReponse.style.display = 'none';
    }
});

