@extends('master')
@section('title', 'Home')
@section('css')
    <link rel="stylesheet" href="{{asset('/assets/css/universal.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/analytics.css')}}">
@endsection
@section('content')
@include('inc.admin-navbar')
    <!-- analytics -->
    <div class="container-fluid p-0">
        <section class="section1">
            <div class="container-fluid section-title py-5">
                <h1 class="fw-bold text-center section-header">Analytics</h1>
            </div>
            <div class="container d-flex mt-5">
                <div class="col d-flex justify-content-center">
                    <div class="dash-box d-flex flex-wrap align-items-center justify-content-center">
                        <div class="users-count text-center col-12" id="usersCount">
                            0
                        </div>
                        <div class="d-flex justify-content-center col-12">
                            <svg xmlns="http://www.w3.org/2000/svg" width="5rem" height="5rem" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="dash-box d-flex flex-wrap align-items-center justify-content-center">
                        <div class="users-count text-center col-12" id="postCount">
                            0
                        </div>
                        <div class="d-flex justify-content-center col-12">
                            <svg xmlns="http://www.w3.org/2000/svg" width="5rem" height="5rem" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="dash-box d-flex flex-wrap align-items-center justify-content-center">
                        <div class="users-count text-center col-12" id="messageCount">
                            0
                        </div>
                        <div class="d-flex justify-content-center col-12">
                            <svg xmlns="http://www.w3.org/2000/svg" width="5rem" height="5rem" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                              </svg>
                        </div>
                    </div>
                </div>
                <div class="col d-flex justify-content-center">
                    <div class="dash-box d-flex flex-wrap align-items-center justify-content-center">
                        <div class="users-count text-center col-12" id="usersCount">
                            0
                        </div>
                        <div class="d-flex justify-content-center col-12">
                            <svg xmlns="http://www.w3.org/2000/svg" width="5rem" height="5rem" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"/>
                              </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('javascript')
@endsection