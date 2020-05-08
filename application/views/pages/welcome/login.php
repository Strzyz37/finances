Zaloguj się
<form action='' method='post'>
Login: <input type='text' name='Login' id='login'/></br>
Password: <input type='password' name='pass' id='pass'/></br>
<button type="button" onclick="Zaloguj()" >Zaloguj się</button>
</form>

<script>


function Zaloguj(){
  var login = $('#login').val();
  var pass = $('#pass').val();
    jQuery.ajax({
    type: "POST",
    url: "<?=site_url('Welcome/Login');?>",
    dataType: 'json',
    data: {login: login, pass: pass},
    success : function(data) {
          window.location.replace("http://localhost/finances/index.php/main");
      },
      error : function() {
        console.log("Wystąpił błąd z połączeniem");
    }
  });
//window.location.replace("http://www.w3schools.com");
}
</script>
