<!DOCTYPE html>
<html>
<head>
    <title>Ajax Dynamic Dependent Dropdown in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;
        }
    </style>
</head>
<body>
<br />
<div class="container box">
    <h3 align="center">Ajax Dynamic Dependent Dropdown in Laravel</h3><br />
    <div class="form-group">
        <select name="name" id="name" class="form-control input-lg dynamic">
            <option value="">Select City</option>
            @foreach($country_list as $country)
                <option value="{{ $country->name}}">{{ $country->name }}</option>
            @endforeach
        </select>
    </div>
    <br />
    <div class="form-group">
        <select name="districts" id="districts" class="form-control input-lg">
            <option value="">Select District</option>
        </select>
    </div>
    <br />
    <br />
    <br />
</div>
</body>
</html>
<script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){

        $('.dynamic').change(function(){
            if($(this).val() != '')
            {
                var value = $(this).val();

                $.ajax({
                    url:"{{ route('dynamicdependent.fetch') }}",
                    method:"GET",
                    data:
                        {value:value},
                    success:function(result)
                    {
                        $('#districts').html(result);
                    }

                })
            }
        });

        $('#name').change(function(){
            $('#districts').val('');
        });
    });
</script>
