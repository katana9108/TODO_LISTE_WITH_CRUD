<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

        <meta property="twitter:image:src" content="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/content-gh/en/_mdb5/standard/web/docs/extended/to-do-list/assets/featured.png">


        <title>@yield('title' || config(app.name))
        </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/dist/mdb5/standard/core.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="shortcut icon" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/favicon.ico" />
        <link rel="stylesheet" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/docs-app">
        {{-- <link rel="stylesheet" href="http://mdbootstrap.com/docs/standard/extended"> --}}

        <!-- Styles -->
        <style>

            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>



        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .gradient-custom {
            background: radial-gradient(50% 123.47% at 50% 50%, #00ff94 0%, #720059 100%),
            linear-gradient(121.28deg, #669600 0%, #ff0000 100%),
            linear-gradient(360deg, #0029ff 0%, #8fff00 100%),
            radial-gradient(100% 164.72% at 100% 100%, #6100ff 0%, #00ff57 100%),
            radial-gradient(100% 148.07% at 0% 0%, #fff500 0%, #51d500 100%);
            background-blend-mode: screen, color-dodge, overlay, difference, normal;
            }

        </style>

    </head>
    <body class="antialiased">
        <div class="container">
            <section class="vh-100 gradient-custom">
                <div class="container py-2 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card pb-4 mb-3">
                            <div class="card-title">

                            </div>
                        </div>
                      <div class="card">
                        <div class="card-body p-5">

                          <form class="d-flex justify-content-center align-items-center mb-4" action="{{route('createtodo')}}" method="post">
                            @csrf
                              <div class="container">
                                  <div class="row">
                                      <div class="col-md-7">
                                        <div class="fom-group">
                                            <div class="form-outline flex-fill">
                                                <input type="text" id="form2" class="form-control"  name="message"/>
                                                <label class="form-label" for="message">Nouvelles tache...</label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="form-outline flex-fill">
                                                <input type="date" id="form2" class="form-control"  name="date"/>
                                                <label class="form-label" for="date"></label>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            <button type="submit" class="btn btn-info ms-2">Ajouter</button>
                          </form>

                          <!-- Tabs navs -->
                          <ul class="nav nav-tabs mb-4 pb-2" id="ex1" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab"
                                aria-controls="ex1-tabs-1" aria-selected="true">Toutes</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2" role="tab"
                                aria-controls="ex1-tabs-2" aria-selected="false">En cours</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="ex1-tab-3" data-mdb-toggle="tab" href="#ex1-tabs-3" role="tab"
                                aria-controls="ex1-tabs-3" aria-selected="false">Terminées</a>
                            </li>
                          </ul>
                          <!-- Tabs navs -->

                          <!-- Tabs content -->
                          <div class="tab-content" id="ex1-content">
                            <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel"
                              aria-labelledby="ex1-tab-1">
                              @foreach ($todos as $todo )

                              <ul class="list-group mb-0 ">

                                {{-- <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded"
                                  style="background-color: #f4f6f7;">
                                  <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
                                  <s>Cras justo odio</s>
                                </li> --}}
                                <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded  check_input"
                                style="background-color: #f4f6f7;">
                                @if ($todo->done==true)
                                <input class="form-check-input me-2 check"name="done" id ="done" value="{{$todo->done}}"type="checkbox"  aria-label="..."  />
                                {{$todo->message}}
                                @else
                                <input class="form-check-input me-2 check"name="done" id ="done" value="{{$todo->done}}"type="checkbox"  aria-label="..." checked />
                                <s>{{$todo->message}}</s>
                                @endif
                                </li>

                            </ul>
                            @endforeach
                            </div>

                            <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                              <ul class="list-group mb-0">
                                <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded"
                                  style="background-color: #f4f6f7;">
                                  <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                                  Morbi leo risus
                                </li>
                                <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded"
                                  style="background-color: #f4f6f7;">
                                  <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                                  Porta ac consectetur ac
                                </li>
                                <li class="list-group-item d-flex align-items-center border-0 mb-0 rounded"
                                  style="background-color: #f4f6f7;">
                                  <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                                  Vestibulum at eros
                                </li>
                              </ul>
                            </div>
                            <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                              <ul class="list-group mb-0">
                                <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded"
                                  style="background-color: #f4f6f7;">
                                  <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
                                  <s>Cras justo odio</s>
                                </li>
                                <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded"
                                  style="background-color: #f4f6f7;">
                                  <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
                                  <s>Dapibus ac facilisis in</s>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <!-- Tabs content -->

                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </section>

        </div>



        <script  src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/js/dist/search/search.min.js"></script>
        <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/js/dist/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        {{-- <script  src="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/js/dist/mdb5/standard/core.min.js"></script> --}}



        <script>
            $(function(){
                $('.form-check-input ').click(function (e) {
                    e.preventDefault();
                    var check = $(this).closest('.check_input').find('.check').val();
                    // var check =true;
                    alert(check);

                });
            });


        </script>
    </body>
</html>
