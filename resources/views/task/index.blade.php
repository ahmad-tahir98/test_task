@extends('layout.index')
@section('content')
    <div class="row d-flex justify-content-center mt-5 ">

        <div class="col-md-8">


            <div class="card">

                <div class="d-flex justify-content-between align-items-center">

                    <span class="font-weight-bold">Weekly Tasks</span>

                    <div class="d-flex flex-row">

                        <button class="btn btn-primary mr-2 active">Active</button>
                        <button class="btn btn-primary new"><i class="fa fa-plus"></i> New</button>

                    </div>

                </div>

                <div class="mt-3 inputs">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control " placeholder="Search Tasks...">

                </div>


                <div x-data="{
                    items: [],
                    fetchData: function() {
                      // Fetch data from your internal API
                      fetch('/get-tasks')
                        .then(response => response.json())
                        .then(data => {
                          this.items = data;
                        });
                    }
                  }" x-init="fetchData">

                  <template x-for="item in items" :key="item.id">
                    
                    <div class="d-flex justify-content-between align-items-center mt-3">

                        <div class="d-flex flex-row align-items-center">

                            <span class="star"><i :class="{'fa fa-moon-o dark-blue' : item.id % 2 == 1, 'fa fa-star yellow' : item.id % 2 == 0}"></i></span>

                            <div class="d-flex flex-column">
                                <span x-text="item.title"></span>
                            </div>


                        </div>

                        <span :class="{'content-text-1' : item.id % 2 == 1, 'content-text-2' : item.id % 2 == 0}" x-text="item.id"></span>

                    </div>
                  </template>

                </div>

            </div>

        </div>


    </div>
@endsection
