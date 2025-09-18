document.addEventListener('DOMContentLoaded', function () {
    const images = document.querySelectorAll('.banner-image');
    let current = 0;

    setInterval(() => {
      images[current].classList.remove('active'); // hide current
      current = (current + 1) % images.length; // move to next
      images[current].classList.add('active');  // show next
    }, 5000); // Switch every 5 seconds
  });



