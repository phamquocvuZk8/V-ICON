<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="V-ICON.css">
    <title>V-ICON</title>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
    header{
        background-image:linear-gradient(rgba(37, 37, 161),rgba(202, 19, 19)), url(./images/bgh.jpg);
        height: 100vh;
}  
    .link{
        float:right;
        margin-top:20px;
        transition: all.3s;
    }
    .about{
        margin-right:20px;
        text-decoration: none;
        color:white;
        width: 20px;
        font-size:20px;
        text-transform:uppercase;
        
    }
    .link li {
        list-style: none;
        display:inline-block;
        transition:all.3s;
    }
    .link li a:hover,
    .link li a:active{
        border-bottom: 2px solid #cccc;
    }
    .here{
        margin-right:20px; 
        text-decoration: none;
        color:white;
        font-size:20px;
        text-transform:uppercase;
    }
    .name{
        margin-right:20px; 
        text-decoration: none;
        color:white;
        font-size:20px;
        text-transform:uppercase;
    }
    .hello{
    background-color: orange;
    padding: 10px 14px;
    border-radius: 6px;

    font-weight: 100px;

    text-decoration: none;
    }
    .text{
        text-decoration: none;
    }
    h2{
        text-align:center;
        color:orange;
    }
    h2:after{
        content:"";
        display:block;
        width:150px;
        height:3px;
        background-color: orange;
        margin:0 auto;
    }
    .about-picture{
        display:inline-block;
        position: relative;
    
    }
    .about-picture img{
        width:90%;
        border-radius:6px;
        filter:brightness(100%);
        
    }
    .picture{
        transform: translate(-50%, -50%);
        filter: brightness(100%);
        position: absolute;
        top:50%;
        left:50%;
        margin: 0 auto;
        transform: translate(-100%, 100%);
        opacity: 0;
    }
    .about-picture:hover .picture,
    .about-picture:active .picture{
        transform: translate(-65%, -50%);
        filter: brightness(30px);
        opacity: 1;
        transition:all.5s;
        filter:brightness(100%);
        
    }
    .about-picture img:hover,
    .about-pcture img:active{
        filter:blur(5px);
    }/*hiệu ứng khi rê chuột vào ảnh thì ảnh sẽ tự động mờ đi*/
    .anh{
        display:inline-block;
        position: relative;
    }
    .anh img{
       border-radius:6px;
    }
    .chu{
        transform: translate(-50%, -50%);
        position: absolute;
        top:50%;
        left:50%;
        margin: 0 auto;
        transform:translate(-50px,50px);
        opacity:0;
        transition: all.5s;
    }
    .anh:hover .chu,
    .anh:active .chu{
        transform: translate(-65%, 50%);
        opacity:1;
    }
    .anh img:hover,
    .anh img:active{
        filter:blur(5px);
    }
    .chu :hover,
    .chu :active{
      
    }
    .produtcs {
        position: relative;
    }
    .produtcs li i{
        width:90%;
    }
    .box{
        background-color: pink;
        width: 200px;
        display:inline-block;
        margin-right:20px;
    }    
    .join a{
        background-color:orange;
        padding: 5px 14px;
        width: 70px;
        border-radius:6px;
        text-decoration:none;
        color:white;
    }
    .join{
        text-align: center;
        margin-top:10px;
    }
    .box h3{
        text-align:center;
        background-color:blue;
        padding-top: 15px;
        border-radius:6px;
    }
    .box h4{
        text-align:center;
    }
    .iconn li{
        list-style:none;
        line-height: 50px;
    }
    .produtcs{
        background-color: #E6E6FA;
    }
    .ht{
        display:inline-block;
    }
    .dd{
        display:inline-block;
    }
    .kk{
        display:inline-block;
    }
    .hg{
        display:inline-block;  
    }
    .gn{
        text-align:inherit;
    }
    .qt img{
        width:140px;
        transition:all.3s;
    }
    .qt li{
        list-style: none;
        float:left;
    }
    
    .qt li img:hover,
    .qt li img:active{
        transform:scale(1.1);
    }
    
   </style>
</head>
<header>
    <img src="logo.png" width="200px" alt=""> 
    <div class="link">
        <ul>
            <li><a href="#"class="about">about</a></li> 
            <li><a href="#"class="here">here</a></li> 
            <li><a href="#"class="name">name</a></li>
        </ul>
    </div> 
    <br>
    <div class="row">
        <h1>WE WILL SE </h1>
        <h1>USE DONAL TRUMP</h1>
        <div class="form">
            <a class="text" href="#">TEXT</a>
            <a class="hello" href="#">TEXT HELLO</a>
            <br>
        </div>
    </div>
