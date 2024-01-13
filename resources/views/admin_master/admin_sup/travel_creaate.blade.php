@extends('admin_master.admin_master')
@section('admin_master')
@section('tittle')
    Dashboard
@endsection


    <style>
        .file-preview {
            margin-bottom: 16px;
        }

        img {
            max-width: 100%;
            max-height: 150px;
            margin-right: 10px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>


<div class="col-12 grid-margin stretch-card">


    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Basic form elements</h4>
            <br>
            <br>
            <p class="card-description" style="text-align: center; font-size: 20px"> Basic form elements </p>
            <form class="forms-sample">
              <div class="form-group">
                <label for="exampleInputName1">Tittle</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Tittle" name="title">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Slug</label>
                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Slug" name="slug">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword4">Password</label>
                <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="exampleSelectGender">Gender</label>
                <select class="form-control" id="exampleSelectGender">
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>






              <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Thumbnail</label>
                <input class="form-control" type="file" id="formFileMultiple" name="thumbnail[]" multiple>
                <div id="file-list-container"></div>
            </div>

            <div class="file-preview">
                <strong>File Preview:</strong>
                <div id="preview-container"></div>
            </div>






              <div class="form-group">
                <label for="exampleInputCity1">City</label>
                <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
              </div>
              <div class="form-group">
                <label for="exampleTextarea1">Textarea</label>
                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <button class="btn btn-dark">Cancel</button>
            </form>
          </div>
        </div>
      </div>


  </div>



  </div>
</div>

  @endsection



