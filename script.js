$(document).ready(function () {
  $('#registrationForm').on('submit', function (e) {
    const name = $('#name').val();
    const email = $('#email').val();

    if (!name || !email) {
      e.preventDefault();
      alert('Please fill out all required fields.');
    }
  });
});
