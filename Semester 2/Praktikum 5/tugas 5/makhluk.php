<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
</head>
<body>
<form method="post" action="proses.php">
    <label for="hewan">Nama Hewan :</label>
    <input type="text" id="hewan" name="hewan">
    <label for="makhluk">Jenis-Jenis Hewan :</label>
    <select id="makhluk" name="makhluk">
        <option value="karnivora">Karnivora</option>
        <option value="herbivora">Herbivora</option>
        <option value="omnivora">omnivora</option>
    </select>

    <input type="submit" value="submit">
</form>
</body>
</html>