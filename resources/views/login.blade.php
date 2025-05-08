<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - SMA NEGERI 1 BATAM</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-cover bg-center px-4 sm:px-0" style="background-image: url('images/gambar4.jpg')">

  <section class="bg-white/80 p-6 sm:p-8 rounded-[40px] shadow-lg w-full max-w-xs sm:max-w-md md:max-w-lg text-center">
    <h2 class="text-xl sm:text-2xl font-bold mb-6">SMA NEGERI 1 BATAM</h2>
    
    <form class="flex flex-col" method="POST" action="{{route('login')}}">
      <label for="userId" class="text-left font-semibold mt-3 text-sm sm:text-base">Username*</label>
      <input type="text" id="userId" name="username" class="mt-1 p-2 border-2 border-black rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">

      <label for="password" class="text-left font-semibold mt-4 text-sm sm:text-base">Password*</label>
      <input type="password" id="password" name="password" class="mt-1 p-2 border-2 border-black rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">

      <button type="submit" class="mt-6 py-2 border-2 border-black rounded-full font-bold hover:bg-black hover:text-white transition">login</button>
    </form>
    <p class="text-center mt-3">
    Belum punya akun? 
    <a href="#" onclick="document.getElementById('registerModal').classList.remove('hidden')" class="text-blue-600 hover:underline">Registrasi</a>
</p>
  </section>
  <!-- Modal -->
<div id="registerModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-xl shadow-lg w-full max-w-md">
        <form method="POST" action="" class="p-6">
            @csrf
            <div class="flex justify-between items-center mb-4">
                <h5 class="text-lg font-semibold">Registrasi Akun</h5>
                <button type="button" onclick="document.getElementById('registerModal').classList.add('hidden')" class="text-gray-400 hover:text-gray-700 text-xl">&times;</button>
            </div>

            <div class="mb-4">
                <label for="id_user" class="block text-sm font-medium text-gray-700">ID User</label>
                <input type="text" id="userId" name="id_user" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
                <select id="role" name="role" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                    <option value="staff">Staff</option>
                    <option value="siswa">Siswa</option>
                    <option value="siswab">Siswa B</option>
                </select>
            </div>

            <div class="flex justify-end gap-2 mt-6">
                <button type="button" onclick="document.getElementById('registerModal').classList.add('hidden')" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded-md">Tutup</button>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">Registrasi</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>