</br> Witaj <?=$_SESSION['login'];?>

<table id="user" class="display" style="width:100%">
    <thead>
      <tr>
        <th>Dzień</th>
        <th>Kwota</th>
        <th>Kategoria</th>
        <th>Opis</th>
        <th>Saldo</th>
        <th>Usuń</th>
        <th>Edytuj</th>
      </tr>
    </thead>
  </table>

  <script>
  $(document).ready(function(){
  var table = $('#user').DataTable(
    {
              "ajax":
                {
                  "url": "<?=site_url('Main/getdata');?>",
                  "dataSrc": "usersData",
                },
          "columns":
            [
                {"data": "date"},
                {"data": "amount"},
                {"data": "category"},
                {"data": "description"},
                {"data": "after_balance"},
                {"defaultContent": "<button>Usuń</button>" },
                {"defaultContent": "<button>Edytuj</button>"}

            ] ,
            "columnDefs":
           [
              {targets: 5, "render": function ( data, type, full, meta )
              {
                return "<button id='delete' data-id='"+data+"'>Usun</button>"
              }},
              {targets: 6, "render": function ( data, type, full, meta )
              {
                return "<button id='takedata' data-id='"+data+"'>Edytuj</button>"
              }}
            ]
      } );});


  </script>
