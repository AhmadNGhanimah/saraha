$(function () {
  const headerHeight = $("#header").innerHeight();

  // Initialize hero counters margin
  $("#page-content").css("margin-top", `${headerHeight}px`);

  // Jordan Map
  $(".map-area").on("click", function () {
    $(".map-area").removeClass("active");
    $(".area-map-cirlce").removeClass("active");
    $(".area-content").removeClass("active");
    $(this).addClass("active");
    const id = $(this).attr("target-id");
    $(`[target-area="${id}"]`).addClass("active");
    $(`[data-target="${id}"]`).addClass("active");
    if (window.innerWidth <= 768) {
      $("html, body").animate(
        {
          scrollTop:
            $(`[data-target="${id}"]`).parent().offset().top - headerHeight,
        },
        300
      );
    }
  });

  // Scroll Links using JS to avoid fixed header issue
  $(".scroll-link").on("click", function (e) {
    const collapse = $(this).closest(".navbar-collapse.show");
    if (collapse) {
      collapse.collapse("hide");
    }
    const target = $(this).attr("href");
    if (!["/", "/ar", "/en"].includes(window.location.pathname)) {
      window.location = `${window.location.origin}/${target}`;
    }
    $("html, body").animate(
      {
        scrollTop: $(target).offset().top - headerHeight,
      },
      300
    );
  });

  // Counters
  const counterUp = window.counterUp.default;

  const callback = (entries) => {
    entries.forEach((entry) => {
      const el = entry.target;
      if (entry.isIntersecting && !el.classList.contains("is-visible")) {
        counterUp(el, {
          duration: 2000,
          delay: 16,
        });
        el.classList.add("is-visible");
      }
    });
  };

  const IO = new IntersectionObserver(callback, { threshold: 1 });

  const el = document.querySelectorAll(".counter");
  for (let i = 0; i < el.length; i++) {
    IO.observe(el[i]);
  }

  $("#brief .btn").on("click", function (e) {
    $(this).hide(300)
    e.preventDefault();
    $(this).parent().find("p").css({
      maxHeight: 500,
    });
  });
});
