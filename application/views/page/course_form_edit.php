<div class="panel panel-default">

    <div class="panel-heading">
        <h4>ฟอร์มเพิ่มคอร์สเรียน</h4>
    </div>


    <div class="panel-body">
        <form class="form-horizontal row-border" method="post"
              action="<?PHP echo base_url('course/editCourse'); ?>" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?=$row['course_id']?>">

            <div class="form-group">
                <label class="col-md-2 control-label">ชื่อคอร์สเรียน</label>

                <div class="col-md-10">
                    <input type="text" name="name" value="<?=$row['course_name']?>" class="form-control"
                           required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">วันที่สอน</label>

                <div class="col-md-10">
                    <input type="text" name="day" value="<?=$row['course_day']?>"  class="form-control"
                           required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label">Credit</label>

                <div class="col-md-10">
                    <input type="text" name="credit" value="<?=$row['course_credit']?>"  class="form-control numberOnly"
                           required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-2 control-label" numberOnly>รายละเอียด</label>

                <div class="col-md-10">
                    <textarea name="deatil" class="form-control" style="height: 120px;" required><?=$row['course_detail']?></textarea>
                </div>
            </div>



            <center>
                <button type="submit" class="btn btn-info btn-lg">
                    <i class="fa fa-save"></i> แก้ไข
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
