<footer>
    Copyright Cloud Admin <span>2015</span>. All Rights Reserved.
</footer>

<script>
    $(document).ready(function(){
        $("#menu ul li:nth-child(<?=$active;?>)").addClass("active");

        $(".search").append("<span>ค้นหา : </span>");

        $('input.numberOnly').keyup(function(e)
        {
            if (/\D/g.test(this.value))
            {
                // Filter non-digits from input value.
                this.value = this.value.replace(/\D/g, '');
            }
        });
    });
</script>