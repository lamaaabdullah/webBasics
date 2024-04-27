// Styles.js

document.addEventListener('DOMContentLoaded', function() {
    
    var headings = document.querySelectorAll('h1, h2, h3, h4, h5, h6');
    
    
    headings.forEach(function(heading) {
        heading.style.textShadow = '0 0 10px #00BFFF'; 
    });

});
document.addEventListener('DOMContentLoaded', function() {
    const image = document.getElementById('image');
    image.classList.add('fadeIn'); 
});

