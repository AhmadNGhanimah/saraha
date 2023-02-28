$(function () {
  $("#animated-thumbnails-gallery")
    .justifiedGallery({
      captions: false,
      rowHeight: 180,
      margins: 5,
      rtl: $('html').attr('lang') == 'ar',
    })
    .on("jg.complete", function () {
      window.lightGallery(
        document.getElementById("animated-thumbnails-gallery"),
        {
          autoplayFirstVideo: false,
          pager: false,
          galleryId: "nature",
          plugins: [lgZoom, lgThumbnail],
          mobileSettings: {
            controls: false,
            showCloseIcon: false,
            download: false,
            rotate: false,
          },
        }
      );
    });
});
