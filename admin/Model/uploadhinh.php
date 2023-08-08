<?php
    function uploadImage() 
    {
        // Tạo đường dẫn để lấy hình về
        $target_dir = "C:/xampp/htdocs/PHP2/ADMIN/ADMIN/Content/imagetourdien";
        // B1: cần lấy tên hình về để vào đường dẫn
        $target_file = $target_dir.basename($_FILES['image']['tmp_name']);
        // B2: lấy phần mở rộng ra để kiểm tra nó có phải là hình hay không
        $imageFileTypes = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        //
        if(isset($_POST['submit']))
        {
            $check = getimagesize($_FILES['image']['tmp_name']);
            if($check != false)
            {
                $uploadhinh = 1;
            }
            else
            {
                $uploadhinh = 0;
                echo '<script> alert("Hình không tồn tại"); </script>';
            }
        }

        if(file_exists($target_file))
        {
            echo '<script> alert("Hình đã tồn tại"); </script>';
        }
        // Kiểm tra hình không vượt quá 500000kb
        if($_FILES['image']['size']>500000)
        {
            $uploadhinh = 0;
            echo '<script> alert("Hình vượt quá dung lượng"); </script>';
        }
        // Kiểm tra có phải là hình hay không
        if($imageFileTypes != 'jpg' && $imageFileTypes != 'png'
        && $imageFileTypes != 'jpeg' && $imageFileTypes != 'gif')
        {
            $uploadhinh = 0;
            echo '<script> alert("Không phải là file hình"); </script>';
        }
        //
        if($uploadhinh == 1)
        {
            if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file))
            {
                echo '<script> alert("Upload hình thành công"); </script>';
            }
            else
            {
                echo '<script> alert("Upload hình không thành công"); </script>';
            }
        }
    }
?>