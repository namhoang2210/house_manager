@extends('layouts.app')

@section('title', '29b111 - Trang chủ')

@section('content')
<div class="lg:mx-8 mt-2">

    <button class="w-full"  data-bs-toggle="modal" data-bs-target="#exampleModalLg">
        <div class="flex justify-between items-center bg-white hover:bg-orange-50 rounded-lg shadow-xs border border-orange-100 p-4">
            <div class="flex items-center">
                <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                    </svg>
                </div>
                <div>
                    <p class="mb-2 text-sm font-medium text-gray-600 ">
                        Thành viên trong nhà
                        </p>
                        <p class="text-lg font-semibold text-gray-700 ">
                        8 thành viên
                        </p>
                </div>
            </div>
            <div class="bg-green-500 px-3 py-1 rounded-full text-white">Xem</div>
        </div>
    </button>  
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalLg" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
          <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
              <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLgLabel">
                Large modal
              </h5>
              <button type="button"
                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
              ...
            </div>
          </div>
        </div>
      </div>     
</div>
@endsection
