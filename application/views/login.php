<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>

    <link href="<?PHP echo base_url(); ?>assets/css/login.css" rel="stylesheet" media="screen">
    <link href="<?PHP echo base_url(); ?>assets/fonts/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<form action="<?PHP echo base_url(); ?>account/login" method="post" id="wrapper">
    <div id="box" class="animated bounceIn">
        <div id="top_header">

            <h5>
                <img src="<?PHP echo base_url(); ?>assets/img/logo.png" alt="">
            </h5>
        </div>
        <div class="form-controls">
            <input type="text" placeholder="ชื่อผู้ใช้งาน" name="username">
            <i class="fa fa-user"></i>
        </div>
        <div class="form-controls">
            <input type="password" placeholder="รหัสผ่าน" name="password">
            <i class="fa fa-key"></i>
        </div>
        <input type="submit" value="เข้าสู่ระบบ">

        <div id="bottom" style="text-align: center;">
            <a href="<?PHP echo base_url('account/register_index'); ?>">สมัครสมาชิกที่นี่</a>
        </div>
    </div>
</form>
</body>
</html>