</header>
<body>
    
    <h2>ABOUT USE</h2>
    <p class="vanban">
        Học máy ( ML ) là nghiên cứu các thuật toán máy tính có thể cải thiện tự động thông qua kinh nghiệm và bằng cách sử dụng dữ liệu. [1] Nó được xem như một phần của trí tuệ nhân tạo . Các thuật toán học máy xây dựng một mô hình dựa trên dữ liệu mẫu, được gọi là dữ liệu đào tạo , để đưa ra dự đoán hoặc quyết định mà không được lập trình rõ ràng để làm như vậy. [2] Các thuật toán học máy được sử dụng trong nhiều ứng dụng, chẳng hạn như trong y học, lọc email , nhận dạng giọng nói và thị giác máy tính, nơi khó hoặc không khả thi khi phát triển các thuật toán thông thường để thực hiện các tác vụ cần thiết. [3]

        Một tập hợp con của học máy có liên quan chặt chẽ đến thống kê tính toán , tập trung vào việc đưa ra dự đoán bằng máy tính; nhưng không phải tất cả học máy đều là học thống kê. Nghiên cứu về tối ưu hóa toán học cung cấp các phương pháp, lý thuyết và lĩnh vực ứng dụng cho lĩnh vực máy học. Khai phá dữ liệu là một lĩnh vực nghiên cứu liên quan, tập trung vào phân tích dữ liệu khám phá thông qua học tập không giám sát . [5] [6] Một số triển khai học máy sử dụng dữ liệu và mạng nơ-ron theo cách bắt chước hoạt động của não sinh học. [7] [8] Trong ứng dụng của nó cho các vấn đề kinh doanh, học máy còn được gọi là phân tích dự đoán .
     </p> 
    <div class="images">
        <div class="col span-1-of-4 about-picture">
            <a href="#"><img class="face" src="./images/hoho.png" width="200px" alt=""></a>
            <p class="picture">
                FACE
            </p>
        </div>
        <div class="col span-1-of-4 about-picture">
            <a href="#"><img class="hahaa" src="./images/bbg.jpg" width="200px"height="200px" alt=""></a>
            <p class="picture">
                ONE
            </p>
        </div>
        <div class="col span-1-of-4 about-picture">
            <a href="#"><img class="ngu" src="./images/bgh.jpg" width="200px"height="200px" alt=""></a>
            <p class="picture">
                PIC
            </p>
        </div>
        <div class="col span-1-of-4 about-picture">
            <a href="#"><img class="si" src="./images/hhh.jpg" width="200px" height="200px" alt=""></a>
            <p class="picture">
                HAHA
            </p>
        </div>
    </div>
    <h2>ABOUT HERE</h2>
    <p class="fifa">
        Java (phiên âm Tiếng Việt: "Gia-va") là một ngôn ngữ lập trình hướng đối tượng, dựa trên lớp được thiết kế để có càng ít phụ thuộc thực thi càng tốt. Nó là ngôn ngữ lập trình có mục đích chung cho phép các nhà phát triển ứng dụng viết một lần, chạy ở mọi nơi (WORA),[9] nghĩa là mã Java đã biên dịch có thể chạy trên tất cả các nền tảng hỗ trợ Java mà không cần biên dịch lại.[10] Các ứng dụng Java thường được biên dịch thành bytecode có thể chạy trên 
        bất kỳ máy ảo Java (JVM) nào bất kể kiến trúc máy tính bên dưới.
    </p>
    <div class=" col span-1-of-3 anh">
        <img src="http://itplus-academy.edu.vn/upload/c47d9c29fc44c2b7996a2613aec3c1f9/files/writer1/jv.jpg" width="300px" alt="">
        <p class="chu">
            JAVA
        </p>    
    </div>
    <div class="col span-1-of-3 anh">
        <img src="https://timviec365.com/pictures/news/2021/06/15/lls1623752136.jpg" width="300px" alt="">
        <p class="chu">    
            JAVA 2
        </p>
    </div>
        
    <div class="col span-1-of-3 anh">
        <img src="https://techvccloud.mediacdn.vn/2018/11/23/js-15429579443112042672363-crop-1542957949936317424252.png" width="300px" alt="">
            <p class="chu">
                JAVASCRIPT
            </p>
    </div>
        
    <section class="produtcs">
        <h2>PRODUTCS</h2>
        <div class="col span-1-of-3 box">
            <h3 class="vn">RUSSIA</h3>
            <h4>$19</h4>
            <div class="iconn">
                <li><i class="fa fa-check">Native</i></li>
                <li><i class="fa fa-check">Checking</i></li>
                <li><i class="fa fa-check">Javascript</i></li>
                <li><i class="fa fa-check">Textbox</i></li>
            </div>
            <div class="join">
                <a href="#">JOIN US</a>
            </div>
        </div>
        <div class="col span-1-of-3 box">
            <h3 class="vn">AMERICAN</h3>
            <h4>$19</h4>
            <div class="iconn">
                <li><i class="fa fa-check">Native</i></li>
                <li><i class="fa fa-check">Checking</i></li>
                <li><i class="fa fa-check">Javascript</i></li>
                <li><i class="fa fa-check">Textbox</i></li>
            </div>
            <div class="join">
                <a href="#">JOIN US</a>
            </div>
        </div>
        <div class="col span-1-of-3 box">
            <h3 class="vn">VIETNAM</h3>
            <h4>$19</h4>
            <div class="iconn">
                <li><i class="fa fa-check">Native</i></li>
                <li><i class="fa fa-check">Check</i></li>
                <li><i class="fa fa-check">Java</i></li>
                <li><i class="fa fa-check">Text</i></li>
            </div>
            <div class="join">
                <a href="#">JOIN US</a>
            </div>
        </div>
        
    </section>
    <section class="kk">
            <h2>TERMINAL</h2>
            <div class="ht">
                <div class="col span-1-of-2 hg">
                    <blockquote>
                            <p>Volodymyr Oleksandrovych Zelensky là một</p> 
                            <p>chính trị gia, Tổng thống thứ 6 và hiện </p>
                            <p>tại của Ukraina kể từ ngày 20 tháng 5 năm </p>
                            <p>2019. Zelensky giành chiến thắng trong cuộc </p>
                            <p> bầu cử tổng thống Ukraina với hơn 70% số phiếu </p>
                            <p>, đánh bại tổng thống đương nhiệm khi đó là Petro Poroshenko.</p>
                        <cite>
                            <img src="./images/hhh.jpg">
                        </cite>
                    </blockquote>    
                </div>
                <div class="col span-1-of-2 hg ">
                    <blockquote>
                        <div class="gn">
                            <p>Volodymyr Oleksandrovych Zelensky là một</p> 
                            <p>chính trị gia, Tổng thống thứ 6 và hiện </p>
                            <p>tại của Ukraina kể từ ngày 20 tháng 5 năm </p>
                            <p>2019. Zelensky giành chiến thắng trong cuộc </p>
                            <p> bầu cử tổng thống Ukraina với hơn 70% số phiếu </p>
                            <p>, đánh bại tổng thống đương nhiệm khi đó là Petro Poroshenko.</p>
                            <img src="./images/hhh.jpg" alt="">
                        </div>
                        
                        <cite>
                           
                        </cite>
                    </blockquote>
                </div>
            </div>
    </section>
    <div class="hinha">
        <h2>POISONT</h2>
        <div class="qt">
            <ul>
                <li>
                    <figure>
                        <img class="control" src="https://upload.wikimedia.org/wikipedia/vi/thumb/9/91/FC_Barcelona_logo.svg/1200px-FC_Barcelona_logo.svg.png" alt="">
                        <figcaption>
                            FC Barcelona
                        </figcaption>
                    </figure>
                </li>  
                <li>     
                    <figure>
                        <img class="control" src="https://upload.wikimedia.org/wikipedia/vi/thumb/5/5c/Chelsea_crest.svg/1200px-Chelsea_crest.svg.png" alt="">
                        <figcaption>
                            CHEALSE
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img class="control" src="https://upload.wikimedia.org/wikipedia/vi/thumb/a/a1/Man_Utd_FC_.svg/1200px-Man_Utd_FC_.svg.png" alt="">
                        <figcaption>
                            MANCHESTER UNITED
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <img class="control" src="https://cdn.freebiesupply.com/logos/large/2x/southampton-fc-1-logo-png-transparent.png" alt="">
                        <figcaption>
                            SOUTHAMPTON
                        </figcaption>
                    </figure>
                </li>
            </ul>
        </div>
    </div>
    
</body>
</html>