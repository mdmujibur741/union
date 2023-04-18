@extends('layouts.frontend')



@section('content')
    <section>
        <div class="container">
            <h2>Holding data </h2>

          

       <div class="bg-light p-2 shadow-lg rounded-4 my-2 mx-1">
        <table class="table table-hover  ">
          <thead style="font-size: 13px" class="bg-light">
            <tr>
              <th scope="col">হোল্ডিং নং </th>
              <th scope="col">ওয়ার্ড নং</th>

              <th scope="col">কর দাতার নাম</th>
              <th scope="col">পিতা/স্বামীর নাম</th>
              <th scope="col">গ্রাম</th>
              <th scope="col">পেশা</th>
              <th scope="col">এন আইডি নং</th>
              <th scope="col">অর্থ বছর</th>
              <th scope="col">বসত বাড়ির ধরণ</th>
              <th scope="col">বাৎসরিক কার্য কৃত কর</th>
              <th scope="col">একশন</th>
            </tr>
          </thead>
          <tbody class="bg-white">
            @foreach ($holdings as $item)
            <tr>
              
              <th class="fw-normal" scope="row"> {{ $item->holding_no }} </td>
              <th class="fw-normal"> {{ $item->word_no }} </th>

              <th class="fw-normal">{{ $item->name }} </th>
              <th class="fw-normal"> {{ $item->spouse_name }} </th>
              <th class="fw-normal"> {{ $item->village }} </th>
              <th class="fw-normal"> {{ $item->profession }} </th>
              <th class="fw-normal"> {{ $item->id_no }} </th>
              <th class="fw-normal"> 20363 </td>
              <th class="fw-normal"> kasa </td>
              <th class="fw-normal"> {{ $item->yearly_tax }} </th>
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
        <div class="d-flex justify-center">
          {{ $holdings->links() }}
       </div>
       </div>
           
        </div>
    </section>
@endsection
