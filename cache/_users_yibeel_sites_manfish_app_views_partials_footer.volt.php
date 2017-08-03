<div class="footer" style="padding-bottom : 45px;">
    <div style="display: inline-block;">
        Copyright © 2015-2017mandifish.com.蒙ICP备15003789
    </div>
    <div class="copyright"  >
        <a href="">版权声明</a>
        &nbsp;
        &nbsp;
        |
        &nbsp;
        &nbsp;
        <a href="">关于价格</a>
        &nbsp;
        &nbsp;
        |
        &nbsp;
        &nbsp;
        <a href="">常见问题</a>
        &nbsp;
        &nbsp;
        |
        &nbsp;
        &nbsp;
        <a href="">联系我们</a>
    </div>
</div>
    <?= $this->tag->javascriptInclude('/js/app.js') ?>

<script>

    window.onload = function () {
        var height = $(document.body).height();
        var star = $('.stars').height(height);
        $('.twinkling').height(height);
    };
    
</script>

</body>
</html>
