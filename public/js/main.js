document.addEventListener("DOMContentLoaded", () => {

  // Общие переменные
  let body = document.querySelector('body'),
      header = document.querySelector('.header'), // header
      homePage = document.querySelector('.home-page'); // Главная страница


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
      headerCityBtn = document.querySelector('.header-city-btn'),
      selectCityModal = document.querySelector('#select-city-modal'),
      modalCloseBtn = document.querySelectorAll('.modal-window .modal-close');

  headerCityBtn.onclick = function () {
    modalOpen(selectCityModal);
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
  let cityItems = selectCityModal.querySelectorAll('.city-item');

  for (let i = 0; i < cityItems.length; i++) {
    cityItems[i].onclick = function () {
      let ccity = cityItems[i].innerText;
      document.cookie = "city=" + ccity + "; path=/; max-age=2629743; samesite=lax";
      headerCityBtn.innerText = ccity;
      modalClose(selectCityModal);
    }
  }

});