<div class="panel panel-default">

    <div class="panel-heading">
        <h4>ลงทะเบียนเรียน</h4>
    </div>

    <?PHP
    $code= "";
    if (isset($_GET['code'])) {
        $code= $_GET['code'];
    }

    ?>


    <div class="panel-body">

        <form action="" class="form-horizontal row-border">
            <div class="form-group">
                <label class="col-md-4 control-label">กรุณารหัสวิชา</label>

                <div class="col-md-5">
                    <input type="text" class="form-control" name="code" value="<?=$code;?>">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">เรียกดู</button>
                </div>
            </div>
        </form>
        <hr class="col-md-12">

        <?PHP if (isset($_GET['code'])) { ?>
            <div class="col-md-12">
                <div class="table-responsive">

                </div>
            </div>
        <?PHP } ?>
    </div>

</div>
