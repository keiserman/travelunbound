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
  const faqs = document.querySelectorAll("[data-faq='faq']");

  // Initialize each FAQ with its timeline
  faqs.forEach((faq) => {
    const content = faq.querySelector("[data-faq='content'");
    const image = faq.querySelector("[data-faq='image'");
    const title = faq.querySelector("[data-faq='title'");

    // Attach a GSAP timeline to the FAQ element
    const tl = gsap.timeline({ paused: true });
    tl.to(content, {
      height: "30vh",
      opacity: "100%",
      color: "#FFFFFF",
      duration: 0.2,
      ease: "linear",
    });
    tl.to(image, { opacity: 0.2, duration: 0.2 }, "<");
    tl.to(title, { color: "#FFFFFF", duration: 0.2 }, "<");
    tl.to(faq, { backgroundColor: "#DF6737", duration: 0.2 }, "<");
    faq._timeline = tl;

    faq.addEventListener("click", () => {
      toggleFAQ(faq, faqs);
    });
  });

  // Function to toggle FAQ
  function toggleFAQ(activeFAQ, allFAQs) {
    allFAQs.forEach((faq) => {
      if (faq === activeFAQ) {
        if (faq.classList.contains("active")) {
          // If already active, close it
          faq.classList.remove("active");
          faq._timeline.reverse();
        } else {
          // Otherwise, activate it
          faq.classList.add("active");
          faq._timeline.play();
        }
      } else {
        // Reset all other FAQs
        faq.classList.remove("active");
        faq._timeline.reverse();
      }
    });
  }
}
