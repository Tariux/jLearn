$(document).ready(function () {
    handlePage();

});

function handlePage() {
    var pages = $(".page");
    if (pages.length == 0) {
        return false;
    }
    var current_page = pages[0];

    $(current_page).toggleClass("active-page");

    //console.log(pages[0]);
    setPageNumber();

}
function nextPage() {
    var pages = $(".page");

    var current_page = pages.closest(".active-page");
    if ($(current_page).next().hasClass("page")) {
        $(current_page).toggleClass("active-page");
        current_page = $(current_page).next();
        current_page.toggleClass("active-page");
    }
    setPageNumber();

}
function prevPage() {
    var pages = $(".page");

    var current_page = pages.closest(".active-page");
    if ($(current_page).prev().hasClass("page")) {
        $(current_page).toggleClass("active-page");
        $(current_page).prev().toggleClass("active-page");
    }
    setPageNumber();

}

function setPageNumber() { 
    var pages = $(".page");
    var current_page = pages.closest(".active-page");
    var page_number = pages.index(current_page) ;
    var page_count = pages.length;

    if (page_number <= page_count) {
        $('.page-number').text("مرحله " + (page_number + 1) + ' از ' + page_count);

    }
}