<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<style>
        .blurred {
            filter: blur(5px);
            pointer-events: none;
        }
</style>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex">
     <!-- Popup -->
     <div id="popup" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white p-6 rounded shadow-lg w-1/3">
            <h2 class="text-lg font-bold mb-4">Tambah Transaksi</h2>
            <form id="transactionForm">
                <input type="text" placeholder="Nama" class="w-full p-2 border mb-2">
                <input type="number" placeholder="Jumlah" class="w-full p-2 border mb-2">
                <select class="w-full p-2 border mb-2">
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                </select>
                <div class="flex justify-end space-x-2">
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
                    <button type="button" id="cancelButton" class="bg-red-500 text-white px-4 py-2 rounded">Batal</button>
                </div>
            </form>
        </div>
    </div>
    
        <!-- Sidebar -->
        <div class="w-64 bg-gray-200 h-screen fixed p-4 flex flex-col justify-between">
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
                    <a class="flex items-center p-2 text-gray-900 bg-white rounded-md" href="pemasukan.php">
                        <i class="fas fa-wallet w-5 h-5"></i>
                        <span class="ml-3">Pemasukan</span>
                    </a>
                    <a class="flex items-center p-2 text-gray-900 bg-white rounded-md" href="pengeluaran.php">
                        <i class="fas fa-money-bill-wave w-5 h-5"></i>
                        <span class="ml-3">Pengeluaran</span>
                    </a>
                    <a class="flex items-center p-2 text-gray-900 bg-blue-100 rounded-md" href="transaksi.php">
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
        <div class="flex-1 p-6 ml-64">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-semibold">Transaksi</h1>
                <div class="flex items-center">
                    <div class="ml-4 flex items-center">
                        <div class="w-10 h-10 bg-yellow-500 rounded-full flex items-center justify-center text-white">U</div>
                        <span class="ml-2">Username</span>
                        <i class="fas fa-chevron-down ml-2"></i>
                    </div>
                </div>
            </div>
         <div id="mainContent" class="transition-all">
        <div class="flex-1" id="content">
            <button id="openPopup" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Transaksi</button>
        </div>
    </div>
            <div class="flex items-center mb-4">
                <select class="p-2 border rounded-md mr-2">
                    <option>Semua Bulan</option>
                </select>
                <select class="p-2 border rounded-md mr-2">
                    <option>Semua Tahun</option>
                </select>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Tampilkan</button>
            </div>
            <table class="min-w-full bg-white border">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border">No</th>
                        <th class="py-2 px-4 border">Nama</th>
                        <th class="py-2 px-4 border">Bulan</th>
                        <th class="py-2 px-4 border">Tahun</th>
                        <th class="py-2 px-4 border">Jumlah</th>
                        <th class="py-2 px-4 border">Status</th>
                        <th class="py-2 px-4 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border">1</td>
                        <td class="py-2 px-4 border">Muhammad Rizky</td>
                        <td class="py-2 px-4 border">Januari</td>
                        <td class="py-2 px-4 border">2025</td>
                        <td class="py-2 px-4 border">10.000</td>
                        <td class="py-2 px-4 border"><span class="bg-green-500 text-white px-2 py-1 rounded-md">LUNAS</span></td>
                        <td class="py-2 px-4 border">
                            <button class="bg-yellow-500 text-white px-2 py-1 rounded-md mr-2">Edit</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded-md">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">2</td>
                        <td class="py-2 px-4 border">Haikal Ramadhan</td>
                        <td class="py-2 px-4 border">Januari</td>
                        <td class="py-2 px-4 border">2025</td>
                        <td class="py-2 px-4 border">50.000</td>
                        <td class="py-2 px-4 border"><span class="bg-green-500 text-white px-2 py-1 rounded-md">LUNAS</span></td>
                        <td class="py-2 px-4 border">
                            <button class="bg-yellow-500 text-white px-2 py-1 rounded-md mr-2">Edit</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded-md">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">3</td>
                        <td class="py-2 px-4 border">Ridwan Prasetyo</td>
                        <td class="py-2 px-4 border">Januari</td>
                        <td class="py-2 px-4 border">2025</td>
                        <td class="py-2 px-4 border">100.000</td>
                        <td class="py-2 px-4 border"><span class="bg-green-500 text-white px-2 py-1 rounded-md">LUNAS</span></td>
                        <td class="py-2 px-4 border">
                            <button class="bg-yellow-500 text-white px-2 py-1 rounded-md mr-2">Edit</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded-md">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">4</td>
                        <td class="py-2 px-4 border">Fakhri Kurnianto</td>
                        <td class="py-2 px-4 border">Januari</td>
                        <td class="py-2 px-4 border">2025</td>
                        <td class="py-2 px-4 border">10.000</td>
                        <td class="py-2 px-4 border"><span class="bg-green-500 text-white px-2 py-1 rounded-md">LUNAS</span></td>
                        <td class="py-2 px-4 border">
                            <button class="bg-yellow-500 text-white px-2 py-1 rounded-md mr-2">Edit</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded-md">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">5</td>
                        <td class="py-2 px-4 border">Alif Sudrajat</td>
                        <td class="py-2 px-4 border">Januari</td>
                        <td class="py-2 px-4 border">2025</td>
                        <td class="py-2 px-4 border">50.000</td>
                        <td class="py-2 px-4 border"><span class="bg-green-500 text-white px-2 py-1 rounded-md">LUNAS</span></td>
                        <td class="py-2 px-4 border">
                            <button class="bg-yellow-500 text-white px-2 py-1 rounded-md mr-2">Edit</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded-md">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                </tbody>
            </table>
            <div class="mt-4 flex justify-between items-center">
                <span>Showing 1 to 2 of 2 entries</span>
                <div class="flex items-center">
                    <button class="px-3 py-1 border rounded-md">Previous</button>
                    <button class="px-3 py-1 border rounded-md bg-blue-500 text-white mx-1">1</button>
                    <button class="px-3 py-1 border rounded-md">Next</button>
                </div>
            </div>
        </div>
    </div>
 
    <div id="notification" class="hidden fixed bottom-4 right-4 bg-green-500 text-white p-4 rounded shadow-lg">
        Transaksi berhasil ditambahkan!
    </div>

    <script>
        const popup = document.getElementById('popup');
        const mainContent = document.getElementById('mainContent');
        const openPopup = document.getElementById('openPopup');
        const cancelButton = document.getElementById('cancelButton');
        const transactionForm = document.getElementById('transactionForm');
        const notification = document.getElementById('notification');

        openPopup.addEventListener('click', function() {
            popup.classList.remove('hidden');
            mainContent.classList.add('blurred');
        });

        cancelButton.addEventListener('click', function() {
            popup.classList.add('hidden');
            mainContent.classList.remove('blurred');
        });

        transactionForm.addEventListener('submit', function(event) {
            event.preventDefault();
            popup.classList.add('hidden');
            mainContent.classList.remove('blurred');
            notification.classList.remove('hidden');
            setTimeout(() => notification.classList.add('hidden'), 3000);
        });
    </script>
</body>
</html>