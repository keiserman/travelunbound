document.addEventListener("DOMContentLoaded", () => {
  gsap.registerPlugin(ScrollTrigger);
  setupPillars();
  setupAboutFAQs();
  setupFadeAnimation();
  setupBackgroundColorAnimation();
  setupMenuAnimation();
  setupButtonHoverAnimation();
  setupExperienceCardAnimations();
  setupModals();
  setupMarqueeAnimation();
  setupReadMoreToggle();
  setupNavbarScrollAnimation();
});

function setupReadMoreToggle() {
  const bios = document.querySelectorAll("[data-bio='wrapper']");

  bios.forEach((bio) => {
    const text = bio.querySelector("[data-bio='bio']");
    const button = bio.querySelector("[data-bio='button']");

    button.addEventListener("click", () => {
      const isCollapsed = text.classList.toggle("hidden");
      button.textContent = isCollapsed ? "read more" : "read less";
    });
  });
}

function setupAboutFAQs() {
  const faqs = document.querySelectorAll("[faq]");

  if (!faqs.length) return;

  faqs.forEach((faq) => {
    const trigger = faq.querySelector("[faq-trigger]");
    const content = faq.querySelector("[faq-content]");
    const iconLine = faq.querySelector("[faq-icon-line]");

    let tl = gsap.timeline({ paused: true });

    tl.to(content, {
      height: "auto",
      opacity: 1,
      duration: 0.3,
    });

    tl.to(
      iconLine,
      {
        rotate: "0deg",
        duration: 0.3,
      },
      "<"
    );

    let clicked = false;

    trigger.addEventListener("click", () => {
      clicked = !clicked;
      console.log(clicked);
      if (clicked) {
        tl.play();
      } else {
        tl.reverse();
      }
    });
  });
}

function setupMarqueeAnimation() {
  const marquee = document.querySelector("[data-marquee='marquee']");

  if (!marquee) return;

  gsap.to(marquee.querySelectorAll("[data-marquee='wrapper']"), {
    x: "-100%",
    duration: 20,
    ease: "linear",
    repeat: -1,
  });
}

function setupModals() {
  const cards = document.querySelectorAll("[data-gallery='card']");

  if (!cards.length) return;

  cards.forEach((card) => {
    const modal = card.querySelector("[data-gallery='modal']");
    const modalClose = card.querySelector("[data-gallery='close']");
    const modalOpen = card.querySelector("[data-gallery='open']");
    const modalSwiper = card.querySelector("[data-gallery='swiper']");
    const swiperNext = card.querySelector("[data-gallery='swiper-next']");
    const swiperPrev = card.querySelector("[data-gallery='swiper-prev']");

    const swiper = new Swiper(modalSwiper, {
      navigation: {
        nextEl: swiperNext,
        prevEl: swiperPrev,
      },
      loop: false,
    });

    modalOpen.addEventListener("click", () => {
      modal.classList.remove("hidden");
      document.body.classList.add("overflow-hidden");
      gsap.set(modal, { opacity: 0 });
      gsap.to(modal, { opacity: 1, duration: 0.5 });
    });

    modalClose.addEventListener("click", () => {
      gsap.to(modal, {
        opacity: 0,
        duration: 0.5,
        onComplete: () => {
          modal.classList.add("hidden");
          document.body.classList.remove("overflow-hidden");
        },
      });
    });
  });
}

