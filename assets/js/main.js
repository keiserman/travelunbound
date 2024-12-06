document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(ScrollTrigger);
  setupFAQ();
  setupFadeAnimation();
  setupBackgroundColorAnimation();
  initMenuAnimation();
  setupButtonHoverAnimation();
  setupExperienceCardAnimations();
});

function setupExperienceCardAnimations() {
  const exps = document.querySelectorAll(".home-exp_card");

  if (!exps.length) return;

  exps.forEach((exp) => {
    const image = exp.querySelector(".home-exp_image");

    if (!image) return;

    gsap.from(image, {
      y: "20%",
      duration: 1,
      scrollTrigger: {
        trigger: exp,
      },
    });
  });
}

function setupButtonHoverAnimation() {
  const buttons = document.querySelectorAll("[data-button='button'");

  if (!buttons.length) return;

  buttons.forEach((button) => {
    const icon = button.querySelector("[data-button='icon']");

    if (!icon) return;

    let tl = gsap.timeline({ paused: true });

    tl.to(icon, {
      x: "50%",
      duration: 0.2,
    });

    button.addEventListener("mouseenter", () => {
      tl.play();
    });

    button.addEventListener("mouseleave", () => {
      tl.reverse();
    });
  });
}

function setupMenuAnimation() {
  const navbar = document.querySelector("[data-navbar='navbar']");
  if (!navbar) return;

  const navbarButton = navbar.querySelector("[data-navbar='button']");
  const navbarMenu = navbar.querySelector("[data-navbar='menu']");
  if (!navbarButton || !navbarMenu) return;

  let tl = gsap.timeline({
    paused: true,
    defaults: { duration: 0.2 },
  });

  tl.fromTo(navbarMenu, { x: "100%" }, { x: "0%" });

  let isMenuOpen = false;

  navbarButton.addEventListener("click", () => {
    isMenuOpen = !isMenuOpen;
    console.log("Clicked!");

    if (isMenuOpen) {
      tl.play();
      navbarButton.setAttribute("aria-expanded", "true");
    } else {
      tl.reverse();
      navbarButton.setAttribute("aria-expanded", "false");
    }
  });
}

function initMenuAnimation() {
  const mm = gsap.matchMedia();

  mm.add("(max-width: 991px)", () => {
    setupMenuAnimation();
    console.log("Media matches!");

    return () => {};
  });
}

function setupBackgroundColorAnimation() {
  gsap.to("body", {
    backgroundColor: "#DF6737",
    color: "#FFFFFF",
    duration: 1,
    scrollTrigger: {
      trigger: "body",
      start: "75% center",
      end: "76% center",
      scrub: 1,
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
