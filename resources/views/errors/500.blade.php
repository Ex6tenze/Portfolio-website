@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('The server has run into trouble. Please try again in a while.'))
