document.addEventListener("DOMContentLoaded", () => {

  // Общие переменные
  let body = document.querySelector('body'),
      header = document.querySelector('.header'), // header
      homePage = document.querySelector('.home-page'), // главная страница
      cartPage = document.querySelector('.cart .cart-items-wrapper'), // страница корзина
      catalogPage = document.querySelector('.catalog'), // страница каталог
      singleProduct = document.querySelector('.single-product'), // страница товара
      dostavkaIOplataPage = document.querySelector('.dostavka-i-oplata'), // страница доставка и оплата
      otzyvyPage = document.querySelector('.otzyvy'); // страница отзывы


  // Скрывание кнопки Мы используем куки we use cookie
  let messagesCookies = document.querySelector('.messages-cookies'),
      messagesCookiesClose = document.querySelector('.messages-cookies-close');

  if (messagesCookiesClose) {
    messagesCookiesClose.onclick = function() {
      messagesCookies.classList.add('hidden');
      document.cookie = "we-use-cookie=yes; path=/; max-age=2629743; samesite=lax";
    }
  }

  let modalWindow = document.querySelectorAll('.modal-window'),
      headerCityBtn = document.querySelector('.js-header-city-btn'),
      mobileMenuCityBtn = document.querySelector('.js-mobile-menu-city-btn'),
      selectCityModal = document.querySelector('#select-city-modal'),
      headerCallbackBtn = document.querySelector('.js-header-callback-btn'),
      callbackModal = document.querySelector('#callback-modal'),
      testimonialsBtn = document.querySelector('.testimonials-btn'),
      testimonialsModal = document.querySelector('#testimonials-modal'),
      payInfoBtn = document.querySelector('.dostavka-i-oplata .pay-info-btn'),
      modalCloseBtn = document.querySelectorAll('.modal-window .modal-close');

  headerCityBtn.onclick = function () {
    modalOpen(selectCityModal);
  }

  mobileMenuCityBtn.onclick = function () {
    modalOpen(selectCityModal);
  }

  headerCallbackBtn.onclick = function () {
    modalOpen(callbackModal);
  }

  if(testimonialsBtn) {
    testimonialsBtn.onclick = function () {
      modalOpen(testimonialsModal);
    }
  }

  if(payInfoBtn) {
    payInfoBtn.onclick = function () {
      modalOpen(callbackModal);
    }
  }

  function modalOpen(win) {
    body.classList.add('overflow-hidden');
    win.classList.add('active');
    setTimeout(function(){
      win.childNodes[1].classList.add('active');
    }, 200);
  }

  for (let i=0; i < modalCloseBtn.length; i++) {
    modalCloseBtn[i].onclick = function() {
      modalClose(modalWindow[i]);
    }
  }

  for (let i = 0; i < modalWindow.length; i++) {
    modalWindow[i].onclick = function(event) {
      let classList = event.target.classList;
      for (let j = 0; j < classList.length; j++) {
        if (classList[j] == "modal" || classList[j] == "modal-wrapper" || classList[j] == "modal-window") {
          modalClose(modalWindow[i])
        }
      }
    }
  }

  function modalClose(win) {
    body.classList.remove('overflow-hidden');
    win.childNodes[1].classList.remove('active');
    setTimeout(function(){
      win.classList.remove('active');
    }, 300);
  }

  // city select
  let cityItems = selectCityModal.querySelectorAll('.city-item'),
      cityNames = document.querySelectorAll('.city-name');

  function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
      "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }

  cityItems.forEach((item) => {
    item.onclick = function () {
      let ccity = item.innerText;
      document.cookie = "city=" + ccity + "; path=/; max-age=2629743; samesite=lax";
      for (let i = 0; i < cityNames.length; i++) {
        cityNames[i].innerText = ccity;
      }
      modalClose(selectCityModal);

      let cityItemActive = document.querySelector('.city-item-active');
      cityItemActive.classList.remove('city-item-active');
      item.classList.add('city-item-active');
    }

    if (item.innerText == getCookie('city')) {
      item.classList.add('city-item-active');
    }
  });

  // search autocomlete see all btn
  let searchInput = document.querySelector('.search-input'),
      token = document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      autocompleteSseeAllBtn = document.querySelector('.autocomplete-see-all-btn');

  if (searchInput) {
    searchInput.oninput = function () {
      if(searchInput.value.length >=3) {
        autocompleteSseeAllBtn.href = '/poisk?q=' + searchInput.value + '&_token=' + token;
      }
    }
  }
  

  // Quantity from plus to tick
  itemQuantityCircle = document.querySelectorAll('.item__quantity .circle');

  itemQuantityCircle.forEach((item) => {
    item.onclick = function () {
      item.classList.add('circle-active');
    }
  });

  // Phone mask
  let elementPhone = document.querySelectorAll('.js-input-phone-mask');

  let maskOptionsPhone = {
    mask: '+{7} (000) 000 00 00'
  };

  elementPhone.forEach((item) => {
    let mask = IMask(item, maskOptionsPhone);
  });

  // Sticky desktop menu
  window.onscroll = function() {
    let scrStickyDesktopMenu = window.pageYOffset || document.documentElement.scrollTop,
        stickyDesktopMenu = document.querySelector('.sticky-desktop-menu');
    if (scrStickyDesktopMenu > 400) {
      stickyDesktopMenu.classList.add('sticky-desktop-menu-active');
    }
    if (scrStickyDesktopMenu < 400) {
      stickyDesktopMenu.classList.remove('sticky-desktop-menu-active');
    }
  }

  // Popular categories slider
  let popularCategoriesSection = document.querySelector('.popular-categories-section');

  if (popularCategoriesSection) {
    const popularCategoriesSlider = new Swiper('.popular-categories-slider', {
      slidesPerView: 'auto',
      spaceBetween: 20,
      centeredSlides: true,
      loop: true,
    });
  }

  // mobile menu
  let burgerMenuWrapper = document.querySelector('.burger-menu-wrapper'),
      mobileMenu = document.querySelector('.mobile-menu'),
      burgerMenu = document.querySelector('.burger-menu');

  burgerMenuWrapper.onclick = function () {
    body.classList.toggle('overflow-hidden');
    mobileMenu.classList.toggle('down');
    burgerMenu.classList.toggle('close');
    burgerMenuWrapper.classList.toggle('active');
  }

  let listParentClick = document.querySelectorAll('.mobile-menu li.menu-item a');
  for (let i=0; i < listParentClick.length; i++) {
    listParentClick[i].onclick = closeMenuA;
  }

  function closeMenuA (event) {
    event.preventDefault();
    closeMenu ();
    let hrefClick = this.href;
    setTimeout(function() {location.href = hrefClick}, 500);
  }

  function closeMenu () {
    burgerMenuWrapper.classList.remove('active');
    burgerMenu.classList.remove('close');
    mobileMenu.classList.remove('down');
    body.classList.remove('overflow-hidden');
  }



  // Отправка формы ajax в модальном окне
  let callbackModalForm = document.querySelector("#callback-modal-form"),
      callbackModalBtn = document.querySelector('.js-callback-modal-btn');

  callbackModalBtn.onclick = function() {
    ajaxCallback(callbackModalForm);
  }

  function ajaxCallback(form) {

    let inputs = form.querySelectorAll('.input-field');
    let arr = [];

    let inputName = form.querySelector('#name');
    if (inputName.value.length < 3 || inputName.value.length > 20 ) {
      inputName.classList.add('required');
      arr.push(false);
    }

    let inputPhone = form.querySelector('#phone');
    if (inputPhone.value.length != 18) {
      inputPhone.classList.add('required');
      arr.push(false);
    }

    let inputCheckbox = form.querySelector('#checkbox-callback-modal');
    if (!inputCheckbox.checked) {
      arr.push(false);
    }

    if (arr.length == 0) {
      for (let i = 0; i < inputs.length; i++) {
        inputs[i].classList.remove('required');
      }

      let formData = {
        name: inputName.value,
        phone: inputPhone.value,
        checkbox: inputCheckbox.checked,
        token: form.querySelector('input[name="_token"]').value
      };

      let request = new XMLHttpRequest();

      request.open('post', "/vendor/phpmailer/mailer.php");
      request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=UTF-8');
      request.send('name=' + encodeURIComponent(formData.name) + '&phone=' + encodeURIComponent(formData.phone) + '&checkbox=' + encodeURIComponent(formData.checkbox) + '&_token=' + encodeURIComponent(formData.token));

      alert("Спасибо. Мы свяжемся с вами.");

      callbackModalForm.reset();
    }
  }

  if(otzyvyPage) {

    // Добавление отзывов
    let testimonialsModalForm = document.querySelector("#testimonials-modal-form"),
        testimonialsModalBtn = document.querySelector('.js-testimonials-modal-btn');

    testimonialsModalBtn.onclick = function() {
      ajaxTestimonials(testimonialsModalForm);
    }

    function ajaxTestimonials(form) {

      let inputs = form.querySelectorAll('.input-field');
      let arr = [];

      let inputName = form.querySelector('#testimonials-name');
      if (inputName.value.length < 3 || inputName.value.length > 20 ) {
        inputName.classList.add('required');
        arr.push(false);
      }

      let inputCity = form.querySelector('#testimonials-city');
      if (inputCity.value.length < 3 || inputCity.value.length > 30 ) {
        inputCity.classList.add('required');
        arr.push(false);
      }

      let inputText = form.querySelector('#testimonials-text');
      if (inputText.value.length < 3 || inputText.value.length > 300 ) {
        inputText.classList.add('required');
        arr.push(false);
      }

      let inputCheckbox = form.querySelector('#checkbox-testimonials-modal');
      if (!inputCheckbox.checked) {
        arr.push(false);
      }

      if (arr.length == 0) {
        for (let i = 0; i < inputs.length; i++) {
          inputs[i].classList.remove('required');
        }

        let formData = {
          name: inputName.value,
          city: inputCity.value,
          text: inputText.value,
          checkbox: inputCheckbox.checked,
          token: form.querySelector('input[name="_token"]').value
        };

        let request = new XMLHttpRequest();

        request.open('post', "/ajax/testimonial");
        request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=UTF-8');
        request.send('name=' + encodeURIComponent(formData.name) + '&city=' + encodeURIComponent(formData.city) + '&text=' + encodeURIComponent(formData.text) + '&checkbox=' + encodeURIComponent(formData.checkbox) + '&_token=' + encodeURIComponent(formData.token));

        alert("Спасибо за отзыв.");

        testimonialsModalForm.reset();
      }
    }
  }

  if (cartPage) {

    let cartItems = document.querySelectorAll('.cart-item');
    cartItems.forEach((item) => {

      // quantity step
      let quantityMinus = item.querySelector('.quantity-minus'),
          quantityPlus = item.querySelector('.quantity-plus'),
          quantityNumber = item.querySelector('.quantity-number');

      quantityMinus.onclick = function(){
        quantityNumber.stepDown();
        // calc();
      }
      quantityPlus.onclick = function(){
        quantityNumber.stepUp();
        // calc();
      }

    });

  }

  if (catalogPage) {
    let catalogNavItemTitle = document.querySelectorAll('.catalog-nav-item__title');

    catalogNavItemTitle.forEach((item) => {
      item.onclick = function () {
        item.parentNode.classList.toggle('catalog-nav-item-active');
      }
    });

    const productsFilterSelect = new SlimSelect({
      select: '#products-filter',
      showSearch: false,
      searchFocus: false,
    })
  }
    
  if (singleProduct) {
    // single product slider
    const singleProductSlider = new Swiper('.single-product-slider', {
      slidesPerView: 1,
      loop: true,
      centeredSlides: true,
      navigation: {
        nextEl: ".single-product-slider .btn-prev",
        prevEl: ".single-product-slider .btn-next",
      },
    });
  }

  if (dostavkaIOplataPage) {
    const selectCity = new SlimSelect({
      select: '#select-city',
      showSearch: false,
      searchFocus: false,
    })
  }


});