document.addEventListener("DOMContentLoaded", function(event) {
    if(window.innerWidth >= 850) {
        var element = document.querySelector("#asideNavbarSupportedContent");
        element.classList.add("show");
    }

    test.addEventListener("mouseover", function( event ) {   
        // highlight the mouseover target
        event.target.style.color = "orange";
    
        // reset the color after a short delay
        setTimeout(function() {
          event.target.style.color = "";
        }, 500);
      }, false);
});

