<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Barang</title>
</head>
<body>
    <h2>Formulir Tambah Barang Inventaris Kantor</h2>
    
    @if(session('success'))
        <div>{{session('success')}}

    @endif

    <form action="{{route('items.store')}}" method="POST">
        @csrf
        <label>Kode Barang:</label>
        <input type="text" name:"code" required placeholder="Contoh:Inv-001">
        <br>
        
        <label>Nama Barang:</label>
        <input type="text" name:"item_name" required placeholder="Contoh:Laptop">
        <br>
        
        <label>Kategori:</label>
        <input type="text" name:"category" required placeholder="Contoh:Elektronik">
        <br>

        <label>Stok:</label>
        <input type="text" name:"stock" required value="1">
        <br>
        
        <label>Kondisi:</label>
        <select name="condition">
            <option value="baik">Baik</option>
            <option value="rusak ringan">Rusak Ringan</option>
            <option value="rusak parah">Rusak Parah</option>
        </select>
        <br>

        <label>Lokasi Ruangan:</label>
        <input type="text" name:"room_location"  palceholder="Contoh:">
        <br>

        <button type="submit">Simpan Barang</button>

    </body>
</html>