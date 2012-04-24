            <?php require(LIB_PATH.'Unit_test.php'); ?>
            <div class='page_wrapper'>
            <h4>Welcome to the ClicknPay Micro-MVC Framework </h4>
            <p>
                You have successfully installed the ClicknPay mico-mvc framework.<br>
            </p>

            <p>
            <ul class='message_list'>
                <li><b>Template Test - </b>See the header and the footer in this page? Templates work.</li>
                <?php //echo Unit_test::run('Foo', 'is_string');?>
                <li><b>jQuery Test - </b>See &quot;Testing jQuery Install&quot; message below?<br>
                    This tells you if jQuery is working and if the path to the JS files is correct. 
                </li>
                <li><b>CSS Path Test - </b>Is the header blue?</li>
                <li><b>Image Path Test - </b>See the CNP logo?</li>
                <li><b>Router Test - </b>Click &quot;About us&quot;. If you see the &quot;About Us&quot; page, router works. </li>
                <li><b>Arg Test - </b>Click &quot;About us - with arg&quot;. If you see the page and the arg, passed argument works.</li>
                <li><b>Dashboard Redirect Test - </b>Click &quot;Dashboard&quot;. If you're redirected to login page, redirect works.</li>
                <li><b>Session Test - </b>Click &quot;Login&quot; and if login works.. The sessions work.</li>
                <li><b>Database Test - </b>Click &quot;Login&quot; and if login works.. The database is working.</li>
                <li><b>Contact Test - </b>Click &quot;Contact us&quot; and send yourself an email. NOTE:: Feature must be turned on in config file</li>
            </ul>
            </p>    
            </div>