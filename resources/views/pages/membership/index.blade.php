<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Membership') }}
        </h2>

    </x-slot>
    <div class="container mt-5 pb-14">
        <div class="row justify-content-center">
            <div class="col-lg-10 bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <div class="d-flex justify-content-end mb-3">
                    <a href="#" class="btn bg-green-600 me-2 text-white hover:bg-green-700">Import Member</a>
                    <a href="#" class="btn bg-green-600 me-3 text-white hover:bg-green-700"
                        data-bs-target="#add_new_member" data-bs-toggle="modal">Add Member</a>
                    <form action="#" method="get">
                        <input type="text" placeholder="Search Name..." name="search"
                            class="rounded bg-slate-300 border-1 border-slate-700 focus:border-transparent" />
                        <button type="submit" class="ml-3 bg-green-500 text-white rounded p-2 px-3"><i
                                class="fa-solid fa-magnifying-glass"></i> Search</button>
                    </form>

                </div>
                <div>

                </div>

                <div class="table-responsive">
                    <table id="myTable" class="table align-middle hover table-bordered text-gray-700">
                        <thead>
                            <tr class=" bg-indigo-50 uppercase text-sm">
                                <th class="border">MID #</th>
                                <th class="border">Name</th>
                                <th class="border">Age</th>
                                <th class="border">BirthDate</th>
                                <th class="border">Address</th>
                                <th class="border">Email</th>
                                <th class="border">Membership Start Date</th>
                                <th class="border">Action</th>

                            </tr>
                        </thead>
                        <tbody class="text-sm">


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    {{-- modal for adding new member --}}
    <div class="modal fade" id="add_new_member" tabindex="-1" role="dialog" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-green-700">
                    <h1 class="modal-title text-white font-lg font-bold">Add Member</h1>
                    <button type="button" style="font-size:2em; color:white" class="close" data-bs-dismiss="modal">
                        &times;
                    </button>
                </div>

                    <div class="modal-body py-3 px-2">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" name="remarks" id="floatingTextarea2"
                                style="height: 100px" required></textarea>
                            <label for="floatingTextarea2">Remarks <span class="text-red-600">*</span></label>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gray-500 text-white hover:bg-gray-500"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-red-500 hover:bg-red-900 text-white" id="btnAddProd">
                            Disapprove</button>
                    </div>
              
            </div>
        </div>
    </div>
</x-app-layout>
