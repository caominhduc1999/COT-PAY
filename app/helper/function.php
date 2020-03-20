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
           ';
 }



 // hàm show  thông báo thành công

 function ShowSuccess($success)
 {
    if(session($success))
    return '
        <div style="position: fixed;right: 10px;top: 75px; background:#e4f0fb;" class="time alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Thành công! </strong>'.session($success).'
        </div>
    ';
 }

// hàm show  thông báo thất bại
 function ShowDanger($danger)
 {
    if(session($danger))
    return '
        <div style="position: fixed;right: 10px;top: 75px; " class="time alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Thất Bại! </strong>'.session($danger).'
        </div>
    ';
 }