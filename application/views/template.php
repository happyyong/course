<!DOCTYPE html>
<html lang="en">
<head>
    <?PHP $this->load->view('load/script'); ?>
</head>

<body>

<!-- Left sidebar start -->
<aside id="sidebar">

    <!-- Logo starts -->
    <a href="#" class="logo">
        <img src="<?PHP echo base_url(); ?>assets/img/logo.png" alt="logo">
    </a>
    <!-- Logo ends -->

    <!-- Menu start -->
    <?PHP $this->load->view('load/menu'); ?>
    <!-- Menu End -->


</aside>
<!-- Left sidebar end -->

<!-- Dashboard Wrapper Start -->
<div class="dashboard-wrapper">

    <!-- Header start -->
    <?PHP $this->load->view('load/header'); ?>
    <!-- Header ends -->

    <!-- Main Container Start -->
    <div class="main-container">

        <!-- Top Bar Starts -->
        <div class="top-bar clearfix">
            <div class="page-title">
                <h4>
                    <div class="fs1" aria-hidden="true" data-icon="&#xe007;"></div>
                    ระบบการจัดการคอร์ส <a href="#" class="samll">สำหรับ<?PHP echo member_status($this->session->userdata('member_status')); ?></a></h4>
            </div>

        </div>
        <!-- Top Bar Ends -->

        <!-- Container fluid Starts -->
        <div class="container-fluid">

            <!-- Spacer starts views -->

            <div class="spacer-xs">
                <div class="row no-gutter">
                    <div class="col-md-12">
                        <?PHP $this->load->view($page); ?>
                    </div>
                </div>
            </div>

            <!-- Spacer ends views -->

        </div>
        <!-- Container fluid ends -->

    </div>
    <!-- Main Container Start -->

    <!-- Footer Start -->
    <?PHP $this->load->view('load/footer'); ?>
    <!-- Footer end -->



</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form action="process/edit_profile.php" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">ฟอร์มเปลี่ยนรหัสผ่าน</h4>
                </div>
                <div class="modal-body" style="min-height: 100px;">
                    <div class="form-group">
                        <label class="col-md-2 control-label">รหัสผ่านใหม่</label>

                        <div class="col-md-10">
                            <input type="text" name="password" value="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-primary">แก้ไข</button>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>