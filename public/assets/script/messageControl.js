function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};

$(document).ready(function () {
    console.log('message control');
    var messages = $('.message');
    if (getUrlParameter('__message')) {
        var message_element = messages.closest('#' + getUrlParameter('__message'));
        
        $(message_element).css('display', 'flex');
    }
});