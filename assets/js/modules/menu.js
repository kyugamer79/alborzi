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

desktopMenu();
mobileMenu();