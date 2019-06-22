@extends('layouts.home')
@section('content')
<head>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.3/ace.js"></script>
  <script src="https://use.fontawesome.com/1bc4308c1f.js"></script>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<style type="text/css">
    *{margin:0;padding:0;box-sizing:border-box;}

body,html{
    height:100%;
}

#wrap{
    height:100%;
    position:relative;
    padding:0px 50px;
    background:#ccc;
}

#coder{
    display:block;
    position:relative;
    width:100%;
    height:400px;
    border:3px solid red;
}
#preview{
    display:block;
    position:relative;
    width:100%;
    height:50%;
    border:3px solid blue;
    background:#ccc;

}
#preview iframe{
        width:100%;
        height:100%;
        border:none;
    }
#status{
    padding:25px 0;
    height:50px;
}
</style>

</head>

<body>
<div id="wrap">

{{-- <div class="container"><h1>Code Editor  </h1></div> --}}
<div id="exTab1" class="container">
{{-- <ul  class="nav nav-tabs" name="nav" id="nav">
            <li class="active">
                <a  href="#1a" class="nav-item" data-toggle="tab">Overview</a>
            </li>

        </ul>
                <button type="button" name="add" id="add" class="btn btn-success">Add </button>

            <div class="tab-content clearfix" name="tab-content" id="tab-content">
              <div class="tab-pane active" id="1a">
                <div id="coder" name=coder>
                    {{$compiler['code']}}
                </div>
              </div>
            </div> --}}


    <form method="post" action="{{ route('compiler.store') }}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div id="status">
                <p>
                    <i class="fa fa-spinner fa-spin fa-fw"></i>
                     generating output
                </p>
            </div>

            <div id="coder" name=co der>
                {{$compiler['code']}}
            </div>

            <input type="hidden" name="code" id="code" >
            <input type="submit" value="Run" onclick="myFunction()">
           <input type="submit" value="Cancel">
    </form>

    @if (count($compiler) >0)
        <pre>{{$compiler['output']}}</pre>

   @endif

</div>


<script type="text/javascript">
var editor = ace.edit("coder");
editor.setTheme("ace/theme/monokai");
editor.getSession().setMode("ace/mode/java");
editor.getSession().setUseWorker(false);
$('#status p').fadeOut();
var i=1;

function myFunction(){
    $('#status p').fadeIn();

    $("#status p").delay(500).fadeOut(200);

    var code = editor.getValue();
    // document.getElementById('code').value=code;
    $("#code").val(code);
    // var iframe = document.createElement('iframe');

    // var preview = document.getElementById('preview');
    // var content = '<!doctype html>' + code;

    // preview.appendChild(iframe);

    // iframe.contentWindow.document.open('text/htmlreplace');
    // iframe.contentWindow.document.write(content);
    // iframe.contentWindow.document.close();

    // $("#preview").html(code);

}

// myFunction();

var timeout;

// $('#search-form .search-terms').on('keydown', function(e){
//     // get keycode of current keypress event
//     var code = (e.keyCode || e.which);

//     // do nothing if it's an arrow key
//     if(code == 37 || code == 38 || code == 39 || code == 40) {
//         return;
//     }

//     // do normal behaviour for any other key
// });

// $("#coder").on('keyup', function() {
//     $("#status p").fadeIn(200);

//     console.log("yea");

//     if(timeout) {
//         clearTimeout(timeout);
//         timeout = null;
//     }

//     $("#preview").empty();
//     timeout = setTimeout(myFunction, 500)

// });
$('#add').click(function(){
           i++;
           $('#nav').append('<li class="nav-item"> <a href="#'+i+'a" data-toggle="tab">'+i+'</a>     </li>');
           $('#tab-content').append('<div class="tab-pane" id="'+i+'a">  <div id="coder'+i+'" name=coder'+i+'> fd</div>  </div>');
var editor = ace.edit("coder"+i+"");
editor.setTheme("ace/theme/monokai");
editor.getSession().setMode("ace/mode/java");
editor.getSession().setUseWorker(false);
$('#status p').fadeOut();
myFunction();
      });
    </script>


</body>

</html>
@endsection
