window.onload = () => {

        // Code taken from https://stackoverflow.com/questions/14086398/count-textarea-characters
        document.getElementById('input-area').onkeyup = function () {
          document.getElementById('char-counter').innerHTML = "Characters Left: " + (500 - this.value.length);
        };

        // Code taken from https://www.w3schools.com/bootstrap4/bootstrap_forms.asp
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });

}