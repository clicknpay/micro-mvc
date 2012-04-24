    
    </div>
    <div class="footer_wrap">
        
        <div style="float:right;">
        <?php
        $time = microtime();
        $time = explode(' ', $time);
        $time = $time[1] + $time[0];
        $finish = $time;
        $total_time = round(($finish - START), 4);
        echo 'Page generated in '.$total_time.' seconds. &nbsp;';
        ?> 
        </div>        
       
        <div id="test1"></div>
        <div id="test2"></div>
    </div>
</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!-- [JS TEMPLATE - EDIT AS NEEDED] -->
<script type="text/javascript" src="<?php echo JS_PATH . 'main.js'; ?>"></script> 
<!-- [SAMPLE JS METHOD CALLS - NOT REQUIRED ] -->    
<?php if (GET_URL == ''): ?> 
<!-- [USE ONE OF THESE DOC READY FUNCTIONS TO CALL YOUR JS. NOT REQUIRED] -->
<script type="text/javascript">(function($){ test1() })(jQuery);</script>
<script type="text/javascript">$(function(){ test2() });</script>
<?php else: ?>
<script type="text/javascript">(function($){ test3() })(jQuery);</script>
<?php endif; ?> 
<!-- [SAMPLE JS METHOD CALLS - NOT REQUIRED ] --> 

</body>
</html>