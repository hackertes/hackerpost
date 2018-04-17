@extends('web.app')
@section('title','Kursus Online Jaringan dan Server')
@section('description', 'Satu-satunya Kursus Online Jaringan & Server yang dipandu sampai bisa. Bergabung sekarang dengan 2000++ pendaftar lainnya. Daftar. Interaktif. Bisa konsultasi dengan Trainer Profesional via chat dan remote teamviewer. Fleksibel. Belajar secara online kapanpun dimanapun sesuka hati')
@section('content')

@include('web.blocks.main-banner')
@include('web.blocks.tutorial')
@include('web.blocks.guide')
@include('web.blocks.testimoni')
@include('web.blocks.faq')
@include('web.blocks.call-to-action')
@endsection