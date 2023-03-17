@extends('backend.dashboard')
@section('dashboard_content')
@include('sweetalert::alert')

<div class="">
  <div class="max-w-full px-3 mb-4 lg:mb-0 lg:w-full lg:flex-none">
      <div class="relative flex flex-col min-w-0 mt-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border p-2">
        <div class="p-4 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
          <div class="flex flex-wrap -mx-3">
            <div class="flex items-center flex-none w-1/2 max-w-full px-3">
              <h6 class="mb-0">Create Blog</h6>
            </div>
            <div class="flex-none w-1/2 max-w-full px-3 text-right">
              <a class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-gray-900 to-slate-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25" href="javascript:;"> <i class="fas fa-plus"> </i>&nbsp;&nbsp;Add New Card</a>
            </div>
          </div>
        </div>
      <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex-auto p-4 ">
          <div class="flex flex-wrap gap-y-5">
            <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                <input name="tag" type="text" class="border-2 border-slate-200 rounded-lg py-2 px-2 w-full" placeholder="Enter Tag Name">
            </div>
            <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                <input name="title" type="text" class="border-2 border-slate-200 rounded-lg py-2 px-2 w-full" placeholder="Enter Blog Title">
            </div>
            <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
                <input name="author_name" type="text" class="border-2 border-slate-200 rounded-lg py-2 px-2 w-full" placeholder="Enter Author Name">
            </div>
            <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
              <input name="image" type="file" class="border-2 border-slate-200 rounded-lg py-2 px-2 w-full" placeholder="Enter Author Name">
          </div>
            <div class="max-w-full px-3 mb-6 md:mb-0 md:w-1/2 md:flex-none">
              <textarea name="description" id="" cols="" rows="2" class="border-2 border-slate-200 rounded-lg py-2 px-2 w-full" placeholder="Enter Blog Description"></textarea>
            </div>
            

          </div>
            <button type="submit"  class="ml-3 mt-5  font-bold border-2 border-slate-200 rounded-lg p-2 text-slate-700">Submit</button>

          
        </div>
      </div>
    </form>
    
  </div>

</div>
@endsection