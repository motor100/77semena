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

  

});