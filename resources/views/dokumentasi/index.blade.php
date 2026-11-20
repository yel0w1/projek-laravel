<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip UPT</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7f3;
            font-family: Arial, sans-serif;
            color: #354b3c;
        }
        .sidebar {
            min-height: 100vh;
            background: #355b46;
            color: white;
            padding: 30px 20px;
        }
        .sidebar h4 {
            font-weight: bold;
            margin-bottom: 35px;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 8px;
        }

        .sidebar a:hover {
            background: #52765e;
        }

        .main-content {
            padding: 35px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.05);
        }

        .btn-green {
            background: #52765e;
            color: white;
        }

        .btn-green:hover {
            background: #355b46;
            color: white;
        }

        .table thead {
            background: #e8eee8;
        }
    </style>
</head>

<body>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-2 sidebar">
            <h4>🌿Arsip UPT</h4>

            <a href="{{ route('dokumentasis.index') }}">🏠 Dashboard</a>
            <a href="{{ route('dokumentasis.create') }}">➕ Tambah Arsip</a>
        </div>

        <div class="col-md-10 main-content">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h3>Dashboard Arsip</h3>
                    <p class="text-muted">Selamat datang di Sistem Arsip UPT</p>
                </div>

                <a href="{{ route('dokumentasis.create') }}" class="btn btn-green">
                    + Tambah Dokumentasi
                </a>
            </div>

            <div class="card p-4 mb-4">
                <h5>Total Dokumentasi</h5>
                <h2 class="fw-bold">{{ $dokumentasis->count() }}</h2>
                <small class="text-muted">Jumlah arsip yang tersimpan</small>
            </div>

            <div class="card p-4">

                <h5 class="mb-3">Data Dokumentasi</h5>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-hover align-middle">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($dokumentasis as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->kategori }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>
                                        <a href="{{ route('dokumentasis.show', $item->id) }}"
                                           class="btn btn-sm btn-info text-white">
                                            Detail
                                        </a>

                                        <a href="{{ route('dokumentasis.edit', $item->id) }}"
                                           class="btn btn-sm btn-warning">
                                            Edit
                                        </a>

                                        <form action="{{ route('dokumentasis.destroy', $item->id) }}"
                                              method="POST" class="d-inline"
                                              onsubmit="return confirm('Yakin ingin menghapus arsip ini?')">
                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-sm btn-danger">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4">
                                        Belum ada dokumentasi tersimpan.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>

            </div>

        </div>
    </div>
</div>
</body>
</html>