<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Staff</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex min-h-screen bg-gray-100 font-sans">

  <!-- Sidebar -->
  <aside id="sidebar" class="w-64 bg-gray-300 p-6 flex flex-col font-bold">
    <h2 class="text-3xl italic mb-10">GoStudents</h2>
    <nav class="flex flex-col gap-6 text-lg">
        <a href="{{ route('DashboardStaf') }}" class="hover:bg-gray-400 p-3 rounded-md">Halaman Utama</a>
        <a href="{{ route('TambahDataStaf') }}" class="hover:bg-gray-400 p-3 rounded-md">Tambah Data Siswa</a>
        <a href="{{ route('AbsenStaf') }}" class="hover:bg-gray-400 p-3 rounded-md">Absen Siswa</a>
        <a href="{{ route('TambahNilaiStaf') }}" class="hover:bg-gray-400 p-3 rounded-md">Tambah Nilai Siswa</a>
        <a href="{{ route('TambahPointStaf') }}" class="hover:bg-gray-400 p-3 rounded-md">Tambah Point Siswa</a>
        <a href="{{ route('IjinKeluarStaf') }}" class="hover:bg-gray-400 p-3 rounded-md">Ijin Keluar Siswa</a>
        <a href="{{ route('DaftarPointStaf') }}" class="hover:bg-gray-400 p-3 rounded-md">Daftar Point</a>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-8">

    <!-- Header -->
    <div class="flex justify-between items-center mb-8">
      <!-- Title -->
      <h1 class="text-3xl font-bold">SMA NEGERI 1 BATAM</h1>

      <!-- Profile + Logout -->
      <div class="flex items-center">
        <!-- Profile icon dengan link ke profilsiswa.html -->
        <a href="{{ route('ProfilStaf') }}" class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center mr-4 hover:ring-2 hover:ring-blue-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
          </svg>
        </a>
        <!-- Tombol Logout -->
        <button onclick="logout()" class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600 transition">
          Logout
        </button>
        </button>
      </div>
    </div>

    <!-- Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
      <div class="bg-white p-6 rounded-2xl text-center shadow-md font-bold">
        Jumlah Siswa<br><span class="text-2xl">3</span>
      </div>
      <div class="bg-white p-6 rounded-2xl text-center shadow-md font-bold">
        Jumlah Kelas<br><span class="text-2xl">2</span>
      </div>
      <div class="bg-white p-6 rounded-2xl text-center shadow-md font-bold">
        Jumlah Mata Pelajaran<br><span class="text-2xl">5</span>
      </div>
    </div>

    <!-- Student List -->
    <div class="bg-white p-6 rounded-2xl shadow-md">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Lihat Semua Siswa</h2>
        <a href="dataaStaf.html"><button>See all<span class="las la-arrow-right"></a>
        </span></button>
      </div>
      <table class="w-full text-left font-bold">
        <tbody>
          <tr class="border-b">
            <td class="py-3">
              <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
                </svg>
              </div>
            </td>
            <td class="py-3">Ramadhani</td>
            <td class="py-3">123456</td>
            <td class="py-3">12 A</td>
          </tr>
          <tr class="border-b">
            <td class="py-3">
              <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
                </svg>
              </div>
            </td>
            <td class="py-3">Gilly</td>
            <td class="py-3">123123</td>
            <td class="py-3">12 B</td>
          </tr>
          <tr>
            <td class="py-3">
              <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-700" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z" />
                </svg>
              </div>
            </td>
            <td class="py-3">Putra</td>
            <td class="py-3">654321</td>
            <td class="py-3">12 A</td>
          </tr>
        </tbody>
      </table>
    </div>

  </main>
    <!-- Script logout -->
  <script>
    function logout() {
      if (confirm("Yakin ingin logout?")) {
        window.location.href = "{{ route('Login') }}"; // arahkan ke halaman login
      }
    }
  </script>
</body>
</html>
