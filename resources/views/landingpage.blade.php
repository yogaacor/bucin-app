<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grid Layout</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    body {
      margin: 1em;
      background: #f0f0f0;
      display: flex;
      gap: 1rem;
      flex-wrap: wrap;
      align-items: flex-start;
    }

    .card {
      background: #fff;
      border-radius: 0.5rem;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
      overflow: hidden;
    }

    .card img {
      width: 100%;
      height: auto;
      border-radius: 0.5rem 0.5rem 0 0;
    }

    .card-content {
      padding: 1rem;
    }

    .checkbox-group {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-top: 1rem;
    }

    .checkbox-group label {
      display: flex;
      align-items: center;
    }

    .checkbox-group input[type="checkbox"] {
      margin-right: 0.5rem;
    }
  </style>
</head>
<body class="bg-green-100 h-screen flex justify-center items-center">

  <div class="container mx-auto px-4 py-8">

    <!-- Bagian Utama -->
    <div class="p-16 mb-12 text-center">
      <h1 class="text-4xl font-bold mb-4">Alhamdulillah mau</h1>
      <p class="text-xl">Berikut list destinasi main besokk di solo</p>
    </div>

    <!-- Grid 3x3 -->
    <div class="grid grid-cols-3 gap-4">
      <!-- Card 1 -->
      <div class="bg-white shadow-lg">
        <img src="https://hypeabis.id/assets/content/20230605164026000000IMG20230604140501.jpg" alt="Foto 1">
        <div class="card-content">
          <h2 class="font-semibold text-2xl mb-6">Lokananta</h2>
          <h2 class="mb-2 text-xl">Keterangan :</h2>
          <p class="text-sm">CQVW+49P, Kerten, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57143</p>
          <p>Waktu kunjungan :</p>
            <p>- sesi 1 : 10:00 WIB</p>
            <p>- sesi 2 : 12:00 WIB</p>
            <p>- sesi 3 : 14:00 WIB</p>
            <p>- sesi 4 : 16:00 WIB</p>
            <p>- sesi 5 : 18:00 WIB</p>
          
          <div class="checkbox-group">
            <label for="ceklist1">
              <input type="checkbox" id="ceklist1">
              <span>Dikunjungi</span>
            </label>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white shadow-lg">
        <img src="https://asset.kompas.com/crops/9eygr3_gPeW8uBzz4Q0yR3fMK1Q=/0x0:750x500/750x500/data/photo/2022/01/31/61f774aaf07af.jpeg" alt="Foto 1">
        <div class="card-content">
          <h2 class="font-semibold text-2xl mb-6">Tumurun Museum</h2>
          <h2 class="mb-2 text-xl">Keterangan :</h2>
          <p class="text-sm">Jl. Kebangkitan Nasional No.2, RW.4, Sriwedari, Kec. Laweyan, Kota Surakarta, Jawa Tengah 57141</p>
          <p>Waktu kunjungan :</p>
          <p>Selasa - Minggu</p>
          <p>- 10.00 - 12.00 WIB</p>
          <p>- 13.00 - 15.00 WIB</p>
          <p></p>
          <p>Harga tiket</p>
          <p>Rp.25.000</p>
          <div class="checkbox-group">
            <label for="ceklist1">
              <input type="checkbox" id="ceklist1">
              <span>Dikunjungi</span>
            </label>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white shadow-lg">
        <img src="https://lokasiterdekat.com/wp-content/uploads/2023/05/Rental-Playstation-Terdekat.jpg" alt="Foto 1">
        <div class="card-content">
          <h2 class="font-semibold text-2xl mb-6">8bits gaming </h2>
          <h2 class="mb-2 text-xl">Keterangan :</h2>
          <p class="text-sm">Jl. Yosodipuro No.133, Mangkubumen, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57139</p>
          <h1>Price list</h1>
          <h1>PS 4</h1>
          <p>- 1 jam : Rp.12.000</p>
          <p>- 3 jam : Rp.33.000</p>
          <p>- 5 jam : Rp.55.000</p>
          <p>- 7 jam : Rp.78.000</p>
          <h1>PS 5</h1>
          <p>- 1 jam : Rp.20.000</p>
          <p>- 3 jam : Rp.55.000</p>
          <p>- 5 jam : Rp.90.000</p>
          <p>- 7 jam : Rp.120.000</p>
          <div class="checkbox-group">
            <label for="ceklist1">
              <input type="checkbox" id="ceklist1">
              <span>Dikunjungi</span>
            </label>
          </div>
        </div>
      </div>
</body>
</html>
