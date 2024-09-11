(() => {
  // assets/js/modules/dark-mode.js
  var themeSwitcher = document.querySelectorAll('input[name="themeSwitcher"]');
  var setTheme = (theme) => {
    document.documentElement.setAttribute("data-theme", theme);
    localStorage.setItem("theme_mode", theme);
  };
  themeSwitcher.forEach((el) => {
    el.addEventListener("change", () => setTheme(el.value));
  });
  window.addEventListener("load", () => {
    const themeMode = localStorage.getItem("theme_mode");
    if (!themeMode) return;
    setTheme(themeMode);
    themeSwitcher.forEach((el) => {
      if (el.value !== themeMode) return;
      el.setAttribute("checked", "");
    });
  });

  // assets/js/modules/menu.js
  function desktopMenu() {
    const desktopMenuOpener = document.querySelector("#desktopMenuOpener");
    const desktopMenu2 = document.querySelector("#desktopMenu");
    const desktopMenuCloser = document.querySelector("#desktopMenuCloser");
    if (!desktopMenuOpener || !desktopMenu2 || !desktopMenuCloser) return;
    desktopMenuOpener.addEventListener("click", () => {
      desktopMenu2.classList.replace("[clip-path:polygon(0_0,_100%_0_,_100%_0_,_0_0)]", "[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]");
    });
    desktopMenuCloser.addEventListener("click", () => {
      desktopMenu2.classList.replace("[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]", "[clip-path:polygon(0_0,_100%_0_,_100%_0_,_0_0)]");
    });
  }
  desktopMenu();
  function mobileMenu() {
    const mobileMenuOpener = document.querySelector("#mobileMenuOpener");
    const mobileMenu2 = document.querySelector("#mobileMenu");
    const mobileMenuCloser = document.querySelector("#mobileMenuCloser");
    if (!mobileMenuOpener || !mobileMenu2 || !mobileMenuCloser) return;
    mobileMenuOpener.addEventListener("click", () => {
      mobileMenu2.classList.replace("[clip-path:polygon(0_0,_100%_0_,_100%_0_,_0_0)]", "[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]");
    });
    mobileMenuCloser.addEventListener("click", () => {
      mobileMenu2.classList.replace("[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]", "[clip-path:polygon(0_0,_100%_0_,_100%_0_,_0_0)]");
    });
  }
  mobileMenu();
  function desktopHoverMenu() {
    const parent = document.querySelector(".parent");
    const menuItemsHasChild = document.querySelectorAll(".menu-item.has-child");
    const childMenuItems = document.querySelectorAll(".child-menu-item");
    if (!menuItemsHasChild || !childMenuItems) return;
    menuItemsHasChild.forEach((menuItem) => {
      menuItem.addEventListener("click", () => {
        jQuery(($) => {
          parent.classList.replace("hidden", "block");
          parent.classList.replace("px-0", "px-20");
          $(parent).animate({ width: "100%" });
        });
        const menuItemID = menuItem.dataset.id;
        childMenuItems.forEach((childItem) => {
          const childID = childItem.dataset.id;
          if (menuItemID === childID) {
            childItem.classList.replace("[clip-path:polygon(100%_0,_100%_0,_100%_100%,_100%_100%)]", "[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]");
          } else {
            childItem.classList.replace("[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]", "[clip-path:polygon(100%_0,_100%_0,_100%_100%,_100%_100%)]");
          }
        });
      });
    });
  }
  desktopHoverMenu();
})();
