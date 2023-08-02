<?php 
// total array yang di siapkan
$todos = [];

// mengecek file todo.txt ada atau tidak
if(file_exists('todo.txt')) {
    // mengambil data file todo.txt
    $file = file_get_contents('todo.txt');
    // mengubah format serialize menjadi array
    $todos = unserialize($file);
}

//  jika di temukan kegiatan yang di kirim melalui metod POST
if(isset($_POST['kegiatan'])){
    $data	= $_POST['kegiatan']; // data yang dipilih pada form
    $todos[]=[
                'kegiatan'	=> $data,
                'status'=>0
            ];
    $daftar_kegiatan=serialize($todos);
    simpanData($daftar_kegiatan);
}

// jika di temukan kegiatan GET status
if(isset($_GET['status'])) {
    $todos[$_GET['key']]['status']=$_GET['status'];
    $daftar_kegiatan = serialize($todos);
    simpanData($daftar_kegiatan);
}

if(isset($_GET['hapus'])) {
    unset($todos[$_GET['key']]);
    $daftar_kegiatan = serialize($todos);
    simpanData($daftar_kegiatan);
}
function simpanData($daftar_kegiatan) {
    file_put_contents('todo.txt' , $daftar_kegiatan);
    header('location:form.php');
}
print_r($todos);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
       <h1>APA kegiatan mu</h1>
       <input type="text" name="kegiatan">
       <button type="submit">Simpan</button>
       <hr>
       
    </form>
    <ul>
    <?php foreach($todos as $key=>$value): ?>
        <li>
        <input type="checkbox" name="kegiatan" onclick="window.location.href='form.php?status=<?php echo($value['status']==1)? '0': '1'; ?>&key=<?php echo $key;?>'";>
        <?php if ($value['status']==1)echo 'checked' ?>
            <label>
                <?php 
                if($value['status']==1) {
                    echo '<del>'.$value['kegiatan'].'</del>';
                }else {
                    echo $value['kegiatan'];
                }
                
                ?>
            </label>
            <a href="form.php?hapus=1&key=<?php echo $key;?>" onclick="return confirm('Apakah Anda Yakin akan menghapus data ini?')">hapus</a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>