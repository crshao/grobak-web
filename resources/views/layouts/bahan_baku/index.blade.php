<!-- <!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  position: relative;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  width: 25%;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

div{
  position: relative;
}

</style>
</head>
<body id="body">

<h2>Bahan Baku</h2>

<div>
  <div style="top: 20px; float: right; right: 0;">
    <form>
      <input type="text">
      <br>
      <input type="submit" value="Search">
    </form>
  </div>
  <div style="top: 50px;">
    <form>
      <input type="submit" value="Keranjang">
    </form>
  </div>
</div>

<br>

<div style="top: 50px">
  <table>
    <tr>
      <td>
        Semua
      </td>
      <td>
        Daging
      </td>
      <td>
        Sayur
      </td>
      <td>
        Seafood
      </td>
    </tr>
  </table>

  <table style="width:100%;">
    <tr>
      <td id="card-1">
      </td>
      <td id="card-2">
      </td>
      <td id="card-3">
      </td>
      <td id="card-4">
      </td>
    </tr>
    <tr>
      <td colspan="4" id="card-nav">
      </td>
    </tr>
  </table>
</div>

<script>
  var collection = [
    @foreach ($bahanBakus as $bahanBaku)
      "{{$bahanBaku->name}}",
    @endforeach
  ];
  
  var card_1 = document.getElementById("card-1"), card_2 = document.getElementById("card-2"),
    card_3 = document.getElementById("card-3"), card_4 = document.getElementById("card-4");

  // document.getElementById("body").onload = showBahanBaku(1);
  // document.getElementById("card-nav").onload = showCardNav();

  function showBahanBaku(i){
    var index = (i-1) * 4;

    if(index < collection.length)
      card_1.innerHTML =
        "<p align=\"center\">Image</p>" +
        "<p align=\"center\">" + collection[index] +"</p>" +
        "<form style=\"text-align: center;\"><input type=\"submit\" value=\"Tambah\"></form>";
    else
      card_1.innerHTML = "";
    
    if((index + 1) < collection.length)
      card_2.innerHTML =
      "<p align=\"center\">Image</p>" +
      "<p align=\"center\">" + collection[index + 1] +"</p>" +
      "<form style=\"text-align: center;\"><input type=\"submit\" value=\"Tambah\"></form>";
    else
      card_2.innerHTML = "";
    
    if((index + 2) < collection.length)
      card_3.innerHTML =
      "<p align=\"center\">Image</p>" +
      "<p align=\"center\">" + collection[index + 2] +"</p>" +
      "<form style=\"text-align: center;\"><input type=\"submit\" value=\"Tambah\"></form>";
    else
      card_3.innerHTML = "";

    if((index + 3) < collection.length)
      card_4.innerHTML =
      "<p align=\"center\">Image</p>" +
      "<p align=\"center\">" + collection[index + 3] +"</p>" +
      "<form style=\"text-align: center;\"><input type=\"submit\" value=\"Tambah\"></form>";
    else
      card_4.innerHTML = "";
  }

  function showCardNav(){
    var innerHTMLStr = "";
    for(var i=0, j=1; i<collection.length; i+=4, j++)
      innerHTMLStr +=
        "<a onclick=\"showBahanBaku(" + j +")\">" + j +" </a>";
    document.getElementById("card-nav").innerHTML += innerHTMLStr;
  }
</script>

</body>
</html> -->

@extends('layouts.app')

@section('title')
  Bahan Baku
@endsection

@section('content')
  @foreach($bahanBakus->chunk(3) as $bahanBakuChunk)
    <div class="row">
      @foreach($bahanBakuChunk as $bahanBaku)
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            Gambar
            <div class="caption">
              <h3>{{$bahanBaku->nama_bahanbaku}}</h3>
              <div class="clear-fix">
                <div class="pull-left price">{{$bahanBaku->price}}</div>
                <a href="{{ route('bahanBaku.addToCart', ['id' => $bahanBaku->id]) }}" class="btn btn-success pull-right" role="button">Tambah</a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endforeach
@endsection