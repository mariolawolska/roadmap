@include('layout.head')

<header>
    <div class="container text-center">
    </div>
</header>
<section class="timeline">
    <div class="container">
        @foreach($projects as $key => $project)
        <div class="timeline-item ">
            <div class="timeline-img"  ></div>
            <div class="p-st timeline-content timeline-card {{ $key % 2 == 0 ? 'jsfadeInLeft' :'jsfadeInRight'}}">
                <div class="timeline-img-header" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4)), url('{{$project->link_image}}') center center no-repeat; background-size: cover">
                    <h2>{{$project->title}}</h2>
                </div>
                <p>
                    @php
                    echo $project->description; 
                    @endphp
                </p>
                <p>
                    @php
                    echo $project->technologies; 
                    @endphp
                </p>
                <a class="bnt-more" href="https://{{$project->link_project}}" target="_blank">Demo</a>
                <a class="bnt-more" href="{{$project->link_github}}" target="_blank">GitHUB</a>
                <div class="date">Time: {{$project->start_date}} - {{$project->end_date}}</div>
            </div>
        </div>
        @endforeach
    </div>
</section>