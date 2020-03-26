<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($data["data"] as $value ):?>
        <div class="data"><?php echo $value["id"] ?></div>
        <div class="data"><?php echo $value["hoTen"] ?></div>
        <a href="DetailProduct/DeleteSV/SinhVien/<?php echo $value["id"]; ?>" >Xoa</a>
    <?php endforeach; ?>
</body>
</html>