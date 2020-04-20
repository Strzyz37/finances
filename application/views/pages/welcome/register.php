<form action='<?=site_url('Welcome/Register');?>' method='post'>
Login: <input type='text' name='Login' placeholder="Znaki 6-32" id='username'/></br>
Password: <input type='password' name='pass' placeholder="Znaki 8-32" id='password'/></br>
E-mail: <input type='text' name='mail' placeholder="kowalski@jan.pl" id='mail'/></br>
<button type="button" onclick="Register()">Zarejestruj</button>
</form>


<script>
function Register(){
  var login = $('#username').val();
  var pass = $('#password').val();
  var mail = $('#mail').val();

    jQuery.ajax({
    type: "POST",
    url: "<?=site_url('Welcome/Register');?>",
    dataType: 'json',
    data: {login: login, pass: pass, mail: mail},

    });
}
</script>
