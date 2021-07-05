@extends('layouts.frontend')
@section('content')
<section class="home" id="home">
    <div class="content">
        <h3>Food that you can't resist</h3>
        <h2> enjoy the marveleous taste</h2>
        <a href="#" class="btn">get started</a>
    </div>

    <div class="image">
        <img src="C:\Users\user\Downloads\home-img.png" alt="">
    </div>
</section>

<section class="banner-container">

    <div class="banner">
        <img src="C:\Users\user\Downloads\combo.jpg" alt="">
        <div class="content">
            <h3>special offer</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">check out</a>
        </div>
    </div>

    <div class="banner">
        <img src="C:\Users\user\Downloads\wins.jpg" alt="">
        <div class="content">
            <h3>limited offer</h3>
            <p>upto 50% off</p>
            <a href="#" class="btn">check out</a>
        </div>
    </div>

</section>


<section class="about" id="about">
    <div class="image" data-aos="fade-right">
        <img src="C:\Users\user\Downloads\111.png" alt="">
    </div>

    <div class="content" data-aos="fade-left">
        <h3>a word about us</h3>
        <p>Online Food Ordering System is the project where the customer can order food and beverages from the restaurants online using the internet website. This system, greatly simplifies the ordering process for both the customer and the restaurant. This  System presents an interactive and up-to-date menu with all available options in an easy to use manner</p>
        <a href="#"><button class="btn">learn more</button></a>
    </div>

</section>

<section class="menu" id="menu">
    <h1 class="heading">Our<span> menu</span></h1>
    <div class="box-container">
        @foreach($menu as $food)
        <div class="box">
            <img src="#" alt="">
            <h3>{{ $food->name }}</h3>
            <div class="price"> <span>{{ $food->price }}</span> </div>
            <a href="#" class="btn">Order now</a>
        </div>
        @endforeach
    </div>
</section>



<section class="special" id="special">

    <h1 class="heading">Our <span>special</span></h1>
    <div class="box-container">
        @foreach($specials as $food)
        <div class="box">
            <span class="discount"> - {{ $food->is_discount }} %</span>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-shopping-cart"></a>
            </div>
            <img src="{{ asset('/uploads/'.$food->image_path) }}" alt="">
            <h3>{{ $food->name }}</h3>
            <div class="stars">
                @for($i = 1; $i <= $food->rating; $i++)
                <i class="fas fa-star"></i>
                @endfor
            </div>
            <div class="price"> <span>{{ $food->price }} </span> </div>
            <div class="quantity">
                <span>quantity : </span>
                <input type="number" min="1" max="10" value="1">
            </div>
            <a href="#" class="btn">Order now</a>
        </div>
        @endforeach

    </div>
</section>

<section class="deal" id="deal">

    <div class="content">

        <h3 class="title">deal of the day</h3>


        <div class="count-down">
            <div class="box">
                <h3 id="day">00</h3>
                <span>day</span>
            </div>
            <div class="box">
                <h3 id="hour">00</h3>
                <span>hour</span>
            </div>
            <div class="box">
                <h3 id="minute">00</h3>
                <span>minute</span>
            </div>
            <div class="box">
                <h3 id="second">00</h3>
                <span>second</span>
            </div>
        </div>

        <a href="#" class="btn">check the deal</a>

    </div>

</section>

<section class="newsletter">

    <h3>subscribe us for latest updates</h3>

    <form action="">
        <input class="box" type="email" placeholder="enter your email">
        <input type="submit" value="subscribe" class="btn">
    </form>

</section>
@endsection


