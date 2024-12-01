document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(ScrollTrigger);
  setupFAQ();
  setupFadeAnimation();
  setupBackgroundColorAnimation();
});

function setupBackgroundColorAnimation() {
  gsap.to("body", {
    backgroundColor: "#DF6737",
    scrollTrigger: {
      trigger: "body",
      start: "60% center",
      end: "65% center",
      scrub: 0.5,
    },
  });
}

function setupFadeAnimation() {
  const targets = document.querySelectorAll("[data-animate='fade");

  targets.forEach((target) => {
    gsap.from(target, {
      opacity: 0,
      duration: 1,
      scrollTrigger: target,
    });
  });
}

function setupFAQ() {
  const faqs = document.querySelectorAll(".faq-item");

  gsap.from(".faq-item", {
    opacity: 0,
    duration: 0.5,
    stagger: 0.2,
    scrollTrigger: {
      trigger: ".faq-item",
    },
  });

  faqs.forEach((faq) => {
    const content = faq.querySelector(".faq-content");
    const image = faq.querySelector(".faq-image");

    faq.addEventListener("click", () => {
      faq.classList.toggle("active");
      content.classList.toggle("active");
      image.classList.toggle("hidden");
    });
  });
}
