@extends('layouts.user_layout')

@section('sidebar')
<div class="col-md-3">

    <p class="lead">{{ $lesson->course->title }}</p>

    <div class="list-group">
        @foreach ($lesson->course->publishedLessons as $list_lesson)
            <a href="{{ route('lessons.show', [$list_lesson->course_id, $list_lesson->id]) }}" class="list-group-item"
                @if ($list_lesson->id == $lesson->id) style="font-weight: bold" @endif>{{ $loop->iteration }}. {{ $list_lesson->title }}</a>
        @endforeach
    </div>
</div>
@endsection

@section('main')
<div class="col-md-9">
    <div class="row">

    @if ($previous_lesson)
        <p ><a class="genric-btn primary circle" href="{{ route('lessons.show', [$previous_lesson->course_id, $previous_lesson->id]) }}"><< {{ $previous_lesson->title }}</a></p>
    @endif
    @if ($next_lesson)
        <p ><a class="genric-btn primary circle" href="{{ route('lessons.show', [$next_lesson->course_id, $next_lesson->id]) }}">{{ $next_lesson->title }} >></a></p>
    @endif
</div>

                <div class="row">
    <h2>{{ $lesson->title }}</h2>

    @if ($purchased_course || $lesson->free_lesson == 1)
        <div style="overflow-x:auto;overflow-y: auto ">

            {!! $lesson->full_text !!}
        </div>
        <pre>
            {!! $lesson->code !!}

        </pre>
        @if($lesson->code )
            <div class="text-right"><a class="btn btn-primary" href="/editor/{{$lesson->id}}"> Try it</a> </div>
        @endif
        @else
        Please <a href="{{ route('courses.show', [$lesson->course->id]) }}">go back</a> and buy the course.
        @endif
</div>
<div class="row">
    
    @if ($previous_lesson)
        <p ><a class="genric-btn primary circle" href="{{ route('lessons.show', [$previous_lesson->course_id, $previous_lesson->id]) }}"><< {{ $previous_lesson->title }}</a></p>
    @endif
    @if ($next_lesson)
    <p ><a class="genric-btn primary circle" href="{{ route('lessons.show', [$next_lesson->course_id, $next_lesson->id]) }}" >{{ $next_lesson->title }} >></a></p>
    @endif
    @if ($test_exists)
    <p ><a class="genric-btn primary circle"  data-toggle="modal" data-target="#yourModal" onclick="myfunc()">Take Test >></a></p>
    <div class="modal fade" id="yourModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-body">
    <section>
    
        <br />
        <h3>Test: {{ $lesson->test->title }}</h3>
        <div  id="clockdiv">
            <div class="col clockinner clockinner1">
                <h1 class="seconds">15</h1>
                <span class="smalltext">Secs</span>
            </div>
        </div>
        @if ($test_result)
        <div class="alert alert-info">Your test score: {{ $test_result->test_result }}</div>
        
        <form action="{{ route('lessons.test', [$lesson->id]) }}" method="post">
                {{ csrf_field() }}
            @foreach ($lesson->test->questions as $question)
            <b>{{ $loop->iteration }}. {{ $question->question }}</b>
            <br />
                @foreach ($question->options as $option)
                <input type="radio" name="questions[{{ $question->id }}]" value="{{ $option->id }}" /> {{ $option->option_text }}<br />
                @endforeach
                <br />
                @endforeach
            <input id="modalclose" type="submit" value=" Submit results " />
        </form>
        @endif
        <hr />
    </section>
                </div>
            </div>
            </div>
    </div>
    
    @endif
</div>
</div>

<script type="text/javascript">
    
    // $('#yourModal').on('show.bs.modal', function(){
    //     var yourModal = $(this);
    //     clearTimeout(yourModal.data('hideInterval'));
    //     yourModal.data('hideInterval', setTimeout(function(){
    //         yourModal.modal('hide');
    //     }, 3000));
    // });
    function myfunc(){

        setTimeout(function(){
            $("#modalclose").click();
            
            // $("#yourModal").hide();
        }, 15000);
    }
    $('#yourModal').on('shown', function () {
    });
    </script>
@endsection