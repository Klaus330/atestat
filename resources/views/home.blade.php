@extends('layouts.app')

@section('content')
@include('partials.header')
<section style="background: #343434; height: 100%; margin: auto;" class="singl-blog-post-area section_padding_200">
<div class="container section_padding_200">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-dark" style="color: white">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nume</th>
                  <th scope="col">Email</th>
                  <th scope="col">Subiect</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                      <th scope="row">{{$contact->id}}</th>
                      <td>{{$contact->name}}</td>
                      <td>{{$contact->email}}</td>
                      <td>{{$contact->subject}}</td>
                      <td>
                        <div class="flex">
                          <a href="/contact/{{$contact->id}}" class="btn btn-sm btn-info"><i class="icofont icofont-eye-alt"></i></a>
                          <form method="POST" action="/contact/{{$contact->id}}" class="ml-1">
                              @csrf
                              @method("DELETE")
                              <button class="btn btn-sm btn-danger"><i class="icofont icofont-trash"></i></button>
                          </form>
                          </div>
                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
        </div>        
    </div>
</div>
</section>
@include('partials.footer')
@endsection
