<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kelompok tito</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=VT323&display=swap" rel="stylesheet">
    <style>
        html {
    margin: 0;
    padding: 0;
    font-family: 'VT323', monospace;
}

  body {
    color: #00ff00;
    font-size: 16px;
    padding: 10px;
    margin: 0;
    background:url("https://www.icegif.com/wp-content/uploads/black-hole-icegif-7.gif") no-repeat center center fixed;
    background-size: cover;
    text-shadow: -1px 0  #000000, 0 1px  #FFFFFF, 1px 0  #FFFFFF, 0 -1px  #FFFFFF;
}
    .text1{
    font-size: 100px;
    margin: 0;
    font-weight: bold;
    text-align: center;
    align-items: flex-start;
    animation: jedug 2s ease 0s infinite normal forwards;
    }
    .text1 span{
        animation:
    typing 3.5s steps(30, end),
    blink-caret .5s step-end infinite;
     overflow: hidden; /* Ensures the content is not revealed until the animation */
  border-right: .15em solid #00ff00; /* The typwriter cursor */
  white-space: nowrap; /* Keeps the content on a single line */
  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
  letter-spacing: .15em;
    }
    /* The typing effect */
@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}
@keyframes jedug {
    0.0%{
        transform: scale(0.95);
    }
    20.1%{
        transform: scale(1);
    }
    30.0%{
        transform: scale(1);
    }
    40.3%{
        transform: scale(1);
    }
    49.5%{
        transform: scale(0.95);
    }
    60.1%{
        transform: scale(1);
    }
    69.6%{
        transform: scale(1);
    }
    79.6%{
        transform: scale(1);
    }
    89.9%{
        transform: scale(0.95);
    }
    9.7%{
        transform: scale(1);
    }
    100%{
        transform: scale(0.95);
    }
}

/* The typewriter cursor effect */
@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: #00ff00 }
}
@-webkit-keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}

@keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}

    .gifhack{
        text-align: center;
    }
    .gifhack img{
        width: 250px;
    }
    h1{
         align-items: flex-start;
    }
    /* From uiverse.io by @adamgiebl */
button {
 --green: #1BFD9C;
 font-size: 18px;
 padding: 0.7em 2.7em;
 letter-spacing: 0.06em;
 position: relative;
 font-family: inherit;
 border-radius: 0.6em;
 overflow: hidden;
 transition: all 0.3s;
 line-height: 1.4em;
 border: 2px solid var(--green);
 background: linear-gradient(to right, rgba(27, 253, 156, 0.1) 1%, transparent 40%,transparent 60% , rgba(27, 253, 156, 0.1) 100%);
 color: var(--green);
 box-shadow: inset 0 0 10px rgba(27, 253, 156, 0.4), 0 0 9px 3px rgba(27, 253, 156, 0.1);
}

button:hover {
 color: #82ffc9;
 box-shadow: inset 0 0 10px rgba(27, 253, 156, 0.6), 0 0 9px 3px rgba(27, 253, 156, 0.2);
}

button:before {
 content: "";
 position: absolute;
 left: -4em;
 width: 4em;
 height: 100%;
 top: 0;
 transition: transform .4s ease-in-out;
 background: linear-gradient(to right, transparent 1%, rgba(27, 253, 156, 0.1) 40%,rgba(27, 253, 156, 0.1) 60% , transparent 100%);
}

button:hover:before {
 transform: translateX(15em);
}
.btn1{

}
.gbtn{
  display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
            text-align: center;
            align-items: center;
            margin-top: 2% ;
}
table {
  margin: auto;
  align: center;
  width: 80%;
  font-size: 20px;
  margin-top: 2%;
}

table, th, td {
    border: 2px solid #cecece;
    border-collapse: collapse;
    text-align: center;
    table-layout: auto;
}
.bgmui audio{
  visibility: hidden;
}


    </style>
     <script>
    var bleep = new Audio();
    bleep.src = '8bit.mp3';


    </script>
</head>
<body>
  <div  style="display:none" id ="bgmui">
  <audio autoplay="true" src="bgmusic.mp3" >
</div>
    <div class="gifhack">
        <img src="https://media.giphy.com/media/1tDAzdBoIl5GwAsgpd/giphy.gif" alt="">
    </div>
    <div class="text1">
        <span>Kelompok Tito</span>
    </div>
    <div class="gbtn">
        <button class="btn1" onclick="opendata('cabang')" onmousedown="bleep.play()">cabang</button>
        <button class="btn2" onclick="opendata('customer')" onmousedown="bleep.play()">Customer</button>
        <button class="btn3" onclick="opendata('product')" onmousedown="bleep.play()">Product</button>
        <button class="btn4" onclick="opendata('cabcus')" onmousedown="bleep.play()">cabang + customer</button>
        <button class="btn4" onclick="opendata('cabpro')" onmousedown="bleep.play()">cabang + product</button>
        <button class="btn4" onclick="opendata('cuspro')" onmousedown="bleep.play()">customer + product</button>
    </div>


    <!-- TABLE CABANG  -->
   <div id="cabang" class="tab 1">
    <table>
      <tr>
        <th>ID Cabang</th>
        <th>Cabang</th>
        <th>Total Omset</th>
        <th>Total Kunjungan</th>
      </tr>
      @foreach ($cabang as $item)
      <tr>
        <td>{{$item->id_cabang}}</td>
        <td>{{$item->nama_cabang}}</td>
        <td>{{$item->Total_Omset}}</td>
        <td>{{$item->Total_Kunjungan}}</td>
      </tr>
      @endforeach
    </table>
