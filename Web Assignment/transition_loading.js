function transition() {
    let tl = gsap.timeline();

    tl.to('#before', 0.3, { top: '50%', ease: 'power2.out' }, 'close')
      .to('#after', 0.3, { bottom: '50%', ease: 'power2.out' }, 'close')
      .to('.loader', 1.5, { opacity: 1 })
      .call(() => {
          // Redirect to homepage.php after animation completes
          window.location.href = 'homepage.php';
      });
}

document.addEventListener('DOMContentLoaded', function() {
    transition();
});
