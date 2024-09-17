function desktopMenu() {
    const desktopMenuOpener = document.querySelector('#desktopMenuOpener')
    const desktopMenu = document.querySelector('#desktopMenu')
    const desktopMenuCloser = document.querySelector('#desktopMenuCloser')

    if (!desktopMenuOpener || !desktopMenu || !desktopMenuCloser) return

    desktopMenuOpener.addEventListener('click', () => {

        //add class to desktopMenu
        desktopMenu.classList.replace('[clip-path:polygon(0_0,_100%_0_,_100%_0_,_0_0)]', '[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]');

    })

    desktopMenuCloser.addEventListener('click', () => {

        //add class to desktopMenu
        desktopMenu.classList.replace('[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]', '[clip-path:polygon(0_0,_100%_0_,_100%_0_,_0_0)]')
    })
}

desktopMenu();

function mobileMenu() {
    const mobileMenuOpener = document.querySelector('#mobileMenuOpener')
    const mobileMenu = document.querySelector('#mobileMenu')
    const mobileMenuCloser = document.querySelector('#mobileMenuCloser')

    if (!mobileMenuOpener || !mobileMenu || !mobileMenuCloser) return

    mobileMenuOpener.addEventListener('click', () => {

        mobileMenu.classList.replace('[clip-path:polygon(0_0,_100%_0_,_100%_0_,_0_0)]', '[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]')

    })


    mobileMenuCloser.addEventListener('click', () => {

        mobileMenu.classList.replace('[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]', '[clip-path:polygon(0_0,_100%_0_,_100%_0_,_0_0)]')
    })
}

mobileMenu();


function desktopHoverMenu() {
    const parent = document.querySelector('.parent');
    const menuItemsHasChild = document.querySelectorAll('.menu-item.has-child');
    const childMenuItems = document.querySelectorAll('.child-menu-item');

    if (!menuItemsHasChild || !childMenuItems) return;


    menuItemsHasChild.forEach((menuItem) => {
        menuItem.addEventListener('click', () => {

            jQuery(($) => {
                parent.classList.replace('hidden', 'block');
                parent.classList.replace('px-0', 'px-20');
                $(parent).animate({ width: '100%' })
            });

            const menuItemID = menuItem.dataset.id;
            childMenuItems.forEach((childItem) => {
                const childID = childItem.dataset.id;

                if (menuItemID === childID) {
                    childItem.classList.replace('[clip-path:polygon(100%_0,_100%_0,_100%_100%,_100%_100%)]', '[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]');
                } else {
                    childItem.classList.replace('[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]', '[clip-path:polygon(100%_0,_100%_0,_100%_100%,_100%_100%)]');

                }
            })
        })
    })
}

desktopHoverMenu();