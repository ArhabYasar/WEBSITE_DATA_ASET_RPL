<?php
require 'koneksi.php';
$id = $_GET["id"];

if( hapuslaptop($id) > 0){
     echo  "<script>
                alert('data berhasil dihapus');
                document.location.href = 'index_lgn.php';
            </script>
        ";
}else{
    echo  "<script>
                alert('data gagal dihapus');
                document.location.href = 'index_lgn.php';
            </script>
        ";
}

if( hapuspc($id) > 0){
    echo  "<script>
               alert('data berhasil dihapus');
               document.location.href = 'index_lgn.php?page=datapc';
           </script>
       ";
}else{
   echo  "<script>
               alert('data gagal dihapus');
               document.location.href = 'index_lgn?page=datapc.php';
           </script>
       ";
}