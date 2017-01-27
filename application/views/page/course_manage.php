<div class="panel panel-default">

    <div class="panel-heading">
        <h4>จัดการข้อมูลคอร์สเรียน</h4>
        <ul class="links">
            <li>
                <a href="<?PHP echo base_url('course/addCoursePage'); ?>" data-original-title="" title="">
                    <i class="fa fa-plus"></i> เพิ่มข้อมูลคอร์สเรียน
                </a>
            </li>
        </ul>
    </div>


    <div class="panel-body">
        <div class="table-responsive">
            <table
                class="table table-condensed table-striped table-bordered table-hover no-margin"
                data-toggle="table" data-url="<?PHP echo base_url('course/getCourseByJson'); ?>" data-search="true"
                data-pagination="true" data-sort-name="id" data-sort-order="asc">
                <thead>
                <tr>
                    <th data-field="course_code" data-width="200">รหัสคอร์สเรียน</th>
                    <th data-field="course_name">ชื่อคอร์สเรียน</th>
                    <th data-field="course_type">ประเภท</th>
                    <th data-field="course_day">วันที่สอน</th>
                    <th data-field="course_credit">Credit</th>
                    <th data-field="course_status" data-align="right">สถานะ</th>
                    <th data-field="course_date" data-align="right">เพิ่มเมื่อ</th>
                    <th data-field="close" data-width="90">ปิดถาวร</th>
                    <th data-field="action" data-width="100">จัดการ</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>

</div>