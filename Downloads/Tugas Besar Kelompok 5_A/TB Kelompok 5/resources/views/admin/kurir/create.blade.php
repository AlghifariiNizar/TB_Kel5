<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Tracking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }
        input, textarea, button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        input:focus, textarea:focus {
            border-color: #007bff;
            outline: none;
        }
        textarea {
            resize: none;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
    
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Tambah Kurir</h1>
        <form action="{{route('admin.kurir.store')}}" method="post">
            @csrf
            <div>
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" placeholder="Masukkan Nama" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan Email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="passwprd" name="password" placeholder="Masukkan Password" required>
            </div>
            <div>
                <button type="submit">Simpan</button>
            </div>
        </form>
        <a href="{{route('admin.kurir')}}">
            <button class="btn-secondary">Kembali</button>
        </a>
    </div>

</body>
</html>
