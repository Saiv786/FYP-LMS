@extends('layouts.home')

@section('sidebar')
    <p class="lead">Project
        <button type="button" name="add"  class="btn btn-success float-right" data-toggle="modal" data-target="#yourModal">Add Class</button>
    </p>

    <div id="class_tabs" class="list-group">
        {{-- @foreach ($courses as $list_lesson) --}}
            {{-- <a href="{{ route('lessons.show', [$list_lesson->course_id, $list_lesson->id]) }}" class="list-group-item" --}}
            {{-- <div class="input-group"> --}}
                <a href="#" class="list-group-item" onclick="changeCoder(event,0)">
                    Main
                </a>
                {{-- <span class="input-group-btn">
                      <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                    </span> --}}
            {{-- </div> --}}
        {{-- @endforeach --}}
    </div>
    <div class="modal fade" id="yourModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
         {{--  <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"></h4>
          </div> --}}
          <div class="modal-body">
                {{-- <label>Enter Class Name :</label> --}}
                <div class="mt-10">
                    <input type="text" name="class_name" id="class_name" placeholder="Class Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Class Name'"
                     required class="single-input" required="true" pattern="[A-Za-z0-9]{1,20}">
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="add" >Create</button>
            <button type="button" class="btn btn-default" id="modal-close" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
@endsection


@section('main')
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
            font-size:20px;
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
        <div id="exTab1" class="container">
            <h1 >Code Editor  </h1>
            <form method="post" action="{{ route('compiler.store') }}" onSubmit="myFunction()">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div id="status">
                        <p>
                            <i class="fa fa-spinner fa-spin fa-fw"></i>
                             generating output
                        </p>
                    </div>
                    <input type="submit" style="float:right;font-size: 20px;" class="btn btn-primary " value="Run" >
                    <div id="coder" name="coder">
                        {{$compiler['code']}}
                    </div>
                    <input type="hidden" name="code" id="code" >

            </form>
            @if (count($compiler) >0)
            <div class="preview">
                <pre>{{$compiler['output']}}</pre>
            </div>
           @endif
        </div>



    <script type="text/javascript">

        var editor = ace.edit("coder");
        editor.setTheme("ace/theme/monokai");
        editor.getSession().setMode("ace/mode/java");
        editor.getSession().setUseWorker(false);
        $('#status p').fadeOut();
        var i=0;
        var current_tab=0;
        editor.setOption("showPrintMargin", false)
        var codes=[];
        function myFunction(){
            $('#status p').fadeIn();
            $("#status p").delay(500).fadeOut(200);
            // var code = editor.getValue();
            codes[current_tab]=editor.getValue();
            var x= codes.join(':,:');
            $("#code").val(x);
            // document.getElementById('code').value=code;
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

        $('#add').click(function(){
                   i++;
                   var x=document.getElementById('class_name').value;
                   if(x!=""){
                    document.getElementById('class_name').value='';
                   $('#class_tabs').append('<div id='+i+' class="input-group code-tab"><a href="#" class="list-group-item" onclick="changeCoder(event,'+i+')"> '+x+' </a><span class="input-group-btn"><button type="button" class="btn btn-danger" onclick="onDelete(event)"><i class="fa fa-trash"></i></button></span></div>');
                   // $('#nav').append('<li class="nav-item"> <a href="#'+i+'a" data-toggle="tab">'+i+'</a>     </li>');
                   // $('#tab-content').append('<div class="tab-pane" id="'+i+'a">  <div id="coder'+i+'" name=coder'+i+'> fd</div>  </div>');
                    // var editor = ace.edit("coder"+i+"");
                    // editor.setTheme("ace/theme/monokai");
                    // editor.getSession().setMode("ace/mode/java");
                    // editor.getSession().setUseWorker(false);
                    $("#modal-close").click();
                    $('#status p').fadeOut();
                    codes[current_tab]=editor.getValue();
                    if(codes[i]){
                        editor.setValue(codes[i]);
                    }else{
                        editor.setValue('public class '+x+' {\n\tpublic void test(){\n\t\t System.out.println("Hello Worlds");\n\t}\n}');
                    }
                    current_tab=i;
                    myFunction();

                }
              });
        function onDelete(event) {
            // debugger
            $(event.target).closest('.code-tab').remove();
        }
        function changeCoder(event,count) {
            // debugger
            codes[current_tab]=editor.getValue();
            if(codes[count]){
                editor.setValue(codes[count]);
            }else{
                editor.setValue('');
            }
            current_tab=count;
        }
    </script>


</body>

</html>
@endsection
