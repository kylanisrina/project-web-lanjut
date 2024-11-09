<!DOCTYPE html>
<html>
<head>
    <title>Edit Registration</title>
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

                .edit-container {
                    background: white;
                    padding: 2.5rem;
                    border-radius: 20px;
                    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
                    width: 100%;
                    max-width: 800px;
                    margin: 2rem auto;
                }

                .edit-container h1 {
                    text-align: center;
                    color: #8b4513;
                    margin-bottom: 2rem;
                    font-size: 2rem;
                    font-weight: 600;
                }

                .logo-container {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .logo {
            max-width: 150px;
            height: auto;
            margin-bottom: 1rem;
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

                .btn-update,
                .btn-back {
                    flex: 1;
                    padding: 0.75rem 1.5rem;
                    border: none;
                    border-radius: 10px;
                    font-size: 1rem;
                    font-weight: 500;
                    cursor: pointer;
                    transition: all 0.3s ease;
                }

                .btn-update {
                    background: #8b4513;
                    color: white;
                }

                .btn-update:hover {
                    background: #a67a5b;
                    transform: translateY(-2px);
                    box-shadow: 0 5px 15px rgba(139, 69, 19, 0.2);
                }

                .btn-back {
                    background: #64748b;
                    color: white;
                }

                .btn-back:hover {
                    background: #94a3b8;
                    transform: translateY(-2px);
                    box-shadow: 0 5px 15px rgba(100, 116, 139, 0.2);
                }

                /* Responsive Design */
                @media (max-width: 768px) {
                    .edit-container {
                        padding: 1.5rem;
                    }

                    .edit-container h1 {
                        font-size: 1.5rem;
                    }

                    .form-group:last-child {
                        flex-direction: column;
                    }

                    .btn-update,
                    .btn-back {
                        width: 100%;
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

                .edit-container {
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
</head>
<body>
    <div class="edit-container">
            <div class="logo-container">
                <img src="/asset/images/logo.png" alt="Logo" class="logo">
            </div>
        <h1>Edit Registration</h1>

        <form action="{{ route('admin.update', $registration->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="hidden" name="id" value="{{ $registration->id }}">
            <div class="form-group">
                <label for="namaKetua">Nama Peserta</label>
                <input type="text" id="namaKetua" name="namaKetua" value="{{ $registration->namaKetua }}" readonly>
            </div>
            <div class="form-group">
                    <label for="namaAnggota1">Nama Anggota 1</label>
                    <input type="text" id="namaAnggota1" name="namaAnggota1" value="{{ $registration->namaAnggota1 }}" readonly>
                </div>

                <div class="form-group">
                    <label for="namaAnggota2">Nama Anggota 2</label>
                    <input type="text" id="namaAnggota2" name="namaAnggota2" value="{{ $registration->namaAnggota2 }}" readonly>
                </div>

                <div class="form-group">
                    <label for="instansi">Sekolah</label>
                    <input type="text" id="instansi" name="instansi" value="{{ $registration->instansi }}" readonly>
                </div>

                <div class="form-group">
                    <label for="namaOfficial">Nama Official</label>
                    <input type="text" id="namaOfficial" name="namaOfficial" value="{{ $registration->namaOfficial }}" readonly>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" id="kategori" name="kategori" value="{{ $registration->kategori }}" readonly>
                </div>

            <div class="form-group">
                <label for="buktiPembayaran">Bukti Pembayaran</label>
                <img src="{{ Storage::url($registration->buktiPembayaran) }}" alt="Bukti Pembayaran" width="100"></a>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" required>
                    <option value="Pending" {{ $registration->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="Confirmasi" {{ $registration->status == 'Confirmasi' ? 'selected' : '' }}>Confirmasi</option>
                    <option value="Ditolak" {{ $registration->status == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn-update">Update</button>
                <button href="{{ route('admin.dashboard') }}" class="btn-back">Back</button>
            </div>
        </form>
    </div>
</body>
</html>
