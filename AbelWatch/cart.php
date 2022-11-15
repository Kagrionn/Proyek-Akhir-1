
<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id_produk'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id_produk = ($_GET["id_produk"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM tabel_produk WHERE id_produk='$id_produk'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id_produk.');window.location='index.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
    <!-- header -->
		<center><h1><span><img src="image/logo1.png" style='position:absolute; left:470px; top:15px;' width="50"></span><a href="index.html"></a>AbelWatch</h1></center>
<head>
	<title>Pembelian</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: #ffe177;
        font-weight: bolder;
      -webkit-text-stroke: 0.05em #000;
      }
    button {
          background-color: #fff;
          color: #000;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
          border-radius: 10%;
    }
    label {
      color: white;
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
      -webkit-text-stroke: 0.03em #000;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: #000;
      
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ffe177;
      border-radius: 5%;
    }
    </style>
</head>
<body>
      <center>
        <h1>BELI PRODUK <?php echo $data['nama_produk']; ?></h1>
      <center>
      <section class="base">
        <div>
          <label>Jumlah Produk</label>
          <input type="number" name="" autofocus="" required="" />
        </div>
        <div>
          <label>Jenis Pembayaran</label>
         <td>
         <td valign="top"> 
			     <label><input type="checkbox" class="radio" name="bidang" value="Gizi">ATM</label><br>
			     <label><input type="checkbox" class="radio" name="bidang" value="Gigi">Gopay</label><br>
			     <label><input type="checkbox" class="radio" name="bidang" value="Kandungan">Dana</label><br>
			     <label><input type="checkbox" class="radio" name="bidang" value="Virus">Indomaret</label><br>
                 <label><input type="checkbox" class="radio" name="bidang" value="Mukjizat">Alfamart</label><br>
			    </td>
         </td>
        </div>
        <div>
          <label>No telepon</label>
         <input type="text" name="" required="" />
        </div>
        <div>
          <label>Alamat</label>
         <input type="text" name="" required="" />
        </div>
        <div>
         <a href="thankyou.php"><button>Beli</button></a>
        </div>
        </section>
  </body>
<script type="text/javascript">
	// the selector will match all input controls of type :checkbox
	// and attach a click event handler 
	$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
</script>
</html>