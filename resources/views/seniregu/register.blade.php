<!DOCTYPE html>
<html>
<head>
    <title>Daftar Seni Regu</title>
    <style>

                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: 'Poppins', sans-serif;
                }

                body {
                    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
                    min-height: 100vh;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    padding: 20px;
                }

                .form-container {
                    background: white;
                    padding: 2.5rem;
                    border-radius: 20px;
                    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
                    width: 100%;
                    max-width: 800px;
                    margin: 2rem auto;
                }

                .form-container h1 {
                    text-align: center;
                    color: #8b4513;
                    margin-bottom: 2rem;
                    font-size: 2rem;
                    font-weight: 600;
                }

                .logoo {
                    display: block;
                    margin: 0 auto 2rem;
                    max-width: 150px;
                    height: auto;
                }

                .alert {
                    padding: 1rem;
                    border-radius: 10px;
                    margin-bottom: 1.5rem;
                    text-align: center;
                }

                .alert-success {
                    background-color: #d4edda;
                    color: #155724;
                    border: 1px solid #c3e6cb;
                }

                .form-group {
                    margin-bottom: 1.5rem;
                }

                label {
                    display: block;
                    margin-bottom: 0.5rem;
                    color: #4a5568;
                    font-weight: 500;
                }

                input[type="text"],
                input[type="tel"],
                input[type="date"] {
                    width: 100%;
                    padding: 0.75rem 1rem;
                    border: 2px solid #e2e8f0;
                    border-radius: 10px;
                    font-size: 1rem;
                    transition: all 0.3s ease;
                    background-color: #f8fafc;
                }

                input[type="text"]:focus,
                input[type="tel"]:focus,
                input[type="date"]:focus {
                    outline: none;
                    border-color: #8b4513;
                    box-shadow: 0 0 0 3px rgba(139, 69, 19, 0.1);
                }

                input[readonly] {
                    background-color: #f1f1f1;
                    cursor: not-allowed;
                }

                .payment-info {
                    display: flex;
                    align-items: center;
                    gap: 1rem;
                    padding: 1rem;
                    background-color: #f8fafc;
                    border-radius: 10px;
                    margin-bottom: 1rem;
                    border: 1px solid #e2e8f0;
                }

                .payment-info img {
                    height: 40px;
                    width: auto;
                }

                .payment-info span {
                    font-size: 1.1rem;
                    color: #4a5568;
                    font-weight: 500;
                }

                input[type="file"] {
                    width: 100%;
                    padding: 0.75rem;
                    background-color: #f8fafc;
                    border: 2px dashed #e2e8f0;
                    border-radius: 10px;
                    cursor: pointer;
                }

                input[type="file"]::-webkit-file-upload-button {
                    background: #8b4513;
                    color: white;
                    padding: 0.5rem 1rem;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    margin-right: 1rem;
                }

                .form-group:last-child {
                    display: flex;
                    gap: 1rem;
                    margin-top: 2rem;
                }

                .daftar-button,
                .back-button {
                    flex: 1;
                    padding: 0.75rem 1.5rem;
                    border: none;
                    border-radius: 10px;
                    font-size: 1rem;
                    font-weight: 500;
                    cursor: pointer;
                    transition: all 0.3s ease;
                }

                .daftar-button {
                    background: #8b4513;
                    color: white;
                }

                .daftar-button:hover {
                    background: #a67a5b;
                    transform: translateY(-2px);
                    box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
                }

                .back-button {
                    background: #64748b;
                    color: white;
                }

                .back-button:hover {
                    background: #94a3b8;
                    transform: translateY(-2px);
                    box-shadow: 0 5px 15px rgba(100, 116, 139, 0.2);
                }

                /* Responsive Design */
                @media (max-width: 768px) {
                    .form-container {
                        padding: 1.5rem;
                    }

                    .form-container h1 {
                        font-size: 1.5rem;
                    }

                    .form-group:last-child {
                        flex-direction: column;
                    }

                    .daftar-button,
                    .back-button {
                        width: 100%;
                    }
                }

                /* Grid Layout for Form Groups */
                @media (min-width: 768px) {
                    form {
                        display: grid;
                        grid-template-columns: 1fr 1fr;
                        gap: 1.5rem;
                    }

                    .form-group {
                        margin-bottom: 0;
                    }

                    .form-group:last-child,
                    .payment-info,
                    .form-group:has(input[type="file"]) {
                        grid-column: 1 / -1;
                    }
                }

                /* Animation */
                @keyframes fadeIn {
                    from {
                        opacity: 0;
                        transform: translateY(-10px);
                    }
                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }

                .form-container {
                    animation: fadeIn 0.5s ease-out;
                }

                /* Custom Scrollbar */
                ::-webkit-scrollbar {
                    width: 8px;
                }

                ::-webkit-scrollbar-track {
                    background: #f1f1f1;
                }

                ::-webkit-scrollbar-thumb {
                    background: #8b4513;
                    border-radius: 4px;
                }

                ::-webkit-scrollbar-thumb:hover {
                    background: #a67a5b;
                }
</style>
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Daftar Seni Regu</h1>
        <img src="/asset/images/logo.png" alt="" class="logoo">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('seniregu.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="namaKetua">Nama Ketua</label>
                <input type="text" id="namaKetua" name="namaKetua" required>
            </div>
            <div class="form-group">
                <label for="tglLahirKetua">Tanggal Lahir</label>
                <input type="date" id="tglLahirKetua" name="tglLahirKetua" required>
            </div>
            <div class="form-group">
                <label for="namaAnggota1">Nama Anggota 1</label>
                <input type="text" id="namaAnggota1" name="namaAnggota1" required>
            </div>
            <div class="form-group">
                <label for="tglLahirAnggota1">Tanggal Lahir</label>
                <input type="date" id="tglLahirAnggota1" name="tglLahirAnggota1" required>
            </div>
            <div class="form-group">
                <label for="namaAnggota2">Nama Anggota 2</label>
                <input type="text" id="namaAnggota2" name="namaAnggota2" required>
            </div>
            <div class="form-group">
                <label for="tglLahirAnggota2">Tanggal Lahir</label>
                <input type="date" id="tglLahirAnggota2" name="tglLahirAnggota2" required>
            </div>

            <div class="form-group">
                <label for="namaOfficial">Nama Official</label>
                <input type="text" id="namaOfficial" name="namaOfficial" required>
            </div>
            <div class="form-group">
                <label for="noTelpon">No. Telpon</label>
                <input type="tel" id="noTelpon" name="noTelpon" required>
            </div>
            <div class="form-group">
                <label for="instansi">Instansi</label>
                <input type="text" id="instansi" name="instansi" required>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" id="kategori" name="kategori" value="Seni Regu" readonly>
            </div>

            <div class="payment-info">
                <img src="/asset/images/danaaa.png" alt="Dana Logo">
                <span>081370181649</span>
            </div>
            <div class="payment-info">
                <img src="/asset/images/gopay.png" alt="GoPay Logo">
                <span>081370181649</span>
            </div>

            <div class="form-group">
                <label for="buktiPembayaran">Upload Bukti Pembayaran (max 1MB)</label>
                <input type="file" id="buktiPembayaran" name="buktiPembayaran" accept="image/*" required>
            </div>
            <div class="form-group">
                <button type="submit" class="daftar-button">Daftar</button>
                <button type="button" class="back-button" onclick="window.history.back()">Back</button>
            </div>
        </form>
    </div>
</body>
</html>
