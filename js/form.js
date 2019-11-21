  $(document).ready(function() {

    let captchaString = localStorage["captcha"]
    alert(captchaString);

    $("#img").load("../php/captcha.php");


    $("#login").click(function() {
      if ($("#password").val() == "geheim" &&) {
        //  $("#captcha").val() == captchaString
        alert("Welcome " + $("#user").val() + )
      } else {
        alert("Accsess denied!");
      }
    });

  });
