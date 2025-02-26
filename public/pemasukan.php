<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Pengeluaran
  </title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100 font-sans">
  <div class="flex">
   <!-- Sidebar -->
   <div class="w-64 bg-gray-200 h-screen p-4 flex flex-col justify-between sticky top-0">
    <div>
     <div class="flex items-center mb-6">
      <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white">
       G
      </div>
      <span class="ml-3 text-lg font-semibold">
       Kas Kelas 11 PPLG 1
      </span>
     </div>
     <nav class="space-y-2">
      <a class="flex items-center p-2 text-gray-900 bg-white rounded-md" href="dashboard.php">
       <i class="fas fa-tachometer-alt w-5 h-5"></i>
       <span class="ml-3">Dashboard</span>
      </a>
      <a class="flex items-center p-2 text-gray-900 bg-blue-100 rounded-md" href="pemasukan.php">
       <i class="fas fa-wallet w-5 h-5"></i>
       <span class="ml-3">Pemasukan</span>
      </a>
      <a class="flex items-center p-2 text-gray-900 bg-white rounded-md" href="pengeluaran.php">
       <i class="fas fa-money-bill-wave w-5 h-5"></i>
       <span class="ml-3">Pengeluaran</span>
      </a>
      <a class="flex items-center p-2 text-gray-900 bg-white rounded-md" href="#">
       <i class="fas fa-exchange-alt w-5 h-5"></i>
       <span class="ml-3">Transaksi</span>
      </a>
     </nav>
    </div>
    <div class="mt-6">
     <a class="flex items-center p-2 text-gray-900 bg-white rounded-md" href="#">
      <i class="fas fa-user w-5 h-5"></i>
      <span class="ml-3">Admin</span>
     </a>
     <a class="flex items-center p-2 text-gray-900 bg-white rounded-md" href="#">
      <i class="fas fa-sign-out-alt w-5 h-5"></i>
      <span class="ml-3">Logout</span>
     </a>
    </div>
   </div>

   <!-- Main Content -->
   <div class="flex-1 p-6">
    <div class="flex justify-between items-center mb-6">
     <input class="border rounded-md p-2 w-1/3" placeholder="Search" type="text"/>
     <div class="flex items-center">
      <img alt="User Avatar" class="rounded-full mr-2" height="40" src="https://storage.googleapis.com/a1aa/image/Bik-LGFNiJhD1gtwfjYzx2wu84QE-gkFNFd3hb68uHQ.jpg" width="40"/>
      <span class="mr-2">Username</span>
      <i class="fas fa-chevron-down"></i>
     </div>
    </div>
    <h1 class="text-2xl font-semibold mb-4">Pengeluaran</h1>
    <button class="bg-blue-600 text-white px-4 py-2 rounded-md mb-4">TAMBAH TRANSAKSI</button>
    <div class="bg-white p-4 rounded-md shadow-md">
     <table class="w-full text-left border-collapse">
      <thead>
       <tr>
        <th class="border-b p-2">No</th>
        <th class="border-b p-2">Nama</th>
        <th class="border-b p-2">Bulan</th>
        <th class="border-b p-2">Tahun</th>
        <th class="border-b p-2">Status</th>
        <th class="border-b p-2">Aksi</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td class="border-b p-2">1</td>
        <td class="border-b p-2">Ridwan Gaming</td>
        <td class="border-b p-2">January</td>
        <td class="border-b p-2">2025</td>
        <td class="border-b p-2">Sudah Di Bayar</td>
        <td class="border-b p-2">
        <button class="bg-green-500 text-white px-4 py-1 rounded-md">Selesai</button>
        </td>
       </tr>
       <!-- Other rows here -->
      </tbody>
     </table>
     <div class="flex justify-between items-center mt-4">
      <span>Showing 1 to 2 of 2 entries</span>
      <div>
       <button class="bg-gray-300 text-gray-700 px-2 py-1 rounded-md mr-2">Previous</button>
       <button class="bg-blue-600 text-white px-2 py-1 rounded-md">Next</button>
      </div>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>