function setupExperienceCardAnimations() {
  const cards = document.querySelectorAll(".experiences-card");

  if (!cards.length) return;

  cards.forEach((card) => {
    const image = card.querySelector("img");

    if (!image) return;

    let tween = gsap.to(image, {
      scale: 1.05,
      duration: 0.2,
      paused: true,
    });

    card.addEventListener("mouseenter", () => tween.play());
    card.addEventListener("mouseleave", () => tween.reverse());
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

function setupNavbarScrollAnimation() {
  const navbar = document.querySelector("[data-navbar='navbar']");
  const navbarContent = document.querySelector("[data-navbar='content']");
  if (!navbar || !navbarContent) return;

  const navbarLogoLight = navbar.querySelector(".navbar-logo-light");
  const navbarLogoDark = navbar.querySelector(".navbar-logo-dark");
  const navbarButton = navbar.querySelector("[data-navbar='open']");
  const threshold = window.innerHeight * 0.5;

  function toggleNavbarBackground() {
    if (window.scrollY > threshold) {
      navbarContent.style.backgroundColor = "white";
      navbarContent.classList.remove("bg-gradient-to-b");
      navbarButton.classList.add("text-primary");
      navbarLogoLight.classList.remove("hidden");
      navbarLogoDark.classList.add("hidden");
    } else {
      navbarContent.style.backgroundColor = "transparent";
      navbarContent.classList.add("bg-gradient-to-b");
      navbarButton.classList.remove("text-primary");
      navbarLogoLight.classList.add("hidden");
      navbarLogoDark.classList.remove("hidden");
    }
  }

  window.addEventListener("scroll", toggleNavbarBackground);
}

function setupMenuAnimation() {
  const navbar = document.querySelector("[data-navbar='navbar']");
  if (!navbar) return;

  const navbarOpen = navbar.querySelector("[data-navbar='open']");
  const navbarClose = navbar.querySelector("[data-navbar='close']");
  const navbarMenu = navbar.querySelector("[data-navbar='menu']");
  const navbarContent = navbar.querySelector("[data-navbar='content']");
  if (!navbarOpen || !navbarClose || !navbarMenu) return;

  let tl = gsap.timeline({
    paused: true,
    defaults: { duration: 0.2 },
  });

  tl.fromTo(navbarMenu, { x: "100%" }, { x: "0%" });
  tl.to(
    navbarContent,
    {
      y: "-100%",
    },
    "<"
  );

  navbarOpen.addEventListener("click", () => tl.play());
  navbarClose.addEventListener("click", () => tl.reverse());
}

function setupBackgroundColorAnimation() {
  const trigger = document.querySelector("[data-animate='scroll-bg']");

  if (trigger) {
    gsap.to("main", {
      backgroundColor: "#DF6737",
      color: "white",
      duration: 0.5,
      scrollTrigger: {
        trigger: trigger,
        start: "20% center",
        end: "none",
        toggleActions: "play none none reverse",
      },
    });
  }
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

function setupPillars() {
  const faqs = document.querySelectorAll("[data-pillar='pillar']");

  faqs.forEach((faq) => {
    const content = faq.querySelector("[data-pillar='content']");
    const image = faq.querySelector("[data-pillar='image']");
    const title = faq.querySelector("[data-pillar='title']");
    const color = faq.getAttribute("data-pillar-color")
      ? faq.getAttribute("data-pillar-color")
      : "#DF6737";

    const tl = gsap.timeline({ paused: true });
    tl.to(content, {
      height: "30vh",
      opacity: 1,
      color: "#FFFFFF",
      duration: 0.3,
      ease: "linear",
    });
    tl.to(image, { opacity: 0.2, duration: 0.3 }, "<");
    tl.to(title, { color: "#FFFFFF", duration: 0.3 }, "<");
    tl.to(
      faq,
      { backgroundColor: color, borderColor: color, duration: 0.3 },
      "<"
    );
    faq._timeline = tl;

    const tlHovered = gsap.timeline({ paused: true });
    tlHovered.to(image, { opacity: 0.2, duration: 0.3 });
    tlHovered.to(title, { color: "#FFFFFF", duration: 0.3 }, "<");
    tlHovered.to(
      faq,
      { backgroundColor: color, borderColor: color, duration: 0.3 },
      "<"
    );
    faq._hoverTimeline = tlHovered;
    faq.addEventListener("click", () => {
      toggleFAQ(faq, faqs);
    });

    faq.addEventListener("mouseenter", () => {
      if (!faq.classList.contains("active")) {
        tlHovered.play();
      }
    });

    faq.addEventListener("mouseleave", () => {
      if (!faq.classList.contains("active")) {
        tlHovered.reverse();
      }
    });
  });

  function toggleFAQ(activeFAQ, allFAQs) {
    allFAQs.forEach((faq) => {
      if (faq === activeFAQ) {
        if (faq.classList.contains("active")) {
          faq.classList.remove("active");
          faq._timeline.reverse();
        } else {
          faq.classList.add("active");
          faq._hoverTimeline.pause(0);
          faq._timeline.play();
        }
      } else {
        faq.classList.remove("active");
        faq._hoverTimeline.pause(0);
        faq._timeline.reverse();
      }
    });
  }
}
