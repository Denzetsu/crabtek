<?php
include('read-script.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customers</title>
    <style>
        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            max-width: 100%;

        }

        .table-data {
            width: 65%;
            float: right;
        }

        th,
        td {
            padding: 15px;
        }

        body {
            overflow-x: hidden;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }


        .navbar {
            overflow: hidden;
            background-color: #fee834;


        }

        .navbar a {
            float: left;
            font-size: 26px;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;

        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 26px;
            border: none;
            outline: none;
            color: black;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;

        }

        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: orange;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rbga(0, 0, 0, 0, 2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: orange;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;

        }

        .column {
            float: left;


        }

        .column a {
            float: none;
            color: black;
            text-decoration: none;
            display: block;
            text-align: left;

        }

        .icon {
            float: left;
            width: 2.7%;
            height: 5%;
            margin-left: 7px;
            margin-top: 2px;

        }
    </style>
</head>

<body background="img/bg2.png">
    <div class="navbar">
        <img src="img\logo.png" class="icon">
        <a href="home.html" id="home"> CrabTek </a>
        <a href="about.html" id="about"> About </a>
        <div class="dropdown">
            <button class="dropbtn" id="shop"> Categories
                <i class="menu "></i>
            </button>
            <div class="dropdown-content">
                <div class="row">
                    <div class="column">
                        <a href="categories.html#electric">Electrical</a>
                        <a href="categories.html#lighting">Lighting</a>
                        <a href="#categories.html#cam">IP Camera & Lock</a>
                    </div>
                    <div class="column">
                        <a href="categories.html#sensors">Sensors</a>
                        <a href="categories.html#homeapp">Home Appliances</a>
                        <a href="categories.html#gateway">Gateway Control</a>
                    </div>
                    <div class="column">
                        <a href="categories.html#pets">Pets</a>
                        <a href="categories.html#exercise">Exercise & Health</a>
                        <a href="categories.html#outdoor">Outdoor & Travel</a>
                    </div>
                </div>
            </div>
        </div>
        <a href="User-table.php" id="customer"> Customers </a>
    </div>

    <div class="table-data">
        <div class="list-title">
            <h2>History</h2>

        </div>
        <table border="1">
            <tr>
                <th>S.N</th>
                <th>Full Name</th>
                <th>Email Address</th>
                <th>City</th>
                <th>Contact Number</th>
            </tr>

            <?php
            if (count($fetchData) > 0) {
                $sn = 1;
                foreach ($fetchData as $data) {

                    ?>
                    <tr>
                        <td><?php echo $sn; ?></td>
                        <td>
                            <?php echo $data['full_name']; ?>
                        </td>
                        <td><?php echo $data['email_address']; ?> </td>
                        <td>
                            <?php echo $data['city']; ?>
                        </td>
                        <td><?php echo $data['country']; ?></td>
                    </tr>
                    <?php
                    $sn++;
                }
            } else {

                ?>
                <tr>
                    <td colspan="7">No Data Found</td>
                </tr>

                <?php
            }
            ?>
        </table>
    </div>
</body>

</html>