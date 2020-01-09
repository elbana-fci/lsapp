@extends('layouts.app')
@section('content')
@include('inc.header')
<!-- passion starts here -->
<div class="passion">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="images/pexels-photo-196644.jpeg" alt="" width="100%" height="300px">
      </div>
      <div class="col-md-6">
        <div class="passion-cont">
          <h2>My passion and focus is UI/UX Design.</h2>
          <p>Creating products that provide meaningful and relevant experiences to users. This involves the design of the entire process of acquiring and integrating the product, including aspects of branding, design, usability and function.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- passion ends here -->

<!-- services starts here -->
<div class="services text-center">
  <div class="container">
    <h2>I also provide high-quality client-side/server-side scripting, among other tasks.</h2>
    <div class="row">
      <div class="col-md-4">
        <h3>UI/UX Design</h3>
        <p>This involves the design of the entire process of acquiring and integrating the product, including aspects of branding, design, usability and function.</p>
      </div>
      <div class="col-md-4">
        <h3>front-end development</h3>
        <p>The practice of converting data to a graphical interface, through the use of HTML, CSS, and JavaScript, so that users can view and interact with that data.</p>
      </div>
      <div class="col-md-4">
        <h3>Back-end development</h3>
        <p>The skill that powers the web. ... It's code that connects the web to a database, manages user connections, and powers the web application itself.</p>
      </div>
    </div>
    <a class="btn btn-primary btn-lg trans-btn" href="#" role="button">hire me today</a>
  </div>
</div>
<!-- services ends here -->

<!-- projects starts here -->
<div class="projects text-center">
  <div class="container">
  <h2>Here are some of my projects.</h2>
  <p>Creating products that provide meaningful and relevant experiences to users. This involves the design of the entire process of acquiring and integrating the product, including aspects of branding, design, usability and function.</p>
    <div class="row projects-cont">
      <div class="col-md-4">
        <img src="images/pexels-photo-man.jpeg" alt="" width="100%" height="500px">
      </div>
      <div class="col-md-4">
        <img src="images/pexels-photo-palmtree.jpeg" alt="" width="100%" height="500px">
      </div>
      <div class="col-md-4">
        <img src="images/pexels-photo-watch.jpeg" alt="" width="100%" height="500px">
      </div>
    </div>
    <a class="btn btn-primary btn-lg red-btn" href="#" role="button">show more projects</a>
  </div>
</div>
<!-- projects ends here -->

<!-- resume starts here -->
<div class="resume text-center">
  <div class="container">
  <h2>Other experiences & What I've done.</h2>
  <p>I am also a data center engineer  who provide the necessary support and conduct specific operations, ensuring optimal functioning and minimal downtime. ... Monitor routine occurrences in tasks related to the data center to identify issues early.</p>
    <a class="btn btn-primary btn-lg red-btn" href="#" role="button">View my Resume</a>
  </div>
</div>
<!-- resume ends here -->
@endsection