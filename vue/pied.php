
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
    $(function() {
      if ($.browser.msie && $.browser.version.substr(0,1)<7)
      {
        $('li').has('ul').mouseover(function(){
            $(this).children('ul').css('visibility','visible');
            }).mouseout(function(){
            $(this).children('ul').css('visibility','hidden');
            })
      }
    });        
</script>
</body>
</html>