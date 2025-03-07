
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
<div class="flex">
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
            <a class="flex items-center p-2 text-gray-900 bg-blue-100 rounded-md" href="dashboard.php">
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
            <a class="flex items-center p-2 text-gray-900 bg-white rounded-md" href="transaksi.php">
                <i class="fas fa-exchange-alt w-5 h-5"></i>
                <span class="ml-3">Transaksi</span>
            </a>
        </nav>
    </div>
    <div class="mt-6">
        <a class="flex items-center p-2 text-gray-900 bg-white rounded-md" href="admin.php">
            <i class="fas fa-user-shield w-5 h-5"></i>
            <span class="ml-3">Admin</span>
        </a>
        <a class="flex items-center p-2 text-gray-900 bg-white rounded-md" href="logout.php">
            <i class="fas fa-sign-out-alt w-5 h-5"></i>
            <span class="ml-3">Logout</span>
        </a>
    </div>
</div>

    <div class="flex-1 ml-64">
        <div class="min-h-screen flex flex-col">
            <!-- Top Bar -->
            <div class="flex items-center justify-between p-4 bg-white shadow">
                <input class="w-1/3 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Search" type="text"/>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <img alt="User avatar" class="w-10 h-10 rounded-full" height="40" src="https://placehold.co/40x40" width="40"/>
                        <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></span>
                    </div>
                    <span>Username</span>
                    <i class="fas fa-bell text-gray-500"></i>
                </div>
            </div>
            <!-- Main Content -->
            <div class="flex-1 p-6">
                <h1 class="text-2xl font-semibold mb-6">Dashboard</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Saldo Kas -->
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h2 class="text-lg font-semibold mb-2">Saldo Kas</h2>
                        <p class="text-2xl font-bold text-green-500">IDR 150.000</p>
                        <p class="text-sm text-green-500">↑ 2.1% vs last week</p>
                        <p class="text-sm text-gray-500 mt-4">Sales from 1-12 Dec, 2020</p>
                        <div class="mt-4">
                            <canvas id="barChart"></canvas>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 bg-blue-500 rounded-full"></span>
                                <span class="text-sm text-gray-500">Last 6 days</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
                                <span class="text-sm text-gray-500">Last Week</span>
                            </div>
                        </div>
                        <button class="mt-4 px-4 py-2 bg-blue-100 text-blue-500 rounded-lg">View Report</button>
                    </div>
                    <!-- Total -->
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h2 class="text-lg font-semibold mb-2">total</h2>
                        <p class="text-sm text-gray-500">From 1-9 Jan, 2025</p>
                        <div class="mt-4 relative">
                            <canvas id="doughnutChart"></canvas>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 bg-blue-500 rounded-full"></span>
                                <span class="text-sm text-gray-500">pemasukan</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
                                <span class="text-sm text-gray-500">pengeluaran</span>
                            </div>
                        </div>
                        <button class="mt-4 px-4 py-2 bg-blue-100 text-blue-500 rounded-lg">View Report</button>
                    </div>
                    <!-- Target Bulanan -->
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h2 class="text-lg font-semibold mb-2">Target bulanan</h2>
                        <p class="text-sm text-gray-500">Adipisicing elit, sed do eiusmod tempor</p>
                        <div class="mt-4 space-y-4">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center space-x-4">
                                    <img alt="January image" class="w-10 h-10 rounded-full" height="40" src="https://placehold.co/40x40" width="40"/>
                                    <span>January</span>
                                </div>
                                <span>IDR 45.000</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center space-x-4">
                                    <img alt="February image" class="w-10 h-10 rounded-full" height="40" src="https://placehold.co/40x40" width="40"/>
                                    <span>February</span>
                                </div>
                                <span>IDR 75.000</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center space-x-4">
                                    <img alt="March image" class="w-10 h-10 rounded-full" height="40" src="https://placehold.co/40x40" width="40"/>
                                    <span>March</span>
                                </div>
                                <span>IDR 45.000</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center space-x-4">
                                    <img alt="April image" class="w-10 h-10 rounded-full" height="40" src="https://placehold.co/40x40" width="40"/>
                                    <span>April</span>
                                </div>
                                <span>IDR 45.000</span>
                            </div>
                        </div>
                    </div>
                    <!-- Transaksi -->
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h2 class="text-lg font-semibold mb-2">Transaksi</h2>
                        <p class="text-sm text-gray-500">Adipisicing elit, sed do eiusmod tempor</p>
                        <div class="mt-4 space-y-4">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center space-x-4">
                                    <img alt="Abdul image" class="w-10 h-10 rounded-full" height="40" src="https://placehold.co/40x40" width="40"/>
                                    <span>Abdul</span>
                                </div>
                                <span>IDR 45.000</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center space-x-4">
                                    <img alt="Bagoes image" class="w-10 h-10 rounded-full" height="40" src="https://placehold.co/40x40" width="40"/>
                                    <span>Bagoes</span>
                                </div>
                                <span>IDR 75.000</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center space-x-4">
                                    <img alt="Rizki image" class="w-10 h-10 rounded-full" height="40" src="https://placehold.co/40x40" width="40"/>
                                    <span>Rizki</span>
                                </div>
                                <span>IDR 45.000</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center space-x-4">
                                    <img alt="Keyno image" class="w-10 h-10 rounded-full" height="40" src="https://placehold.co/40x40" width="40"/>
                                    <span>Keyno</span>
                                </div>
                                <span>IDR 45.000</span>
                            </div>
                        </div>
                    </div>
                    <!-- Pengeluaran -->
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h2 class="text-lg font-semibold mb-2">pengeluaran</h2>
                        <p class="text-2xl font-bold text-red-500">2.568</p>
                        <p class="text-sm text-red-500">↓ 2.1% vs last week</p>
                        <p class="text-sm text-gray-500 mt-4">Sales from 1-6 Dec, 2020</p>
                        <div class="mt-4">
                            <canvas id="lineChart"></canvas>
                        </div>
                        <div class="flex justify-between items-center mt-4">
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 bg-blue-500 rounded-full"></span>
                                <span class="text-sm text-gray-500">Last 6 days</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 bg-gray-300 rounded-full"></span>
                                <span class="text-sm text-gray-500">Last Week</span>
                            </div>
                        </div>
                        <button class="mt-4 px-4 py-2 bg-blue-100 text-blue-500 rounded-lg">View Report</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Bar Chart
    const barCtx = document.getElementById('barChart').getContext('2d');
    const barChart = new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'],
            datasets: [
                {
                    label: 'Last 6 days',
                    data: [12, 19, 3, 5, 2, 3, 10, 15, 7, 8, 6, 9],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Last Week',
                    data: [8, 11, 13, 15, 12, 13, 9, 10, 11, 12, 10, 11],
                    backgroundColor: 'rgba(201, 203, 207, 0.2)',
                    borderColor: 'rgba(201, 203, 207, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Doughnut Chart
    const doughnutCtx = document.getElementById('doughnutChart').getContext('2d');
    const doughnutChart = new Chart(doughnutCtx, {
        type: 'doughnut',
