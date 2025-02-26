<!-- bagian Pengeluaran Section -->
<!-- Riwayat Pengeluaran Section -->
<div class="mt-8 bg-white rounded-lg shadow">
    <div class="p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-medium text-gray-900">Riwayat Pengeluaran</h2>
            <button class="!rounded-button bg-green-600 text-white px-4 py-2 hover:bg-green-700"
                onclick="exportTableToExcel('pengeluaran-table', 'kas_kelas_pengeluaran')">
                <i class="fas fa-file-excel mr-2"></i>Export Excel
            </button>
        </div>
        <div class="flex flex-col md:flex-row gap-4 mb-4">
            <div class="flex-1">
                <input type="text" placeholder="Cari keterangan..."
                    class="w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom" />
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 table-auto" id="pengeluaran-table">
                <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Pengeluaran</th>
                        <th class="px-6 py-3 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Keterangan</th>
                        <th class="px-6 py-3 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Jumlah Pengeluaran</th>
                        <th class="px-6 py-3 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">1</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2025-01-10</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Pembelian Alat Tulis</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Rp 500.000</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-center">
                            <button class="edit-btn bg-yellow-500 text-white px-3 py-1 rounded mr-2">Edit</button>
                            <button class="delete-btn bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Input Pengeluaran Kas -->
<div class="mt-8 bg-white rounded-lg shadow p-6">
    <h2 class="text-lg font-medium text-gray-900 mb-4">Input Pengeluaran Kas</h2>
    <form>
        <div class="mb-4">
            <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal Pengeluaran</label>
            <input type="date" id="tanggal" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom" required />
        </div>
        <div class="mb-4">
            <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah Pengeluaran</label>
            <input type="number" id="jumlah" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom" placeholder="Masukkan jumlah pengeluaran" required />
        </div>
        <div class="mb-4">
            <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
            <input type="text" id="keterangan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-custom focus:ring-custom" placeholder="Masukkan keterangan pengeluaran" required />
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
        </div>
    </form>
</div>

<!-- Modal Edit Pengeluaran -->
<div id="editModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-lg font-semibold mb-4">Edit Pengeluaran</h2>
        <label class="block text-sm font-medium text-gray-700">Tanggal Pengeluaran</label>
        <input type="date" id="editTanggal" class="w-full mt-1 mb-3 p-2 border rounded">
        <label class="block text-sm font-medium text-gray-700">Keterangan</label>
        <input type="text" id="editKeterangan" class="w-full mt-1 mb-3 p-2 border rounded" placeholder="Masukkan keterangan">
        <label class="block text-sm font-medium text-gray-700">Jumlah Pengeluaran</label>
        <input type="number" id="editJumlah" class="w-full mt-1 mb-3 p-2 border rounded" placeholder="Masukkan jumlah">
        <div class="flex justify-end gap-2">
            <button id="cancelEdit" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</button>
            <button id="saveEdit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
        </div>
    </div>
</div>

<!-- Modal Confirm Delete -->
<div id="confirmDeleteModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <h2 class="text-lg font-semibold mb-4">Hapus Pengeluaran</h2>
        <p>Apakah Anda yakin ingin menghapus data ini?</p>
        <div class="flex justify-end gap-2 mt-4">
            <button id="cancelDelete" class="bg-gray-500 text-white px-4 py-2 rounded">Batal</button>
            <button id="confirmDelete" class="bg-red-600 text-white px-4 py-2 rounded">Hapus</button>
        </div>
    </div>
</div>

<!-- Modal Notification -->
<div id="notificationModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
        <div class="flex items-center mb-4">
            <div id="notificationIcon"></div>
            <p id="notificationMessage" class="ml-4"></p>
        </div>
        <div class="flex justify-end">
            <button id="okNotification" class="bg-blue-600 text-white px-4 py-2 rounded">OK</button>
        </div>
    </div>
</div>

<script>
    const themeToggle = document.getElementById("theme-toggle");
    const darkIcon = document.getElementById("dark-icon");
    const lightIcon = document.getElementById("light-icon");
    themeToggle.addEventListener("click", () => {
        document.documentElement.classList.toggle("dark");
        darkIcon.classList.toggle("hidden");
        lightIcon.classList.toggle("hidden");
    });

    function exportTableToExcel(tableID, filename) {
        let table = document.getElementById(tableID);
        let rows = table.rows;
        let csv = [];
        for (let i = 0; i < rows.length; i++) {
            let row = rows[i];
            let cols = row.querySelectorAll("td, th");
            let csvRow = [];
            for (let j = 0; j < cols.length; j++) {
                csvRow.push(cols[j].innerText);
            }
            csv.push(csvRow.join(","));
        }
        let csvFile = new Blob([csv.join("\n")], { type: "text/csv" });
        let downloadLink = document.createElement("a");
        downloadLink.download = filename + ".csv";
        downloadLink.href = URL.createObjectURL(csvFile);
        downloadLink.click();
    }

    document.addEventListener("DOMContentLoaded", function () {
        const confirmDeleteModal = document.getElementById("confirmDeleteModal");
        const notificationModal = document.getElementById("notificationModal");
        const notificationIcon = document.getElementById("notificationIcon");
        const notificationMessage = document.getElementById("notificationMessage");
        const okNotification = document.getElementById("okNotification");
        let deleteTargetRow = null;

        document.querySelectorAll(".delete-btn").forEach(button => {
            button.addEventListener("click", function (event) {
                event.preventDefault();
                deleteTargetRow = this.closest("tr");
                confirmDeleteModal.classList.remove("hidden");
            });
        });

        document.getElementById("confirmDelete").addEventListener("click", function () {
            // Simulate successful deletion
            confirmDeleteModal.classList.add("hidden");
            notificationIcon.innerHTML = '<i class="fas fa-check-circle text-green-500 text-3xl"></i>';
            notificationMessage.textContent = "Data berhasil dihapus!";
            notificationModal.classList.remove("hidden");
            deleteTargetRow.remove(); // Remove row from table

            // Optionally, send a request to the server to delete data here
        });

        document.getElementById("cancelDelete").addEventListener("click", function () {
            confirmDeleteModal.classList.add("hidden");
        });

        okNotification.addEventListener("click", function () {
            notificationModal.classList.add("hidden");
        });

        const editModal = document.getElementById("editModal");
        const editTanggal = document.getElementById("editTanggal");
        const editKeterangan = document.getElementById("editKeterangan");
        const editJumlah = document.getElementById("editJumlah");
        const cancelEdit = document.getElementById("cancelEdit");
        const saveEdit = document.getElementById("saveEdit");

        document.querySelectorAll(".edit-btn").forEach(button => {
            button.addEventListener("click", function () {
                editModal.classList.remove("hidden");
                // Populate modal with current data
                const row = this.closest("tr");
                editTanggal.value = row.cells[1].innerText;
                editKeterangan.value = row.cells[2].innerText;
                editJumlah.value = row.cells[3].innerText.replace("Rp ", "").replace(".", "");
            });
        });

        cancelEdit.addEventListener("click", function () {
            editModal.classList.add("hidden");
        });

        saveEdit.addEventListener("click", function () {
            alert(`Data berhasil diperbarui:\nTanggal: ${editTanggal.value}\nKeterangan: ${editKeterangan.value}\nJumlah: Rp ${editJumlah.value}`);
            editModal.classList.add("hidden");
        });
    });
</script>