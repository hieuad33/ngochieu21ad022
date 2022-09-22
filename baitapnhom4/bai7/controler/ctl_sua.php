<?php 


include'../config.php';
 include'../model/class.db.theloai.php';

 if(isset($_GET['id'])){ $db_theloai =new DB_TheLoai();
  $theloai_arr =$db_theloai->get_theloai($_GET['id']); 
  $ten_theloai =$theloai_arr[0]['TenTL'];
   $thu_tu =$theloai_arr[0]['ThuTu']; 
   $an_hien =$theloai_arr[0]['AnHien'];
 if(isset($_POST['submit']))
    { $id =(isset($_POST['id']))?$_POST['id']:-1; 
    $ten_theloai =(isset($_POST['ten_theloai']))?$_POST['ten_theloai']:"";
     $thu_tu =(isset($_POST['thu_tu']))?$_POST['thu_tu']:0;
      $an_hien =(isset($_POST['an_hien']))?$_POST['an_hien']:"";
 $result =$db_theloai->sua_theloai($id,$ten_theloai,$thu_tu,$an_hien); if($result)
 { echo'<script>alert("Cập nhật thành công!"); window.location="theloai.php";</script>'; }else{ echo'<script>alert("Cập nhật không thành công!"); window.location="theloai.php";</script>'; } }
 } 
?>