<!DOCTYPE html>
<html lang="vi">
	 <head>
		   <title> Code editor</title>
		    <meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="/codeeditor.png"/>
 <script src="rainbow-custom.min.js"> </script>
<script src="temp.js"> </script>
		    <script src="jquery-3.5.1.min.js"></script>
<meta name="viewport" content="width=device-width, maximum-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="log/Body.css">
<link rel="stylesheet" href="log/learn.css">
	 </head>
	<body>
	    <div class="alerntab">  
	    <div style="border-radius:14px;
	    position: fixed ;
	    background : #212121">
	    <h1 style="float:left;
	    color: #FFFFFF;
	    width :400px;">Lưu ý</h1>
  <button onclick="loaddemo()" style="float:right ;
            margin : 23px 0px 0px 200px ;
            position: relative;
            right: 30px">Đóng lại</button>
            <div style="clear : both"></div>
            <div style="border-bottom: 2px solid #000000;
            margin-top : 25px"> </div>
            </div>
            <div class="demotabalern">
                <p>- Cấp quyền cài đặt ứng dụng không rõ nguồn gốc khi tải ứng dụng bên ngoài cửa hàng CH Play.</p>
                <p style="color : #FF3E00"> • Bước 1 :</p>
                <p>- Ngay trên điện thoại chọn phần Cài Đặt ---> Màn hình khóa và bảo mật.</p>
                <img src="capquyen1.jpg" width="700" height="700">
<p style="color : #FF3E00"> • Bước 2 :</p>
              <p>- Bật nút không rõ nguồn gốc</p>
<img src="capquyen2.jpg" width="700" height="700">
            </div>
	    </div>
	   
<?php include 'log/footer.html';?> 
	  <div id="ok1" class="body"> 
			    <div class="demo11">
			     <img  id="o_1" onclick="menuselect()" src="images.png" width="100" height="100">
 <img onclick="menuselect()" id="o_2" class="icon2" src="closemenu_1.png" width="100" height="100">
			     <div class="demobackground">
			           <h1> MENU</h1>
			          <ul>
			              <li onclick="menudong()"> <a href="#gt"> 1.Giới thiệu về code editor </a></li>
			              <li onclick="menudong()"> <a href="#un"> 2.Ưu điểm,nhược điểm</a></li>
			              <li onclick="menudong()"> <a href="#cd"> 3.Hướng dẫn cài đặt</a></li>
			              <li onclick="menudong()"> <a href="#sd"> 3.Cách sử dụng</a></li>
			          </ul>
			     </div>
			    </div>
   
	  <div class="form_2">
<h1 id="gt" style="padding-top : 175px">Code editor<i> (Trình soản thảo mã)</i></h1>
  <h2>Giới thiệu về code editor</h2>
  <p> - Code editor hay còn gọi là trình soản thảo là một trình biên tập mã được phát triển bởi Rhythm Software dành cho Android. Nó hỗ trợ chức năng code 1 số mã nguồn như HTML,Css,JS (javascript),PHP và nhiều cú pháp khác như C/C++,Java,Ruby,Python....Nó cũng cho phép tùy chỉnh, do đó, người dùng có thể thay đổi theme, kiểu trực quan,cỡ chữ và các tùy chọn khác.</p>
  <p> - Phiên bản hiện tại là (v0.4.0) được cập nhật vào ngày 11/10/2020 được thêm vào một số cú pháp và khắc phục 1 số lỗi nhỏ.</p>
 <img style="margin-left : 140px" src="gtc.jpg" width="660" height="1200">
 <p style="text-align:center ;
        font-size : 29px">Code editor (v0.4.0) </p>
<p> - Ứng dụng cho phép thay đổi theme tùy theo người lập trình.</p>
<img  id="un" style="margin-left : 140px" src="gtc1.jpg" width="660" height="1200">
<p style="text-align:center ;
        font-size : 29px">Code editor (white) </p>
 <h2>Ưu điểm,nhược điểm code editor</h2>
 <i><h3 style="color : #1867FF ;
 font-size : 35px">• Ưu điểm : </h3> </i>
  <p>- Lập trình Website (Font-end) trên điện thoại. <br/>
      - Code editor giúp cho lập trình viên dễ dàng thao tác code trên di động như mở file,sửa,xóa,lưu,copy,dán văn bản text...</p>
  <p>- Code mã nguồn HTML,HTML 5 giống trên Visual Studio Code trên windown.</p>
<img style="margin-left : 140px" src="html.jpg" width="660" height="1200">
<p style="text-align:center ;
        font-size : 29px">Code editor (HTML) </p>
