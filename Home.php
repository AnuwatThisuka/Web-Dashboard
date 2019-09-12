<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>SNC Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" />
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt" />
    <link rel="stylesheet" href="assets/css/Footer-Clean.css" />
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css" />
    <link rel="stylesheet" href="assets/css/Team-Boxed.css" />
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" style="font-size: 14px;width: 250px;">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh-wink"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">
                        <span style="font-size: 40px;">SNC</span>
                    </div>
                </a>
                <hr class="sidebar-divider my-0" />
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="Home.php"><i class="fas fa-tachometer-alt"></i><span style="font-size: 25px;font-family: Prompt, sans-serif;">หน้าหลัก</span></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" href="Read_data.php"><i class="fas fa-cloud" style="width: 20px;height: 20px;"></i><span style="font-size: 23px;font-family: Prompt, sans-serif;">ดูข้อมูลย้อนหลัง</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0" style="font-size: 40px;font-family: Prompt, sans-serif;">
                            หน้าหลัก
                        </h3>
                        <p><strong></strong></p>
                        <p class="text-dark mb-0" style="font-size:20px;font-famity:Prompt, sans-serif;"><strong><a href="logout.php">log out</a></strong></p>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card">
                        <div class="card-body" style="height: 600px;">
                            <p style="font-family: Prompt, sans-serif;font-size: 25px;">
                                MachineBending1
                            </p>
                            <div class="chart-area" style="width: 290px;">
                                <canvas data-bs-chart='{"type":"doughnut","data":{"labels":["Direct","Social","Referral"],"datasets":[{"label":"","backgroundColor":["#2ECC71 ","#2ECC71 ","#2ECC71 "],"borderColor":["#ffffff","#ffffff","#ffffff"],"data":["100","0","0"]}]},"options":{"maintainAspectRatio":false,"legend":{"display":false},"title":{}}}'></canvas>
                            </div>
                            <span ALIGN="CENTER" style="font-family: Prompt;font-size: 40px;color:#17202A">
                                <?php
                                include('insert_db.php');
                                $search = isset($_GET['data']) ? $_GET['data'] : '';
                                $sql = "SELECT * FROM `snc` ORDER BY `snc`.`TimeSNC` DESC LIMIT 1";
                                $stmt = $PDO->prepare($sql);
                                $stmt->execute();
                                while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
                                    echo "$linha->StatusMachine1";
                                }
                                ?>
                            </span><br><br>
                            <span style="font-family: Prompt, sans-serif;font-size: 35px;">จำนวนงานที่ดัดได้</span>
                            <p style="font-family: Prompt, sans-serif;font-size: 30px;">
                                <?php
                                include('insert_db.php');
                                $search = isset($_GET['data']) ? $_GET['data'] : '';
                                $sql = "SELECT * FROM `snc` ORDER BY `snc`.`TimeSNC` DESC LIMIT 1";
                                $stmt = $PDO->prepare($sql);
                                $stmt->execute();
                                while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
                                    echo "$linha->Machine1";
                                }
                                ?>
                                ตัว
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p style="font-family: Prompt, sans-serif;font-size: 25px;">
                                MachineBending2
                            </p>
                            <div class="chart-area" style="width: 290px;">
                                <canvas data-bs-chart='{"type":"doughnut","data":{"labels":["Direct","Social","Referral"],"datasets":[{"label":"","backgroundColor":["#FF0000 ","#FF0000 ","#FF0000 "],"borderColor":["#ffffff","#ffffff","#ffffff"],"data":["100","0","0"]}]},"options":{"maintainAspectRatio":false,"legend":{"display":false},"title":{}}}'></canvas>
                            </div>
                            <span ALIGN="CENTER" style="font-family: Prompt;font-size: 40px;color:#17202A;">
                                <?php
                                include('insert_db.php');
                                $search = isset($_GET['data']) ? $_GET['data'] : '';
                                $sql = "SELECT * FROM `snc` ORDER BY `snc`.`TimeSNC` DESC LIMIT 1";
                                $stmt = $PDO->prepare($sql);
                                $stmt->execute();
                                while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
                                    echo "$linha->StatusMachine2";
                                }
                                ?>
                            </span><br><br>
                            <span style="font-family: Prompt, sans-serif;font-size: 35px;">จำนวนงานที่ดัดได้</span>
                            <p style="font-family: Prompt, sans-serif;font-size: 30px;">
                                <?php
                                include('insert_db.php');
                                $search = isset($_GET['data']) ? $_GET['data'] : '';
                                $sql = "SELECT * FROM `snc` ORDER BY `snc`.`TimeSNC` DESC LIMIT 1";
                                $stmt = $PDO->prepare($sql);
                                $stmt->execute();
                                while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
                                    echo "$linha->Machine2";
                                }
                                ?>
                                ตัว
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p style="font-family: Prompt, sans-serif;font-size: 25px;">
                                MachineBending3
                            </p>
                            <div class="chart-area" style="width: 290px;">
                                <canvas data-bs-chart='{"type":"doughnut","data":{"labels":["Direct","Social","Referral"],"datasets":[{"label":"","backgroundColor":["#2ECC71 ","#2ECC71 ","#2ECC71 "],"borderColor":["#ffffff","#ffffff","#ffffff"],"data":["10","0","0"]}]},"options":{"maintainAspectRatio":false,"legend":{"display":false},"title":{}}}'></canvas>
                            </div>
                            <span ALIGN="CENTER" style="font-family: Prompt;font-size: 40px;color:#17202A;">
                                <?php
                                include('insert_db.php');
                                $search = isset($_GET['data']) ? $_GET['data'] : '';
                                $sql = "SELECT * FROM `snc` ORDER BY `snc`.`TimeSNC` DESC LIMIT 1";
                                $stmt = $PDO->prepare($sql);
                                $stmt->execute();
                                while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
                                    echo "$linha->StatusMachine3";
                                }
                                ?>
                            </span><br><br>
                            <span style="font-family: Prompt, sans-serif;font-size: 35px;">จำนวนงานที่ดัดได้</span>
                            <p style="font-family: Prompt, sans-serif;font-size: 30px;">
                                <?php
                                include('insert_db.php');
                                $search = isset($_GET['data']) ? $_GET['data'] : '';
                                $sql = "SELECT * FROM `snc` ORDER BY `snc`.`TimeSNC` DESC LIMIT 1";
                                $stmt = $PDO->prepare($sql);
                                $stmt->execute();
                                while ($linha = $stmt->fetch(PDO::FETCH_OBJ)) {
                                    echo "$linha->Machine3";
                                }
                                ?>
                                ตัว
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-charts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>