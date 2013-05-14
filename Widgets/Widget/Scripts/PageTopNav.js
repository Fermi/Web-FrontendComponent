<script type="text/javascript">
    function settings_click(){
        var style = $("#settings_list").attr('style');
        if(style == 'display:none;'){
            $('#settings_list').attr('style',"");
        } else {
            $("#settings_list").attr('style',"display:none;");
        }
    }
    $("#settings").click(settings_click);
    $("#settings_list").attr('style',"display:none;");
</script>
