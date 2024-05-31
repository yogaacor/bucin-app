<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body class="bg-green-100 h-screen flex justify-center items-center">
    <div class="absolute top-0 left-0 right-0 bottom-0 z-0 flex justify-center items-center">
        <!-- Foto pojok kiri atas -->
        <img class="absolute top-20 left-20 w-20 h-20" src="https://i.pinimg.com/originals/df/52/8b/df528bf25dadc0f75d30605be4aad332.png" alt="Loading sabar">
      
        <!-- Foto pojok kanan atas -->
        <img class="absolute top-20 right-20 w-20 h-20" src="https://i.pinimg.com/originals/8d/bc/ba/8dbcba70730652cd6ea03fd852175036.png" alt="Loading sabar">
      
        <!-- Foto pojok kiri bawah -->
        <img class="absolute bottom-20 left-20 w-20 h-20" src="https://i.pinimg.com/originals/df/52/8b/df528bf25dadc0f75d30605be4aad332.png" alt="Loading sabar">
      
        <!-- Foto pojok kanan bawah -->
        <img class="absolute bottom-20 right-20 w-20 h-20" src="https://i.pinimg.com/originals/8d/bc/ba/8dbcba70730652cd6ea03fd852175036.png" alt="Loading sabar">
      </div>
    <div class="bg-yellow-100 p-40 rounded-lg text-center shadow-lg">
        <div class="">
            <h1 class="text-2xl font-bold mb-2">Atas nama</h1>
            <h1 class="text-8xl font-bold mb-4">Diah Fitri Nur Aeni</h1>
        </div>
      <h2 class="text-lg mb-6">Maukah kamu bermain di solo bersama babang gacor</h2>
      <div class="flex justify-center">
        <a href="{{ url('/landing-page') }}">
            <button class="bg-green-500 hover:bg-green-600 text-white text-2xl font-semibold py-4 px-8 rounded" style="position: relative; right:1rem;">Mau</button>
        </a>
      <button id="btn_gamau" onclick="gamau(this)" class="bg-red-500 hover:bg-red-600 text-white text-2xl font-semibold py-4 px-8 rounded" style="position: relative; left:1rem;">Gamau</button>
    </div>
    </div>
    </div>
  </body>
  <script>
    function gamau(id) {
      var mau = document.getElementById("btn_gamau");
      var maxDistance = 200; // Batasan jarak maksimal perpindahan
      var i = Math.floor(Math.random() * (maxDistance * 2)) - maxDistance; // Jarak horizontal acak antara -20 hingga 20
      var j = Math.floor(Math.random() * (maxDistance * 2)) - maxDistance + mau.offsetTop; // Jarak vertikal acak antara -20 hingga 20, ditambah posisi asal tombol
      var mauHeight = mau.offsetHeight; // Tinggi tombol "Mau"
      var gamauHeight = id.offsetHeight; // Tinggi tombol "Gamau"
      var maxHeight = mauHeight - gamauHeight; // Batasan tinggi perpindahan
  
      // Memastikan perpindahan tidak melebihi batas tinggi maksimum atau minimum
      j = Math.min(Math.max(j, 0), maxHeight);
  
      // Menentukan arah perpindahan ke atas atau ke bawah secara acak
      var direction = Math.random() < 0.5 ? -1 : 1;
      j += direction * Math.floor(Math.random() * maxDistance);
  
      id.style.left = i + "px";
      id.style.top = j + "px";
    }
  </script>
</html>