</div>

 <!-- TABLE CUSTOMER  -->
<div id="customer" class="tab 2" style="display:none">
    <table class= "table customer">
        <tr>
            <th>ID Customer</th>
            <th>Nama Customer</th>
            <th>Total Belanja</th>
            <th>Total Kunjungan</th>
          </tr>
          @foreach ($customer as $item2)
          <tr>
            <td>{{$item2->customer_id}}</td>
            <td>{{$item2->customer_name}}</td>
            <td>{{$item2->Total_Belanja}}</td>
            <td>{{$item2->Total_Kunjungan}}</td>
          </tr>
          @endforeach
    </table>
</div>

 <!-- TABLE PRODUCT  -->
<div id="product" class="tab 3" style="display:none">
    <table class= "table Product">
        <tr>
            <th>ID Cabang</th>
            <th>Nama Cabang</th>
            <th>ID Product</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Total Penjualan</th>
            <th>Total Uang Diterima</th>
        </tr>
        @foreach ($product as $item3)
        <tr>
            <td>{{$item3->id_cabang}}</td>
            <td>{{$item3->nama_cabang}}</td>
            <td>{{$item3->product_id}}</td>
            <td>{{$item3->product_name}}</td>
            <td>{{$item3->price}}</td>
            <td>{{$item3->Total_Penjualan}}</td>
            <td>{{$item3->Total_Uang_Diterima}}</td>
        </tr>
        @endforeach
    </table>
</div>

 <!-- TABLE CABANG CUSTOMER  -->
<div id="cabcus" class="tab 4" style="display:none">
    <table class= "table cabang customer">
        <tr>
            <th>ID Cabang</th>
            <th>Nama Cabang</th>
            <th>ID Order</th>
            <th>ID Customer</th>
            <th>Nama Customer</th>
            <th>ID Product</th>
            <th>Nama Product</th>
            <th>Price</th>
            <th>Quantity Product</th>
            <th>Jumlah Customer</th>
        </tr>
        @foreach ($cabangcus as $item4)
        <tr>
            <td>{{$item4->id_cabang}}</td>
            <td>{{$item4->nama_cabang}}</td>
            <td>{{$item4->order_id}}</td>
            <td>{{$item4->customer_id}}</td>
            <td>{{$item4->customer_name}}</td>
            <td>{{$item4->product_id}}</td>
            <td>{{$item4->product_name}}</td>
            <td>{{$item4->price}}</td>
            <td>{{$item4->quantity_product}}</td>
            <td>{{$item4->Jumlah_Customer}}</td>
        </tr>
        @endforeach
    </table>
</div>

 <!-- TABLE CABANG PRODUCT -->
<div id="cabpro" class="tab 5" style="display:none">
    <table class= "table cabang product">
        <tr>
            <th>ID Cabang</th>
            <th>Nama Cabang</th>
            <th>ID Order</th>
            <th>ID Customer</th>
            <th>Nama Customer</th>
            <th>ID Product</th>
            <th>Nama Product</th>
            <th>Price</th>
            <th>Quantity Product</th>
            <th>Jumlah Terjual</th>
        </tr>
        @foreach ($cabangpro as $item5)
        <tr>
            <td>{{$item5->id_cabang}}</td>
            <td>{{$item5->nama_cabang}}</td>
            <td>{{$item5->order_id}}</td>
            <td>{{$item5->customer_id}}</td>
            <td>{{$item5->customer_name}}</td>
            <td>{{$item5->product_id}}</td>
            <td>{{$item5->product_name}}</td>
            <td>{{$item5->price}}</td>
            <td>{{$item5->quantity_product}}</td>
            <td>{{$item5->Jumlah_Terjual}}</td>
        </tr>
        @endforeach
    </table>
</div>

 <!-- TABLE CUCTOMER PRODUCT -->
<div id="cuspro" class="tab 6" style="display:none">
    <table class= "table customer product">
        <tr>
            <th>ID Cabang</th>
            <th>Nama Cabang</th>
            <th>ID Order</th>
            <th>ID Customer</th>
            <th>Nama Customer</th>
            <th>ID Product</th>
            <th>Nama Product</th>
            <th>Price</th>
            <th>Quantity Product</th>
            <th>Jumlah Customer Yang Pernah Beli</th>
        </tr>
        @foreach ($customerpro as $item6)
        <tr>
            <td>{{$item6->id_cabang}}</td>
            <td>{{$item6->nama_cabang}}</td>
            <td>{{$item6->order_id}}</td>
            <td>{{$item6->customer_id}}</td>
            <td>{{$item6->customer_name}}</td>
            <td>{{$item6->product_id}}</td>
            <td>{{$item6->product_name}}</td>
            <td>{{$item6->price}}</td>
            <td>{{$item6->quantity_product}}</td>
            <td>{{$item6->Jumlah_Customer}}</td>
        </tr>
        @endforeach
    </table>
</div>




<script>
function opendata(datatab) {
  var i;
  var x = document.getElementsByClassName("tab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(datatab).style.display = "block";
}
var vid = document.getElementById("bgmui");
function setHalfVolume() {
  vid.volume = 0.2;
}

</script>

</body>
</html>
