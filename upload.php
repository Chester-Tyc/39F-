<?php
//将'TEST'及'upload_test.py'修改为所需文件名后，将其复制进upload.php中的switch ($_POST['file_upload'])作为其中一种情况
//若需要修改保存路径，需要在upload.php中新建一个function来save_file
  case 'TEST':
        if ($_FILES['file']['error']){
          $message = error_Handle($_FILES);
        } else {
          save_file($_POST['file_upload']);
          $message = python_exc('upload_test.py');
        }
 ?>
