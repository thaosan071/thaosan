<?php
include "config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");
$chitietlichtrinh = new ChiTietLichTrinh();
$tau = new Tau();
$ga = new Ga();
$tuyen = new Tuyen();
$lichtrinh = new LichTrinh();
$chitiettuyen = new ChiTietTuyen();
$id = Utils::getIndex("tuyen", "");
$ngaydi = Utils::getIndex("ngaydi", "");
$datalt= $lichtrinh->getByIdNgayDi($id,$ngaydi);
$data2 = $tuyen->getById($id);
$datactt = $chitiettuyen->getAllById($id);
    

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	 <div id="wrapper">

        <!-- Page Content -->
            <div class="container">
 
            <div class="w3-card-4">
 
             <div class="w3-panel w3-blue w3-xlarge">Thông tin hành trình: Tuyến </div>
 
              <div class="panel-body">    
 
                   
    <?php if(count($datalt)==0)
    echo "<h1> Không tìm thấy lịch trình </h1>"; 
    ?>
                   <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12">
                    <?php
                        foreach($datalt as $datalt)
                            {
                                $malt = $datalt["maLT"];
                                $data = $chitietlichtrinh->getAllById($malt);

                                ?>
                                    <table class="table w3-hoverable " width="100%" >
                                    <thead>
                                <tr>
                                    <th>Mã lịch trình: <?php echo $datalt["maLT"]?></th>
                                </tr>
                                <tr>
                                    <th>Tuyến:
                                        <?php
                                            $datatuyen= $tuyen->getById($datalt["maT"]);
                                            echo $datatuyen['TenT'];
                                        ?>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Ngày đi: <?php echo $datalt["ngaydi"];?>&nbsp;&nbsp;&nbsp;&nbsp;Giờ đi: <?php echo $datalt["giodi"];?></th>
                                </tr>
                                <tr>
                                    <th>Ngày đến: <?php echo $datalt["ngayden"];?>&nbsp;&nbsp;&nbsp;&nbsp;Giờ đến: <?php echo $datalt["gioden"];?></th>
                                </tr>
                                <tr>
                                    <th>Tàu: <?php 
                                    $datatau = $tau->getById($datalt["matau"]); 
                                    echo $datatau["tentau"];?></th>
                                </tr>
                                <tr>
                                   <th>Tên ga</th>   
                                   <th>Giờ đến</th>
                                   <th>Giờ đi</th>
                                   
                                </tr>
                                
                            </thead>
                            <tbody>
                            <?php 
                            foreach( $data as $r)
                            { 
                                ?>
                                <tr>
                                    <td>
                                        <?php $maga= $r["maga"];
                                            $data3= $ga->getById($maga);
                                            echo $data3["tenga"];
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $r["gioden"]; ?>
                                    </td>
                                    <td>
                                        <?php echo $r["giodi"]; ?>
                                    </td>

                                </tr>
                                <?php
                            }
                            ?>
                            
                            
                                
                            </tbody>  

                                    </table>
                                <?php
                            }
                    ?>
                       
                       </div>
                   </div>
 
             </div>
 
            </div>
 
            </div>
        <!-- /#page-wrapper -->

    </div>
</body>
</html>