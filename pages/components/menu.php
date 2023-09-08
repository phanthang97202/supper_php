<style>
    .menu ul {
        display: flex;
        list-style-type: none;
        justify-content: space-evenly;
        color: #000;
        font-weight: bold;
    }

    /* //////////////////////// */
    .banner {
        display: flex;
        justify-content: space-between;
        height: 300px;
        box-sizing: border-box;
    }

    .banner .menu {
        width: 30%;
        height: 100%;
        background-color: beige;
    }

    .banner .menu ul {
        display: block;
    }

    .banner .menu ul li {
        color: blue;
        background-color: bisque;
        padding: 5px 0;
        border: 1px solid red;
    }

    .banner .menu ul li:hover {
        background-color: rgb(203, 208, 208);
        color: #fff;
        cursor: pointer;
    }

    .banner .image {
        width: 70%;
    }

    .banner .image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>
<div class="menu">
    <ul>
        <li>
            <a href="/index.html">
                Trang chủ
            </a>
        </li>
        <li>
            <a href="/">
                Giới thiệu
            </a>
        </li>
        <li>
            <a href="/product">
                Sản phẩm
            </a>
        </li>
        <li>
            <a href="/">
                Đăng kí đại lý
            </a>
        </li>
        <li>
            <a href="/">
                Khuyến mại
            </a>
        </li>
        <li>
            <a href="/">
                Kiểm tra đơn hàng
            </a>
        </li>
        <li>
            <a href="/">
                Tuyển dụng
            </a>
        </li>
        <li>
            <a href="/">
                Liên hệ
            </a>
        </li>
    </ul>
</div>