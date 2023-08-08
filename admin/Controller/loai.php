<?php
    $act = 'loai';
    if(isset($_GET['act']))
    {
        $act = $_GET['act'];
    }
    switch ($act) {
        case 'loai':
            include './View/addloaisanpham.php';
            break;
        
        case 'loai_action':
            if(isset($_POST['submit_file']))
            {
                $file = $_FILES['file']['tmp_name'];

                file_put_contents($file,str_replace("\xEF\xBB\xBF","",file_get_contents($file)));

                $file_open = fopen($file, "r");

                while(($csv =fgetcsv($file_open,1000,",")) != false)
                {
                    $db = new connect();
                    $maloai = $csv[0];
                    $tenloai = $csv[1];
                    $idmenu = $csv[2];
                    $query = "insert into loai(maloai, tenloai, idmenu) values ($maloai, '$tenloai', $idmenu)";
                    $db->exec($query);
                }
                echo '<script> alert("Đã thêm thành công!"); </script>';
            }
            break;
    }
?>