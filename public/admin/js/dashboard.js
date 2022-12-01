// Отклчение скролла у input type=number
let numberInputs = document.querySelectorAll('.input-number');

numberInputs.forEach((item) => {
  item.onwheel = function(e) {
    e.preventDefault();
  }
});