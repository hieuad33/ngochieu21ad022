<?php
 include'config.php'; include'class/class.db.theloai.php';
 if(isset($_GET['id'])){ $db_theloai =newDB_TheLoai(); $id =$_GET['id'];
 $result =$db_theloai->xoa_theloai($id); if($result){ echo'<script>alert("Xóa thành công!"); window.location="theloai.php";</script>'; }else{ echo'<script>alert("Xóa không thành công!"); window.location="theloai.php";</script>';
 
} } ?> <!DOCTYPEhtml> <html> <head> <title>THỂ LOẠI | QUẢN TRỊ</title> <metacharset="utf-8"> <metaname="viewport" content="width=device-width, initial-scale=1"> <linkrel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> <scriptsrc="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> </head> <body> <divclass="container"> <h1>Xóa thể loại</h1> </div> </body> </html>