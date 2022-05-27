<!doctype html>
<html lang="en">
  <?php  session_start(); ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">    
  </head>

  <body>
  <div class="row">
  <div class="container row mt-5  m-0 row justify-content-center">
    <div class="col-sm-12 col-md-10 col-lg-10 col-xl-10">
        <span class="pe-5 float-end"><h6  id="bye">Logout</h6></span>    
        <span class="pe-3 float-end"><h4><?php echo $_SESSION['userLog']; ?> | </h4></span>
    </div>
    <div class="col-sm-12 col-md-10 col-lg-10 col-xl-10 mt-5">
      <span><button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Upload</button></span>
    </div>
  </div>
  <div class="mt-5 pe-5">
      <!-- Modal -->
      <div class="modal fade modal-dialog modal-dialog-scrollable" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">File Upload</h5>
            </div>
            <div id="msnModal"></div>
            <div class="modal-body">
             <center><div><h4 id="infoUp"></h4></div></center><br>
                  <form id="formUpload" method="post" enctype="multipart/form-data">
                    Select file to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload"><br>
                    
                    <div class="modal-footer">
                      <button id = bntClos  type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>          
                      <button id = bntSumt type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                  </form>
            </div>
            </div>
          </div>
        </div>
      </div>
  </div>
    <div class=" m-0 row justify-content-center">
    <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10">
    <table id= "tableCsv" class="table table-hover table table-striped">
    <thead class="table-success">
    <tr>
      <th scope="col"># Code</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
    </table>
  </div>
  </div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="../js/internal.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>

</html>