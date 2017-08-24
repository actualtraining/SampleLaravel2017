<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sample</title>
</head>
<body>
    <h2>Sample Page</h2>
    <p>Hello {{ $nama }} dan alamat anda {{ isset($alamat)?$alamat:'belum diisi' }}</p>
</body>
</html>