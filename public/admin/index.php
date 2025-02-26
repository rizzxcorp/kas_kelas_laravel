<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin Keuangan</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet">
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1"></script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000"
        data-border-radius="small"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>
</head>

<body class="bg-gray-50 font-sans">
   <?php require_once('../navbar.php'); ?>
   
    <div class="min-h-screen flex">
        <main class="flex-1">
            <header class="bg-white border-b border-gray-200">
                <div class="flex items-center justify-between px-8 py-4">
                    <h1 class="text-2xl font-semibold">Dashboard Admin Keuangan</h1>
                    <div class="flex items-center">
                        <button class="flex items-center text-gray-600"> <img
                                src="../img/logo.jpg"
                                class="w-10 h-10 rounded-full"> <span class="ml-2">Admin</span>
                            <i class="fas fa-chevron-down ml-2 text-sm"></i>
                        </button>
                    </div>
                </div>
            </header>

            <div class="p-8">
                <div class="grid grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <div class="flex items-center justify-between">
                            <h3 class="text-gray-500">Total Kas Masuk</h3>
                            <i class="fas fa-arrow-up text-green-500"></i>
                        </div>
                        <p class="text-2xl font-semibold mt-2">Rp 15.250.000</p>
                        <p class="text-sm text-gray-500 mt-2">+12% dari bulan lalu</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <div class="flex items-center justify-between">
                            <h3 class="text-gray-500">Total Kas Keluar</h3>
                            <i class="fas fa-arrow-down text-red-500"></i>
                        </div>
                        <p class="text-2xl font-semibold mt-2">Rp 8.750.000</p>
                        <p class="text-sm text-gray-500 mt-2">-5% dari bulan lalu</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <div class="flex items-center justify-between">
                            <h3 class="text-gray-500">Saldo Saat Ini</h3>
                            <i class="fas fa-wallet text-custom"></i>
                        </div>
                        <p class="text-2xl font-semibold mt-2">Rp 6.500.000</p>
                        <p class="text-sm text-gray-500 mt-2">Update terakhir: Hari ini</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <div class="flex items-center justify-between">
                            <h3 class="text-gray-500">Total Anggota</h3>
                            <i class="fas fa-users text-custom"></i>
                        </div>
                        <p class="text-2xl font-semibold mt-2">125</p>
                        <p class="text-sm text-gray-500 mt-2">+3 anggota baru</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6 mb-8">
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <h3 class="text-lg font-semibold mb-4">Grafik Keuangan</h3>
                        <div id="chart" class="h-64"></div>
                    </div>
                    <div class="bg-white rounded-lg p-6 shadow-sm">
                        <h3 class="text-lg font-semibold mb-4">Pengaturan Harga Kas</h3>
                        <form>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nominal Uang Kas</label>
                                <div class="relative">
                                    <span class="absolute left-3 top-2.5 text-gray-500">Rp</span>
                                    <input type="text"
                                        class="pl-9 w-full !rounded-button border-gray-300 focus:border-custom focus:ring-custom"
                                        value="50.000">
                                </div>
                            </div>
                            <button type="submit"
                                class="w-full bg-custom text-white py-2 !rounded-button hover:bg-blue-700">Simpan
                                Perubahan</button>
                        </form>
                        <div class="mt-4">
                            <h4 class="text-sm font-medium text-gray-700 mb-2">Riwayat Perubahan</h4>
                            <div class="space-y-2">
                                <div class="text-sm text-gray-600">
                                    <p>20 Feb 2024 - Rp 50.000</p>
                                    <p>15 Jan 2024 - Rp 45.000</p>
                                    <p>1 Dec 2023 - Rp 40.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-sm">
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold">Transaksi Terbaru</h3>
                            <div class="space-x-2"> <button
                                    class="px-4 py-2 bg-custom text-white !rounded-button hover:bg-blue-700">
                                    <i class="fas fa-plus mr-2"></i>Tambah Transaksi
                                </button>
                                <button
                                    class="px-4 py-2 border border-gray-300 text-gray-700 !rounded-button hover:bg-gray-50">
                                    <i class="fas fa-download mr-2"></i>Export
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tanggal</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jenis</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nominal</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Keterangan</th>
                                    <th
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">25 Feb 2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Kas Masuk</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp 250.000</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Pembayaran Kas Bulanan
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Sukses</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">24 Feb 2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Kas Keluar</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp 100.000</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Pembelian ATK</td>
                                    <td class="px-6 py-4 whitespace-nowrap"> <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Sukses</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">23 Feb 2024</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Kas Masuk</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp 150.000</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Pembayaran Kas Bulanan
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script>
        const chart = echarts.init(document.getElementById('chart'));
        const option = {
            animation: false,
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data: ['Pemasukan', 'Pengeluaran']
            },
            xAxis: {
                type: 'category',
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun']
            },
            yAxis: {
                type: 'value'
            },
            series: [
                {
                    name: 'Pemasukan',
                    type: 'line',
                    data: [2500000, 3200000, 2800000, 3500000, 3800000, 3200000],
                    itemStyle: {
                        color: '#2563eb'
                    }
                },
                {
                    name: 'Pengeluaran',
                    type: 'line',
                    data: [1800000, 2100000, 1900000, 2300000, 2600000, 2100000],
                    itemStyle: {
                        color: '#ef4444'
                    }
                }
            ]
        };
        chart.setOption(option);
        window.addEventListener('resize', () => chart.resize());
    </script>
</body>

</html>