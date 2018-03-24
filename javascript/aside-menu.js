document.addEventListener("DOMContentLoaded", function(event) {
    if(window.innerWidth >= 850) {
        var element = document.querySelector("#asideNavbarSupportedContent");
        element.classList.add("show");
    }
});

function toggleChatWindow(element) {
    element.previousElementSibling.classList.toggle("shown");
}

