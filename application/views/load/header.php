<header>
    <ul class="pull-left" id="left-nav">
        <li class="hidden-lg hidden-md hidden-sm">
            <div class="logo-mob clearfix">
                <h2>
                    <div class="fs1" aria-hidden="true" data-icon="&#xe0db;"></div>
                    <span>Cloud Admin</span></h2>
            </div>
        </li>
    </ul>
    <div class="pull-right">
        <ul id="mini-nav" class="clearfix">
            <li class="list-box hidden-xs dropdown">

                <a id="drop1" href="#" role="button" class="dropdown-toggle current-user" data-toggle="dropdown">
                    ยินดีต้อนรับ
                    <?PHP echo member_status($this->session->userdata('member_status'));?>
                    คุณ <?PHP echo $this->session->userdata('member_name'); ?>
                    <?PHP echo $this->session->userdata('member_lastname'); ?>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu sm fadeInUp animated messages">
                    <li class="dropdown-content">
                        <a href="#" data-toggle="modal" data-target="#myModal">เปลี่ยนรหัสผ่าน</a>
                        <a href="<?PHP echo base_url('account/logout'); ?>">Logout</a>
                    </li>
                </ul>
            </li>
            <li class="list-box hidden-lg hidden-md hidden-sm" id="mob-nav">
                <a href="#">
                    <i class="fa fa-reorder"></i>
                </a>
            </li>
        </ul>
    </div>
</header>