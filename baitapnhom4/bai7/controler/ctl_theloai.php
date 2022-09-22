<?php

include'../config.php'; 
include'../model/class.db.theloai.php';
 
 $db_theloai=new db_theloai();

 $theloai_arr =$db_theloai->get_theloai();
 $theloai_html =""; 



 if(count($theloai_arr)==0)
    { $theloai_html ='Không có thể loại <a href="theloai_them.php">THÊM THỂ LOẠI</a>'; }

else{
    $theloai_html ='<h1>Quản trị thể loại</h1> <table width="100%" id="bang_quantri" cellpadding ="10" cellspacing="0"> <tr><th>Tên thể loại</th><th>Thứ tự</th> <th>Ẩn hiện</th><th colspan="2"> <a href="theloai_them.php">Thêm Thể Loại</a></th> </tr>'; foreach($theloai_arr as$item)
   { $theloai_html .='<tr>'; $theloai_html .='<td>'.$item['TenTL'].'</td>'; $theloai_html .='<td>'.$item['ThuTu'].'</td>'; $theloai_html .='<td>'.$item['AnHien'].'</td>'; $theloai_html .='<td><a href="theloai_sua.php?id= '.$item['idTL'].'">Sửa</a></td>'; $theloai_html .='<td><a href="theloai_xoa.php?id= '.$item['idTL']. '" onclick="return confirm(\'Bạn có thực sự muốn xóa\');">Xóa</a></td>'; $theloai_html .='</tr>'; }
    $theloai_html .='</table>'; 
 }


