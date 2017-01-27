<div class="panel panel-default">

    <div class="panel-heading">
        <h4>ฟอร์มเพิ่มคอร์สเรียน</h4>
    </div>

    <div class="panel-body">
        <form class="form-horizontal row-border" method="post"
              action="<?PHP echo base_url('course/addCourse'); ?>" enctype="multipart/form-data">

            <div class="form-group">
                <label class="col-md-2 control-label">ชื่อคอร์สเรียน</label>

                <div class="col-md-10">
                    <input type="text" name="name" class="form-control"
                           required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">วันที่สอน</label>

                <div class="col-md-10">
                    <input type="text" name="day" class="form-control"
                           required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Credit</label>

                <div class="col-md-10">
                    <input type="text" name="credit" class="form-control numberOnly"
                           required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" numberOnly>รายละเอียด</label>

                <div class="col-md-10">
                    <textarea name="deatil" class="form-control" style="height: 120px;" required></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">ประเภท</label>

                <label class="radio-inline" style="margin-left: 20px;">
                    <input type="radio" name="type" value="0" checked> ระบบเปิด
                </label>
                <label class="radio-inline" style="margin-left: 20px;">
                    <input type="radio" name="type" value="1"> ระบบปิด
                </label>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">จำนวนคนที่รับ</label>

                <div class="col-md-10">
                    <input type="text" name="limit"
                           class="form-control numberOnly" maxlength="2" required>
                </div>
            </div>


            <center>
                <button type="submit" class="btn btn-info btn-lg">
                    <i class="fa fa-save"></i> บันทึก
                </button>
            </center>
        </form>
    </div>


</div>

<script>
    $(document).ready(function () {
        $("input[name='type']").change(function(){
            var data = $(this).val();

            if(data == "1"){
                $("input[name='limit']").prop('readonly', true);
            }else{
                $("input[name='limit']").prop('readonly', false);

            }
        });
    });
</script>
