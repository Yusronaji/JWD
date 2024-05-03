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
    <h2 class="max-w-lg mx-auto  text-5xl mt-[40px] font-bold font-family-poppins text-center  leading-normal text-black">Reservasi</h2>
</div>

<form action="process.php" method="POST" class="max-w-sm mx-auto">
  <div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Nama Pemesan</label>
    <input type="text" name="nama" id="nama_pemesan" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Nama Pemesan" required />
  </div>

  
  <div class="mb-5">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
    <select name="jenis_kelamin" id="jenis_kelamin" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
    <option value="">Pilih Gender</option>
    <option value="L">Laki-Laki</option>
    <option value="P">Perempuan</option>
</select>

</div>
<div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Nomor Identitas</label>
    <input type="number" name="ktp" id="ktp" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="KTP/Paspor" required />
  </div>

  <div class="mb-5">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Tipe Kamar</label>
    <select name="paket" id="nama_paket" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" onchange="updateHarga()" required>
        <option value="">Pilih Paket</option>
        <option value="500000">Standar</option>
        <option value="800000">Deluxe</option>
        <option value="750000">Family</option>
        <option value="1000000">VIP</option>
    </select>
</div>
  <div class="mb-5">
    <input type="number" name="total_bayar" id="harga" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Harga Paket" value="" readonly/>
</div>

  <div class="mb-5">
    <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Pemesanan</label>
    <input type="Date" name="tanggal" id="tanggal" min="<?php echo date('Y-m-d'); ?>" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
  </div>



  <div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Nomor Telepon</label>
    <input type="number" name="phone" id="nomor_hp" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="masukan nomer" required />
  </div>

  <div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Durasi Menginap</label>
    <input type="number" name="durasi_menginap" id="durasi_menginap" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="0"/>
  </div>
  

  <div class="mb-5">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Paket Breakfest</label>
    <select name="breakfest" id="default-checkbox" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" onchange="updateHarga()" required>
        <option value="">Pilih Paket</option>
        <option value="80000">Iya</option>
        <option value="0">Tidak</option>
    </select>
</div>
  

  
  <div class="mb-5">
    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Total Harga</label>
    <input type="number" name="total_bayar" id="total_harga" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="" readonly/>
  </div>

  <button type="submit" value="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Daftar</button>
</form>



<script>
    // Ambil elemen select
    var input1 = document.getElementById('nama_paket');
    var input2 = document.getElementById('durasi_menginap');
    var input3 = document.getElementById('default-checkbox');
    

    // Tambahkan event listener untuk setiap select
    input1.addEventListener('input', calculateTotal);
    input2.addEventListener('input', calculateTotal);
    input3.addEventListener('input', calculateTotal);

    function calculateTotal() {
        // Ambil nilai dari setiap input
        var val1 = parseFloat(input1.value) || 0;
        var val2 = parseFloat(input2.value) || 0;
        var val3 = parseFloat(input3.value) || 0;

        // Hitung total
        
        var paket = val1 * val2; // Misalkan harga per anggota adalah $50
        var tambahan = val2 * val3;
        var total = paket + tambahan;
       

        // Jika lama menginap lebih dari 3 hari, diskon 10%
        if (val2 > 3) {
            paket *= 0.9;
        }

        
        

        // Tampilkan total
        document.getElementById('total_harga').value = total;
    }

    function updateHarga() {
        var select = document.getElementById("nama_paket");
        var inputHarga = document.getElementById("harga");
        var selectedValue = select.value;
        inputHarga.value = selectedValue;
    }
</script>

</body>
</html>