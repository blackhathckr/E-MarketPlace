<?php
session_start();
if(!isset($_SESSION['admin_log']))
{
    header("Location:../admin");
}

include_once '../conn.php';
$sql="SELECT * FROM users";
$query = mysqli_query($conn,$sql);
$usercount = mysqli_num_rows($query);
$sql2="SELECT * FROM posts";
$query2 = mysqli_query($conn,$sql2);
$postcount = mysqli_num_rows($query2);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['admin_log']; ?> Dashboard</title>
</head>

<style>
    .dashboard {
        display:grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        height: 50vh;
        grid-gap: 70px;
    }

    .dashboard a {
        background-color: var(--color-primary);
        color: #FFFFFF;
        display: flex;
        height: 140px;
        border-radius: 20px;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        cursor: pointer;
    }

    .dashboard a i {
        font-size: 25px;
    }

    .dashboard a span {
        margin-top: 20px;
        font-size: 18px;
    }
</style>

<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            -webkit-tap-highlight-color: transparent;
            word-wrap: break-word;
        }

        a {
            text-decoration: none;
        }

        :root {
            --color-primary: #37517e;
            --color-primary-dark: #37517e;
            --color-dark-text: rgb(72, 79, 83);
            --blue: #0056f5;
            --red: #ff5454;
            --green: #07b57e;
        }

        /* ================SCROLLBAR============= */

        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #cfcfcf;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #dfdfdf;
        }


        /* ==============Header============== */
        header {
            background-color: #FFF;
            padding: 10px 20px;
            position: sticky;
            top: 0px;
            display: flex;
            justify-content: space-between;
            box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.1);
            z-index: 10;
        }

        header #pageName {
            /* background-color: var(--color-primary-dark); */
            color: var(--color-primary-dark);
            border-radius: 10px;
            padding: 5px 20px;
            font-weight: bolder;
        }

        header .menu {
            color: #37517e;
            cursor: pointer;
            font-size: 25px;
            font-weight: bolder;
        }

        header .menu span {
            margin-left: 20px;
            display: inline-block;
            text-transform: capitalize;
        }

        /* ===================Siderbar============== */


        aside {
            padding-top: 20px;
            height: 80vh;
            position: fixed;
            width: 230px;
            background-color: #FFF;
            box-shadow: 3px 0px 3px rgba(0, 0, 0, 0.1);
            transition: all 0.5s;
            z-index: 10;
            overflow-y: auto;
        }

        aside a {
            display: block;
            padding: 10px 0;
            margin-top: 5px;
            margin-right: 5px;
            color: var(--color-dark-text);
            border-radius: 0 20px 20px 0;
            transition: all 0.5s;
        }

        aside a.active {
            color: #FFFFFF !important;
            background-color: var(--color-primary-dark) !important;
        }

        aside a:hover {
            color: var(--color-primary-dark);
            background-color: #e3e3e3;
        }

        aside a i {
            margin: 0px 20px;
        }

        /* ==============Main============= */

        #main {
            margin: 10px;
            transition: all 0.5s;
        }

        /* ==============Media Query========== */

        @media screen and (min-width: 700px) {

            #main {
                margin: 20px 20px 20px 250px;
            }

            #main.small {
                margin: 20px;
            }

            aside {
                left: 0px;
            }

            aside.open {
                left: -230px;
            }
        }

        @media screen and (max-width: 700px) {

            aside {
                left: -230px;
            }

            aside.open {
                left: 0px;
            }
        }
    </style>

    <!-- ====================Header============== -->

    <header>

        <div class="menu" id="menu-toggle">
            <i class="fas fa-align-left"> </i>
            <span>
                Echobuyer </span>
        </div>

        <div id="pageName">
            <script>
                document.write(document.title)
            </script>
        </div>

    </header>

    <!-- ====================Siderbar=============== -->


    <aside id="sidebar">

        <a href="../admin/admin.php">
            <i class="fas fa-home"></i>Home
        </a>

       

        <!-- <a href="quiz_cat_private.php">
            <i class="fas fa-lock"></i>Private Category
        </a>

        <a href="quiz_private.php">
            <i class="fas fa-lock"></i>Private Quiz
        </a>


        <a href="qna.php">
            <i class="fas fa-question"></i>QNA
        </a>

        <a href="qna_temp.php" style="display: none;">
            <i class="fas fa-question"></i>QNA Private
        </a>

        <a href="qna_category.php">
            <i class="fa-solid fa-question"></i>Qna Category
        </a>

        <a href="qna_sub.php">
            <i class="fa-solid fa-question"></i>Qna Sub
        </a>


        <a href="users.php">
            <i class="fas fa-users"></i>Users
        </a>

        <a href="user_suspended.php">
            <i class="fas fa-users"></i>Block Users
        </a>

        <a href="notification.php?to=chikuai">
            <i class="fas fa-bell"></i>Notifications
        </a> 

        <a href="slider.php">
            <i class="fas fa-images"></i>Sliders
        </a>

        <a href="settings.php">
            <i class="fas fa-gear"></i>Settings
        </a> -->


        <a href="logout.php">
            <i class="fas fa-power-off"></i>Logout
        </a>

    </aside>

    <main id="main">
        <div class="dashboard">
            <a >
                <i class="fas fa-users"></i>
                <span><?php echo $usercount ?> USER(S)</span>
            </a>
            <a >
                <i class="fas fa-file"></i>
                <span><?php echo $postcount ?> POSTS</span>
            </a>

            <a href="viewnews.php">
                <i class="fas fa-bell"></i>
                <span>Subscribers</span>
            </a>

            <a href="viewaboutus.php">
                <i class="fas fa-phone"></i>
                <span>Contacts</span>
            </a>

            <a href="updatecredentials.php">
                <i class="fas fa-gears"></i>
                <span>Update Credentials</span>
            </a>
            <a href="approveposts.php">
                <i class="fas fa-thumbs-up"></i>
                <span>Approve Posts</span>
            </a>
            
            <a href="usersinfo.php">
                <i class="fas fa-users"></i>
                <span>Users Info</span>
            </a>

            <a href="guests.php">
                <i class="fas fa-users"></i>
                <span>Guests</span>
            </a>
            <a href="viewjoin.php">
                <i class="fas fa-users"></i>
                <span>View Posts Joined</span>
            </a>
           



        </div>



        <!--<div style="text-align: center;">-->
        <!--    ©  <a href="https://developer.chikuaicode.com" target="_blank"> ChikuAI </a><br> Created with <i class="fa fa-heart" style="color:red;"></i> by Saurya.-->
        <!--</div>-->


    </main>

    <script>
        var el = document.getElementById("sidebar");
        var toggleButton = document.getElementById("menu-toggle");
        var main = document.getElementById("main");

        toggleButton.onclick = function() {
            el.classList.toggle("open");
            main.classList.toggle("small");
        };

        checkUrl();

        function checkUrl() {

            let url = window.location.href;

            if (url.includes("dashboard.php") || url.includes("contact.php")) {
                setActive(0);
            } else if (url.includes("quiz.php") || url.includes("quiz_create.php") || url.includes("quiz_api_edit.php")) {
                setActive(1);
            } else if (url.includes("quiz_category.php") || url.includes("quiz_category_add.php?status=1")) {
                setActive(2);
            } else if (url.includes("quiz_sub")) {
                setActive(3);
            } else if (url.includes("quiz_cat_private.php") || url.includes("quiz_category_add.php?status=0") || url.includes("quiz_cat_edit.php")) {
                setActive(4);
            } else if (url.includes("quiz_private.php") || url.includes("quiz_add.php") || url.includes("quiz_edit.php")) {
                setActive(5);
            } else if (url.includes("qna.php") || url.includes("qna_add.php") || url.includes("qna_edit.php")) {
                setActive(6);
            } else if (url.includes("qna_temp.php")) {
                setActive(7);
            } else if (url.includes("qna_category")) {
                setActive(8);
            } else if (url.includes("qna_sub")) {
                setActive(9);
            } else if (url.includes("users.php")) {
                setActive(10);
            } else if (url.includes("user_suspended.php")) {
                setActive(11);
            } else if (url.includes("notification.php")) {
                setActive(12);
            } else if (url.includes("slider")) {
                setActive(13);
            } else if (url.includes("settings.php")) {
                setActive(14);
            } else {
                setActive(15);
            }
        }

        function setActive(i) {
            let elm = document.querySelectorAll("#sidebar a")[i];
            elm.classList.toggle("active");
        }
    </script>




</body>

</html>