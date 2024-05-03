<?php
// Periksa apakah metode yang digunakan adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan semua bidang telah diisi
    if (isset($_POST["nama"]) && isset($_POST["paket"]) && isset($_POST["peserta"]) && isset($_POST["phone"]) && isset($_POST["tanggal"])) {
        // Ambil data yang disubmit dari formulir
        $nama_pemesan = $_POST["nama"];
        $nama_paket = $_POST["paket"];
        $jumlah_peserta = $_POST["peserta"];
        $nomor_hp = $_POST["phone"];
        $tanggal_pemesanan = $_POST["tanggal"];
        
        // Lakukan koneksi ke database (ganti nilainya sesuai dengan pengaturan server Anda)
        $servername = "localhost";
        $username = "root"; // Ganti dengan username database Anda
        $password = ""; // Ganti dengan password database Anda
        $dbname = "jwd"; // Ganti dengan nama database Anda

        // Buat koneksi baru
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Periksa koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Siapkan query SQL untuk menyimpan data pemesanan ke database
        $sql = "INSERT INTO dashboard (nama_pemesan, nama_paket, jumlah_peserta, nomor_hp, tanggal_pemesanan) VALUES ('$nama_pemesan', '$nama_paket', '$jumlah_peserta', '$nomor_hp', '$tanggal_pemesanan')";

        // Jalankan query
        if ($conn->query($sql) === TRUE) {
            echo "Pemesanan berhasil ditambahkan!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Tutup koneksi
        $conn->close();
    } else {
        echo "Semua bidang harus diisi!";
    }
} else {
    // Jika metode yang digunakan bukan POST, kembalikan pesan error
    echo "Metode yang digunakan harus POST!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header>

<nav class="bg-white border-white ">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
            
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-blue-500">Yusron Hotel Banyuwangi</span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
           <a href="login.html"> <button type="button"
                class="text-white bg-orange-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Sign Up</button>
            <button data-collapse-toggle="navbar-cta" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button></a>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 b rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white ">
                <li>
                    <a href="index.html"
                        class=" py-2 px-3 md:p-0 text-black bg-white rounded md:bg-transparent md:text-blue-700
                        aria-current="page>Beranda</a>
                </li>
                <li>
                    <a href="Paketwisata.html"
                        class=" py-5 px-6 md:p-0 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 ">Paket Menginap</a>
                </li>
                <li>
                    <a href="pemesanan.php"
                    class=" py-5 px-6 md:p-0 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700">Booking</a>
                </li>
                <li>
                    <a href="#contact"
                    class=" py-5 px-6 md:p-0 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</header>

<!--Form Pemesanan -->

<div>
    <h2 class="max-w-sm mx-auto text-5xl  font-bold font-family-poppins  text-black">Form Pemesanan</h2>
</div>

<table class="max-w-sm mx-auto">
  <tr>
    <td class="mb-5">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Nama Pemesan</label>
    </td>
    <td class="mb-5">
      <p id="nama_pemesan_output"><?php echo isset($_POST['nama']) ? $_POST['nama'] : ''; ?></p>
    </td>
  </tr>
  <tr>
    
    <td class="mb-5">
      <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Tipe Kamar</label>
    </td>
    <td class="mb-5">
      <p id="nama_paket_output"><?php echo isset($_POST['paket']) ? $_POST['paket'] : ''; ?></p>
    </td>
  </tr>
  <tr>
    <td class="mb-5">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Lama Menginap</label>
    </td>
    <td class="mb-5">
      <p id="jumlah_peserta_output"><?php echo isset($_POST['peserta']) ? $_POST['peserta'] : ''; ?></p>
    </td>
  </tr>
  <tr>
    <td class="mb-5">
      <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Nomor Telepon</label>
    </td>
    <td class="mb-5">
      <p id="nomor_hp_output"><?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?></p>
    </td>
  </tr>
  <tr>
    <td class="mb-5">
      <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Pemesanan</label>
    </td>
    <td class="mb-5">
      <p id="tanggal_output"><?php echo isset($_POST['tanggal']) ? $_POST['tanggal'] : ''; ?></p>
    </td>
  </tr>
  <tr>
    <td class="mb-5">
      <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Pemesanan</label>
    </td>
    <td class="mb-5">
      <p id="tanggal_output"><?php echo isset($_POST['tanggal']) ? $_POST['tanggal'] : ''; ?></p>
    </td>
  </tr>

</table>

  <button type="submit" value="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Daftar</button>
</form>



    
</body>
</html>