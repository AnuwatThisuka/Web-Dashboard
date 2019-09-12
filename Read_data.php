<html>

<head>
    <title>SNC DashBoard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>SNCDashBoard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" />
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt" />
    <link rel="stylesheet" href="assets/css/Footer-Clean.css" />
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css" />
    <link rel="stylesheet" href="assets/css/Team-Boxed.css" />
</head>

<body>
    <form action="" method="get">
    </form>
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
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0" style="font-size: 40px;font-family: Prompt, sans-serif;">
                            ดูข้อมูลย้อนหลัง
                        </h3>
                        <p><strong></strong></p>
                        <p class="text-dark mb-0" style="font-size:20px"><strong><a href="logout.php">log out</a></strong></p>
                    </div>
                    <form action="" method="get" ALIGN="CENTER" style="font-size: 20px;font-family: Prompt, sans-serif;">
                        <input type="text" name="data">
                        <input type="submit" name="submit" value="ค้นหา">
                    </form>
                </div>
                <?php
                $serverName = "localhost";
                $userName = "root";
                $userPassword = "";
                $dbName = "sncdashboard";
                $objCon = mysqli_connect($serverName, $userName, $userPassword, $dbName);
                mysqli_query($objCon, "SET NAMES 'utf8' ");
                $query = "SELECT * FROM snc WHERE date LIKE '%".$_GET["data"]."%'";
                $result = mysqli_query($objCon, $query);
                echo "<table border='1' align='center' width='550'>";
                echo "<table border=1 ALIGN=CENTER>";
                echo "<tr><th>Machine1</th><th>Machine2</th><th>Machine3</th><th>StatusMachine1</th><th>StatusMachine2</th><th>StatusMachine3</th><th><center>Date/Time</center></th></tr>";
                while ($linha = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td><center>" . $linha["Machine1"] . "</center></td>";
                    echo "<td><center>" . $linha["Machine2"] . "</center></td>";
                    echo "<td><center>" . $linha["Machine3"] . "</center></td>";
                    echo "<td><center>" . $linha["StatusMachine1"] . "</center></td>";
                    echo "<td><center>" . $linha["StatusMachine2"] . "</center></td>";
                    echo "<td><center>" . $linha["StatusMachine3"] . "</center></td>";
                    echo "<td><center>" . $linha["TimeSNC"] . "</center></td>";
                    echo "</tr>";
                }
                echo "</table>";
                mysqli_close($objCon);
                ?>
</body>

</html>