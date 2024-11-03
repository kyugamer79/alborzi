document.addEventListener("DOMContentLoaded", function () {
    const videoCoverAll = document.querySelectorAll(".video-cover");
    const popupContainer = document.getElementById("popup-container");
    const popupVideo = document.getElementById("popup-video");
    const closePopup = document.getElementById("close-popup");
    const popupContent = document.getElementById("popup-content");

    if (
        videoCoverAll &&
        popupContainer &&
        popupVideo &&
        closePopup &&
        popupContent) {
        videoCoverAll.forEach((videoCover) => {
            videoCover.addEventListener("click", function () {
                popupContainer.classList.remove("hidden");
                popupContainer.offsetHeight;
                popupContainer.classList.add("opacity-100");
                popupContent.classList.remove("scale-95");
                popupVideo.play();
            });
        })

        closePopup.addEventListener("click", function () {
            popupVideo.pause();
            popupVideo.currentTime = 0;
            popupContainer.classList.add("opacity-0");
            popupContent.classList.add("scale-95");
            setTimeout(function () {
                popupContainer.classList.add("hidden");
            }, 300);
        });

        popupContainer.addEventListener("click", function (e) {
            if (e.target === popupContainer) {
                closePopup.click();
            }
        });
    } else {
        console.warn('One or more elements are not found:', {
            videoCoverAll: videoCoverAll,
            popupContainer: popupContainer,
            popupVideo: popupVideo,
            closePopup: closePopup,
            popupContent: popupContent
        });
    }
});