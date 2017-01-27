<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>

    <link href="<?PHP echo base_url(); ?>assets/css/login.css" rel="stylesheet" media="screen">
    <link href="<?PHP echo base_url(); ?>assets/fonts/font-awesome.min.css" rel="stylesheet">
    <script src="<?PHP echo base_url(); ?>assets/js/jquery.js"></script>
    <style>
        #box {
            height: auto;
            width: 650px;
            margin-left: -325px;
            top: 40%;
        }

        input[type=text], input[type=password], input[type=email] {
            width: 520px;
        }

        .form-controls i {
            right: 80px;
        }
    </style>
</head>
<body>
<form action="<?PHP echo base_url(); ?>account/register" method="post" id="wrapper">
    <div id="box" class="animated bounceIn">
        <div id="top_header">

            <h5>
                <img src="<?PHP echo base_url(); ?>assets/img/logo.png" alt="">
            </h5>
        </div>
        <div class="form-controls">
            <input type="text" placeholder="ชื่อ" name="name" required>
            <i class="fa fa-pencil"></i>
        </div>
        <div class="form-controls">
            <input type="text" placeholder="นามสกุล" name="lastname" required>
            <i class="fa fa-pencil"></i>
        </div>
        <div class="form-controls">
            <input type="text" placeholder="ชื่อผู้ใช้งาน" name="username" required>
            <i class="fa fa-user"></i>
        </div>
        <div class="form-controls">
            <input type="password" placeholder="รหัสผ่าน" name="password" required>
            <i class="fa fa-key"></i>
        </div>
        <div class="form-controls">
            <input type="password" placeholder="ยืนยันรหัสผ่าน" name="re_password" required>
            <i class="fa fa-key"></i>
        </div>
        <div class="form-controls">
            <input type="email" placeholder="อีเมล์" name="email" required>
            <i class="fa fa-user"></i>
        </div>
        <div style="text-align: center; color: #000; margin: 25px;">
            <input type="radio" name="status" value="0" checked>
            นักเรียน
            &nbsp;
            &nbsp;
            |
            &nbsp;
            &nbsp;
            <input type="radio" name="status" value="1">
            อาจารย์
        </div>
        <input type="submit" value="สมัครสมาชิก">

        <div id="bottom" style="text-align: center">
            <a href="<?PHP echo base_url('account'); ?>">ย้อนกลับ</a>
        </div>
    </div>
</form>

<script>
    $(document).ready(function () {
        $("input[name='re_password']").change(function () {
            var ps = $("input[name = 'password']").val();
            var rps = $("input[name = 're_password']").val();
            if (ps != rps) {
                alert("รหัสผ่านไม่เหมือนข้างบน");
                $(this).val("");
                $(this).focus();
            }
        });
    });
</script>

</body>
</html>