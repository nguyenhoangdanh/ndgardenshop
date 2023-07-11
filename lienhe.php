
<?php include("inc/header.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.1/leaflet.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.1/leaflet.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <style>
      #map {
      	
      	width: 400px;
      	height: 300px;


      
        }
      .bando{
      	width: 20px;
      	height: 20px;
      	border: 5px;
          margin-top: -150px;
          margin-left: -200px;

      	
      }
      body{
      	height: 1000px;
      	
      }
      td a{
      	font-size: 20px;
      	text-decoration: none;
      		color: #00bfbf;
      }
      tr{
      	height: 90px;

      }
      td span
      {
      	font-size: 20px;
      	color: #00bfbf;
      	/*font-weight: bold;*/
      }
      td input{
      	width: 750px;
      	height: 65px;
      	border-radius: 7px;
      	border-color: #e57d1b;
      	background-color: #fffdfc;
      	font-weight: bold;
      }
      label{
      	font-size: 20px; font-weight: bold;
      }
      h1{
      	text-align: center; /*margin-left: 155px;*/ font-weight: bold;
      	text-align-last: 3px;
      }
    </style>
</head>
<body>
	<div style="width: 100%;
	height: 100%; margin-left: 100px;  ">
		<div style="float: left; margin-left: 100px; width: 900px;">
			<h2 style="float: left; font-weight: bold; color: #c66000; font-size: 30px;">Thông Tin Shop</h2>

			<br>


		</div>
	
	<div style="float: left; width: 900px;">


		<table style="background: #b99b11; border-radius: 10px" >
			<form method="post" >


			<tr>
				<td><label>Mobile: 038 593 0622(Mr Danh) - 038 523 8595 (Ms Ngân)</label><br>
                    <label>Email: ndgardencuahangcaycanh@gmail.com</label><br>
                    <label>Website: ndgarden.cf </label><br>
                    <label>Địa chỉ: 102/4, Phường Mỹ Long, TP Long Xuyên, tỉnh An Giang</label><br>
                    <label>(cách ngã Trung tâm Văn Hóa tỉnh An Giang 500m)</label><br>
					<br><br>
				</td>
			</tr>



		</form>
		</table>
		
	</div>
	

	<div class="bando"><br>
		<table style="height: 45px;">
			<tr>
				<td><br>&emsp;</td>
			</tr>
		</table>
	<table style="width: 400px;">
	  	<tr style="width: 400px;height: 5px;">
	  		<td style="background-color: black; "> 
	       	<p style="font-size: 22px; color: #d2b316;">Số 102/4, ấp hòa tây A, xã Phú  Thuận, Thoại Sơn, An Giang <a href="https://www.google.com/maps/place/10%C2%B022'32.1%22N+105%C2%B025'05.8%22E/@10.3756453,105.4164989,17.26z/data=!4m13!1m7!3m6!1s0x0:0xdcdd62777adf5401!2zMTDCsDIyJzMyLjEiTiAxMDXCsDI1JzA1LjgiRQ!3b1!8m2!3d10.37557!4d105.41829!3m4!1s0x0:0xdcdd62777adf5401!8m2!3d10.37557!4d105.41829">Xem đường đi</a></p>
	  		</td>
	  	</tr>
	  </table>
    <div id="map">
      <table>
     <tr> <a href="https://www.maptiler.com" style="position:absolute;left:10px;bottom:10px;z-index:999;"><img src="https://api.maptiler.com/resources/logo.svg" alt="MapTiler logo"></a>
   
    <p><a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a></p>
    <script>
      var map = L.map('map').setView([10.37557,105.41829], 14);
      L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=iVYhDBTWyIDVzX3NyM2q',{
        tileSize: 512,
        zoomOffset: -1,
        minZoom: 1,
        attribution: "\u003ca href=\"https://www.maptiler.com/copyright/\" target=\"_blank\"\u003e\u0026copy; MapTiler\u003c/a\u003e \u003ca href=\"https://www.openstreetmap.org/copyright\" target=\"_blank\"\u003e\u0026copy; OpenStreetMap contributors\u003c/a\u003e",
        crossOrigin: true
      }).addTo(map);
      var popup = L.popup();

		function onMapClick(e) {
		    popup
		        .setLatLng(e.latlng)
		        .setContent("Bạn đang click vào bản đồ tại tọa độ " + e.latlng.toString())
		        .openOn(map);
		}

	map.on('click', onMapClick);
		var redIcon = new L.Icon({
			iconUrl: 'images/diadiem.png',
			// shadowUrl: 'images/diadiem.png',
			iconSize: [25, 41],
			iconAnchor: [12, 41],
			popupAnchor: [1, -34],
			shadowSize: [41, 41]
	});
		L.marker([10.37557,105.41829], {icon: redIcon}).addTo(map).bindPopup('ND GARDEN SHOP').openPopup();
       </script> 
   </div></tr>
   <tr>
  	</tr>
    </table>
  </div>
  
</div>
</div>
</body>

<?php include("inc/footer.php"); ?>
