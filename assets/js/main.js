document.addEventListener("DOMContentLoaded", () => {
  setupFAQ();
});

function setupFAQ() {
  const faqs = document.querySelectorAll(".faq-item");

  gsap.from(".faq-item", {
    opacity: 0,
    duration: 0.5,
    stagger: 0.2,
  });

  faqs.forEach((faq) => {
    const content = faq.querySelector(".faq-content");

    faq.addEventListener("click", () => {
      faq.classList.toggle("active");
      content.classList.toggle("active");
    });
  });
}
