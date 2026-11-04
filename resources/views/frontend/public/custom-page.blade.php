@extends('frontend.public.layouts.public')
@section('title', $page->seo_title ?: $page->title)
@section('meta_description', $page->seo_description)
@section('content')
@endsection
