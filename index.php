<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax CRUD :: A Way to Operation!!</title>
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/plugin/bootstrap/bootstrap.css">
</head>

<body>

    <div class="container">
        <!-- Button trigger modal -->

        <div class="table-design">
            <div class="header">
                <h1>Data-List</h1>
                <button type="button" class="mybtn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    +
                </button>
            </div>
            <div style="overflow-x:auto;">
                <table id="DataTable">
                </table>
            </div>

        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form action="" method="post" id="submitDataForm" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">User Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="form3Example1">First name</label>
                                    <input type="text" id="fname" name="fname" class="form-control" />
                                </div>
                            </div>
                            <div class="col">
                                <div data-mdb-input-init class="form-outline">
                                    <label class="form-label" for="form3Example2">Last name</label>
                                    <input type="text" id="lname" name="lname" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Email address</label>
                            <input type="email" id="email" name="email" class="form-control" />
                        </div>
                        <!-- Adress input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Current address</label><br>
                            <textarea name="adress" id="adress" cols="100%" rows="5" class="form-control"></textarea>
                        </div>
                        <!-- File input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="file" id="image-input" name="image" accept="image/*" class="form-control" />
                        </div>
                        <div id="image-preview" class="image-preview"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="submitBtn">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="usermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form action="" method="post" id="submitDataForm" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">User Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="editBtn">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src='https://code.jquery.com/jquery-3.7.0.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <script src="./assets/js/operation.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/plugin/bootstrap/bootstrap.bundle.js"></script>
</body>

</html>