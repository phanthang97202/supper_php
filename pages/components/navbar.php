<style>
    .navbar_top {
        display: flex;
        justify-content: space-evenly;
    }

    .navbar_top .navbar_top-empty {
        width: 70%;
    }

    .navbar_top div .navbar_top-main {
        width: 30%;
    }

    .navbar_top-main-menu {
        display: flex;
        list-style-type: none;
    }

    .navbar_top-main-menu>li {

        margin: 0 20px;
    }
</style>

<div class="navbar_top">
    <div class="navbar_top-empty">
    </div>
    <div class="navbar_top-main">
        <ul class="navbar_top-main-menu">
            <li>
                <a href="">
                    Thông báo
                </a>
            </li>
            <li>
                <a href="">
                    Trợ giúp
                </a>
            </li>
            <?php
            if (empty($_SESSION['auth'])) {
                echo '
                        <li>
                        <a href="">
                            Đăng kí
                        </a>
                    </li>
                    <li>
                        <a href="/login">
                            Đăng nhập
                        </a>
                    </li>
                        ';
            } else {
                echo "
                    <li> Me:  
                   <b>
                   {$_SESSION['auth']['username']}
                   </b>  
                </li>
                <li>
                    <a href='/logout'>
                        Logout
                    </a>
                </li>
                    ";
            }

            ?>

        </ul>
    </div>
</div>