<script type="text/javascript">
    function contact_us_click(){
        var status = $("#contact_us_method").attr('style');

        if(status == "display:none;"){
            $("#contact_us_method").attr('style',"");
        } else {
            $("#contact_us_method").attr('style',"display:none;");
        }
    }
    $("#contact_us").click(contact_us_click);
    $("#contact_us_method").attr('style',"display:none;");
</script>
