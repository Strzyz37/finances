Zaloguj się
<form action='' method='post'>
Login: <input type='text' name='Login' id='login'/></br>
Password: <input type='password' name='pass' id='pass'/></br>
<button type="button" onclick="Zaloguj()">Zaloguj się</button>
</form>

<script>


function Zaloguj(){
  var login = $('#login').val();
  var pass = $('#pass').val();
    jQuery.ajax({
    type: "POST",
    url: "<?=site_url('Welcome/Login');?>",
    dataType: 'json',
    data: {login: login, pass: pass}
    });
}
</script>
