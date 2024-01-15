@extends('admin_master.admin_master')
@section('admin_master')
@section('tittle')
    Dashboard
@endsection


<div class="col-12 grid-margin stretch-card">

    



    <div class="bg-secondary rounded h-100 p-4">

        <style type="text/css">
            .img-wrap {
                background-repeat: no-repeat;
                background-size: cover;
                background-position-y: 30%;
                margin-bottom: 1rem;
                border-radius: 5px;
            }
        </style>

        <div class="row">
                <div class="col-md-4"> <!-- Tambahkan class "col-md-4" untuk mengatur lebar card -->
                    <div class="card">
                        <img class="img-wrap"
                            src=""
                            alt="Food">
                        <a href=""></a>
                        <p class="text"
                            data-config='{ "type": "text", "element": "div", "limit": 80, "more": "show more ↓", "less": "show less ↑"}'>

                        </p>
                        <p></p>
                        <!-- <button class="reveal">Show more</button> -->
                        <div class="card-price">
                            <span class="price-new">Rp\</span>
                        </div>
                    </div>
                    <br>
                    <br>
                </div>
        </div>

        </div>




  </div>
</div>
</div>

  @endsection



