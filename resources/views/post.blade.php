@extends('app')

@section('content')

    <div id="main-loading" style="display: none;"></div>

    <div id="scroll-wrap" class="main" style="height: 812px;">

        <div class="book" data-book="book-1" style="top: 10px;">
            <div class="cover"><a href="http://www.kevin-li.com/magicbook/index-illustrator.html###"><img
                        src={{ asset("public/img/page-corner.png")}} id="page-corner"></a>
                <div class="front"> </div>
                <div class="inner inner-left"></div>
            </div>
            <div class="inner inner-right"></div>
        </div>

        <div class="intro-wrapper" style="top: 306px;">
            <div class="intro-content">
                <h1>Ghi gì đó</h1>
                <div id="aline"></div>
                <p>Chỗ này ghi vài dòng giới thiệu nè</p>
                <button id="open-it" class="btn">Đọc sách</button>
            </div>
        </div>

    </div><!-- /scroll-wrap -->


    <div id="top-perspective" class="effect-moveleft">
        <!-- Fullscreen BookBlock -->
        <div id="top-wrapper" style="top: 406px;">
            <div class="bb-custom-wrapper" id="book-1">
                <div class="bb-bookblock bb-vertical">


                    <div class="bb-item" style="display: block;">
                        <!--page-1~2:start-->

                        <div class="bb-custom-side">
                            <!--page-1:start-->
                            <div class="content-wrapper">
                                <div class="container">

                                    <h1 class="huge-title">Mô tả giáo cụ</h1>
                                    <p class="half-width">- Giáo cụ bao gồm nhiều hình vuông và hình chữ nhật được làm
                                        từ tấm cứng, tất cả được xếp trong 1 hộp chứa có 10 ngăn chia.
                                        <br />Giáo cụ này miêu
                                        tả sự sử dụng có tính biểu tượng về màu sắc cho các con số. Màu đỏ <svg
                                            width="20" height="20">
                                            <rect width="20 " height="20" style="fill:#F51B00;" />
                                        </svg> cho 1, màu
                                        xanh lá <svg width="20" height="20">
                                            <rect width="20 " height="20" style="fill:#008000;" />
                                        </svg> cho 2, màu hồng cho 3, màu vàng cho 4, màu xanh nhạt cho 5, màu xám cho
                                        6, màu trắng cho 7, màu tím cho 8, màu xanh đậm cho 9 và màu vàng sậm cho 10.

                                        <br />- Ngăn chia đầu tiên có 1 hình vuông màu đỏ.

                                        <br />- Ngăn chia thứ 2 có 1 hình vuông màu xanh lá và các hình chữ nhật để tạo
                                        thành
                                        1 hình vuông khác cùng với hình vuông đỏ.

                                        <br />- Ngăn chia thứ 3 có 1 hình vuông màu hồng và các hình chữ nhật khác để
                                        tạo
                                        thành hình vuông cùng với những hình vuông và hình chữ nhật đã tạo thành hình
                                        vuông trước đó. Cùng cách như vậy cho tất cả các ngăn chia có hình vuông và các
                                        hình chữ nhật với các màu tương ứng của nó.</p>

                                </div>
                                <!--container 1-->
                            </div>
                            <!--content-wrapper 1-->
                        </div>
                        <!--bb-custom-side page-1:end-->

                        <div class="bb-custom-side">
                            <!--page-2:start-->
                            <div class="content-wrapper">
                                <div class="container">

                                    <div class="fullpage-img">
                                        <img src={{ asset("public/img/0.jpg")}} alt="image">
                                        <img src={{ asset("public/img/1.jpg")}} alt="image">
                                    </div>

                                </div>
                                <!--container 2-->
                            </div>
                            <!--content-wrapper 2-->
                        </div>
                        <!--bb-custom-side page-2:end-->

                    </div>
                    <!--bb-item-page 1~2:end-->


                    <div class="bb-item" style="display: none;">
                        <!--page-3~4:start-->



                        <div class="bb-custom-side">
                            <!--page-4:start-->
                            <div class="content-wrapper">
                                <div class="container">
                                    <div class="content-title title-3">
                                        <h3>Mô tả hoạt động</h3>
                                    </div>

                                    <div class="services-wrapper">
                                        <div class="services-item">
                                            <p><span>Xếp các thẻ số từ hàng đơn vị - chục - trăm - ngàn</span>
                                                <br />- Phương pháp Montessori đã vật chất hóa Hệ số thập phân thông qua
                                                lĩnh
                                                vực hình học để xem xét:
                                                <br /> + hàng đơn vị như một điểm - 1 hạt cườm
                                                <br /> + hàng chục như một đường thẳng - được tạo nên từ một thanh bao
                                                gồm 10
                                                hạt
                                                <br /> + hàng trăm như một hình vuông - được tạo nên từ 10 thanh, mỗi
                                                thanh 10
                                                hạt
                                                <br /> + hàng nghìn như một khối lập phương tương ứng với 1000
                                                Như vậy, từ các thẻ số ứng với mỗi hàng đơn vị - chục - trăm - ngàn trẻ
                                                dùng các hạt cườm, thanh hạt, khối hạt cườm để mô phỏng lượng tương ứng
                                            </p>
                                        </div>

                                        <div class="services-item">
                                            <p><span>HTNV:</span>
                                                MS 35 - Lớp học Gia đình siêu nhân
                                            </p>
                                        </div>

                                    </div>
                                    <!--services-wrapper-->

                                </div>
                                <!--container 4-->
                            </div>
                            <!--content-wrapper 4-->
                        </div>
                        <!--bb-custom-side page-4:end-->
                        <div class="bb-custom-side">
                            <!--page-3:start-->
                            <div class="content-wrapper">
                                <div class="container">

                                    <div class="fullpage-img">
                                        <img src={{ asset("public/img/2.jpg")}} alt="image">
                                    </div>

                                </div>
                                <!--container 3-->
                            </div>
                            <!--content-wrapper 3-->
                        </div>
                        <!--bb-custom-side page-3:end-->
                    </div>
                    <!--bb-item-page:3~4:end-->

                    <div class="bb-item" style="display: none;">
                        <!--page:5~6:start-->

                        <div class="bb-custom-side">
                            <!--page-5:start-->
                            <div class="content-wrapper">
                                <div class="container">


                                    <div class="content-title title-2">
                                        <h2>Ảnh tổng hợp</h2>
                                    </div>

                                    <div id="portfolio-container">

                                        <div class="portfolio-item illustration">
                                            <img src={{ asset("public/img/3.jpg")}} alt="portfolio">
                                            <div class="mask">
                                                <a href={{ asset("public/img/3.jpg")}} rel="portfolio" class="fancybox">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="portfolio-item illustration">
                                            <img src={{ asset("public/img/4.jpg")}} alt="portfolio">
                                            <div class="mask">
                                                <a href={{ asset("public/img/4.jpg")}} rel="portfolio" class="fancybox">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="portfolio-item illustration">
                                            <img src={{ asset("public/img/5.jpg")}} alt="portfolio">
                                            <div class="mask">
                                                <a href={{ asset("public/img/5.jpg")}} rel="portfolio" class="fancybox">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="portfolio-item illustration">
                                            <img src={{ asset("public/img/6.jpg")}} alt="portfolio">
                                            <div class="mask">
                                                <a href={{ asset("public/img/6.jpg")}} rel="portfolio" class="fancybox">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="portfolio-item illustration">
                                            <img src={{ asset("public/img/7.jpg")}} alt="portfolio">
                                            <div class="mask">
                                                <a href={{ asset("public/img/7.jpg")}} rel="portfolio" class="fancybox">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="portfolio-item video">
                                            <img src={{ asset("public/img/3.jpg")}} alt="portfolio">
                                            <div class="mask">
                                                <a href={{ asset("public/img/video.mp4")}} rel="portfolio"
                                                    class="fancybox">
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    <!--portfolio-container-->

                                </div>
                                <!--container 5-->
                            </div>
                            <!--content-wrapper 5-->
                        </div>
                        <!--bb-custom-side page-5:end-->

                        <div class="bb-custom-side">
                            <!--page-8:start-->
                            <div class="content-wrapper">
                                <div class="container">

                                    <div class="content-title title-2">
                                        <h3>Lời ngỏ</h3>
                                    </div>

                                    <table id="contact-info">
                                        <tbody>
                                            <tr>
                                                <td>Nếu bài tập giúp ích và hữu ích cho bạn hãy nói cho chúng tôi qua
                                                    các thông điệp ngắn: Bạn có thể like, share hoặc viết một cảm nghĩ,
                                                    đóng góp ngắn gọn bằng hashtag #camnghi #donggop
                                                    Cuối cùng chúng tôi cảm ơn vì bạn đã ở đây.</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="content-title title-3">
                                        <h3>Đăng ký tham gia lớp học Gia Đình Siêu Nhân - Khóa 6</h3>
                                    </div>

                                    <form class="contact-form" id="contact-form" method="post"
                                        novalidate="novalidate">
                                        <p>
                                            <label>
                                                <input type="text" name="name" id="name" placeholder="Tên Mẹ - SĐT liên lạc"
                                                    class="required">
                                                </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input type="email" name="email" id="email" placeholder="Facebook Cá Nhân "
                                                    class="required email">
                                                </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input type="text" name="name" id="name" placeholder="Tên Bố - SĐT liên lạc"
                                                    class="required">
                                                </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input type="email" name="email" id="email" placeholder="Facebook Cá Nhân "
                                                    class="required email">
                                                </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input type="text" name="name" id="name" placeholder="Tên Con - Biệt danh"
                                                    class="required">
                                                </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input type="email" name="email" id="email" placeholder="Ngày tháng năm sinh"
                                                    class="required email">
                                                </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input type="text" name="name" id="name" placeholder="Nơi sống"
                                                    class="required">
                                                </label>
                                        </p>
                                        <p>
                                            <label>
                                                <input type="email" name="email" id="email" placeholder="Thời điểm phát hiện"
                                                    class="required email">
                                                </label>
                                        </p>
                                        <p
                                        ><label>
                                            <textarea name="message" id="message"
                                                    placeholder="Nơi đánh giá và kết luận của nơi đánh giá"
                                                    class="required"></textarea>
                                            </label
                                            ></p>

                                        <input type="submit" class="submit btn btn-3" value="Gửi">

                                        <!-- AJAX Loader and Alert -->
                                        <div class="loader"></div>
                                        <div class="alert"></div>

                                    </form>

                                </div>
                                <!--container 8-->
                            </div>
                            <!--content-wrapper 8-->
                        </div>
                        <!--bb-custom-side page-6:end-->

                    </div>
                    <!--bb-item-page:5~6:end-->

                    <a href="http://www.kevin-li.com/magicbook/index-illustrator.html#" class="bb-flip bb-nav-prev"
                        style="display: none;">Previous<img src={{ asset("public/img/nav-prev.png")}}></a><a
                        class="menu-button">"Show
                        Menu"<div></div>
                        <div></div>
                        <div></div>
                    </a><a href="http://www.kevin-li.com/magicbook/index-illustrator.html#"
                        class="bb-flip bb-nav-next">Next<img src={{ asset("public/img/nav-next.png")}}></a>
                </div><!-- /bb-bookblock -->

            </div><!-- /bb-custom-wrapper -->
        </div><!-- /top-wrapper  -->

        <div id="phone-menu">
            <!-- Menu for phone scroll  -->
            <a class="menu-button">"Show Menu"<div></div>
                <div></div>
                <div></div>
            </a>
        </div>

        <div id="menu-wrapper">
            <!-- Main menu  -->
            <span id="close-tip">back to cover</span>
            <a href="#" id="close-button">×</a>
            <nav class="outer-nav">
                <div id="nav-scroll">
                    <a href="#"class="bb-current">Về trang bìa</a>
                </div>
            </nav>
        </div><!-- /menu-wrapper  -->

    </div><!-- /top-perspective  -->
@endsection
