@extends('layouts.layout')

@section('content')
	    <!-- Home Page
    ==========================================-->
@include('partes.home_page')
<!-- About Us Page
    ==========================================-->
@include('partes.about')
    <!-- Team Page
    ==========================================-->
@include('partes.team')

    <!-- Services Section
    ==========================================-->
@include('partes.section_service')


<!-- Portfolio Section
    ==========================================-->
@include('partes.section_portfolio')

    <!-- Testimonials Section
    ==========================================-->
@include('partes.testimoniales')
 <!-- Contact Section
    ==========================================-->
@include('partes.section_contac')
@endsection
