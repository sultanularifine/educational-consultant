<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Entry</title>
   
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div>
        <section class="vh-100" style="background-color: #eee;">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Data Entry</p>
                                <form class="mx-1 mx-md-4" method="POST" action="{{ route('destination.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row justify-content-center">
                                        <div class="col-md-12 order-2 order-lg-1">
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0 ">
                                                    <label class="form-label" for="form3Example1c">Category</label>
                                                    <select class="form-select col-md-12 order-2 order-lg-1"name="category"
                                                    required>
                                                       
                                                        <option value="Europe">Europe</option>
                                                        <option value="America">America</option>
                                                        <option value="Asia">Asia</option>
                                                        <option value="Australia">Australia</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="form3Example3c">Country</label>
                                                    <input type="text" id="form3Example1c" class="form-control"
                                                        name="country" required/>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="form3Example3c">About</label>
                                                    <textarea class="form-control summernote" id="summernote1" name="about" rows="8" required></textarea>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="form3Example3c">Why_study</label>
                                                    <textarea class="form-control summernote" id="summernote4" name="why_study" rows="8" required></textarea>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="form3Example3c">Required_docs</label>
                                                    <textarea class="form-control summernote" id="summernote2" name="required_docs" rows="8" required></textarea>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label">Process</label>
                                                    <textarea class="form-control summernote" id="summernote5" name="process" rows="8" required></textarea>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <label class="form-label" for="form3Example4c">Universities </label>
                                                    <textarea class="form-control summernote" id="summernote3" name="universities" rows="8" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg">Store</button>
                                    </div>
                                </form>
                                <div>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            // $('#summernote1, #summernote2','#summernote3','#summernote4','#summernote5').summernote();
            $('.summernote').summernote();
        });
        // $(document).ready(function() {
        //     $('#summernote2').summernote();
        // });
        // $(document).ready(function() {
        //     $('#summernote3').summernote();
        // });
        // $(document).ready(function() {
        //     $('#summernote4').summernote();
        // });
        // $(document).ready(function() {
        //     $('#summernote5').summernote();
        // });
    </script>
</body>

</html>
