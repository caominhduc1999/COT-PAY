<?php


// hàm show lôi request
 function ShowError($errors,$name)
 {  
    if($errors->has($name))
    return '
            <div class="alert alert-warning alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>'.$errors->first($name).'</strong>
            </div>
           ';
 }