<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        .box {
            max-width: 500px;
            background: white;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button, .btn-back {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 15px;
            text-decoration: none;
            display: inline-block;
        }

        button:hover, .btn-back:hover {
            background-color: #0056b3;
        }

        .btn-back {
            background-color: #6c757d;
            margin-left: 5px;
        }

        .btn-back:hover {
            background-color: #5a6268;
        }

        .alert {
            background: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Barang Baru</h4>
            </div>
            <div class="card-body">
                
                <!-- Notifikasi Sukses -->
                @if(session('success'))
                    <div class="alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Form Tambah Barang -->
                <form action="{{ route('items.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="code">Kode Barang</label>
                        <input type="text" class="form-control" id="code" name="code" required>
                    </div>

                    <div class="form-group">
                        <label for="item_name">Nama Barang</label>
                        <input type="text" class="form-control" id="item_name" name="item_name" required>
                    </div>

                    <div class="form-group">
                        <label for="category">Kategori</label>
                        <input type="text" class="form-control" id="category" name="category" required>
                    </div>

                    <div class="form-group">
                        <label for="stock">Stok</label>
                        <input type="number" class="form-control" id="stock" name="stock" required>
                    </div>

                    <div class="form-group">
                        <label for="condition">Kondisi</label>
                        <select class="form-control" id="condition" name="condition" required>
                            <option value="">-- Pilih Kondisi --</option>
                            <option value="baik">Baik</option>
                            <option value="rusak ringan">Rusak Ringan</option>
                            <option value="rusak parah">Rusak Parah</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="room_location">Lokasi Ruangan</label>
                        <input type="text" class="form-control" id="room_location" name="room_location" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Barang</button>
                    <a href="{{ route('items.index') }}" class="btn btn-secondary">Kembali</a>
                </form>

            </div>
        </div>
    </div>
</body>
</html>