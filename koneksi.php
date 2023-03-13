<?php 
$conn = mysqli_connect("localhost","root","","dbaset");


function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambahlaptop($data){
    $id = htmlspecialchars($data['id']);
    $namabarang = htmlspecialchars($data['namabarang']);
    $merk = htmlspecialchars($data['merk']);
    $jumlah = htmlspecialchars($data['jumlah']);

    global $conn;
    $query = "INSERT INTO laptop (id,namabarang,merk,jumlah) VALUES ('$id','$namabarang','$merk','$jumlah')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function tambahpc($data){
    $id = htmlspecialchars($data['id']);
    $namabarang = htmlspecialchars($data['namabarang']);
    $merk = htmlspecialchars($data['merk']);
    $jumlah = htmlspecialchars($data['jumlah']);

    global $conn;
    $query = "INSERT INTO pc (id,namabarang,merk,jumlah) VALUES ('$id','$namabarang','$merk','$jumlah')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function editlaptop($data){
    $id   = htmlspecialchars( $data['id']);
    $namabarang   = htmlspecialchars( $data['namabarang']);
    $merk  = htmlspecialchars( $data['merk']);
    $jumlah  = htmlspecialchars( $data['jumlah']);
    global $conn;
    $query = "UPDATE laptop SET 
            id = '$id',
            namabarang = '$namabarang',
            merk = '$merk',
            jumlah = '$jumlah'
             WHERE id =$id
    ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function editpc($data){
    $id   = htmlspecialchars( $data['id']);
    $namabarang   = htmlspecialchars( $data['namabarang']);
    $merk  = htmlspecialchars( $data['merk']);
    $jumlah  = htmlspecialchars( $data['jumlah']);
    global $conn;
    $query = "UPDATE pc SET 
            id = '$id',
            namabarang = '$namabarang',
            merk = '$merk',
            jumlah = '$jumlah'
             WHERE id =$id
    ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function hapuslaptop($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM laptop WHERE id= $id");
    return mysqli_affected_rows($conn);
}

function hapuspc($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM pc WHERE id= $id");
    return mysqli_affected_rows($conn);
}
