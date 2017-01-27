<div id='menu'>
    <ul>

        <li>
            <a href='<?PHP echo base_url('member/index'); ?>'>
                <span><i class="fa fa-home" style="margin-right: 8px;"></i> หน้าแรก</span>
            </a>
        </li>

        <!-- Menu ผู้จัดการ -->
        <?PHP if ($this->session->userdata('member_status') == 1) { ?>
            <li>
                <a href='#'>
                    <span><i class="fa fa-edit" style="margin-right: 8px;"></i> อนุมัติการเข้าคอร์ส [ 0 ]</span>
                </a>
            </li>
            <li>
                <a href='<?PHP echo base_url('course/index'); ?>'>
                    <span><i class="fa fa-book" style="margin-right: 8px;"></i> จัดการคอร์สสอน</span>
                </a>
            </li>
            <li>
                <a href='#'>
                    <span><i class="fa fa-male" style="margin-right: 8px;"></i> จัดการนักเรียนแต่ละคอร์ส</span>
                </a>
            </li>
            <li>
                <a href='#'>
                    <span><i class="fa fa-male" style="margin-right: 8px;"></i> จัดการกลุ่มแต่ละคอร์ส</span>
                </a>
            </li>
            <li>
                <a href='#'>
                    <span><i class="fa fa-user" style="margin-right: 8px;"></i> จัดการข้อสอบเดี๋ยว</span>
                </a>
            </li>
            <li>
                <a href='#'>
                    <span><i class="fa fa-users" style="margin-right: 8px;"></i> จัดการข้อสอบกลุ่ม</span>
                </a>
            </li>
            <li>
                <a href='#'>
                    <span><i class="fa fa-line-chart" style="margin-right: 8px;"></i> กราฟการทำข้อสอบ</span>
                </a>
            </li>
            <li>
                <a href='#'>
                    <span><i class="fa fa-file-text" style="margin-right: 8px;"></i> รายงานสรุป</span>
                </a>
            </li>

        <?PHP } ?>


        <!-- Menu การคลัง -->
        <?PHP if ($this->session->userdata('member_status') == 0) { ?>
            <?PHP if (isset($_GET['true'])) { ?>

                <li>
                    <a href='#'>
                        <span><i class="fa fa-cubes" style="margin-right: 8px;"></i> แบบประเมินเดี่ยว [ 0 ]</span>
                    </a>
                </li>
                <li>
                    <a href='#'>
                        <span><i class="fa fa-cubes" style="margin-right: 8px;"></i> แบบประเมินกลุ่ม [ 0 ]</span>
                    </a>
                </li>
                <li>
                    <a href='#'>
                        <span><i class="fa fa-cubes" style="margin-right: 8px;"></i> ประวัติการตอบเดี๋ยว</span>
                    </a>
                </li>
                <li>
                    <a href='#'>
                        <span><i class="fa fa-cubes" style="margin-right: 8px;"></i> ประวัติการตอบกลุ่ม</span>
                    </a>
                </li>
                <li>
                    <a href='?'>
                        <span><i class="fa fa-cubes" style="margin-right: 8px;"></i> ออกห้องเรียน</span>
                    </a>
                </li>
            <?PHP } else { ?>
                <li>
                    <a href='<?PHP echo base_url('register'); ?>'>
                        <span><i class="fa fa-cubes" style="margin-right: 8px;"></i> ลงทะเบียนเรียน</span>
                    </a>
                </li>
                <li>
                    <a href='?true'>
                        <span><i class="fa fa-file" style="margin-right: 8px;"></i> เข้าห้องเรียน</span>
                    </a>
                </li>
            <?PHP } ?>
        <?PHP } ?>


    </ul>
</div>