@extends ("layouts.default")


@section ("content")

<div>

<div class="jumbotron">
    <div class="container text-center">
        <h1>{{$title}}</h1>
        <p>Some text that represents "Me"...</p>
    </div>
</div>


@foreach($students as $student)
<p>
    
ID: {{$student->id}}
Name: {{$student->name}}
Email: {{$student->email}}

</p>
@endforeach


</div>

@endsection

