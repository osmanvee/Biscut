@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row" >
        <div class="col-3 p-5">  
            <img src="./img/profile.png" class="rounded-circle" style="max-width: 100%; height:auto;">
        </div>
        <div class="col-9 pt-5">
        <div><h1>{{$user->username}}</h1></div>
            <div style="display:flex; ">
                <div class="pr-3"><strong>0</strong> Designs</div>
                <div class="pr-3"><strong>0</strong> Fans </div>
                <div class="pr-3"><strong>0</strong> Albums </div>
            </div>
            <div class="pt-2"><strong>Title</strong></div>
            <div>Add bio here...</div>
            <div style="color: blue;">Link to website</div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fyxk1-1.fna.fbcdn.net/v/t51.2885-15/e35/104599955_1157133991317328_6219829887080813174_n.jpg?_nc_ht=instagram.fyxk1-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=zsHdAI-OEjEAX803yh-&oh=0827b2625e355d261a5cba1d6c90c198&oe=5F199699" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fyxk1-1.fna.fbcdn.net/v/t51.2885-15/e35/104599955_1157133991317328_6219829887080813174_n.jpg?_nc_ht=instagram.fyxk1-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=zsHdAI-OEjEAX803yh-&oh=0827b2625e355d261a5cba1d6c90c198&oe=5F199699" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fyxk1-1.fna.fbcdn.net/v/t51.2885-15/e35/104599955_1157133991317328_6219829887080813174_n.jpg?_nc_ht=instagram.fyxk1-1.fna.fbcdn.net&_nc_cat=1&_nc_ohc=zsHdAI-OEjEAX803yh-&oh=0827b2625e355d261a5cba1d6c90c198&oe=5F199699" class="w-100">
        </div>
    </div>
</div>
@endsection
