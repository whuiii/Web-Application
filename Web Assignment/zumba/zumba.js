document.addEventListener("DOMContentLoaded", function() {
    // Adding event listeners for clicks on links in the top navigation bar

    var links = document.querySelectorAll(".topnav a");
    links.forEach(function(link) {
        link.addEventListener("click", function(event) {
            // Prevent default link behavior to avoid immediate redirection
            event.preventDefault();

            // Adding class 'animate_content' to the body element
            var body = document.querySelector("body");
            body.classList.add("animate_content");

            // Fading out and then fading in the body content
            body.style.opacity = 0;
            setTimeout(function() {
                body.style.opacity = 1;
            }, 2800);

            // Removing class 'animate_content' after animation duration
            setTimeout(function() {
                body.classList.remove("animate_content");
            }, 3200);

            // Redirecting to the href attribute of the clicked link after animation duration
            var href = link.getAttribute("href");
            setTimeout(function() {
                window.location.href = href;
            }, 2500);
        });
    });
});