import {
    errorToast,
    successFormToast
} from "./toastify";

function PopUpForm() {
    const popUpForm = document.querySelector("#pricePopupForm");

    if (!popUpForm) return;

    popUpForm.addEventListener("submit", (e) => {
        e.preventDefault();

        const formData = new FormData(popUpForm);
        jQuery(($) => {
            $.ajax({
                type: "POST",
                url: restDetails.url + "cyn-api/v1/price_pop_up",
                data: formData,
                cache: false,
                processData: false,
                contentType: false,

                success: (res) => {
                    console.log(res);
                    successFormToast.showToast();
                    popUpForm.reset();
                    document
                        .querySelector("#pricePopup")
                        .classList.replace("opacity-100", "opacity-0");
                    document
                        .querySelector("#pricePopup")
                        .classList.replace("pointer-events-auto", "pointer-events-none");
                    successFormToast();
                },

                error: (err) => {
                    console.log(err);
                    errorToast.showToast();
                },
            });
        });
    });
}
PopUpForm();

document.addEventListener('DOMContentLoaded', function () {
    const pricePopup = document.querySelector('#pricePopup');
    const popupContent = document.querySelector('#popupContent');
    const popUpCloser = document.querySelector('#popUpCloser');
    const desktopMenu = document.querySelector('#desktopMenu');
    const menuItem1 = document.querySelector('#menuItem1');
    const menuItem2 = document.querySelector('#menuItem2');
    const menuItem3 = document.querySelector('#menuItem3');

    // Function to open popup
    function openPopup() {
        // Hide the desktop menu
        if (desktopMenu) {
            desktopMenu.classList.add('hidden');
        }

        // Show the popup
        pricePopup.classList.remove('hidden');
        setTimeout(() => {
            pricePopup.classList.remove('opacity-0');
            pricePopup.classList.add('opacity-100');
        }, 10);
    }

    // Function to close popup
    function closePopup() {
        pricePopup.classList.add('opacity-0');
        pricePopup.classList.remove('opacity-100');
        setTimeout(() => {
            pricePopup.classList.add('hidden');
        }, 300);

        // Show the desktop menu again (if needed)
        if (desktopMenu) {
            desktopMenu.classList.remove('hidden');
        }
    }

    // Add event listeners for the menu items to open the popup
    if (menuItem1) {
        menuItem1.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent default anchor click behavior
            openPopup();
        });
    }

    if (menuItem2) {
        menuItem2.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent default anchor click behavior
            openPopup();
        });
    }

    if (menuItem3) {
        menuItem3.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent default anchor click behavior
            openPopup();
        });
    }

    // Add event listener for close button
    if (popUpCloser) {
        popUpCloser.addEventListener('click', () => {
            closePopup();
        });
    }

    // Add event listener for clicks outside popup content
    if (pricePopup) {
        pricePopup.addEventListener('click', (event) => {
            if (!popupContent.contains(event.target)) {
                closePopup();
            }
        });
    }
});