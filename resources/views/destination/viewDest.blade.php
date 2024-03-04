<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Entry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h5>Category</h5>
                <div class="form-group">
                    {{-- <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select Continent

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @foreach ($destinations as $destination)
                                <a class="dropdown-item" href="#">{{ $destination->country }}</a>
                                    <div class="dropdown-submenu">
                                        <a class="dropdown-item" href="#">{{ $destination->category }}</a>
                                        <a class="dropdown-item" href="#">{{ $destination->country }}</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">{{ $destination->country }}</a>
                                        </div>
                                    </div>
                            </div>
                        </button>
                    </div>
                </div> --}}
                
{{-- @include('destination.store') --}}


                <div class="btn-group dropdown">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Europe
                    </button>
                   
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach ($destinations as $destination)
                            <a class="dropdown-item" href="#">{{ $destination->country }}</a>
                            
                            @endforeach
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
        @foreach ($destinations as $destination)
            <div class="row">
                <div class="col-md-12">
                    <h5>About</h5>
                    <p>{!! $destination->about !!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        {!! $destination->why_study !!}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        {!! $destination->required_docs !!}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        {!! $destination->process !!}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        {!! $destination->universities !!}
                    </p>
                </div>
            </div>
    </div>
    @endforeach
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
