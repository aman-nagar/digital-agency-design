// scripts/animation.js

// banner  animation
window.onload = function () {
  // Create a timeline for the animations
  const tl = gsap.timeline();

  tl.from("#heroBanner", {
    duration: 1.5,
    x: -200,
    opacity: 0,
    ease: "power3.out",
  });

  // Animate all cards
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
