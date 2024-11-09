<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f6fa;
            color: #2d3436;
        }

        .dashboard-container {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
            margin-top: 100px
        }

        .admin-nav {
            background-color: #fff;
            padding: 1rem 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .admin-nav h1 {
            color: #2d3436;
            font-size: 1.5rem;
        }

        button[type="submit"] {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #c0392b;
        }

        .alert {
            padding: 1rem;
            border-radius: 5px;
            margin-bottom: 1rem;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .registrations-table {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background-color: #f8f9fa;
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            font-weight: 600;
            color: #6c757d;
        }

        tr:hover {
            background-color: #f8f9fa;
        }

        td a {
            text-decoration: none;
        }

        .btn-edit, .btn-delete {
            padding: 0.4rem 0.8rem;
            border-radius: 4px;
            font-size: 0.9rem;
            margin-right: 0.5rem;
            text-decoration: none;
            display: inline-block;
        }

        .btn-edit {
            background-color: #3498db;
            color: white;
            border: none;
        }

        .btn-edit:hover {
            background-color: #2980b9;
        }

        .btn-delete {
            background-color: #e74c3c;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn-delete:hover {
            background-color: #c0392b;
        }

        /* Link styles */
        a {
            color: #3498db;
            transition: color 0.3s;
        }

        a:hover {
            color: #2980b9;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .dashboard-container {
                padding: 10px;
            }

            .admin-nav {
                padding: 1rem;
                flex-direction: column;
                gap: 1rem;
            }

            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }

            th, td {
                padding: 0.75rem;
            }
        }


    </style>
</head>
<body>
    <div class="dashboard-container">
        <nav class="admin-nav">
            <h1>Admin Dashboard</h1>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </nav>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="registrations-table">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Ketua</th>
                        <th>Instansi</th>
                        <th>Status</th>
                        <th>Bukti Pembayaran</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
    @foreach($registrations as $registration)
        <tr>
            <td>{{ $registration->id }}</td>
            <td>{{ $registration->namaKetua }}</td>
            <td>{{ $registration->instansi }}</td>
            <td>{{ $registration->status }}</td>
            <td>
                {{-- @if($registration->buktiPembayaran)
                    <a href="{{ Storage::url($registration->buktiPembayaran) }}" target="_blank">
                        View Bukti
                    </a>
                @endif --}}
                <img src="{{ Storage::url($registration->buktiPembayaran) }}" alt="bukti-pembayaran" width="100">
            </td>
            <td>
                <a href="{{ route('admin.edit', $registration->id) }}" class="btn-edit">Edit</a>
                <form action="{{ route('admin.destroy', $registration->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete" onclick="return confirm('Kamu yakin ingin menghapus peserta ini?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>
            </table>    
        </div>
    </div>
</body>
</html>
