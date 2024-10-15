<!DOCTYPE html>
<html lang="id">

<head>
    <title>SB Admin 2 - Dasbor</title>
    @include('template.head')
</head>

<body id="page-top">

    <!-- Pembungkus Halaman -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('template.left-sidebar')
        <!-- Akhir dari Sidebar -->

        <!-- Pembungkus Konten -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Konten Utama -->
            <div id="content">

                <!-- Topbar -->
                @include('template.navbar')
                <!-- Akhir dari Topbar -->

                <!-- Awal Konten Halaman -->
                <div class="container-fluid">

                    <!-- Judul Halaman -->
                    <div class="page-heading">
                        <h3 class="h3 mb-4 text-gray-800">Dashboard</h3>
                    </div>

                    <!-- Konten Halaman -->
                    <div class="page-content">
                        <p>Selamat datang di dasbor Anda!</p>
                        <!-- Tambahkan konten lainnya di sini sesuai kebutuhan -->
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- Akhir dari Konten Utama -->

            <!-- Footer -->
            @include('template.footer')
            <!-- Akhir dari Footer -->

        </div>
        <!-- Akhir dari Pembungkus Konten -->

    </div>
    <!-- Akhir dari Pembungkus Halaman -->

    <!-- Tombol Scroll ke Atas -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Modal Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Siap untuk Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Inti Bootstrap -->
    @include('template.script')

</body>

</html>
