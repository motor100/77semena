document.addEventListener("DOMContentLoaded", () => {

  // Общие переменные
  let body = document.querySelector('body'),
      header = document.querySelector('.header'), // header
      homePage = document.querySelector('.home-page'), // Главная страница
      cartPage = document.querySelector('.cart .cart-items-wrapper'), // страника корзина
      otzyvyPage = document.querySelector('.otzyvy'); // Страница отзывы


  // Скрывание кнопки Мы используем куки we use cookie
  let messagesCookies = document.querySelector('.messages_cookies'),
      messagesCookiesClose = document.querySelector('.messages_cookies-close');

  if (messagesCookiesClose) {
    messagesCookiesClose.onclick = function() {
      messagesCookies.classList.add('hidden');
      document.cookie = "we-use-cookie=yes; path=/; max-age=2629743; samesite=lax";
    }
  }

  let modalWindow = document.querySelectorAll('.modal-window'),
      headerCityBtn = document.querySelector('.js-header-city-btn'),
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

  // Выбор города
  let cityItems = selectCityModal.querySelectorAll('.city-item'),
      cityName = document.querySelector('.city-name');

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
      cityName.innerText = ccity;
      modalClose(selectCityModal);

      let cityItemActive = document.querySelector('.city-item-active');
      cityItemActive.classList.remove('city-item-active');
      item.classList.add('city-item-active');
    }

    // Если есть город в куки, то делаю его активным
    if (item.innerText == getCookie('city')) {
      item.classList.add('city-item-active');
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

  // if(otzyvyPage) {

  // }

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
  


});