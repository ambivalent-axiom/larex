<h2>
    {{ $job->title }}
</h2>
<p>
    Congrats! Your job is posted!
</p>
<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View Your job listing.</a>
</p>

