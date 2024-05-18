<?php
    require_once('./Models/user-info-model.php');
    require_once('./Models/product-info-model.php');
    $result = getAllActiveProduct();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="first">
    &nbsp;&nbsp;&nbsp;
    <a href="index.php"><img src="Uploads/logo.png" alt="Logo"  width="120px" height="65px"></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <a href="Views/search.php"><button class="header-button">Search GameStop</button></a>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;

    <?php
        if (!isset($_COOKIE['flag'])) {
          echo '<a href="Views/signin.html" class="signin-link">
                  <font size="4" color="white" face="times new roman">Sign In</font>
              </a><br/>';

        } else {
            $id = $_COOKIE['id'];
            $row = UserInfo($id);
            if ($row['role'] == "Business Client") {
                echo "<img src=\" {$row['profilepic']} \" width=\"40px\" class=\"round-image\">&nbsp;&nbsp;&nbsp;
                    <select name=\"profile\" onchange=\"location = this.value;\">
                        <option disabled selected hidden> {$row['username']} </option>
                        <option value=\"Views/user-profile.php\">Profile</option>
                        <option value=\"Views/dashboard.php\">Dashboard</option>
                        <option value=\"Views/sales-history.php\">Sales History</option>
                        <option value=\"Views/settings.php\">Settings</option>
                        <option value=\"Views/logout-page.php\">Log Out</option>
                    </select>";
            }
        }
        ?>
    </div>

    <div class="header">

    <a href="Views/view-all-mouse.php">
            <font color="white" face="times new roman" size="5">Mouse</font></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="Views/view-all-mousepad.php">
                    <font color="white" face="times new roman" size="5">Mouse Pad</font></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="Views/view-all-keyboard.php">
                            <font color="white" face="times new roman" size="5">Keyboard</font></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="Views/view-all-gamingchair.php">
                                    <font color="white" face="times new roman" size="5">Gaming Chair</font></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>

<br><br>
    <div style="margin-left: 5px;">

        <table width="95%" border="0" cellspacing="5" cellpadding="15">
            <tr>
                <?php $counter = 0;
                if (mysqli_num_rows($result) > 0) {
                    while ($crow = mysqli_fetch_assoc($result)) {
                        if ($counter == 3) break;
                        else $counter++;
                        $pid = $crow['productid'];
                        $posterURL = $crow['productpic'];
                        $title = $crow['productname'];
                        $description = $crow['productdescription'];
                        $price = $crow['productprice'];
                        if (strlen($description) > 100) {
                            $description = substr($description, 0, 100) . '...';
                        }
                        echo "<td><a href=\"Views/product-page.php?pid=$pid\"><img src=\"$posterURL\" width=\"180px\"></a></td>
                                <td valign=\"top\" align=\"left\">
                                <a href=\"Views/product-page.php?pid=$pid\"><font color=\"black\" face=\"times new roman\" size=\"5\">$title</font></a><br><br>
                                <font color=\"black\" face=\"times new roman\" size=\"4\">$description</font><br><br>
                                <font color=\"black\" face=\"times new roman\" size=\"4\">Price:$price</font><br><br>";
                    }
                }
                ?>
            </tr>
        </table>
    </div><br>

    <div style="margin-left: 5px;">

        <table width="95%" border="0" cellspacing="5" cellpadding="15">
            <tr>
                <?php $counter = 0;
                if (mysqli_num_rows($result) > 0) {
                    while ($crow = mysqli_fetch_assoc($result)) {
                        if ($counter == 3) break;
                        else $counter++;
                        $pid = $crow['productid'];
                        $posterURL = $crow['productpic'];
                        $title = $crow['productname'];
                        $description = $crow['productdescription'];
                        $price = $crow['productprice'];
                        if (strlen($description) > 100) {
                            $description = substr($description, 0, 100) . '...';
                        }
                        echo "<td><a href=\"Views/product-page.php?pid=$pid\"><img src=\"$posterURL\" width=\"180px\"></a></td>
                                <td valign=\"top\" align=\"left\">
                                <a href=\"Views/product-page.php?pid=$pid\"><font color=\"black\" face=\"times new roman\" size=\"5\">$title</font></a><br><br>
                                <font color=\"black\" face=\"times new roman\" size=\"4\">$description</font><br><br>
                                <font color=\"black\" face=\"times new roman\" size=\"4\">Price:$price</font><br><br>";
                    }
                }
                ?>
            </tr>
        </table>
    </div>
    <div style="margin-left: 5px;">

        <table width="95%" border="0" cellspacing="5" cellpadding="15">
            <tr>
                <?php $counter = 0;
                if (mysqli_num_rows($result) > 0) {
                    while ($crow = mysqli_fetch_assoc($result)) {
                        if ($counter == 3) break;
                        else $counter++;
                        $pid = $crow['productid'];
                        $posterURL = $crow['productpic'];
                        $title = $crow['productname'];
                        $description = $crow['productdescription'];
                        $price = $crow['productprice'];
                        if (strlen($description) > 100) {
                            $description = substr($description, 0, 100) . '...';
                        }
                        echo "<td><a href=\"Views/product-page.php?pid=$pid\"><img src=\"$posterURL\" width=\"180px\"></a></td>
                                <td valign=\"top\" align=\"left\">
                                <a href=\"Views/product-page.php?pid=$pid\"><font color=\"black\" face=\"times new roman\" size=\"5\">$title</font></a><br><br>
                                <font color=\"black\" face=\"times new roman\" size=\"4\">$description</font><br><br>
                                <font color=\"black\" face=\"times new roman\" size=\"4\">Price:$price</font><br><br>";
                    }
                }
                ?>
            </tr>
        </table>
    </div>

    <div style="margin-left: 5px;">

        <table width="95%" border="0" cellspacing="5" cellpadding="15">
            <tr>
                <?php $counter = 0;
                if (mysqli_num_rows($result) > 0) {
                    while ($crow = mysqli_fetch_assoc($result)) {
                        if ($counter == 3) break;
                        else $counter++;
                        $pid = $crow['productid'];
                        $posterURL = $crow['productpic'];
                        $title = $crow['productname'];
                        $description = $crow['productdescription'];
                        $price = $crow['productprice'];
                        if (strlen($description) > 100) {
                            $description = substr($description, 0, 100) . '...';
                        }
                        echo "<td><a href=\"Views/product-page.php?pid=$pid\"><img src=\"$posterURL\" width=\"180px\"></a></td>
                                <td valign=\"top\" align=\"left\">
                                <a href=\"Views/product-page.php?pid=$pid\"><font color=\"black\" face=\"times new roman\" size=\"5\">$title</font></a><br><br>
                                <font color=\"black\" face=\"times new roman\" size=\"4\">$description</font><br><br>
                                <font color=\"black\" face=\"times new roman\" size=\"4\">Price:$price</font><br><br>";
                    }
                }
                ?>
            </tr>
        </table>
    </div>
<br><br>
<div class="footer">
        <center>
          &nbsp;&nbsp;&nbsp;&nbsp;
          <a href="Views\about-us.php">
              <font color="white" face="times new roman" size="3">About Us</font>
          </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="Views\helpline.php">
              <font color="white" face="times new roman" size="3">Helpline</font>
          </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="Views\faq.php">
              <font color="white" face="times new roman" size="3">FAQ</font>
          </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="Views\terms-and-services.php">
              <font color="white" face="times new roman" size="3">Terms & Services</font>
          </a><br><br>
            <font color="white" face="times new roman" size="4">GameStop</font><br>
            <font color="white" face="times new roman" size="1">© 2024 by GameStop Inc.</font>
        </center>
</div>
</body>
</html>
