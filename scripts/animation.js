// scripts/animation.js

// Ensure the animation starts after the DOM is fully loaded
window.onload = function () {
  // Create a timeline for the animations
  const tl = gsap.timeline();

  // Animate the banner image from left (-200px) to its original position
  tl.from("#heroBanner", {
    duration: 1.5,
    x: -200,
    opacity: 0,
    ease: "power3.out",
  });

  // Animate all cards in the .page-2 section from bottom (-200px)
  tl.from(
    ".cards",
    {
      duration: 1.5,
      y: 200,
      opacity: 0,
      ease: "power3.out",
      stagger: 0.2,
    },
    "<"
  );
};
