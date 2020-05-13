<button type="button" onclick="logout()" >Wyloguj się</button>



<script>
function logout()
{$.ajax({
    url : "main/logout",

    success : function(data) {window.location.replace("http://localhost/finances/");}
});}



</script>
