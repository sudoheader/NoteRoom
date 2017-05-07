
@extends('layouts.master')
    
@section('title', 'Binder Page')

@section('content')


<link rel= "stylesheet" href="\NoteRoom\public\css\binder_page.css">



<div class="container-fluid">


<div class="binder_content">
	
	

	{{-- <div class="box"> --}}
		


<div class="col-sm-6">
	
	<div class="panel panel-info">
	  <!-- Default panel contents -->
	  <div class="panel-heading">Your Classes</div>
	  <div class="panel-body binder">
	    <ul class = "subjects">

	    	<h2><a href="">	COMP 380</a></h2>
	    	<h2><a href="">	COMP 333</a></h2>
	    	<h2><a href="">	COMP 322</a></h2>
			


	    </ul>


	  </div>

	 
	</div>
	
</div>


<div class="col-sm-6">
	
	<div class="panel panel-info">
	  <!-- Default panel contents -->
	  <div class="panel-heading">Your Notes</div>

	  <div class="panel-body binder">

	    <h3 style="text-align: center;">
	    	You currently have no notes...
	    </h3>
	  </div>

	 
	</div>
	
</div>

	{{-- <img src="img/binderPic.png" style='width:100%; height:100%;' border="0" alt="Null"> --}}


	{{-- </div> --}}

</div>

	
</div>





@stop

