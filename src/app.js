document.addEventListener("DOMContentLoaded",()=>{
    console.log("loaded")
    let btn = document.querySelector(".material-icons");
    let el = document.querySelector("nav");
    btn.addEventListener("click",()=>{
        el.classList.toggle("open-menu")
    })

    let upButton = document.querySelector('#upButton');
    $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        upButton.addClass('show');
    } else {
        upButton.removeClass('show');
    }
    });

    upButton.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
    });
})