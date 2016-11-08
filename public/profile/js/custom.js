
// Loading Screen

$(window).load(function () {
    
    "use strict";
    
    // Loading Elements
    
    $(".loading .sk-folding-cube").fadeOut(2000, function () {
        
        // Show The Scroll

        $("body").css("overflow", "auto");
        
        $(this).parent().fadeOut(2000, function () {
            
            $(this).remove();
        });
    });
});



/* add copy button */

document.getElementById("copyButton").addEventListener("click", function() {
    copyToClipboard(document.getElementById("copyTarget"));
});

function copyToClipboard(elem) {
    // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);
    
    // copy the selection
    var succeed;
    try {
        succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }
    
    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}
// 



$(document).ready(function() {

     $('#copyButton').click(function() {

          $('#copyButton').html('copied !');

     });


});



/*function fshare(e){
    e.preventDefault();
    FB.init({appId: "1058284937567093", status: true, cookie: true});
    var share = {
      method: 'feed',
      link: 'http://www.nytimes.com/interactive/2015/04/15/travel/europe-favorite-streets.html',
      //picture: 'http://domain.com/image/me.jpg',
      name: 'Name of item',
      caption: 'domain.com',
      description: 'Check out my page!'
    };

    FB.ui(share, function(response){
        if (typeof response == "undefined") {
            // do nothing.
        } else {
            // submit facebook sharing form
            document.forms["facebookshared"].submit();
        }
    });
}
*/