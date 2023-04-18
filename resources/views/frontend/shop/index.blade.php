@extends('layouts.frontend')



@section('content')
    <section>
        <div class="container">
            <h2>Shop data </h2>

          

       <div class="bg-light p-2 shadow-lg rounded-4 my-2 mx-1">
        <table class="table table-hover  ">
          <thead style="font-size: 13px" class="bg-light">
            <tr>
              <th scope="col">প‌্রতিষ্ঠান </th>
              <th scope="col"> মালিক </th>
              <th scope="col">পিতা/স্বামীর নাম</th>
              <th scope="col">ধরন</th>
              <th scope="col"> ঠিকানা</th>
              <th scope="col"> মোবাইল </th>
              <th scope="col"> মূলধন </th>
              <th scope="col">বাৎসরিক কার্য কৃত কর</th>
              <th scope="col">একশন</th>
            </tr>
          </thead>
          <tbody class="bg-white">
            @foreach ($shops as $item)
            <tr>
              
              <th class="fw-normal" scope="row"> {{ $item->organization }} </td>
              <th class="fw-normal"> {{ $item->name }} </th>

              <th class="fw-normal">{{ $item->father }} </th>
              <th class="fw-normal"> {{ $item->type_id  }} </th>
              <th class="fw-normal"> {{ $item->address }} </th>
              <th class="fw-normal"> {{ $item->mobile }} </th>
              <th class="fw-normal"> {{ $item->budget }} </th>
              <th class="fw-normal"> {{$item->annually_tax}} </td>
          
              <th class="fw-normal">
                   <div class="d-flex">
                    <a href="" class="btn btn-sm btn-primary ">dd</a>
                    <a href="" class="btn btn-sm btn-primary ms-2">dd</a>
                   </div>
              </th>
            </tr>
            @endforeach 
          </tbody>
        </table>
        <div class="d-flex justify-content-center">
          {{ $shops->links() }}
       </div>
       </div>
           
        </div>
    </section>
@endsection
