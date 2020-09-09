function validateContact() {
    var valid = true; 
      $(".input").css('border-color', '');
      $(".info").html('');
    if (!$("#lastname").val()) {
        // $("#lastname-info").html("Entrez votre jj");
        $("#lastname").css('border-color','red');
        valid = false;
    }
    if (!$("#lastname").val()) {
      // $("#lastname-info").html("Entrez votre jj");
      $("#lastname").css('border-color','red');
      valid = true;
  }
    if (!$("#lastname").val().match(/^([A-Za-z\s.'-]{3,10})?$/)){     
       $("#lastname").css('border-color','red');
      // $("#lastname-info").html("Veuillez saisir au moins 3 caractères");
            valid = false;
      }
  
    if (!$("#firstname").val()) {
          $("#firstname").css('border-color','red');
          // $("#firstname-info").html("Entrez votre prénom");
          valid = false;
    }
        if (!$("#firstname").val().match(/^([A-Za-z\s.'-]{3,10})?$/)){
          $("#firstname").css('border-color','red');  
          // $("#firstname-info").html("Veuillez saisir au moins 3 caractères");
            valid = false;
      }
  
    if (!$("#email").val()) {
      $("#email").css('border-color','red');
          // $("#email-info").html("Entrer email addresse");
          valid = false;
        }
        if (!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
          $("#email").css('border-color','red');
          // $("#email-info").html("entrez une adresse email valide");
          valid = false;
        }
    
    if (!$("#nomagence").val()) {
        $("#nomagence").css('border-color','red');
          // $("#nomagence-info").html("Entrer nom de l'agence");
          valid = false;
    }
  
    if (!$("#number").val()) {
      $("#number").css('border-color','red');
          // $("#number-info").html("Entrer numéro de téléphone");
          valid = false;
        }
     if (!$("#number").val().match(/^([0-9]{10})?$/)){
           $("#number").css('border-color','red');
            // $("#number-info").html("Entrer numéro de téléphone valide");
            valid = false;
      }
  
        return valid;
      }
  
  function rent() {
        var valid = true;
        $(".input").css('border-color', '');
        $(".info").html('');
  
        if (!$("#userName").val()) {
          $("#userName").css('border-color','red');
          // $("#userName-info").html("Entrez votre nom");
          valid = false;
        }
 
        if (!$("#userName").val().match(/^([A-Za-z\s.'-]{3,10})?$/)){
             $("#userName").css('border-color','red');      
          // $("#userName-info").html("Veuillez saisir au moins 3 caractères");
                valid = false;
          }
        if (!$("#userEmail").val()) {
          $("#userEmail").css('border-color','red');
          // $("#userEmail-info").html("Entrer email addresse");
          valid = false;
        }
        if (!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
          $("#userEmail").css('border-color','red');
          // $("#userEmail-info").html("entrez une adresse email valide");
          valid = false;
        }
  
        return valid;
      }
  
      $(document).ready(function() {
        $('#submit').on('click', function(e) {
          e.preventDefault();
          var valid;
          valid = rent();
          if (valid) {
            jQuery.ajax({
              url: "script.php",
              data: 'userName=' + $("#userName").val() + '&userEmail=' + $(userEmail).val(),
              type: "POST",
              success: function(data) {
                $(".rent-mail-status").html(data);
                $('#rent').trigger('reset');
              },
              error: function() {}
            });
          }
        });
  
        $('#registration-submit').on('click', function(e){
          e.preventDefault();
          var valid;
          valid = validateContact();
          if (valid) {
            jQuery.ajax({
              url: "contact_mail.php",
              data: 'lastname=' + $("#lastname").val() + '&firstname=' + $("#firstname").val() + '&email=' + $("#email").val() + '&number=' + $("#number").val() + '&nomagence=' + $(nomagence).val(),
              type: "POST",
              success: function(data) {
                $(".registration-mail-status").html(data);
                $("#registration").trigger('reset');
              },
              error: function() {}
            });
          }
        });
  
      });