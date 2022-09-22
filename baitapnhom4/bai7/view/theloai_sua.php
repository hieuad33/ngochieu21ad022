<?php
 include'../controler/ctl_sua.php';
 ?> <!DOCTYPEhtml> <html> <head> <title>THỂ LOẠI | QUẢN TRỊ</title> <metacharset="utf-8"> <metaname="viewport" content="width=device-width, initial-scale=1"> <linkrel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> <scriptsrc="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> </head>
 
<body> 
    <div class="container">
     <h1>Cập nhật thể loại</h1> 
     <form name="sua_theloai" method="POST">
      <input type="hidden" name="id" value="<?php echo$_GET['id'];?>">
       <table width="100%"> 
        <tr> 
            <td>Tên thể loại: </td>
             <td>
                <input type="text" name="ten_theloai" value="<?php echo $ten_theloai;?>"></td> 
            </tr> 
            <tr> 
                <td>Thứ tự: </td> 
                <td>
                    <input type="text" name="thu_tu" value="<?php echo $thu_tu; ?>"></td>
                     </tr> 
                     <tr> 
                        <td>Ẩn/Hiện: </td>
                         <td>
                          <select name="an_hien"> <option value="1">Hiện</option> <option value="0" <?php echo ($an_hien== 0)?'selected="selected"':''; ?>>Ẩn</option> </select> </td> </tr> <tr> <td colspan="2"><input type="submit" value="Cập nhật thể loại" name="submit"></td> </tr> </table> </form> </div> </body> </html>