<p>- Code mã nguồn Css.</p>
<img style="margin-left : 140px" src="css.jpg" width="660" height="1200">
<p style="text-align:center ;
        font-size : 29px">Code editor (Css) </p>
<p>- Code mã nguồn Js (javascript).</p>
<img style="margin-left : 140px" src="js.jpg" width="660" height="1200">
<p style="text-align:center ;
        font-size : 29px">Code editor (Javascript) </p>
<p>- Code mã nguồn PHP.</p>
<img style="margin-left : 140px" src="php.jpg" width="660" height="1200">
<p style="text-align:center ;
        font-size : 29px">Code editor (PHP) </p>
<i><h3 style="color : #1867FF ;
font-size: 35px">• Một số chức năng khác : </h3> </i>
<img style="margin-left : 140px" src="C.jpg" width="660" height="1200">
<p style="text-align:center ;
        font-size : 29px">Code editor (Cú pháp C/C++) </p>
        <p>- Trong Code editor chỉ hỗ trợ cú pháp C/C++ nên không biên dịch được Ngôn ngữ lập trình này. <a style="color : #0066D0 ;
        text-decoration: none" href="">Xem cách Code C/C++ trên android tại đây </a></p>
<img style="margin-left : 140px" src="cuphap.jpg" width="660" height="1200">
<p style="text-align:center ;
        font-size : 29px">Code editor (Hỗ trợ nhiều cú pháp khác nhau) </p>
<img style="margin-left : 140px" src="theme.jpg" width="660" height="1200">
<p style="text-align:center ;
        font-size : 29px">Code editor (Thay đổi chủ đề) </p>
<img style="margin-left : 140px" src="ktq.jpg" width="660" height="1200">
<p style="text-align:center ;
        font-size : 29px">Code editor (Kiểu trực quan) </p>
<img style="margin-left : 140px" src="mm.jpg" width="660" height="1200">
<p style="text-align:center ;
        font-size : 29px">Code editor (Mã màu) </p>
<img style="margin-left : 140px" src="dx.jpg" width="660" height="1200">

<p style="text-align:center ;
        font-size : 29px">Code editor (Hỗ trợ đề xuất gợi ý) </p>
<i><h3 style="color : #C32C00;
font-size: 35px">• Nhược điểm : </h3> </i>
  <p>- Bên cạnh những ưu điểm trên Code editor còn bị gặp 1 số lỗi như lỗi copy past,lỗi lưu file,lỗi bị chạy lại ứng dụng (máy Ram yếu). <br/>
- Hiện tại code editor<i id="cd"></i> chưa hỗ trợ gõ tiếng Việt.Mong rằng các bản cập nhật tiếp theo App sẽ được khắc phục và thêm vào đó 1 số chức năng mới hơn.</p>
<h2>Hướng dẫn cài đặt code editor</h2>
<div style="height:690px" class="button">
    <img style="float : left" src="codeeditor.png" width="160" height="160">
   <b> <h1> Code editor: Trình soản thảo mã trên di động</h1> </b>
 <div style="clear : both"></div>
   <p><b style="color : #FF0079 ;
   margin-right : 10px">Miễn phí</b>app công cụ & soản thảo<br/>
Nhà phát hành : <b>Rhythm Software</b></p>
     <a href="https://apps.apple.com/us/app/code-master-source-code-editor/id502404926"> <div style="margin :0px 15px 0px 32px" class="download">
         <img src="app.png" width="95" height="95">
         <p> <b style="color : #003AE0">Appstore </b> <br/>
         IOS (iPhone-iPad)</p>
     </div> </a>
    <a href="https://play.google.com/store/apps/details?id=com.rhmsoft.code"><div class="download">
 <img src="chplay.png" width="95" height="95">
         <p> <b style="color : #003AE0">CH Play </b> <br/>
         Android</p>
     </div> </a>
<div style="clear : both"></div>
   <div class="button_2">
    <p>- Tải ngay phiên bản crack quảng cáo trên trang apkpure.com</p>
<a id="sd" href="https://www.google.com/amp/s/m.apkpure.com/vn/code-editor/com.rhmsoft.code/amp"><button> Download</button> </a>
    </div>
</div>
 
   <p onclick="load1()" style="color : #FFBB00">Xem lưu ý khi tải trên apkpure</p>
<h2>Cách sử dụng</h2>
 <p>- Hãy đảm bảo rằng bạn đã tải xuống và cài đặt xong Code editor.<br/>
