<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sisfo Pegawai</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        /* Custom CSS */
        .bg-gradient-primary {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
        }

        .card {
            border-radius: 15px;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.02);
        }

        .form-control {
            border-radius: 25px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #2575fc;
            box-shadow: 0 0 5px rgba(37, 117, 252, 0.5);
        }

        .btn-primary {
            background-color: #2575fc;
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #6a11cb;
        }

        .h4 {
            font-weight: 700;
        }

        .text-gray-900 {
            color: #333;
        }

        .card-body {
            padding: 30px;
        }

        /* Add background image settings */
        .bg {
            background-image: url('https://via.placeholder.com/400');
            background-size: cover;
            background-position: center;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
        }

        .text-center {
            font-family: 'Nunito', sans-serif;
        }

        .form-group input {
            font-size: 16px;
        }

        .form-group input:focus {
            border-color: #2575fc;
            box-shadow: 0 0 5px rgba(37, 117, 252, 0.5);
        }

        .hr-style {
            margin: 20px 0;
            border: 0;
            border-top: 1px solid #eee;
        }

        .p-5 {
            padding: 5rem;
        }

        .profile-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .upload-btn {
            display: none;
        }

        .upload-label {
            padding: 10px;
            background-color: #2575fc;
            border-radius: 25px;
            color: white;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .upload-label:hover {
            background-color: #6a11cb;
        }

        .upload-bg-btn {
            padding: 10px;
            background-color: #2575fc;
            border-radius: 25px;
            color: white;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
        }

        .upload-bg-btn:hover {
            background-color: #6a11cb;
        }

        .remove-img-btn {
            padding: 10px;
            background-color: #e74a3b;
            border-radius: 25px;
            color: white;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .remove-img-btn:hover {
            background-color: #c0392b;
        }
    </style>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg" id="bgImage"></div>

                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                                    </div>

                                    <!-- Profile Image Upload Section -->
                                    <div class="text-center">
                                        <img id="profileImage" class="profile-image" src="https://via.placeholder.com/100" alt="Profile Image">
                                        <input type="file" id="imageUpload" class="upload-btn" onchange="previewImage(event)">
                                        <label for="imageUpload" class="upload-label">Upload Photo</label>
                                        <button type="button" class="remove-img-btn" onclick="removeProfileImage()">Hapus Foto</button>
                                    </div>

                                    <!-- Background Image Upload Section -->
                                    <div class="text-center">
                                        <input type="file" id="bgImageUpload" class="upload-btn" onchange="updateBackground(event)">
                                        <label for="bgImageUpload" class="upload-bg-btn">Upload Background Image</label>
                                    </div>

                                    <form class="user" action="/sesi/login" method="POST">
                                        @csrf

                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                name="email" value="{{Session::get('email')}}"
                                                placeholder="Masukkan Alamat Email" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                placeholder="Masukkan Password Anda" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                    </form>
                                    <hr class="hr-style">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <script>
        // Preview uploaded profile image
        function previewImage(event) {
            const image = document.getElementById('profileImage');
            image.src = URL.createObjectURL(event.target.files[0]);
        }

        // Remove profile image
        function removeProfileImage() {
            const image = document.getElementById('profileImage');
            image.src = 'https://via.placeholder.com/100';  // Default placeholder
            document.getElementById('imageUpload').value = '';  // Clear the file input
        }

        // Update background image
        function updateBackground(event) {
            const bgImage = document.getElementById('bgImage');
            bgImage.style.backgroundImage = `url(${URL.createObjectURL(event.target.files[0])})`;
        }
    </script>

</body>

</html>
