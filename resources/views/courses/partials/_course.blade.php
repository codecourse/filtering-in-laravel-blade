<div class="media">
    <div class="media-left">
        <a href="#"><img src="http://via.placeholder.com/64x64&text=..." alt="{{ $course->name }}"></a>
    </div>
    <div class="media-body">
        @if ($course->subjects->count())
            <ul class="list-inline">
                @foreach ($course->subjects as $subject)
                    <li>{{ $subject->name }}</li>
                @endforeach
            </ul>
        @endif
        <h4 class="media-heading">{{ $course->name }}</h4>
        <ul class="list-inline">
            <li>{{ $course->formattedAccess }}</li>
            <li>{{ $course->formattedDifficulty }}</li>
            <li>{{ $course->formattedType }}</li>
            <li>{{ $course->formattedStarted }}</li>
        </ul>
    </div>
</div>