<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>
</head>
<body id="body">

<h2>Tabel Bahan Baku</h2>

<table>
  <tr>
    <td>
      Semua
    </td>
    <td>
      Semua
    </td>
    <td>
      Semua
    </td>
    <td>
      Semua
    </td>
  </tr>
</table>

<table id="contentTable"></table>

<script>
  document.getElementById("body").onload = function() {showBahanBaku()};

  function showBahanBaku(){
    document.getElementById("contentTable").innerHTML =
      "<tr>" +
        "<td>" +
          "<a href=\"/home\">" +
            "Nama Bahan Baku" +
          "</a>" +
        "</td>" +
        "<td>" +
          "<a href=\"/home\">" +
            "Nama Bahan Baku" +
          "</a>" +
        "</td>" +
        "<td>" +
          "<a href=\"/home\">" +
            "Nama Bahan Baku" +
          "</a>" +
        "</td>" +
        "<td>" +
          "<a href=\"/home\">" +
            "Nama Bahan Baku" +
          "</a>" +
        "</td>" +
      "</tr>";
  }
</script>

</body>
</html>
