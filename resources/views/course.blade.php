@extends('layouts.user_layout')

@section('sidebar')
            <div class="col-md-3">

    <p class="lead">{{ $course->title }}</p>

    <div class="list-group">
        @foreach ($course->publishedLessons as $list_lesson)
            <a href="{{ route('lessons.show', [$list_lesson->course_id, $list_lesson->id]) }}" class="list-group-item"
                >{{ $loop->iteration }}. {{ $list_lesson->title }}</a>
        @endforeach
    </div>
</div>
@endsection

@section('content')


    <h2>{{ $course->title }}</h2>

    @if ($purchased_course)
        Rating: {{ $course->rating }} / 5
        <br />
        <br />
        <b>Rate the course:</b>
        <br />
        <form action="{{ route('courses.rating', [$course->id]) }}" method="post">
            {{ csrf_field() }}
            <select name="rating">
                <option value="1">1 - Awful</option>
                <option value="2">2 - Not too good</option>
                <option value="3">3 - Average</option>
                <option value="4" selected>4 - Quite good</option>
                <option value="5">5 - Awesome!</option>
            </select>
            <input type="submit" value="Rate" />
        </form>
        <hr />
    @endif

    <p>{{ $course->description }}</p>


    @foreach ($course->publishedLessons as $lesson)
        {{-- @if ($lesson->free_lesson)(FREE!)@endif  --}}
        <h4>
        {{ $loop->iteration }}.
        <a href="{{ route('lessons.show', [$lesson->course_id, $lesson->id]) }}" style="font:  normal bold 1.3em/1.5 sans-serif;">{{ $lesson->title }}</a>
        </h4>

        <p>{{ $lesson->short_text }}</p>
        <hr />
    @endforeach

@endsection