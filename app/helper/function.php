<?php


// hàm show lôi request
 function ShowError($errors,$name)
 {  
    if($errors->has($name))

    return '
            <div class="alert alert-danger alert-dismissible fade show" style="padding: 0; background: none; border: none">
                <button type="button" class="close" data-dismiss="alert" style="padding: 0">&times;</button>
                <strong>'.$errors->first($name).'</strong>
            </div>
            <script
                src="https://code.jquery.com/jquery-3.4.1.js"
                integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
                crossorigin="anonymous">
            </script>
            <script >
                $(\'.form-control\').css(\'border\',\'1px solid red\');
            </script>
           ';
 }
