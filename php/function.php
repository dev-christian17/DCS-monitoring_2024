<?php

function insertTrainee() {
    if(!empty($_GET['username']) && !empty($_GET['fullname']) && !empty($_GET['email']) && !empty($_GET['password'])) {
        $trainees = new trainees($_GET['username'], $_GET['fullname'], $_GET['email'], $_GET['password']);
        if($trainees->insertTrainees()) {
            echo '<div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="loader8">
                            <div class="loader-inner"></div>
                        </div>
                    </div>
                </div>
                <br/><br/>
            </div>';
            echo '<!-- Modal HTML -->
                <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Save Successfully
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- jQuery and Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
                <script>
                    $(document).ready(function() {
                        // Hide the loader and show the modal after a delay to simulate processing time
                        setTimeout(function() {
                            $(".loader8").hide();
                            $("#successModal").modal("show");
                        }, 1000); // Adjust this delay as necessary

                        $("#successModal").on("hidden.bs.modal", function () {
                            window.location.href = "trainee.php";
                        });
                    });
                </script>';
        } else {
            echo "Failed!";
        }
    }
}

function viewTrainees() {
    $trainees = new trainees();
    return $trainees->viewList();
}

function getDetails($index) {
    $trainees = new trainees();
    return $trainees->getDetail($index);
}




?>