<i><h3 style="color : #1867FF;
font-size: 35px">Cách 1 : Chạy dự án trực tiếp trên ứng dụng.</h3> </i>
<p>- Copy đoạn code phía dưới vào ứng dụng Code editor.</p>
 
 <pre class="language-html" id="press">
    <code class="line-numbers"  style="position: relative;
              left: 99px;
              top : -110px">
        <xmp>
<!--Date : 26/10/2020-->
<!-- Coder by : Vu Minh Hung-->
<!--Markup language : HTML-->
<!DOCTYPE html>
<html lang="vi">
     <head>
         <title>Trang web đầu tiên của tôi</title>
         <meta charset="UTF-8">
     </head>
     <style>
/*Code Css ở đây*/
         .wp_content {
             background: #7F7F7F;
         }
         h1 {
             color : #FF5A00;
         }
         p {
             background: #EEFF00;
         }
     </style>
     <body>
         <div class="wp_content">
             <h1> Đây là thẻ h1 </h1> <br/>
             <p> Đây là thẻ p </p> <br/>
             <r> Đây là thẻ r </r> <br/>
             <em> Đây là thẻ em </em> <br/>
             <i> Đây là thẻ i </i> <br/>
             <b> Đây là thẻ b </b>
         </div>
     </body>
</html>
   </xmp>
    </code>
  </pre>
  <p> - Lưu lại bằng tên file là <i style="color : #FF3200">index</i> và đuôi là <i style="color : #FF3900">.html</i> :  <p style="background: #FFD84C;
  color : #000000;
  width: 210px">index.html</p></p>
<img style="margin-left : 140px" src="Screenshot_20201026-201307_Code Editor.jpg" width="660" height="1200">
 <p>- Bấm vào icon phía góc dưới cùng tay phải của bạn</p>
<img style="margin-left : 140px" src="PicsArt_10-28-09.00.28.jpg" width="660" height="250">
  <p>- Dự án được hiện thị ngay trên ứng dụng.</p>
<img style="margin-left : 140px" src="Screenshot_20201026-201315_Code Editor.jpg" width="660" height="1200">
<i><h3 style="color : #1867FF;
font-size: 35px">Cách 2 : Chạy dự án thông qua IP (loopback IP) bằng trình duyệt Google Chrome.</h3> </i>
 <p>-Hãy đảm bảo rằng bản đã hiểu về IP và đã tải xuống ứng dụng PHP Sever.</p>
    <a style="font-size: 35px ;
    color:#0066D0;
    text-decoration: none"href="">Hiểu hơn về IP và cách cài đặt PHP sever tại đây.</a>
    <p>-Sau khi cài đặt xong PHP Sever hệ thống quản lý tệp tự động tạo 1 thư mục tên : "www".</p>
<img style="margin-left : 140px" src="PicsArt_10-28-09.36.50.jpg" width="660" height="250">
  <p> - Chuyển tất cả các file html,css,js,...,hình ảnh liên quan đến dự án của bạn vào đường dẫn : <p style="background: #FFD84C;
  color : #000000;
  width: 880px">Location:/storage/emulated/0/www/public </p></p>
  <p>- Di chuyển file <i style="color : #FF0D00">index.html</i> vừa tạo theo đường dẫn phía trên.</p>
  <p>-Mở ứng dụng PHP Sever,trong giao diện máy chủ cho PHP bấm vào dòng <r style="text-decoration:underline">127.0.0.1:8080</r> </p>
<img style="margin-left : 140px" src="PicsArt_10-28-09.57.34.jpg" width="660" height="1200">
 <p>- Hệ thống tự động chuyển hướng sang trình duyệt Google chrome để chạy dự án qua IP.</p>
<img style="margin-left : 140px" src="Screenshot_20201026-201619_Chrome.jpg" width="660" height="1200">
   <p><i style="color : #FF1300">- Lưu ý</i> : Đặt đúng tên file đuôi .html,để các file này đúng theo đường dẫn thư mục.</p>
    <p> <i style="color : #FF1300">- Một số lỗi phổ biến :</i></p>
      <p>•  Đặt tên sai như index.html => Index.html.</p>
      <p>•  Đặt file index.html sai vị trí thư mục.</p>
<img style="margin-left : 140px" src="Screenshot_20201028-221430_Chrome.jpg" width="660" height="1200">
<?php include 'log/seach.php';?>   
    </div>
	   </div>
	      </div>
<?php include 'log/header.html';?>  
 <?php include 'log/tabcontact.php';?>  
 <script src="rainbow-custom.min.js"> </script>
    </body>
</html>
