document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(ScrollTrigger);
  setupFAQ();
  setupFadeAnimation();
  setupBackgroundColorAnimation();
});

function setupBackgroundColorAnimation() {
  gsap.to("body", {
    backgroundColor: "#DF6737",
    duration: 1,
    scrollTrigger: {
      trigger: "body",
      start: "75% center",
      toggleActions: "play reverse play reverse",
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

  faqs.forEach((faq) => {
    const content = faq.querySelector(".faq-content");
    const image = faq.querySelector(".faq-image");

    faq.addEventListener("click", () => {
      faqs.forEach((faq) => {
        faq.classList.remove("active");
        faq.querySelector(".faq-content").classList.remove("active");
        faq.querySelector(".faq-image").classList.remove("active");
      });
      faq.classList.add("active");
      content.classList.add("active");
      image.classList.add("active");
    });
  });
}
