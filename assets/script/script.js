document.addEventListener("DOMContentLoaded", function() {
    var registrationForm = document.getElementById("registrationForm");

    registrationForm.addEventListener("submit", function(event) {
      var emailInput = document.getElementById("email");
      var passwordInput = document.getElementById("password");

      // Verifica l'email utilizzando un'espressione regolare di base
      var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(emailInput.value)) {
        alert("Inserisci un'email valida.");
        event.preventDefault();
        return;
      }

      // Verifica la lunghezza della password
      if (passwordInput.value.length < 8) {
        alert("La password deve contenere almeno 8 caratteri.");
        event.preventDefault();
        return;
      }

      // Puoi aggiungere ulteriori verifiche per la complessità della password se necessario

      // Se tutte le verifiche passano, il modulo viene inviato normalmente
    });
  });