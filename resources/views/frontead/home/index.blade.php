@extends('frontead.layouts.master')
@section('content')
    <!--=============================
              BANNER START
          ==============================-->
    @include('frontead.home.components.side')
    <!--=============================
              BANNER END
          ==============================-->


    <!--=============================
              WHY CHOOSE START
          ==============================-->
    @include('frontead.home.components.why-choose')
    <!--=============================
              WHY CHOOSE END
          ==============================-->


    <!--=============================
              OFFER ITEM START
          ==============================-->
    @include('frontead.home.components.offer-item')

    <!-- CART POPUT START -->
    @include('frontead.home.components.cart-popup')
    <!-- CART POPUT END -->
    <!--=============================
              OFFER ITEM END
     ==============================-->


    <!--=============================
              MENU ITEM START
          ==============================-->
    @include('frontead.home.components.menu-item')
    <!--=============================
              MENU ITEM END
          ==============================-->


    <!--=============================
              ADD SLIDER START
          ==============================-->
    @include('frontead.home.components.add-slider')
    <!--=============================
              ADD SLIDER END
          ==============================-->


    <!--=============================
              TEAM START
          ==============================-->
    @include('frontead.home.components.team')
    <!--=============================
              TEAM END
          ==============================-->


    <!--=============================
              DOWNLOAD APP START
          ==============================-->
    @include('frontead.home.components.add-slider')
    <!--=============================
              DOWNLOAD APP END
          ==============================-->


    <!--=============================
             TESTIMONIAL  START
          ==============================-->
    @include('frontead.home.components.testimonial')
    <!--=============================
              TESTIMONIAL END
          ==============================-->


    <!--=============================
              COUNTER START
          ==============================-->
    @include('frontead.home.components.counter')
    <!--=============================
              COUNTER END
          ==============================-->


    <!--=============================
              BLOG 2 START
          ==============================-->
    @include('frontead.home.components.blog')
    <!--=============================
              BLOG 2 END
     ==============================-->
@endsection
