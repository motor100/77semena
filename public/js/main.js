document.addEventListener("DOMContentLoaded", () => {

  // Общие переменные
  let body = document.querySelector('body'),
      newsSection = document.querySelector('.news-section'), 
      cartPage = document.querySelector('.cart .cart-items-wrapper'), // страница корзина
      catalogPage = document.querySelector('.catalog'), // страница каталог
      singleProduct = document.querySelector('.single-product'), // страница товара
      dostavkaIOplataPage = document.querySelector('.dostavka-i-oplata'), // страница доставка и оплата
      otzyvyPage = document.querySelector('.otzyvy'), // страница отзывы
      token = document.querySelector('meta[name="csrf-token"]').getAttribute('content'); // csrf token


  addToCart();


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
    closeMenu();
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
      cityNames = document.querySelectorAll('.city-name'); // header city select & mobile menu city select

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
      let cityItemActive = document.querySelector('.city-item-active');
      cityItemActive.classList.remove('city-item-active');
      item.classList.add('city-item-active');

      modalClose(selectCityModal);
    }

    if (item.innerText == getCookie('city')) {
      item.classList.add('city-item-active');
    }

  });

  // search
  let searchForm = document.querySelector('.search-form'),
      searchInput = document.querySelector('.search-input'),
      autocompleteDropdown = document.querySelector('.autocomplete-dropdown'),
      searchRezult = document.querySelector('.js-search-rezult');
    
  searchInput.oninput = function () {

    let searchInputValue = document.querySelector('.search-input').value;
    console.log(searchInputValue.length);

    if (searchInputValue.length > 3 && searchInputValue.length < 40) {

      let formData = {
        product: searchInputValue,
        token: token
      };

      let xhr = new XMLHttpRequest();
      xhr.open('post', '/ajax/search');
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=UTF-8');
      xhr.send('product=' + encodeURIComponent(formData.product) + '&_token=' + encodeURIComponent(formData.token));
      xhr.onload = function() {
        
        // Получаю данные в виде json массива
        let response = xhr.response;
        let autocompleteSeeAllBtn = document.querySelector('.autocomplete-see-all-btn');
        autocompleteDropdown.classList.add('autocomplete-dropdown-active');

        if (response) {

          searchRezult.innerHTML = '';
          response = JSON.parse(response);

          // Формирую html из массива данных
          response.forEach((item) => {
            let tmpEl = document.createElement('li');
            tmpEl.className = "autocomplete-list-item";
            tmpEl.innerHTML = '<div class="autocomplete-list-item__title">' + item.title + '</div>';
            tmpEl.innerHTML += '<div class="autocomplete-list-item__price">' + item.price + '&#8381;</span>';
            tmpEl.innerHTML += '<a href="/catalog/' + item.slug + '" class="full-link autocomplete-list-item__link"></a>';
            searchRezult.append(tmpEl);
          });

          // Функция очищает форму и удаляет селектор
          function resetForm() {
            searchForm.reset();
            autocompleteDropdown.classList.remove('autocomplete-dropdown-active');
          }

          // Добавляю клик на найденные элементы
          let autocompleteListItemLink = document.querySelectorAll('.autocomplete-list-item__link');

          autocompleteListItemLink.forEach((item) => {
            item.onclick = resetForm;
          });

          // Добавляю клик на ссылку Показать все результаты
          // Меняю href у ссылки
          autocompleteSeeAllBtn.classList.remove('hidden');
          autocompleteSeeAllBtn.classList.add('visible');
          autocompleteSeeAllBtn.href = '/poisk?q=' + searchInput.value + '&_token=' + token;
          autocompleteSeeAllBtn.onclick = resetForm;

        } else {
          searchRezult.innerHTML = '';
          let tmpEl = document.createElement('li');
          tmpEl.className = "no-product";
          tmpEl.innerText = "Товаров не найдено";
          searchRezult.append(tmpEl);
          autocompleteSeeAllBtn.classList.remove('visible');
          autocompleteSeeAllBtn.classList.add('hidden');
        }
      }
    } else {
      // Если менее 3 символов скрываю результаты поиска
      autocompleteDropdown.classList.remove('autocomplete-dropdown-active');
    }
  }

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
    mobileMenu.classList.toggle('mobile-menu-open');
    burgerMenu.classList.toggle('close');
    burgerMenuWrapper.classList.toggle('active');
  }

  let listParentClick = document.querySelectorAll('.mobile-menu li.menu-item a');
  for (let i=0; i < listParentClick.length; i++) {
    listParentClick[i].onclick = function (event) {
      event.preventDefault();
      closeMenu();
      let hrefClick = this.href;
      setTimeout(function() {
        location.href = hrefClick
      }, 500);
    }
  }

  function closeMenu() {
    burgerMenuWrapper.classList.remove('active');
    burgerMenu.classList.remove('close');
    mobileMenu.classList.remove('mobile-menu-open');
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
        token: token
      };

      let request = new XMLHttpRequest();

      request.open('post', "/vendor/phpmailer/mailer.php");
      request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=UTF-8');
      request.send('name=' + encodeURIComponent(formData.name) + '&phone=' + encodeURIComponent(formData.phone) + '&checkbox=' + encodeURIComponent(formData.checkbox) + '&_token=' + encodeURIComponent(formData.token));

      alert("Спасибо. Мы свяжемся с вами.");

      callbackModalForm.reset();
    }
  }


  // Добавление товаров в корзину
  function addToCart() {

    let addToCartBtns = document.querySelectorAll('.products .add-to-cart-btn');

    for (let i = 0; i < addToCartBtns.length; i++) {
      addToCartBtns[i].onclick = function() {

        this.children[0].classList.add('circle-active');
            
        let formData = {
          id: this.getAttribute('data-id'),
          token: token,
        };
        
        let xhr = new XMLHttpRequest();
        xhr.open('post', '/ajax/addtocart');
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=UTF-8');
        xhr.send('id=' + encodeURIComponent(formData.id) + '&_token=' + encodeURIComponent(formData.token));
        xhr.onload = function() {
          if (xhr.response) {
            document.getElementById('header-cart-counter').innerText = xhr.response;
            document.getElementById('sticky-menu-cart-counter').innerText = xhr.response;
            document.getElementById('mobile-cart-counter').classList.remove('hidden');
            document.getElementById('mobile-cart-counter').innerText = xhr.response;

            window.location.href = '/cart';

          }
        }

      }
    }
  }

  if(newsSection) {
    const newsSlider = new Swiper('.news-slider', {
      slidesPerView: 'auto',
      loop: true,
      spaceBetween: 20,
    });
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
          token: token
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



    // Удаление товаров из корзины
    let rmFromCartBtn = document.querySelectorAll('.rm-from-cart-btn'),
        summWrapper = document.querySelector('.summ-wrapper'),
        bottomButtons = document.querySelector('.bottom-buttons'),
        cartIsEmptyText = document.querySelector('.cart-is-empty__text');
  
    for (let i = 0; i < rmFromCartBtn.length; i++) {
      rmFromCartBtn[i].onclick = function() {;
        rmFromCart(this);
        productSumm();
        weightSumm();
      }
    }

    function rmFromCart(param) {
            
      let formData = {
        id: param.getAttribute('data-id'),
        token: token,
      };

      document.querySelector('[data-id="' + formData.id + '"]').remove();

      let itemsInCart = document.querySelectorAll('.item');

      if (itemsInCart.length == 0) {
        document.location.reload();
      }

      let xhr = new XMLHttpRequest();
      xhr.open('post', '/ajax/rmfromcart');
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=UTF-8');
      xhr.send('id=' + encodeURIComponent(formData.id) + '&_token=' + encodeURIComponent(formData.token));
      xhr.onload = function() {
        document.getElementById('header-cart-counter').innerText = xhr.response;
        document.getElementById('mobile-cart-counter').innerText = xhr.response;
        if (xhr.response == 0) {
          document.getElementById('mobile-cart-counter').classList.add('hidden');
        }
      }
    }

  }

  if (catalogPage) {
    // Open/close nav menu item
    let catalogNavItemTitle = document.querySelectorAll('.catalog-nav-item__title');

    catalogNavItemTitle.forEach((item) => {
      item.onclick = function () {
        item.parentNode.classList.toggle('catalog-nav-item-active');
      }
    });

    // Remove selector catalog-nav-item-active width less 768px
    // let windowInnerWidth = window.innerWidth;
    // if (windowInnerWidth < 768) {
    //   let catalogNavItemActive = document.querySelector('.catalog-nav-item-active');
    //   catalogNavItemActive.classList.remove('catalog-nav-item-active');
    // }

    // Custom slim select
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
    // City select
    const selectCity = new SlimSelect({
      select: '#select-city',
      showSearch: false,
      searchFocus: false,
    })

    // Описание ПВЗ
    let officesItems = document.querySelectorAll('.offices .offices-name .offices-item'),
        officesDescriptionItems = document.querySelectorAll('.offices-description-item');

    for (let i = 0; i < officesItems.length; i++) {
      officesItems[i].onclick = function() {
        let officesDescriptionItemActive = document.querySelector('.offices-description-item-active');
        if(officesDescriptionItemActive) {
          officesDescriptionItemActive.classList.remove('offices-description-item-active');
        }
        officesDescriptionItems[i].classList.add('offices-description-item-active');
      }
    }


  }


});