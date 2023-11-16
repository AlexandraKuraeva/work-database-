document.addEventListener('DOMContentLoaded', function () {
  const generatePdfButton = document.getElementById('generatePdfBtn');

  // Добавление обработчика события click к кнопке
  generatePdfButton.addEventListener('click', () => {
    console.log('hi');
    // Отправка Ajax или Fetch запроса здесь
    fetch('generate-pdf', {
      method: 'GET',
    })
      .then((response) => response.blob())
      .then((blob) => {
        const url = URL.createObjectURL(blob);
        window.open(url, '_blank');
      })
      .catch((error) => {
        console.log(error);
      });
  });
});
