<script type="text/javascript">
    function filterContent(str){
        var without_backspace = str.replace(/\n/g,"<br/>");
        var without_space = without_backspace.replace(/\s/g,"&nbsp;&nbsp;");

        return without_space;
    }
    function filterContentBackSpace(str){
        return str.replace(/\n/g,"<br/>");
    }
    function processReturn(result){
        if(result.status == 0){
            window.localtion.href="http://blog.fxycarl.org";
        }else{
            alert(result.content);
        }
    }
    function blogSubmit(){
        var title = $("#title").val();
        var label = $("#label").val();
        var content = $("#content").val();

        var content_tmp = filterContent(content);//filterContentSpace(content);

        $.post('http://blog.fxycarl.org/Ajax/Submit/Blog',{'title':title,'label':label,'content':content_tmp},processReturn,'json');
    }
    function blogClear(){
        $("#title").val('');
        $("#label").val('');
        $("#content").val('');
    }
    $("#submit").click(blogSubmit);
    $("#clear").click(blogClear);
</script>
