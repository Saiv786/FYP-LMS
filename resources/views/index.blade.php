@extends('layouts.user_layout')
@section('sidebar')
<div class="col-md-2">


</div>
@endsection
@section('content')
<div class="col-md-9">

        <div class="row">
    @if (!is_null($purchased_courses))
        <h3>My courses</h3>
        <div class="row">

        @foreach($purchased_courses as $course)
            <div class="col-sm-4 col-lg-4 col-md-4">
                <div class="thumbnail">
                    @if($course->course_image)
                        <img src="{{ asset('uploads/thumbs/' . $course->course_image) }}" alt="">
                    @endif
                    <div class="caption">
                        <h4><a href="{{ route('courses.show', [$course->id]) }}">{{ $course->title }}</a>
                        </h4>
                        <p>{{ $course->description }}</p>
                    </div>
                    <div class="ratings">
                        <p>Progress: {{ Auth::user()->lessons()->where('course_id', $course->id)->count() }}
                            of {{ $course->lessons->count() }} lessons</p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <hr />

    @endif

    <h1>All courses</h1>
    <div class="row">
    @foreach($courses as $course)
        <div class="col-sm-4 col-lg-4 col-md-4" >
            <div class="thumbnail" style="height:400px">
                @if($course->course_image)
                <img src="{{ asset('uploads/thumbs/' . $course->course_image) }}" alt="">
                @endif
                <div class="caption">

                    <h4><a href="{{ route('courses.show', [$course->id]) }}">{{ $course->title }}</a>
                    </h4>
                    <p>
                        {{-- {{ str_limit($course->description , $limit = 10, $end = '...') }} --}}
                            {!! \Illuminate\Support\Str::words($course->description, 20,' ....')  !!}

                        {{-- {{ $course->description }} --}}
                    </p>
                </div>
                {{-- <div class="ratings">
                    <p class="pull-right">Students: {{ $course->students()->count() }}</p>
                    <p>
                        @for ($star = 1; $star <= 5; $star++)
                            @if ($course->rating >= $star)
                                <span class="glyphicon glyphicon-star"></span>
                            @else
                                <span class="glyphicon glyphicon-star-empty"></span>
                            @endif
                        @endfor
                    </p>
                </div> --}}
            </div>
        </div>
    @endforeach
    </div>
        </div>
</div>

@endsection