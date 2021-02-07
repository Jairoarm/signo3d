(function init() {
    var backToTopBtn = document.querySelector('#back-to-top-bta');

    backToTopBtn.addEventListener('click', function() {
        window.scrollTo(0, 0);
    });
})();