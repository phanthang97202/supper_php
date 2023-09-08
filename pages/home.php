<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./../assets/styles/home.css">


</head>

<body>

    <?php
    include_once(__DIR__ . "/components/navbar.php")
    ?>
    <div class="navbar">
        <div class="logo">
            <img src="./../assets/images/logo-new.png" alt="">
        </div>
        <div class="input">
            <input type="text" placeholder="Tìm kiếm">
        </div>
        <div class="search">
            <button>
                o
            </button>
        </div>
        <div class="cart">
            <button>
                Giỏ hàng
            </button>
        </div>
    </div>

    <?php
    include_once(__DIR__ . "/components/menu.php")
    ?>

    <div class="banner">
        <div class="menu">
            <ul>
                DANH MỤC SÁCH
                <li>Sách thiếu nhi</li>
                <li>Sách kinh tế-khởi nghiệp</li>
                <li>Sách kĩ năng sống</li>
                <li>Sách Ngoại ngữ</li>
                <li>Sách nuôi dạy con</li>
                <li>Sách Dinh dưỡng</li>
                <li>Sách Ẩm thực</li>
                <li>Sách Làm đẹp</li>
            </ul>
        </div>
        <div class="image">
            <img src="./../assets/images/Banner_hoc_cu_Bitex_890x396px-01.jpg" alt="">
        </div>
    </div>

    <div class="banner_image">
        <img src="./../assets/images/2.jpg" alt="">
    </div>

    <div>
        <div>
            <h2>Tin tức & Sự kiện</h2>
        </div>
        <hr>
        <div class="container_content">
            <div>
                <div>
                    <img src="./../assets/images/books/banner3.png" alt="" srcset="">
                </div>
                <p>Sẵn sàng tri thức cho ngày tựu trường</p>
                <p>12/09/2023</p>
            </div>
            <div>
                <div>
                    <img src="./../assets/images/books/banner3.png" alt="" srcset="">
                </div>
                <p>Sẵn sàng tri thức cho ngày tựu trường</p>
                <p>12/09/2023</p>
            </div>
            <div>
                <div>
                    <img src="./../assets/images/books/banner3.png" alt="" srcset="">
                </div>
                <p>Sẵn sàng tri thức cho ngày tựu trường</p>
                <p>12/09/2023</p>
            </div>
        </div>
    </div>


    <div class="footer">
        <div>
            <div>
                <img src="./../assets/images/logo-new.png" alt="">
            </div>
            <div>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis qui voluptatibus, blanditiis laudantium, assumenda sequi delectus sunt suscipit corporis, numquam voluptates deleniti temporibus minima voluptatem similique. Facere aut quae optio!</p>
            </div>
        </div>
        <div>
            <ul>
                <li>Công ty cổ phần Phát hành sách Bookmark</li>
                <li>Người đại diện</li>
                <li>Email</li>
                <li>Địa chỉ</li>
                <li>Điện thoại</li>
            </ul>
        </div>
        <div>
            <ul>
                <li>Điều khoản sử dụng</li>
                <li>Chính sách thông tin cá nhân</li>
                <li>Chính sashc một thanh toán</li>
                <li>Giới thiệu bookem</li>
                <li>Hệ thống trung tâm bảo hành</li>
            </ul>
        </div>
        <div>
            <ul>
                <li>Điều khoản sử dụng</li>
                <li>Chính sách thông tin cá nhân</li>
                <li>Chính sashc một thanh toán</li>
                <li>Giới thiệu bookem</li>
                <li>Hệ thống trung tâm bảo hành</li>
            </ul>
        </div>
    </div>
</body>

</html>