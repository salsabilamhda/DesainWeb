$(document).ready(function() {
    $('#contact-form').submit(function(event) {
      event.preventDefault();
      var name = $('#name').val();
      var email = $('#email').val();
      var subject = $('#subject').val();
      var message = $('#message').val();
  
      // Validasi input data
      var nameError = '';
      var emailError = '';
      var subjectError = '';
      var messageError = '';
  
      if (name.length < 3) {
        nameError = 'Nama lengkap minimal 3 karakter';
      }
  
      if (!email.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/)) {
        emailError = 'Alamat email harus dalam format yang benar';
      }
  
      if (subject == '') {
        subjectError = 'Subjek tidak boleh kosong';
      }
  
      if (message == '') {
        messageError = 'Pesan tidak boleh kosong';
      }
  
      // Tampilkan pesan error
      $('#name-error').text(nameError);
      $('#email-error').text(emailError);
      $('#subject-error').text(subjectError);
      $('#message-error').text(messageError);
  
      // Jika semua input data valid, kirimkan email
      if (nameError == '' && emailError == '' && subjectError == '' && messageError == '') {
        $.ajax({
          type: 'POST',
          url: 'Tugas.php',
          data: {
            name: name,
            email: email,
            subject: subject,
            message: message
          },
          success: function(response) {
            $('#success-message').text('Email berhasil dikirim!');
          }
        });
      }
    });
  });